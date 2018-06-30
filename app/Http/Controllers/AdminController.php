<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Comunicados\SchoolStaff;
use Comunicados\Role;
use Comunicados\User;
use Comunicados\StaffRole;
use Comunicados\RolePermission;
use Comunicados\Permission;
use Comunicados\SecurityAdmin;
use Comunicados\StaffSchoolCourse;
use Comunicados\Student;
use Comunicados\StudentParent;
use Comunicados\School;
use Comunicados\Tutor;
use Comunicados\Coordenada;
use Session;
use Redirect;
use Auth;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {  $school =DB::table('schools')
              ->join('security_admins', 'security_admins.escuela_id', '=', 'schools.id')
              ->select('schools.modalidad as modalidad','schools.nivel as nivel','schools.numero as numero','schools.nombre as nombre','schools.direccion as direccion','schools.localidad as localidad','schools.provincia as provincia', 'schools.telefono as telefono', 'schools.fax as fax', 'schools.email as email','schools.pagina_web as web')
              ->where('security_admins.dni',Auth::user()->dni)
              ->get();

       $cantStaff =DB::table('users')
               ->join('school_staff', 'users.dni', '=', 'school_staff.dni')
               ->join('staff_role', 'school_staff.dni', '=', 'staff_role.dni')
               ->join('roles', 'staff_role.rol_id', '=', 'roles.id')
               ->join('staff_school_courses', 'school_staff.dni', '=', 'staff_school_courses.dni')
               ->join('schools', 'staff_school_courses.escuela_id', '=', 'schools.id')
               ->join('security_admins','schools.id','security_admins.escuela_id')
               ->where('security_admins.dni',Auth::user()->dni)
               ->count();
               echo $cantStaff;

       $cantStudents =DB::table('users')
               ->join('students', 'users.dni', '=', 'students.dni')
               ->join('courses','courses.id','=','students.curso')
               ->join('staff_school_courses','courses.id','=','staff_school_courses.curso_id')
               ->join('schools','schools.id','=','staff_school_courses.escuela_id')
               ->join('security_admins','schools.id','=','security_admins.escuela_id')
               ->where('security_admins.dni',Auth::user()->dni)
               ->count();

       $cantTutors =DB::table('users as users')
               ->join('student_parent', 'users.dni', '=', 'student_parent.padre_id')
               ->join('students','students.dni','=','student_parent.alumno_id')
               ->join('courses','courses.id','=','students.curso')
               ->join('security_admins','students.admin_id','=','security_admins.dni')
               ->join('schools','schools.id','=','security_admins.escuela_id')
               ->join('users as u','u.dni','=','students.dni')
               ->where('security_admins.dni',Auth::user()->dni)
               ->count();
       return view ('admins/estadisticas',['school'=>$school,'staff'=>$cantStaff,'tutores'=>$cantTutors,'alumnos'=>$cantStudents]);
    }


    public function showStaff()
    {

        $staff =DB::table('users')
                ->join('school_staff', 'users.dni', '=', 'school_staff.dni')
                ->join('staff_role', 'school_staff.dni', '=', 'staff_role.dni')
                ->join('roles', 'staff_role.rol_id', '=', 'roles.id')
                ->join('staff_school_courses', 'school_staff.dni', '=', 'staff_school_courses.dni')
                ->join('schools', 'staff_school_courses.escuela_id', '=', 'schools.id')
                ->join('security_admins','schools.id','security_admins.escuela_id')
                ->select('school_staff.n_legajo','users.dni','users.nombre','users.apellido','school_staff.estado', 'roles.cargo','schools.nombre as escuela','security_admins.dni as admin')
                ->where('security_admins.dni',Auth::user()->dni)
                ->get();

        return view ('admins/personal', compact('staff'));
    }

    public function editStaff($dni)
    {
        $staff=SchoolStaff::find($dni);
        return view ('admins/editarPersonal',compact('staff'));
    }

    public function updateStaff($dni, Request $request)
    {
        $staff=SchoolStaff::find($dni);
        $staff->n_legajo=$request->input('legajo');
        $staff->save();

        return Redirect::to('admin/personal');
    }

    public function changeStateStaff($dni)
    {
        $staff=SchoolStaff::find($dni);
        if($staff->estado==1){
          $staff->estado=0;
          $staff->deleted_at=Carbon::now();
        }
        else{
          $staff->estado=1;
          $staff->updated_at=Carbon::now();
        }
        $staff->save();
        return Redirect::to('admin/personal');
    }

    public function createPersonal(){
      $role= Role::all();
      return view('admins/crearPersonal',compact('role'));
    }

    public function createPersonalForm(Request $request){

       $rol= $request->input("rol");
       $user=new User;
       $user->dni=$request->input("dni");
       $user->nombre=$request->input("nombre");
       $user->apellido=$request->input("apellido");
       $user->sexo=$request->input("sexo");
       $user->email=$request->input("email");
       $user->password=Hash::make($request->input("password"));
       $user->fecha_nacimiento=$request->input("nacimiento");
       $user->telefono=$request->input("tel");
       $user->celular=$request->input("movil");
       $user->direccion=$request->input("direccion");
       $user->localidad=$request->input("localidad");
       $user->provincia=$request->input("provincia");
       $user->foto_url=$request->input("foto_url");
       $user->tipo="personal";
       $user->save();

       $dni=$user->dni;

       $schoolStaff= new SchoolStaff;
       $schoolStaff->dni=$dni;
       $schoolStaff->n_legajo=11111;
       $schoolStaff->fecha_alta=Carbon::now();
       $schoolStaff->estado=1;
       $schoolStaff->save();

       $staff = new StaffRole;
       $staff->dni=$dni;
       $staff->rol_id=$rol;
       $staff->save();

       $admindni=Auth::user()->dni;
       $admin= SecurityAdmin::find($admindni);

       $s= new StaffSchoolCourse;
       $s->dni=$dni;
       $s->escuela_id=$admin->escuela_id;
       $s->curso_id=0;
       $s->save();

      return redirect('admin/personal');

    }

    public function setearPermisos(){
      $roles=Role::all();
      $permisos=Permission::all();
      return view ('admins/rolesypermisos',['roles'=>$roles,'permisos'=>$permisos]);
    }

    public function actualizarPermisos(Request $request){
      $rol= $request->input("rol"); //llega el id del rol al que le asignamos permisos
      $permisos=Permission::all(); //tomo la lista d elos permisos
      $auxiliar= RolePermission::where("id_rol",$rol)->delete();

      //1 significa si
      foreach ($permisos as $permiso){
       if($request->input($permiso->id)==1)
        {
          $rolePermission = new RolePermission;
          $rolePermission->id_rol=$rol;
          $rolePermission->id_permiso=$permiso->id;
          $rolePermission->admin_asigna=Auth::user()->dni;
          $rolePermission->consultar=1;
          $rolePermission->agregar=1;
          $rolePermission->editar=1;
          $rolePermission->eliminar=1;
          $rolePermission->save();
        }
      }
      return redirect('admin/consultarPermisos');
      }



      public function consultarPermisos(){
        $roles=Role::all();
        $permisos=Permission::all();
        $rp = RolePermission::where('admin_asigna',Auth::user()->dni)->get();
      //  $rp = DB::table('Role_permission')->where('admin_asigna',Auth::user()->dni)->get();
        //$rol=2;
        //$permiso=1;
      //  echo var_dump($rp[0]['id_rol']);
      //  echo var_dump($rp[0]['id_permiso']);
      //  echo var_dump($rp[0]['consultar']);
        return view ('admins/consultarPermisos',['roles'=>$roles,'permisos'=>$permisos, 'rp'=>$rp]);
      }
      public function showAlumnos()
      {

          $alumno =DB::table('users')
                  ->join('students', 'users.dni', '=', 'students.dni')
                  ->join('courses','courses.id','=','students.curso')
                  ->join('staff_school_courses','courses.id','=','staff_school_courses.curso_id')
                  ->join('schools','schools.id','=','staff_school_courses.escuela_id')
                  ->join('security_admins','schools.id','=','security_admins.escuela_id')
                  ->select('students.estado','security_admins.dni as admin','students.n_matricula','users.dni','users.nombre','users.apellido','schools.nombre as escuela','courses.grado','courses.nivel','courses.aula','courses.turno')
                  ->where('security_admins.dni',Auth::user()->dni)
                  ->distinct()
                  ->get();


          return view ('admins/alumnos', compact('alumno'));
      }
///////////////////////////////////////////////////
      public function editStudent($dni)
      {
          $alumno=Student::where('students.dni',$dni)->get();

          return view ('admins/editarAlumno',compact('alumno'));
      }

      public function updateStudent($dni, Request $request)
      {
          $alumno=Student::where('students.dni',$dni) ->update(['n_matricula' => $request->input('matricula')]);

          return Redirect::to('admin/alumnos');
      }

      public function changeStateStudent($dni)
      {
          $alumno= DB::table('students')->where('dni',$dni)->get();
         if($alumno{0}->estado==1){
            $alumno= DB::table('students')->where('dni',$dni)->update(['estado' => 0,'deleted_at'=>Carbon::now()]);
          }
          else{
            $alumno= DB::table('students')->where('dni',$dni)->update(['estado' => 1,'updated_at'=>Carbon::now()]);
          }

          return Redirect::to('admin/alumnos');

      }

      public function createStudent(){
        $cursos=DB::table('courses')
                ->join('staff_school_courses', 'courses.id', '=', 'staff_school_courses.curso_id')
                ->join('schools','schools.id','=','staff_school_courses.escuela_id')
                ->join('security_admins','schools.id','=','security_admins.escuela_id')
                ->select('courses.id as id','courses.grado as grado','security_admins.dni as admin','courses.nivel as nivel','courses.aula as aula','courses.turno as turno','schools.nombre as escuela')
                ->where('security_admins.dni',Auth::user()->dni)
                ->get();

        return view('admins/crearAlumno',compact('cursos'));
      }

      public function createStudentForm(Request $request){

         $curso= $request->input("curso");
         $user=new User;
         $user->dni=$request->input("dni");
         $user->nombre=$request->input("nombre");
         $user->apellido=$request->input("apellido");
         $user->sexo=$request->input("sexo");
         $user->email=$request->input("email");
         $user->password=Hash::make($request->input("password"));
         $user->fecha_nacimiento=$request->input("nacimiento");
         $user->telefono=$request->input("tel");
         $user->celular=$request->input("movil");
         $user->direccion=$request->input("direccion");
         $user->localidad=$request->input("localidad");
         $user->provincia=$request->input("provincia");
         $user->foto_url=$request->input("foto_url");
         $user->tipo="alumno";
         $user->save();

         $dni=$user->dni;

         $student= new Student;
         $student->dni=$dni;
         $student->n_matricula=111;
         $student->fecha_inscripcion=Carbon::now();
         $student->estado=1;
         $student->curso=$curso;
         $student->admin_id=Auth::user()->dni;
         $student->save();


        return redirect('admin/alumnos');

      }
/////////////////////////////////////////////////////////
public function showTutors()
{

    $tutors =DB::table('users as users')
            ->join('student_parent', 'users.dni', '=', 'student_parent.padre_id')
            ->join('students','students.dni','=','student_parent.alumno_id')
            ->join('courses','courses.id','=','students.curso')
            ->join('security_admins','students.admin_id','=','security_admins.dni')
            ->join('schools','schools.id','=','security_admins.escuela_id')
            ->join('users as u','u.dni','=','students.dni')
            ->select('student_parent.estado as estado','security_admins.dni as admin',
            'users.dni as dni','users.nombre as nombre','users.apellido as apellido',
            'u.nombre as nombre_alumno','u.apellido as apellido_alumno',
            'schools.nombre as escuela','courses.grado as grado','courses.nivel as nivel','courses.aula as aula','courses.turno as turno')
            ->where('security_admins.dni',Auth::user()->dni)
            ->get();

    return view ('admins/tutores', compact('tutors'));
}
public function changeStateTutor($dni)
{
    $tutor= DB::table('student_parent')->where('padre_id',$dni)->get();
   if($tutor{0}->estado==1){
      $tutor= DB::table('student_parent')->where('padre_id',$dni)->update(['estado' => 0,'updated_at'=>Carbon::now()]);
    }
    else{
      $alumno= DB::table('student_parent')->where('padre_id',$dni)->update(['estado' => 1,'updated_at'=>Carbon::now()]);
    }

    return Redirect::to('admin/tutores');

}

public function createTutor(){

  $alumnos =DB::table('users')
   ->join('students', 'users.dni', '=', 'students.dni')
   ->join('courses','courses.id','=','students.curso')
   ->join('security_admins','security_admins.dni','=','students.admin_id')
   ->select('users.dni as id','users.nombre as nombre','users.apellido as apellido','courses.grado as grado','courses.nivel as nivel','courses.aula as aula','courses.turno as turno')
   ->where('students.estado',1)
   ->where('students.admin_id',Auth::user()->dni)->get();

   $tarjeta=new Coordenada;
   for($a="a";$a<="g";$a++){
        for($n=1;$n<=5;$n++){
          $tarjeta->$a.$n=rand(10,99);
        }
       }

  return view('admins/crearTutor',compact('alumnos','tarjeta'));
}


public function createTutorForm(Request $request){

      //Cargo la tabla Users

       $usuario=new User;
       $usuario->dni=$request->input("dni");
       $usuario->nombre=$request->input("nombre");
       $usuario->apellido=$request->input("apellido");
       $usuario->sexo=$request->input("sexo");
       $usuario->email=$request->input("email");
       $usuario->password=Hash::make($request->input("password"));
       $usuario->fecha_nacimiento=$request->input("nacimiento");
       $usuario->telefono=$request->input("tel");
       $usuario->celular=$request->input("movil");
       $usuario->direccion=$request->input("direccion");
       $usuario->localidad=$request->input("localidad");
       $usuario->provincia=$request->input("provincia");
       $usuario->foto_url=$request->input("foto_url");
       $usuario->tipo="tutor";
       $usuario->save();

       //Creo una tarjeta de coordenadas
       $tarjeta=new Coordenada;
       $tarjeta->vencimiento=Carbon::now()->addYear();
             
       for($a="a";$a<="g";$a++){
        for($n=1;$n<=5;$n++){
          $tarjeta->$a.$n=rand(10,99);
        }
       }


       $tarjeta->save();

      //Creo un tutor y le asocio la tarjeta de coordenadas
       $tutor=new Tutor;
       $tutor->dni=$usuario->dni;
       $tutor->tarjeta_coordenada=$tarjeta->id;
       $tutor->save();

      //Creo la relación entre el tutor y alumnos a cargo
       $parent= new StudentParent;
       $parent->padre_id=$usuario->dni;
       $parent->created_at=Carbon::now();
       $parent->updated_at=Carbon::now();
       $parent->alumno_id=$request->input("alumno");
       $parent->admin_id=Auth::user()->dni;
       $parent->estado=1;
       $parent->save();

       return redirect::to('admin/tutores');

    }
}
//fin

<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Comunicados\Course;
use Session;
use Redirect;
use Auth;
use DB;

class CursoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses =DB::table('courses')
								 ->join('security_admins','courses.admin_id','=','security_admins.dni')
                ->select('courses.*')
								->where('security_admins.dni',Auth::user()->dni)
                ->paginate(20);
        return view ('\courses/listar_cursos', compact('courses'));
    }


    public function create()
    {
        return view('\courses/crear_curso');
    }


    public function store(Request $request)
    {
        $course= new Course($request->all());
        $courses->save();
        dd('Curso creado');
    }

    /**
     * Display the specified resource.
     **/


    public function show($id)
    {
        $course = Course::find($id);

        return view ('\courses/ver_curso', compact('course'));
    }



		public function createCurse(){
			return view('\courses/crear_curso');
		}

		public function createCurseForm(Request $request){
			$curso= new Course;
			if($request->input("grado")==1){
				$curso->grado="guarderia";
				$curso->nivel="guarderia";
			}
			else if($request->input("grado")==2){
				$curso->grado="salita de 3";
				$curso->nivel="inicial";
			}
			else if($request->input("grado")==3){
				$curso->grado="jardin";
				$curso->nivel="inicial";
			}
			else if($request->input("grado")==4){
				$curso->grado="preescolar";
				$curso->nivel="inicial";
			}
			else if($request->input("grado")==5){
				$curso->grado="primer grado";
				$curso->nivel="primaria";
			}
			else if($request->input("grado")==6){
				$curso->grado="segundo grado";
				$curso->nivel="primaria";
			}
			else if($request->input("grado")==7){
				$curso->grado="tercer grado";
				$curso->nivel="primaria";
			}
			else if($request->input("grado")==8){
				$curso->grado="cuarto grado";
				$curso->nivel="primaria";
			}
			else if($request->input("grado")==9){
				$curso->grado="quinto grado";
				$curso->nivel="primaria";
			}
			else if($request->input("grado")==10){
				$curso->grado="sexto grado";
			  $curso->nivel="primaria";
			}
			else if($request->input("año")==11){
				$curso->año="primer año";
				$curso->nivel="secundaria";
			}
			else if($request->input("año")==12){
				$curso->año="segundo año";
				$curso->nivel="secundaria";
			}
			else if($request->input("año")==13){
				$curso->año="tercer año";
				$curso->nivel="secundaria";
			}
			else if($request->input("año")==14){
				$curso->año="cuarto año";
				$curso->nivel="secundaria";
			}
			else if($request->input("año")==15){
				$curso->año="quinto año";
				$curso->nivel="secundaria";
			}
			else if($request->input("año")==16){
				$curso->año="sexto año";
			  $curso->nivel="secundaria";
			}
			$curso->aula=$request->input("aula");
			if($request->input("turno")==1){
			$curso->turno="mañana";
		  }
			else if($request->input("turno")==2){
			$curso->turno="tarde";
		  }
			else if($request->input("turno")==3){
			$curso->turno="noche";
		  }
			$curso->admin_id=Auth::user()->dni;
			$curso->save();

			return redirect('admin/cursos');
		}

		public function changeCurse($id){
			echo "hola";
			//$course = Course::find($id);
			//return view('\courses/cambiar_curso',['course'=>$course]);
		}
}

<div class="form-group">
  <label class="control-label">Escuela:</label>
  <select id="seleccionEscuela" name="seleccionEscuela" class="form-control " required>
    <option>Seleccione ...</option>
    @foreach($escuelas as $escuela)
    <option value="{{$escuela->id}}">Escuela nº {{$escuela->numero}}- {{$escuela->nombre}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label class="control-label">Curso:</label>
  <select id="seleccionCurso" name="seleccionCurso" class="form-control " required>
  </select>
</div>
<div class="form-group">
  <label class="control-label">Materia:</label>
  <select id="seleccionMateria" name="seleccionMateria" class="form-control " required>
  </select>
</div>
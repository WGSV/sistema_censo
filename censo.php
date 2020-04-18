<div>
  <h1>CENSO NACIONAL DE EL SALVADOR</h1>
  <HR></HR>
</div>
<form>
  <div class="form-group">
    <div class="row">
    <h4>Anfitrión del hogar</h4> <button style="border-radius: 100px; height:20px">i</button>
    </div>
    <label for="nombres_formulario">Nombres</label>
    <input type="name" class="form-control" id="nombres_formulario" placeholder="Primer y segundo nombre">
    <label for="apellidos_formulario">Apellidos</label>
    <input type="name" class="form-control" id="apellidos_formulario" placeholder="Primer y segundo apellido">
    <div class="row">
      <div class="col-lg-6 col-md-6">
          <label for="dui_formulario">DUI</label>
          <input type="name" class="form-control" id="dui_formulario" placeholder="00000000-0">
      </div>
      <div class="col-lg-6 col-md-6">
          <label for="nit_formulario">NIT</label>
          <input type="name" class="form-control" id="nit_formulario" placeholder="0000-000-0000-00">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
          <label for="genero_formulario">Género</label>
          <select class="form-control" id="genero_formulario">
            <option>Masculino</option>
            <option>Femenino</option>
          </select>
      </div>
      <div class="col-lg-6 col-md-6">
          <label for="contacto_formulario">Contacto</label>
          <input type="name" class="form-control" id="contacto_formulario" placeholder="0000-0000">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <label for="departamento_forumulario">Departamento</label>
        <select class="form-control" id="departamento_formulario">
          <option>Santa Ana</option>
          <option>Sonsonate</option>
          <option>Ahuachapán</option>
          <option>Sansalvador</option>
        </select>
      </div>
      <div class="col-lg-6 col-md-6">
        <label for="municipio_forumulario">Municipio</label>
        <input type="name" class="form-control" id="municipio_formulario" placeholder="Ciudad">
      </div>
    </div>
    <div class="row">
      <h4>Datos del hogar</h4> <button style="border-radius: 100px; height:20px">i</button>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <label for="integrantes_formulario">Cantidad de personas</label>
        <select class="form-control" id="integrantes_formulario">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
      </div>
      <div class="col-lg-6 col-md-6">
        <label for="int_formulario">Cantidad de mascotas</label>
        <select id="int_formulario" class="form-control">
        <option>ninguna</option>
        <option>1</option>
        <option>2-4</option>
        <option>5-10</option>
        </select>
      </div>
    </div>
    <label for="disca_formulario">¿Hay personas con discapacidades?</label>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <label>Cantidad</label>
        <select id="disca_formulario">
          <option>ninguno</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>más</option>
        </select>
      </div>
      <div class="col-lg-6 col-md-6">
        <label>Seleccione las discapacidades</label>
        <br>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">discapacidad 1</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">discapacidad 2</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">discapacidad 3</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">discapacidad 4</label>
        </div>
      </div>
    </div>
    <label for="disca_formulario">¿Hay personas con enfermedades?</label>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <label>Cantidad</label>
        <select id="disca_formulario">
          <option>ninguno</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>más</option>
        </select>
      </div>
      <div class="col-lg-6 col-md-6">
        <label>Seleccione el tipo de enfermedad</label>
        <br>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">Enfermedad 1</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">Enfermedad 2</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">Enfermedad 3</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">Enfermedad 4</label>
        </div>
      </div>
    </div>
    <div class="row">
      <h4>Situación actual</h4> <button style="border-radius: 100px; height:20px">i</button>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
          <label for="genero_formulario">Frecuencia con la que sale del hogar</label>
          <select class="form-control" id="genero_formulario">
            <option>Una vez cada 2 días</option>
            <option>Una vez al día</option>
            <option>Más de una vez al día</option>
            <option>Una o dos veces a la semana</option>
          </select>
      </div>
      <div class="col-lg-6 col-md-6">
          <label for="contacto_formulario">Motivo para salir del hogar</label>
          <br>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">Trabajo</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">Compra de viveres</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">Compra de productos personales</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">Pasear mascotas</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" for="">Otra</label>
        </div>
      </div>
    </div>
    <label for="municipio_forumulario">Especifique otro motivo</label>
    <input type="name" class="form-control" id="municipio_formulario" placeholder="">
    <div class="row">
      <div class="col-lg-6 col-md-6">
          <label for="genero_formulario">¿Otra persona realiza estas tareas tambien?</label>
          <select class="form-control" id="genero_formulario">
            <option>Si</option>
            <option>No</option>
          </select>
      </div>
      <div class="col-lg-6 col-md-6">
          <label for="genero_formulario">¿Qué tan amenudo cambian de designado?</label>
          <select class="form-control" id="genero_formulario">
            <option>diariamente</option>
            <option>cuando es necesario</option>
            <option>no es frecuente</option>
          </select>
      </div> 
    </div>
    <div>
          <label for="genero_formulario">¿Cuales lugares frecuentan más?</label>
          <select class="form-control" id="genero_formulario">
            <option>Supermercados</option>
            <option>Tiendas cercanas</option>
            <option>Bancos</option>
          </select>
    </div>
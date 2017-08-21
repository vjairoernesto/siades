 <script type="text/javascript">
    $(document).ready(function () {
        $('#txtCountry').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "views/v_matricula/server.php",
                    data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        result($.map(data, function (item) {
                            return item;
                        }));
                    }
                });
            }
        });
    });
</script>
<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title">Agregar Matricula</h2>
                                
                            </div>
                            <div class="header">
                                <h4 class="title">Datos del estudiante</h4>
                                
                            </div>
                            <div class="content">
                                 <p class="centrado">
                                        
                                        <form name="formagregarmatricula" autocomplete="off" action="controllers/m_matricula/m_matricula.php" id="" class="form-horizontal" method="POST">

                                       

                                      
                                        

                                         <div class="form-group">
                                        <label for="Nombre" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Nombre :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                               
                                <input type="text" name="txtCountry" id="txtCountry" class="form-control typeahead"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                            <label for="foto" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Foto :</label>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                               <img src="" alt="" />
                            </div>
                        </div>

                                    <div class="form-group">
                                        <label for="fecha_nacimiento" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Fecha Nacimiento :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="date" name="fechanacimiento" class="form-control"  pattern="" title="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Edad" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Edad :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" readonly="" name="edad" class="form-control" placeholder="Edad" pattern="" title="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gradoaestudiar" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Grado a estudiar :</label>
                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                             <select name="gradoaestudiar">
                                              <option value="volvo">1</option>
                                              <option value="saab">2</option>
                                              <option value="fiat">3</option>
                                              <option value="audi">4</option>
                                            </select> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="NIE" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">NIE :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text"  name="nie" class="form-control" placeholder="NIE" pattern="" title="">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="sexo" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Sexo :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        <input type="radio" name="genero" value="Femenino"> Femenino
                                        <input type="radio" name="genero" value="Masculino"> Masculino
                                  
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="discapacidad" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Discapacidad :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        <input type="radio" name="discapacidad" value="0"> Si
                                        <input type="radio" name="discapacidad" value="1"> No
                                  
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="discapacidaddetalles" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Discapacidad detalles :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        <input type="text"  name="discapacidaddetalles" class="form-control" placeholder="Discapacidad Detalles" pattern="" title="" >
                                  
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="Medicado" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Medicado :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        <input type="radio" name="medicado" value="0"> Si
                                        <input type="radio" name="medicado" value="1"> No
                                  
                                        </div>
                                    </div>


                                    <div class="header">
                                      <h4 class="title">Expediente del estudiante</h4>
                                    </div>

                                     
                                            
                                        <div class="form-group">
                            <label for="nombreinstitucionprocedencia" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Institucion de procedencia :</label>
                             <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        <input type="text" name="nombreinstitucionprocedencia" class="form-control" placeholder="Nombre completo" > 
                                        </div>
                        </div>

                                        
                                    <div class="form-group">
                                        <label for="Gradoanterior" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Grado anterior :</label>
                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                             <select name="Gradoanterior">
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                            </select> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="departamento" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Departamento :</label>
                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                        <input type="text" name="departamento" class="form-control" placeholder="Departamento" pattern="" title=""> 
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="AñoInscripcion" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Año Inscripcion :</label>
                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                         <input type="date" name="anoinscripcion" class="form-control" pattern="" title=""> 
                                        </div>
                                    </div>


                                     <div class="header">
                                <h4 class="title">Datos Familiares</h4>
                                        </div>


                                         <div class="form-group">
                                        <label for="Padre/Madre" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Nombre Padre/Madre :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="PadreMadre" class="form-control" placeholder="Nombre Completo" pattern="" title="">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="ProfesionOficio" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Profesion/Oficio :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="profesionoficiopadremadre" class="form-control" placeholder="Profesion u Oficio" pattern="" title="" >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="NombreEncargado" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Nombre Encargado :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="encargado" class="form-control" placeholder="Nombre Completo Encargado" pattern="" title="" >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="ProfesionOficio" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Profesion/Oficio :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="ProfesionOficioEncargado" class="form-control" placeholder="Profesion Oficio Encargado" pattern="" title="" >
                                        </div>
                                    </div>


                                     <div class="form-group">
                                        <label for="Direccion_Particular" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Direccion/Particular :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="Direccion" class="form-control" placeholder="Direccion Particular" pattern="" title="">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="NCasa" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">N° Casa :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="NCasa" class="form-control" placeholder="Numero De Casa" pattern="" title="" >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="telefono" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Telefono :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="telefono" class="form-control" placeholder="Telefono" pattern="" title="">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="nhermanos" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">N° hermanos que estudian en este centro :</label>
                                          <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                             <select name="cbonhermanos">
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                            </select> 
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="otrosfamiliares" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Otros Familiares Con Quien Vive :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="otrofamiliar" class="form-control" placeholder="Nombre Completo" pattern="" title="" >
                                        </div>
                                    </div>


                                    <div class="header">
                                <h4 class="title">Informacion Academica</h4>
                                        </div>

                                        <div class="form-group">
                                        <label for="repitegrado" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Repite Grado :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                             <select name="cborepitegrado">
                                              <option value="1">Si</option>
                                              <option value="0">No</option>
                                              
                                            </select> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="reciberefuerzo" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Recibe refuerzo educativo :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                             <select name="cboreciberefuerzo">
                                              <option value="volvo">Si</option>
                                              <option value="saab">No</option>
                                              
                                            </select> 
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <label for="tiporefuerzo" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Tipo de refuerzo :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="repiterefuerzotipo" class="form-control" placeholder="Tipo de refuerzo" pattern="" title="" >
                                        </div>
                                    </div>


                                     <div class="form-group">
                                        <label for="provieneescuelaespecial" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Proviene de escuela especial :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                             <select name="cboescuelaespecialproviene">
                                              <option value="volvo">Si</option>
                                              <option value="saab">No</option>
                                              
                                            </select> 
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="Nombreescuelaespecial" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Nombre de escuela especial :</label>
                                          <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="nombreescuelaespecial" class="form-control" placeholder="Nombre completo" pattern="" title="">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="atendidoeducacioncurricular" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label"> ¿ atendido con educaciones curriculares ? :</label>
                                         <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                             <select name="cboeducacionescurriculares">
                                              <option value="volvo">Si</option>
                                              <option value="saab">No</option>
                                              
                                            </select> 
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="TipoEducacionCurricular" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">tipo de educacion curricular :</label>
                                          <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="educacioncurricular" class="form-control" placeholder="Nombre del tipo de educacion curricular" pattern="" title="" >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="Observaciones" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Observaciones:</label>
                                          <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                               <textarea rows="4" cols="50" class="form-control" name="observaciones">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
</textarea>
                                        </div>


                                    </div>


                                     <div class="form-group">
                                        <label for="docenteacargo" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">Docente a cargo:</label>
                                          <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" name="docenteacargo" class="form-control" placeholder="Nombre Completo" pattern="" title="" >
                                        </div>
                                    </div>




                                     <div class="form-group">
                            <div class="col-xs-12 col-sm-2 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">Registrar Matricula</button>
                            </div>
                        </div>








                                        </form>

                                 </p>
                            </div>
                        </div>
                    </div>

                    <?php 
                    if (empty($_GET['duplicado'])) {
        $duplicado="";
    }
    else
    {   
        $duplicado=$_GET['duplicado'];
        if($duplicado=="si"){

            ?> <script type="text/javascript">alertify.error('Error: el Nickname ingresado ya existe');</script> <?php

        }
    }


    if (empty($_GET['guardado'])) {
        $guardado="";
    }
    else
    {   
        $guardado=$_GET['guardado'];
        if($guardado=="si"){

            ?> <script type="text/javascript">alertify.success('La matricula se ha ingresado exitosamente');</script> <?php

        }

        if($guardado == "no")
        {
            ?> <script type="text/javascript">alertify.error('Error: El Usuario no se pudo guardar');</script> <?php
        }
    }
                     ?>
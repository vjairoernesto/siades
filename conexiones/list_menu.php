<?php
$menu_index='';
$menu_system = '';
$menu_reporte ='';
//switch ($_SESSION["user-nivelacceso"]) {
	/* Caso Administrador del Sistema*/
	//case '1':{
		$menu_index.=' <ul class="nav" id="main-menu">';
        $menu_index.='<li class="text-center"><img src="assets/img/perfil.jpg" class="user-image img-responsive" width="128" height="128" /></li>';

        $menu_index.='<li>';
        $menu_index.=' <a href="#"><i class="fa fa-book fa-3x"></i> Matriculas<span class="fa arrow"></span></a>';
        $menu_index.='<ul class="nav nav-second-level">';
        $menu_index.='<li>
                                <a href="#" onclick="cargamatricula();">Registro</a>
                            </li>';
        $menu_index.='   <li>
                                <a href="#">Actualizacion</a>
                            </li>';
        $menu_index.='<li>
                                <a href="#">Eliminacion</a>
                            </li>';
        $menu_index.='</ul>';
        $menu_index.='</li>';

         $menu_index.='<li>';
        $menu_index.='  <a href="#"><i class="fa fa-check fa-3x"></i> Notas<span class="fa arrow"></span></a>';
        $menu_index.=' <ul class="nav nav-second-level">';
        $menu_index.='<li>
                                <a href="#">Registro</a>
                            </li>';
        $menu_index.='   <li>
                                <a href="#">Actualizacion</a>
                            </li>';
        $menu_index.='<li>
                                <a href="#">Eliminacion</a>
                            </li>';
        $menu_index.='</ul>';
        $menu_index.='</li>';


          $menu_index.='<li>';
        $menu_index.='  <a href="#"><i class="fa fa-user fa-3x"></i> Alumno<span class="fa arrow"></span></a>';
        $menu_index.=' <ul class="nav nav-second-level">';
        $menu_index.='<li>
                                <a href="#">Registro</a>
                            </li>';
        $menu_index.='   <li>
                                <a href="#">Actualizacion</a>
                            </li>';
        $menu_index.='<li>
                                <a href="#">Eliminacion</a>
                            </li>';
        $menu_index.='</ul>';
        $menu_index.='</li>';


        $menu_index.='<li>';
        $menu_index.=' <a href="#"><i class="fa fa-users fa-3x"></i> Persona<span class="fa arrow"></span></a>';
        $menu_index.=' <ul class="nav nav-second-level">';
        $menu_index.='<li>
                                <a href="#" onclick="cargapersona();">Registro</a>
                            </li>';
        $menu_index.='   <li>
                                <a href="#">Actualizacion</a>
                            </li>';
        $menu_index.='<li>
                                <a href="#">Eliminacion</a>
                            </li>';
        $menu_index.='</ul>';
        $menu_index.='</li>';


        $menu_index.='<li>';
        $menu_index.='<a href="#"><i class="fa fa-star fa-3x"></i> Becados<span class="fa arrow"></span></a>';
        $menu_index.=' <ul class="nav nav-second-level">';
        $menu_index.='<li>
                                <a href="#">Registro</a>
                            </li>';
        $menu_index.='   <li>
                                <a href="#">Actualizacion</a>
                            </li>';
        $menu_index.='<li>
                                <a href="#">Eliminacion</a>
                            </li>';
        $menu_index.='</ul>';
        $menu_index.='</li>';


           $menu_index.='<li>';
        $menu_index.='<a href="#"><i class="fa fa-users fa-3x"></i> Docentes<span class="fa arrow"></span></a>';
        $menu_index.=' <ul class="nav nav-second-level">';
        $menu_index.='<li>
                                <a href="#">Registro</a>
                            </li>';
        $menu_index.='   <li>
                                <a href="#">Actualizacion</a>
                            </li>';
        $menu_index.='<li>
                                <a href="#">Eliminacion</a>
                            </li>';
        $menu_index.='</ul>';
        $menu_index.='</li>';



         $menu_index.='<li>';
        $menu_index.=' <a href="#"><i class="fa fa-tags fa-3x"></i> Profesion<span class="fa arrow"></span></a>';
        $menu_index.=' <ul class="nav nav-second-level">';
        $menu_index.='<li>
                                <a href="#">Registro</a>
                            </li>';
        $menu_index.='   <li>
                                <a href="#">Actualizacion</a>
                            </li>';
        $menu_index.='<li>
                                <a href="#">Eliminacion</a>
                            </li>';
        $menu_index.='</ul>';
        $menu_index.='</li>';


         $menu_index.='<li>';
        $menu_index.=' <a href="#"><i class="fa fa-folder-open-o fa-3x"></i> Documentacion para matricula<span class="fa arrow"></span></a>';
        $menu_index.=' <ul class="nav nav-second-level">';
        $menu_index.='<li>
                                <a href="#">Registro</a>
                            </li>';
        $menu_index.='   <li>
                                <a href="#">Actualizacion</a>
                            </li>';
        $menu_index.='<li>
                                <a href="#">Eliminacion</a>
                            </li>';
        $menu_index.='</ul>';
        $menu_index.='</li>';


         $menu_index.='<li>';
        $menu_index.=' <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>';
        
        $menu_index.='</li>';

        $menu_index.='</ul>';

       
		//break;
	//}


        ?>
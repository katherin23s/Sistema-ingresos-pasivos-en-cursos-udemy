<!--=========================
CABEZONTE
====================================-->

<header class="container-fluid bg-dark">
    <div class="container ">
        <div class="row">
            <!--=====================================
            LOGOTIPO
            pantalla dispositivo movil (vertical 320px-horizontal 576px)
            pantalla dispositivo tablet (vertical 768 px -horizontal 1024 px)
            pantalla de escritorio 1366 px ++++
            ================================-->
            <div class="col-12 col-sm-3 col-md-3 col-lg-2 col-xl-2 m-0 py-1 py-sm-3 py-md-3 bg-info">
                <img src="vistas/img/plantilla/logo.png" alt="" class="img-fluid py-1 py-sm-3">
            </div>
            <!-- =====================================
            CATEGORIAS Y BUSCADOR
            =============================================== -->
            <div class="col-12 col-sm-9 col-lg-5 pl-sm-4 pt-3">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <button class="btn btn-danger BackColor" type="button" data-toggle="modal"
                            data-target="#modal-Categorias">
                            <span class="float-left pt-1 mx-2 small text-uppercase d-none d-md-block">Categorias</span>
                            <span class="float-rigth mx-2">
                                <i class="fas fa-bars text-white"></i>
                            </span>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="Buscar cursos">
                    <div class="input-group-append">
                        <button class="btn btn-danger BackColor" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!--============================================
            REDES SOCIALES TOP
            =========================================== -->
            <div class="d-none d-lg-block col-lg-3 pt-lg-3 text-center">
                <ul class="list-inline pt-lg-1">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/" target="blank">
                            <h3><i class="fab fa-facebook-square text-white"></i></h3>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/" target="_blank">
                            <h3><i class="fab fa-youtube-square text-white"></i></h3>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.twitter.com/" target="_blank">
                            <h3><i class="fab fa-twitter-square text-white"></i></h3>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/" target="_blank">
                            <h3><i class="fab fa-linkedin text-white"></i></h3>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.google.com/" target="_blank">
                            <h3><i class="fab fa-google-plu-square text-white"></i></h3>
                        </a>
                    </li>
                </ul>
            </div>

            <!--=============================================
            INGRESOS DE USUARIOS
            ============================================ -->
            <div class="d-none d-lg-block pt-lg-4 text-center">
                <ul class="list-inline">
                    <li class="list-inline-item text-white small">
                        Ingresar
                    </li>
                    <li class="list-inline-item text-white small">
                        |
                    </li>
                    <li class="list-inline-item text-white small">
                        Registro
                    </li>
                </ul>
            </div>
            <!--============================================
            REDES SOCIALES BOTTOM
            =========================================== -->
            <div class="fixed-bottom bg-dark d-lg-none text-center pt-2 row">
                <ul class="list-inline col-12 col-sm-6 mb-0">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/" target="blank">
                            <h3><i class="fab fa-facebook-square text-white"></i></h3>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/" target="_blank">
                            <h3><i class="fab fa-youtube-square text-white"></i></h3>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.twitter.com/" target="_blank">
                            <h3><i class="fab fa-twitter-square text-white"></i></h3>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/" target="_blank">
                            <h3><i class="fab fa-linkedin text-white"></i></h3>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.google.com/" target="_blank">
                            <h3><i class="fab fa-google-plu-square text-white"></i></h3>
                        </a>
                    </li>
                </ul>


                <!--========================================
             INGRESO DE USUARIOS BOTTOM
             ==========================================-->
                <ul class="list-inline col-12 col-sm-6 mb-0">
                    <li class="list-inline-item text-white small">
                        Ingresar
                    </li>
                    <li class="list-inline-item text-white small">
                        |
                    </li>
                    <li class="list-inline-item text-white small">
                        Registro
                    </li>
                </ul>
            </div>
            <label class="custom-control custom-radio">
                <input type="radio" name="" id="" value="checkedValue" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description"></span>
            </label>

        </div>
    </div>

</header>


<!-- The Modal -->
<div class="modal" id="modal-Categorias">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-0 border-0">

            <!-- Modal body -->
            <div class="modal-body p-0">
                <button type="button" class="close pr-2 d-sm-none" data-dismiss="modal">&times;</button>
            </div>
            <div class="row">
                <ul class="col-12 col-sm-6 col-lg-3 p-3 pl-4">
                    <?php
                    $tabla = "categorias";
                    $item = null;
                    $valor = null;
                    $categorias = controladorCategorias::ctrMostrarCATysub($tabla, $item, $valor);
                    foreach ($categorias as $key => $value) {
                        echo ' <a href="" class="text-secondary">
                        <li class="small">
                            <span class="badge badge-pill">
                                <i class="' . $value["icono"] . '">

                                </i>
                            </span>
                            ' . $value["categoria"] . '
                        </li>
                    </a>';
                    }
                    ?>

                </ul>
                <!--==========================================SUBCATEGORIAS==========================================-->

                <div class="d-sm-block col-12 col-sm-6 col-lg-4 bg-light p-3 pl-4">
                    <h5 class="text-danger"> Cursos de <span><?php echo $categorias[0]["categoria"]; ?></span>
                    </h5>
                    <hr>
                    <ul class="list-unstyled">
                        <?php
                        $tabla = "subcategorias";
                        $item = "id_categoria";
                        $valor = 1;
                        $subcategorias = controladorCategorias::ctrMostrarCATySUB($tabla, $item, $valor);
                        foreach ($subcategorias as $key => $value) {
                            echo ' <a href="#" class="text-secondary">
                            <li class="small my-2">' . $value["subcategoria"] . '</li>
                        </a>';
                        }

                        ?>

                    </ul>
                </div>

                <!-- =====================================================DESCRIPCION BREVE CATEGORIA======================================== -->
                <div class=" d-none d-lg-block col-lg-5 pt-3">
                    <div class="card mr-lg-3">
                        <img class="card-img-top" src="visitas/img/ofertas/desarrollo.jpg">
                        <div class="card-body">
                            <h5 class="card-title text-danger"> Cursos de <span>Cursos de
                                    <span><?php echo $categorias[0]["categoria"]; ?> </span></h5>
                            <p class="card-text small"> <?php echo $categorias[0]["descripcion"]; ?></p>

                            <a href="#">Ver cursos</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =================================================
BOTONERA AUXILIAR
================================================== -->
<div class="container bg-dark">
    <div class="row p-0">
        <!-- =======================================
        CATEGORIAS
        ================================= -->
        <div class="col-md-11 p-0 bg-warning">
            <ul class="nav nav-taps nav-justified border-0">
                <li class="nav-item">
                    <a class="nav-link text-secondary p-0 py-2 small" href="#">
                        <span class="badge badge-pill">
                            <i class="fas fa-code"></i>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary p-0 py-2 small" href="#">
                        <span class="badge badge-pill">
                            <i class="fas fa-code"></i>
                        </span>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary p-0 py-2 small" href="#">
                        <span class="badge badge-pill">
                            <i class="fas fa-code"></i>
                        </span>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary p-0 py-2 small" href="#">
                        <span class="badge badge-pill">
                            <i class="fas fa-code"></i>
                        </span>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary p-0 py-2 small" href="#">
                        <span class="badge badge-pill">
                            <i class="fas fa-code"></i>
                        </span>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary p-0 py-2 small" href="#">
                        <span class="badge badge-pill">
                            <i class="fas fa-code"></i>
                        </span>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary p-0 py-2 small" href="#">
                        <span class="badge badge-pill">
                            <i class="fas fa-code"></i>
                        </span>

                    </a>
                </li>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-secondary" href="#" data-toggle="dropdown">
                        Otros
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item text-secondary small" href="#">Link 1</a>
                        <a class="dropdown-item text-secondary small" href="#">Link 2</a>
                        <a class="dropdown-item text-secondary small" href="#">Link 3</a>
                    </div>
                </div>

                <!-- =======================================
IDIOMAS
===================================== -->
                <div class="col-md-1 dropdown p-sm-1 mt-1 mt-sm-0">
                    <button type="button" class="btn-secondary dropdown-toggle w-100 small" href="#"
                        data-toggle="dropdown">
                        ES
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item small" href="#">Ingles</a>
                        <a class="dropdown-item  small" href="#">Español</a>
                    </div>
                </div>
            </ul>
        </div>
        <div class="col-md-1 bg-success"></div>
    </div>
</div>
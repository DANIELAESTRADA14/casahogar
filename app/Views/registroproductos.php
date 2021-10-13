<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="<?php echo (base_url('public/style/estilos.css')) ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark fondo">
            <div class="container-fluid">
                <a class="navbar-brand fuente" href="#"> <i class="fas fa-paw"></i> Animalandia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= site_url('Home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/productos/registro') ?>">Registro Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/animales/registro') ?>">Registro Animales</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section>
        <main>
            <container>
                <div class="container">

                    <div class="row d-flex justify-content-center">

                        <div class="col-12">

                            <h1 class="titulo fuente mt-5 fw-bold">Registro de productos</h1>
                            <form action="<?= site_url('/productos/registro/nuevo') ?>" method="POST">
                                <div class="mb-3">
                                    <label for="textarea" class="form-label">Producto:</label>
                                    <input type="text" class="form-control" id="textarea" name="producto" aria-describedby="texto">
                                    <div id="texto" class="form-text">Agregue el producto que desea</div>
                                </div>
                                <div class="mb-3">
                                    <label for="photo" class="form-label">Fotografía</label>
                                    <input type="img" class="form-control" id="photo" name="fotografia">
                                </div>
                                <div class="mb-3">
                                    <label for="precio" class="form-label">Precio unidad:</label>
                                    <input type="text" class="form-control" id="precio" name="precio">
                                    <div class="mb-3">
                                        <label for="FormControlTextarea1" class="form-label"></label>
                                        <textarea class="form-control" id="FormControlTextarea1" rows="3" name="descripcion"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="select" name="tipo">
                                        <option selected>Seleccione una opción</option>
                                        <option value="1">Perros</option>
                                        <option value="2">Gatos</option>
                                        <option value="3">Aves</option>
                                        <option value="4">Equinos</option>
                                        <option value="5">Reptiles</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>

                        </div>

                        <div class="col-12 col-md-4 mb-5">
                            <img src="<?= base_url('public/img/productos.png') ?>" alt="adopta" class="img-fluid  rounded mx-auto d-block">
                        </div>
                    </div>

                </div>
            </container>

        </main>

        <section>
            <?php if(session('mensaje')): ?>
            <div class="modal fade" id="modalrespuesta" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header fondo">
                            <h5 class="modal-title">Casa Hogar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5><?=session('mensaje') ?></h5>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php endif ?>
        </section>

        <footer class="footer">
            <div class="container-fluid m">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h3 class="fw-bold fuente letra mt-3">Horario de atención:</h3>
                        <p class="letra">Lunes a viernes 7:00 am - 3:00 pm / Sábado: 7:00 am - 2:30 pm / Domingos y festivos 8:00 am - 3:00 pm</p>
                        <br>
                        <h3 class="fw-bold fuente letra">Dirección:</h3>
                        <p class="letra">Belén Altavista Calle 8A # 112-82 </p>
                    </div>

                    <div class="col-12 col-md-4">
                        <h3 class="fw-bold fuente letra mt-3">Ayudas:</h3>
                        <p class="letra">Glosario / Correo remoto / Monitoreo y desempeño de uso del sitio web</p>
                        <br>
                        <h3 class="fw-bold fuente letra">Protección de datos:</h3>
                        <p class="letra">Protección de datos personales en el Municipio de Medellín </p>
                    </div>

                    <div class="col-12 col-md-4">
                        <h1 class="fw-bold fuente letra mt-3"><span><i class="fas fa-paw"></i></span>ANIMALANDIA</h1>
                        <br>
                        <i class="fab fa-facebook fa-2x"></i>
                        <i class="fab fa-instagram fa-2x"></i>
                        <i class="fab fa-youtube fa-2x"></i>
                        <br>
                        <p class="mt-4 letra">© 2021 / NIT: 890905211-1 / Código DANE: 05001 / Código Postal: 050015</p>

                    </div>
                </div>
        </footer>
    </section>

    <script type="module" src="<?=base_url('public/js/lanzarmodal.js')  ?>"></script>
    <script src="https://kit.fontawesome.com/6d1e811add.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
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
                        <h1 class="titulo fuente mt-5 fw-bold">Registro de animales</h1>
                        <form action="">
                            <div class="mb-3">
                                <label for="textarea" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="textarea" name="nombre" aria-describedby="texto">
                                <div id="texto" class="form-text">Agregue el nombre del animal</div>
                            </div>
                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="text" class="form-control" id="photo" name="edad">
                            </div>
                            <div class="mb-3">
                                <label for="FormControlTextarea1" class="form-label">Descripcion</label>
                                <textarea class="form-control" id="FormControlTextarea1" rows="3" name="descripcion"></textarea>
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
                </div>
            </div>
            </container>

        </main>
    </section>
    <script src="https://kit.fontawesome.com/6d1e811add.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
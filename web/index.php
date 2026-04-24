<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'encabezado_titulo.php'; ?>

<div class="px-4 py-5 my-5 text-center">
 <img class="d-block mx-auto mb-4" src="/fotos/logo.jpeg" alt="" width="72" height="57">
 <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
 <div class="col-lg-6 mx-auto">
     <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> 
 <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> 
    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button> 
    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> 
 </div> 
</div> 
</div>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="d-flex flex-column gap-2">
            <input type="radio" class="btn-check" name="rol" id="alumne" value="alumne">
        <label class="btn btn-outline-primary text-start" for="alumne">
            Alumne / Professor
        </label>
        <input type="radio" class="btn-check" name="rol" id="responsable_informatica" value="responsable_informatica">
        <label class="btn btn-outline-primary text-start" for="responsable_informatica">
            Responsable de Informatica
        </label>
        <input type="radio" class="btn-check" name="rol" id="tecnic" value="tecnic">
        <label class="btn btn-outline-primary text-start" for="tecnic">
            Tecnic
        </label>
        <input type="radio" class="btn-check" name="rol" id="administrador" value="administrador">
        <label class="btn btn-outline-primary text-start" for="administrador">
            administrador
        </label>
        </div>

        </div>
    </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include("includes/conexion.php")?>

<?php include("includes/header.php")?>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand mx-auto">AGENDA</a>
    </nav>

    <div style="margin-left: 35%" class="container">
        <div class="row">
            <div class="col-md-6 mt-4 card">
                <form action="registro.php" method="post" class="card-body">
                    <h3 class="card-title">Agregar contacto</h3>
                    <div class="form-group">
                        <input id="title" type="text" name="nombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="correo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" placeholder="Teléfono" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" name="ingresar" value="Agregar">
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('title').focus();
    </script>

</body>
</html>
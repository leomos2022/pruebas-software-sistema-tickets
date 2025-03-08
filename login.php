<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistema de Gestión de Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-body">
<form method="POST" action="app/login.php" class="shadow p-4">
    <h3 class="display-flex">INICIAR SESIÓN</h3>
    <?php if (isset($_GET['error'])) {?>
        <div class="alert alert-danger" role="alert">
         <?php echo stripslashes($_GET['error']); ?>
    </div>
    <?php } ?>

    <?php if (isset($_GET['success'])) {?>
        <div class="alert alert-success" role="alert">
         <?php echo stripslashes($_GET['success']); ?>
    </div>
    <?php } 
       // $pass = "123";
       // $pass = password_hash($pass, PASSWORD_DEFAULT);
       //echo "$pass";
    
    ?>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre usuario</label>
        <input type="text" class="form-control" name="user_name">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
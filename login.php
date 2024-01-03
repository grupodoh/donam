<?php
require_once('acciones/configuracion.php');

session_start();

;

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


     $sql = "SELECT * FROM usuarios_sistema WHERE numero_documento = '$username' AND usuario_pass = '$password'";
     $result = $conn->query($sql);

     $rows = $result->fetch_assoc();

      if ($rows > 0) {

         // Verifica la contraseña
         if ($password == $rows['usuario_pass']) {
             // Inicio de sesión exitoso

             session_start();
             
             $_SESSION['id'] = $row['id_usuario'];
             $_SESSION['username'] = $row['nombre_usuario'];
             $_SESSION['rol'] = $row['id_rol'];

              header("Location: validacion.php"); // Redirige a la página principal después del inicio de sesión
              exit();
          } else {
             $error = "Contraseña incorrecta";
         }
     } else {
         $error = "Usuario no encontrado";
     }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>
        <label for="username">Usuario:</label>
        <input type="text" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>

        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>

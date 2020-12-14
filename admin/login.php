<?php
// CONEXCION A BASE DE DATOS
$con = mysqli_connect("localhost", "poligran", "", "proyecto_tsp") or die("Error " . mysqli_error($con));

// VERIFICAR SI SE ENVIA
if (isset($_POST['submit']))
{
    $uemail = mysqli_real_escape_string($con, $_POST['email']);
    $upwd = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $uemail. "' and password = '" . md5($upwd) . "'");

    if (mysqli_num_rows($result) > 0)
    {
        // EXITO EN LA CONEXCION, SE ENVIA AL USUARIO A LA PAGINA INICIAL DEL ADMINSITRADOR
        
        $row = mysqli_fetch_array($result);

        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        header("Ubicacion: perfil.php"); 
    }
    else
    {
        // login failed
        header("Ubicacion: index.php?err=true");
    }
}
?>
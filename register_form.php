<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("www.bikefriendlychia.com", "bikefijc_BfAlfa", "7dejunio", "bikefijc_BFDatabase");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$user_nombre = mysqli_real_escape_string($link, $_POST['nombre']);
$user_correo = mysqli_real_escape_string($link, $_POST['correo']);
$user_telefono = mysqli_real_escape_string($link, $_POST['telefono']);
$user_registro = mysqli_real_escape_string($link, $_POST['registro']);
$user_recorrido = mysqli_real_escape_string($link, $_POST['tipo_de_recorrido']);
$user_pactual = mysqli_real_escape_string($link, $_POST['preferencia_actual']);
$user_pfutura = mysqli_real_escape_string($link, $_POST['preferencia_futura']);
$user_frecuencia = mysqli_real_escape_string($link, $_POST['frecuencia']);
$user_edad = mysqli_real_escape_string($link, $_POST['edad']);

// attempt insert query execution
$sql = "INSERT INTO usuario (nombre, correo, telefono, registro,
        tipo_de_recorrido, preferencia_actual, preferencia_futura, frecuencia, visita) VALUES ('$user_nombre',
        '$user_correo', '$user_telefono', CURRENT_TIMESTAMP, '$user_recorrido', '$user_pactual', '$user_pfutura', 
        '$user_frecuencia', '$user_edad')";
if(mysqli_query($link, $sql)){
    // echo "Records added successfully.";
    header("Location: http://www.bikefriendlychia.com/registered.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
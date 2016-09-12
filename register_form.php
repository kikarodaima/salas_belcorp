<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("http://bikefriendlychia.com.md-92.webhostbox.net", "bikefijc_salas_belcorp", "Belcorp2017_", "bikefijc_belcorp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$user_nombre = mysqli_real_escape_string($link, $_POST['nombre']);
$user_correo = mysqli_real_escape_string($link, $_POST['correo']);
$user_telefono = mysqli_real_escape_string($link, $_POST['sala']);
$user_registro = mysqli_real_escape_string($link, $_POST['uso']);
$user_recorrido = mysqli_real_escape_string($link, $_POST['problema']);
$user_recorrido = mysqli_real_escape_string($link, $_POST['calificacion']);


// attempt insert query execution
$sql = "INSERT INTO usuario (nombre, correo, sala, uso,
        problema, registro) VALUES ('$user_nombre',
        '$user_correo', '$user_sala', '$user_uso','$user_problema','$user_calificacion',CURRENT_TIMESTAMP)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    //header("Location: http://www.bikefriendlychia.com/registered.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

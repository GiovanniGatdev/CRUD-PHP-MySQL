<?php 
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tareas WHERE id = $id ";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Algo ha Fallado");
    }

    $_SESSION['message'] = 'Tarea eliminada correctamente';
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");
}

?>
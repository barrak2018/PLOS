<?php include('db.php');


if(isset($_POST['save'])){
    
    $title = $_POST['Titulo'];
    $author = $_POST['Autor'];
    $year = $_POST['fecha'];
    $descrip =$_POST['descripcion'];

    $query = "INSERT INTO library(title, _year, author, descripcion) values('$title','$year','$author','$descrip')";
    
    $result = mysqli_query($conn, $query);
    if (!$result) {
 
    }
    else {
        $_SESSION['message']='Libro registrado con exito.';
        $_SESSION['type']='success';
    }
    header("Location: ../library.php");
}











?>
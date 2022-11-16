<?php
include('db.php');


    if (isset($_GET['id'])) {
        $target = $_GET['id'];
        $query = "DELETE FROM library WHERE id_lib = $target";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die('query faild');
        }
        else {
            $_SESSION['message']='libro eliminado';
            $_SESSION['type']='danger';
            header("location: ../library.php");
        }


    }

?>
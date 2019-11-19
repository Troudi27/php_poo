<?php
     include 'create.class.php';
        
     $student = new students;
    $listetu=$student->update($_GET['ID'] , $_POST['firstname'] , $_POST['lastname'] , $_POST['email'] , $_POST['phone'] );
    header('Location:index.php');
?>
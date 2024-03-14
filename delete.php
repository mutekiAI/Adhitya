<?php 
    require_once('database.php');
    $id = $_GET['id'];
    $data = deletedata('notes',$id);

    if($data){
        header('location:notes.php');
    }

?>
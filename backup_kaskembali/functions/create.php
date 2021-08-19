<?php

    $full_name = $_POST['full_name'];
    $name_file = strtolower(str_replace(' ', '', $full_name.time() . '.zip'));

    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_Loc = $_FILES['file']['tmp_name'];
    $file_store = "../files/" . $name_file;

    move_uploaded_file($file_tem_Loc, $file_store);

    header('Location: ../view_files.php');
?>
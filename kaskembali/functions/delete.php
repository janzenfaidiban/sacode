<?php

$file_pointer = '../'.$_GET['file']; 
   
// Use unlink() function to delete a file 
if (!unlink($file_pointer)) { 
    echo ("$file_pointer cannot be deleted due to an error"); 
} 
else { 
    header('Location: ../view_files.php');
} 

?>
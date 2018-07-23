<?php
    require 'config.php';
    $head=$_POST['heading'];
    $data=$_POST['newsbody'];
    $id=$_GET['id'];
    $statement="update test set heading='$head',summertext='$data' where id=$id";
    $result=mysqli_query($conn,$statement);

    if($result){
        
        $timeUpdate = "update test set updateAt=now() where id='$id'";
        mysqli_query($conn,$timeUpdate);
        
        header('location:viewdata.php');
    }
    else{
        mysqli_error($conn);
    }
    mysqli_close($conn);
?>
    




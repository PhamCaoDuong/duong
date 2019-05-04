<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $name=$_POST['name'];
    $job=$_POST['job'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $sql="Insert Into saff (name, job, address,salary) values('".$name."','".$job."','".$address."','".$salary."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } elseif (isset($_POST['sua'])) {
    $id=$_GET['id'];
    $name=$_POST['name'];
    $job=$_POST['job'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $sql = "UPDATE saff SET name = '".$name."', job = '".$job."', address = '".$address."', salary =  '".$salary."' WHERE id = $id"; 
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');   
    }else{
    $id=$_GET['id'];
    $sql="DELETE FROM saff WHERE id = $id";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>

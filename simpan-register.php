<?php

include('koneksi.php');
$username     = $_POST['username'];
$password     = MD5($_POST['password']);

//query insert data ke dalam database
$query = "INSERT INTO tbl_login (username, password) VALUES ('$username', '$password')";        

if($connection->query($query)) {
    
    echo "success";

} else {
    
    echo "error";

}
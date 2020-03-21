<?php
if(!empty($_POST)){
    if(isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirmarPassword"])){
        if($_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirmarPassword"]){
            include_once "conexion.php";
            $found=false;
            $sql1= "select * from usuarios where email=\"$_POST[email]\"";
            $query = $con->query($sql1);
            while ($r=$query->fetch_array()) {
                $found=true;
                break;
            }
            if($found){
                print "<script>alert(\"El email ya existe.\");window.location='../registro.php';</script>";
            }
            $sql = "insert into usuarios(email,password,created_at) value (\"$_POST[email]\",\"$_POST[password]\",NOW())";
            $query = $con->query($sql);
            if($query!=null){
                print "<script>alert(\"Registro exitoso. \");window.location='../login.php';</script>";
            }
        }
    }
}
?>
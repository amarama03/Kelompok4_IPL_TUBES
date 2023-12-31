<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi']=="add"){
            
            $nama =$_POST['nama'];
            $harga =$_POST['harga'];
            $foto = $_FILES['foto']['name'];
            $deskripsi =$_POST['deskripsi'];

            $dir ="img/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$foto);


            $query = "INSERT INTO menu VALUES(null,'$nama','$harga','$foto','$deskripsi')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: input_menu.php");
            } else {
                echo $query;
            };
        

        } else if ($_POST['aksi']== 'edit'){
            $id_menu = $_POST['id_menu'];
            $nama =$_POST['nama'];
            $harga =$_POST['harga'];
            $deskripsi =$_POST['deskripsi'];

            $queryShow = "SELECT * FROM menu WHERE id_menu = '$id_menu';";
            $sqlShow = mysqli_query($conn, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);
            
            if($_FILES['foto']['name'] == ""){
                $foto = $result['foto'];
            } else {
                $foto = $_FILES['foto']['name'];
                unlink("img/".$result['foto']);
                move_uploaded_file($_FILES['foto']['tmp_name'],'img/'.$_FILES['foto']['name']);
            }


            $query = "UPDATE menu SET nama='$nama',harga='$harga',foto = '$foto',deskripsi='$deskripsi' WHERE id_menu='$id_menu';";
            $sql = mysqli_query($conn, $query);
            header("location: input_menu.php");

        }
    }
    if(isset($_GET['hapus'])){
        $id_menu = $_GET['hapus'];

        $queryShow = "SELECT * FROM menu WHERE id_menu = '$id_menu';";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        unlink("img/".$result['foto']);


        $query = "DELETE FROM menu WHERE id_menu = '$id_menu';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: input_menu.php");
        } else {
            echo $query;
        }

    }
?>
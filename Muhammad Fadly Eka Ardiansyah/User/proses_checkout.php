<?php 
    include '../koneksi.php';

    $id = $_POST['id_barang'];
    $qty = $_POST['jmlh_barang'];

    if(isset($_POST['checkout'])){
        if(checkout($_POST) > 0){
            ?>
            <script>
                alert("Barang Berhasil Dipesan!!");
                window.location = 'index.php';
            </script>
            <?php 
        }else{
            ?>
            <script>
                alert("Barang Gagal Dipesan!!");
                window.location = 'index.php';
            </script>
            <?php 
            echo mysqli_error($koneksi);
        }
    }

?>
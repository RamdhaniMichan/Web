<center>

<?php
    
    $jumlah = 1;
    $angka = $_POST["bil1"];
 
     if ($_POST["hitung"])
          {
               if ($angka<=0) {?>
                    <script type="text/javascript">
                        alert("MasukkanDari Angka 1");
                    </script>
                    <h1>Mencari Nilai Faktorial</h1>
                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <b><i>Masukkan Angka Disini</i></b> <input type="text" name="bil1">
                         <input type="submit" value="Hitung" name="hitung">
                    </form>
                   
             <?php
                    }
         else
              {
                         for ($bil=1; $bil<=$angka; $bil++)
                        {
                              $jumlah = $jumlah*$bil;
                              }
                    echo "<b>Nilai faktorial dari $angka adalah $jumlah</b>"; ?>
                   <br /><br />
                   <a href="http://localhost/faktorial/faktorial.php">Ke Form</a>
                    <?php
                }
          
        }
     else
          {                       
?>
<h1>Mencari Nilai Faktorial</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
     <b><i>Masukkan Angka Disini</i></b> <input type="text" name="bil1">
    <input type="submit" value="Hitung" name="hitung">
</form>
<?php } ?>
</center>

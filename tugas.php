<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Tugas PHP</title>
</head>

<body>
   <h2>Tugas PHP</h2>

   <form method="post">
      <label>Nama: </label>
      <input type="text" name="nama"><br><br>
      <label>Tanggal Lahir (YYYY-MM-DD): </label>
      <input type="date" name="tanggal_lahir"><br><br>
      <label>Pekerjaan: </label>
      <select name="pekerjaan">
         <option value="Programmer">Programmer</option>
         <option value="Designer">Designer</option>
         <option value="Manager">Manager</option>
      </select><br><br>
      <input type="submit" value="Kirim">
   </form>

   <?php
   if (isset($_POST['nama']) && isset($_POST['tanggal_lahir']) && isset($_POST['pekerjaan'])) {
      $nama = $_POST['nama'];
      $tanggal_lahir = $_POST['tanggal_lahir'];
      $pekerjaan = $_POST['pekerjaan'];

      // Menghitung umur
      $tanggal_lahir_obj = new DateTime($tanggal_lahir);
      $sekarang = new DateTime('today');
      $umur = $sekarang->diff($tanggal_lahir_obj)->y;

      // Menentukan gaji berdasarkan pekerjaan
      switch ($pekerjaan) {
         case "Programmer":
            $gaji = 5000000;
            break;
         case "Designer":
            $gaji = 4000000;
            break;
         case "Manager":
            $gaji = 7000000;
            break;
         default:
            $gaji = 0;
      }

      echo "<br><br>";
      echo "Nama: $nama <br>";
      echo "Tanggal Lahir: $tanggal_lahir <br>";
      echo "Umur: $umur tahun <br>";
      echo "Pekerjaan: $pekerjaan <br>";
      echo "Gaji: Rp. $gaji <br>";
   }
   ?>

</body>

</html>
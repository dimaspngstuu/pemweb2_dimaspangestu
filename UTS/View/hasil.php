<?php
    require_once('../Models/class_pasien.php');
    require_once('../Models/class_bmiPasien.php');
    require_once('../Models/class_bmi.php');

    $date = date("y-m-d");

    $proses = $_POST['proses'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST["tgl_lahir"];
    $gender = $_POST['gender'];
    $kode = $_POST['kode'];
    $beratBadan = $_POST['berat_badan'];
    $tinggiBadan = $_POST['tinggi_badan'];

    $passien = new Pasien($nama, $gender, $tgl_lahir, $kode);
    $bmi = new Bmi($beratBadan, $tinggiBadan);
    $bmiPassien = new BmiPasien($bmi, $date, $passien);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Result - BMI</title>
    <!-- link bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- ends here -->
    <!-- personal css -->
    <link rel="stylesheet" href="result.css" />
    <!-- ends here -->
  </head>
  <body>
    <section id="homepage" class="bg-danger">
      <div class="container text-light">
        <h1 class="center">BERHASIL</h1>
        <p class="text-capitalize">Data yang kami simpulkan</p>
        <p class="text-capitalize">Nama Kamu Adalah: <?php echo $nama; ?></p>
        <p class="text-capitalize">Jenis Kelamin Kamu Adalah : <?php echo $gender; ?></p>
        <p class="text-capitalize">Tanggal Lahir Kamu <?php echo $tgl_lahir; ?></p>
        <p class="text-capitalize">Hasil Bmi Kamu adalah <?php echo $bmi->nilaiBmi(); ?></p>
        <p class="text-capitalize">Status Bmi Kamu Adalah <?php echo $bmi->statusBmi(); ?></p>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- SweetalertPopUp -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <scrtpt src="../helper/sweetAlert.js"></scrtpt>

    <script>
        <?php
            if(!empty($proses)){
                echo "popUp(1)";
            } else{
               echo "popUp(2)";
            }
        ?>
    </script>

  </body>
</html>
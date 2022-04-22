<?php 
require_once 'Mahasiswa.php';


$mahasiswa1 = new Mahasiswa(02011, "Ira Nur aini", "2012", "TI", 3.8);
$mahasiswa2 = new Mahasiswa(02012, "Dimas Pangestu", "2012" , "TI", 3.9);
$mahasiswa3 = new Mahasiswa(02013, "Labib ", "2010", "SI", 3.45);
$mahasiswa4 = new Mahasiswa(02014, "Ratna Nabila", "2010", "SI", 3.2);

$kumpulan_mahasiswa = [$mahasiswa1, $mahasiswa2, $mahasiswa3, $mahasiswa4];




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <div class="container mt-4">
      <div class="card">
        <div class="card-header">
          Sistem Penilaian
        </div>
        <div class="card-body">
          <h5 class="card-title">Kartu Siswa</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nomer</th>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">PRODI</th>
                    <th scope="col">ANGKATAN</th>
                    <th scope="col">IPK</th>
                    <th scope="col">PRESTASI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1;
                        foreach($kumpulan_mahasiswa as $mhs){
                            echo '<tr><td>'.$nomor.'<br>';
                            echo '<td>' . $mhs->nim . '</br>';
                            echo '<td>' . $mhs->nama . '</br>';
                            echo '<td>' . $mhs->prodi . '</br>';
                            echo '<td>' . $mhs->thn_angkatan . '</br>';
                            echo '<td>' . $mhs->ipk . '</br>';
                            echo '<td>' . $mhs->predikat_ipk() . '</td>';
                            echo '</tr>';
                            $nomor++;
                        }
                    ?>
                </tbody>
            </table>
            <button class="btn btn-primary" onclick="window.print()">Cetak</button>
        </div>
      </div>
    </div>
    

</body>
</html>
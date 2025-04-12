<?php 
include 'class_mahasiswa.php';

$daftar_mahasiswa = [
    new Mahasiswa("01102224031", "Salsabila", 2024, "SI", 4.00),
    new Mahasiswa("01102224032", "Putri", 2024, "TI", 3.00),
    new Mahasiswa("01102224033", "Aisyah", 2024, "SI", 2.25),
    new Mahasiswa("01102224034", "Amasrya", 2024, "BD", 3.75),
];

if (isset($_POST['nim'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $thn_angkatan = $_POST['thn_angkatan'];
    $ipk = $_POST['ipk'];

    array_push($daftar_mahasiswa, new Mahasiswa($nim, $nama, $thn_angkatan, $prodi, $ipk));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Daftar Mahasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>IPK</th>
                    <th>Predikat</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                
                $no = 1;
                foreach ($daftar_mahasiswa as $mhs){


                ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mhs->nim; ?></td>
                    <td><?= $mhs->nama; ?></td>
                    <td><?= $mhs->prodi; ?></td>
                    <td><?= $mhs->thn_angkatan; ?></td>
                    <td><?= $mhs->ipk; ?></td>
                    <td><?= $mhs->predikat_ipk(); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>


<?php 
$nama=$_POST['nama'];
$matkul=$_POST['matkul'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];
$tugas=$_POST['tugas'];
?>

<?php
$nilai_akhir = (30*$uts/100 + 35*$uas/100 + 35*$tugas/100);
if ($nilai_akhir >= 55 && $nilai_akhir <= 100){
    $grade_na='Lulus';
}else {
    $grade_na='Tidak Lulus';
}

// Grade Nilai Akhir
if ($nilai_akhir >= 85 && $nilai_akhir <= 100){
    $grade_nilai='A';
}
elseif ($nilai_akhir >= 70){
    $grade_nilai='B';
}
elseif ($nilai_akhir >= 56){
    $grade_nilai='C';
}
elseif ($nilai_akhir >= 36){
    $grade_nilai='D';
}
elseif ($nilai_akhir >= 0){
    $grade_nilai='E';
}
else {
    $grade_nilai='I';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Activity Score</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://i.pinimg.com/originals/93/48/1c/93481c23c0d65c863b55e13a83567d9e.jpg">
    <style>
        body{
            background-image: url('https://images3.alphacoders.com/644/644003.png');
            background-size: cover;
            padding: 30px;

        }
        .btnn {
            padding-top: 50px;
        }
        button {
            box-shadow: 0 0 2px rgba(0, 0, 0, 1);

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-default table-hover">
            <thead>
                <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
                <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                    echo '<tr>
                    <td>'.$nomor.'</td>';
                    echo '<td>'.$nama.'</td>';
                    echo '<td>'.$matkul.'</td>';
                    echo '<td>'.$uts.'</td>';
                    echo '<td>'.$uas.'</td>';
                    echo '<td>'.$tugas.'</td>';
                    echo '<td>'.$nilai_akhir.'</td>';
                    echo '<td>'.$grade_nilai.'</td>';
                    echo '</tr>';
                ?>
            </tbody>
            </table>
        </div>
        <?php echo '<h5>'.strtoupper($nama).' DINYATAKAN:</h5>'.$grade_na;  ?>
        <div class="col text-right btnn">
            <a href="index.php"><button type="submit" class="btn btn-success btt">Kembali</button></a>
        </div>
    </div>
</body>
</html>
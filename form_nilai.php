<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai</title>
</head>
<body>

    <nav style="background-color: lightgrey;" class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistem Penilaian</a>
        </div>
    </nav>

    <div class="container">
        <div class="col mt-5">
            <div class="row">
                <div class="col"><h2>Form Nilai Mahasiswa</h2><hr></div>
            </div>
            <div class="row">
                <div class="col">
                    <form method="POST" autocomplete="off"  action="#">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                            <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                            <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Pemrograman Web">Pemrograman Web</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="UI/ UX">UI/ Ux</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilaiuts" class="col-4 col-form-label">Nilai UTS</label> 
                            <div class="col-3">
                            <input id="nilaiuts" name="nilaiuts" placeholder="Nilai UTS" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilaiuas" class="col-4 col-form-label">Nilai UAS</label> 
                            <div class="col-3">
                            <input id="nilaiuas" name="nilaiuas" placeholder="Nilai UAS" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilaitugas" class="col-4 col-form-label">Nilai Tugas/ Praktikum</label> 
                            <div class="col-3">
                            <input id="nilaitugas" name="nilaitugas" placeholder="Nilai Tugas Praktikum" type="number" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    $nama_siswa = $_POST['nama'];
                    $mata_kuliah = $_POST['matkul'];
                    $nilai_uts = $_POST['nilaiuts'];
                    $nilai_uas = $_POST['nilaiuas'];
                    $nilai_tugas = $_POST['nilaitugas'];
                    $total = $nilai_uts + $nilai_uas + $nilai_tugas;
                    $rata_rata = $total/3;

                    if ($rata_rata <= 55){
                        $lulus = "Maaf anda tidak dinyatakan lulus!";
                    } else {
                        $lulus = "Selamat anda telah dinyatakan lulus!";
                    }
                    if ($rata_rata >= 85){
                        $grade = "A";
                    } 
                    elseif ($rata_rata >= 70){
                        $grade = "B";
                    }
                    elseif ($rata_rata >= 55){
                        $grade = "C";
                    }
                    elseif ($rata_rata >= 30){
                        $grade = "D";
                    }
                    elseif ($rata_rata >= 10){
                        $grade = "E";
                    }else {
                        $grade = "Tidak ada nilai";
                    }

                    if(isset($_POST['submit'])){
                        echo '<br/>Nama : '.$nama_siswa;
                        echo '<br/>Mata Kuliah : '.$mata_kuliah;
                        echo '<br/>Nilai UTS : '.$nilai_uts;
                        echo '<br/>Nilai UAS : '.$nilai_uas;
                        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
                        echo '<br/>Total Nilai : '.$total;
                        echo '<br/>Rata-rata ; '.$rata_rata;
                        echo '<br/>Keterangan : '.$lulus;
                        echo '<br/>Grade : '.$grade;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <br>

    <footer style="background-color: lightgrey ;" class="bottom">
        <div class="container-fluid">
            <p>Created by Arhaq <a class="text-black fw-bold" href="#"></a></p>
        </div>
    </footer>
</body>
</html>


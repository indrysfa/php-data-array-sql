<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indry Project</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!--load all styles -->

    <!-- W3School CSS & Javascript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Local CSS -->
    <link rel="stylesheet" href="css/indry.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="home.php">
            <img src="img/logo.png" alt="logo" id="logo">
        </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item <?= $_SESSION['home']? "active":""?>">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= $_SESSION['form']? "active":""?>">
                    <a class="nav-link" href="form.php">Form</a>
                </li>
                <li class="nav-item <?= $_SESSION['karyawan']? "active":""?>">
                    <a class="nav-link" href="karyawan.php">Karyawan</a>
                </li>
                <li class="nav-item <?= $_SESSION['mahasiswa']? "active":""?>">
                    <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
                </li>
                <li class="nav-item <?= $_SESSION['siswa']? "active":""?>">
                    <a class="nav-link" href="siswa.php">Siswa</a>
                </li>
            </ul>
        </div>
    </nav>
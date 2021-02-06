<?php
$data = file_get_contents('https://api.covid19api.com');
$menu = json_decode($data, true);
$a = array(
    $menu['countriesRoute'],
    $menu['countryDayOneRoute'],
    $menu['countryDayOneTotalRoute'],
    $menu['countryRoute'],
    $menu['countryRoutePremium'],
    $menu['countryRoutePremiumData'],
    $menu['countryStatusDayOneLiveRoute'],
    $menu['countryStatusDayOneRoute'],
    $menu['countryStatusDayOneTotalRoute'],
    $menu['countryStatusLiveRoute'],
    $menu['countryStatusRoute'],
    $menu['countryStatusTotalRoute'],
    $menu['countrySummaryRoutePremium'],
    $menu['countryTestingPremium'],
    $menu['countryTotalRoute'],
    $menu['exportRoute'],
    $menu['liveCountryRoute'],
    $menu['liveCountryStatusAfterDateRoute'],
    $menu['liveCountryStatusRoute'],
    $menu['summaryRoute'],
    $menu['travelAdvicePremium'],
    $menu['webhookRoute']
);
// var_dump($a);
// die;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Tes 2</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Tes 2</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>Menampilkan Data</h1>
            </div>
        </div><br>
        <div class="row">
            <?php foreach ($a as $row) : ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['Name']; ?></h5>
                            <p class="card-text"><?= $row['Description']; ?></p>
                            <h5 class="card-title"><?= $row['Path']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
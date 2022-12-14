<?php

$data_api = 'https://data.covid19.go.id/public/api/prov.json';
$isi_data = file_get_contents($data_api);
$data = json_decode($isi_data, true);
#var_dump($data); 

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="app.css">
</head>

<body>
  <div class="container">
    <div class="row g-0">

      <h1 class="mt-4 text-center" style="font-size: 50px; text-transform: uppercase; margin-bottom: 1rem;">🤧 Data Covid 19 😷</h1>
      <p class="text-center">
        Terakhir di update: <span class="fw-semibold"><?php echo $data['last_date'] ?></span>
      </p>

      <?php foreach ($data['list_data'] as $row) { ?>

        <!-- Card -->

        <div class="card mb-4" style="width: 18rem; margin-left: 2rem;">
          <div class="card-header fw-bold">
            <?php echo $row['key'] ?>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="fw-semibold">Jumlah Kasus:</span>
              <?php echo $row['jumlah_kasus'] ?>
            </li>
            <li class="list-group-item">
              <span class="fw-semibold">Jumlah Sembuh:</span>
              <?php echo $row['jumlah_sembuh'] ?>
            </li>
            <li class="list-group-item">
              <span class="fw-semibold">Jumlah Meninggal:</span>
              <?php echo $row['jumlah_meninggal'] ?>
            </li>
            <li class="list-group-item">
              <span class="fw-semibold">Jumlah Dirawat:</span>
              <?php echo $row['jumlah_dirawat'] ?>
            </li>
          </ul>
        </div>
      <?php } ?>

      <!-- Card -->
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">Kasumaananda</a>
    </div>
  </footer>
  <!-- Footer -->
</body>

</html>
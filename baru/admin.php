<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Layanan Kearsipan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="<?php echo base_url()?>assets/css/menu-style.css" rel="stylesheet" type="text/css" >
</head>

<body style="background-color:#f2f2f2">
<nav class="navbar navbar-default"; style="background-color: #008CCC;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="font-family: bebas; color: white" href="#">Disperpusip</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" style="color: white"> LOG OUT</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo base_url()?>assets/img/waras1.jpg" alt="waras" style="width:100%;">
        <div class="carousel-caption">
          <h3>Tour Bus WARAS</h3>
          <p>Wisata putra-putri bangsa ke Dinas Kearsipan Jatim</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url()?>assets/img/kunjungan2.jpg" alt="kunjungan" style="width:100%;">
        <div class="carousel-caption">
          <h3>Kunjungan</h3>
          <p>Tampak dalam ruangan di Dinas Kearsipan Jatim</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo base_url()?>assets/img/workshop2.jpg" alt="workshop" style="width:100%;">
        <div class="carousel-caption">
          <h3><span class="carousel-caption">Workshop</span></h3>
          <p>Sosialisasi Kearsipan oleh Arsiparis Disperpusip</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container text-center">
    <h1 style="font-size : 320%; font-family:front page neue;">SISTEM LAYANAN ARSIP</h1>
    <h1 style="font-size : 200%; font-family:front page neue; color:red;">HALAMAN ADMIN</h1>
    <button class="button button1" onclick="document.getElementById('id02').style.display='block'" style="width: 30%">Lihat Statistik Buku Tamu</button>
</div>

<!-- modal -->
<div id="id02" class="modal">
  <form class="modal-content animate" method="POST" action ="<?php echo base_url('layanan/menu_masuk');?>">
    <div class="container2">
        <form>
            <div class="form-group">
                <select name="select" id="select" class="form-control" style=" height:50px;">
                    <option selected disabled>Pilih Grafik yang Ingin Ditampilkan</option>
                    <option value="1">Grafik Pengguna</option>
                    <option value="2">Grafik Kunjungan</option>
                    <option value="3">Grafik Kuesioner</option> 
                </select>
            </div>
        </form>
        <form>
            <div class="form-group">
                <select name="select1" id="select1" class="form-control" style=" height:50px;">
                    <option selected disabled>Pilih Bulan</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option> 
                </select>
            </div>
        </form>
        <input type="text" placeholder="Masukkan Tahun" name="no_id" required>
        <br>
        <button type="submit">Lihat Grafik</button>
    </div>
  </form>
</div>
<!-- akhir modal -->


<script>
    var modal = document.getElementById('id01');
    var modal2 = document.getElementById('id02');
    window.onclick = function(event) 
        {
            if (event.target == modal)
            {
                modal.style.display = "none";
            }
            else if
            (event.target == modal2)
            {
                modal2.style.display = "none";
            } 
        };
</script>
</body>
</html>

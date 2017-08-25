<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Layanan Kearsipan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/grafik.css">
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
    <ul class="nav navbar-nav navbar-right">
      <li onclick="document.getElementById('id01').style.display='block'">
        <a href="#" style="color: white"> LIHAT GRAFIK LAINNYA</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="container">
  <h2 style="font-family:front page neue; text-align:center">Grafik Kuesioner</h2>
  <h3 style="font-family:front page neue; text-align:center">Agustus 2017 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 300 Responden</h3>

    <div class="container" style="background-color: white; padding-top:5%; padding-bottom:5%;">
        <ul class="tabs">
            <li><a href="#" title="content_1" class="tab active"><span class="glyphicon glyphicon-adjust"></span> &nbsp;&nbsp;&nbsp;diagram lingkaran</a></li>
            <li><a href="#" title="content_2" class="tab"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;&nbsp;diagram batang</a></li>
        </ul> 

    <div class="tabbed_area">
       <div id="content_1" class="content" >

          <a href="<?php echo base_url('layanan/prints3a');?> "target="_blank"><button class="button button1" style="width: 20%"><span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;&nbsp;Cetak Grafik </button></a>

        <div class="row">
          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kuesioner1"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Kuesioner Bagian 1 : Syarat Pelayanan Arsip ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kuesioner1'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kuesioner2"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Kuesioner Bagian 2 : Prosedur Layanan ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kuesioner2'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kuesioner3"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Kuesioner Bagian 3 : Waktu Layanan ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kuesioner3'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kuesioner4"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Kuesioner Bagian 4 : Biaya/Tarif Layanan ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kuesioner4'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kuesioner5"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Kuesioner Bagian 5 : Petugas Layanan ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kuesioner5'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
          <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kuesioner6"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Kuesioner Bagian 6 : Fasilitas Akses Arsip ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kuesioner6'));
              chart.draw(data, options);
            }
            </script>
          <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
          <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kuesioner7"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Kuesioner Bagian 7 : Fasilitas layanan dan baca arsip ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kuesioner7'));
              chart.draw(data, options);
            }
            </script>
          <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
          <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kuesioner8"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Kuesioner Bagian 8 : Fasilitas Referensi Pendukung Layanan ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kuesioner8'));
              chart.draw(data, options);
            }
            </script> 
          <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
          <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kuesioner9"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Kuesioner Bagian 9 : Maklumat Layanan ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kuesioner9'));
              chart.draw(data, options);
            }
            </script> 
          <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
          <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kuesioner10"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Kuesioner Bagian 10 : Penanganan Pengaduan Layanan ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kuesioner10'));
              chart.draw(data, options);
            }
            </script> 
          <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
          <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-total"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jawaban', 'Jumlah'],
              ['Sangat Tidak Setuju', 1],
              ['Tidak Setuju', 1],
              ['Ragu-ragu', 1],
              ['Setuju', 1],
              ['Sangat Setuju', 1]
            ]);

              var options = {'title':'Rekapitulasi total bulan ini ', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-total'));
              chart.draw(data, options);
            }
            </script> 
          <!-- AKHIR DARI GRAFIK -->
          </div> <!-- tutup col -->
        </div> <!-- tutup row -->
      </div> <!-- tutup content 1 -->

      <div id="content_2" class="content">
        
      <a href="<?php echo base_url('layanan/prints3b');?> "target="_blank"><button class="button button1" style="width: 20%"><span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;&nbsp;Cetak Grafik </button></a>

        <div class="row">
          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 1 : Syarat Pelayanan Arsip",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert1"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert1"></div>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 2 : Prosedur Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert12"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert12"></div>
            <!-- AKHIR DARI GRAFIK -->
          </div>
        </div> <!-- tutup row -->

        <div class="row">
          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 3 : Waktu Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert13"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert13"></div>
          <!-- AKHIR DARI GRAFIK -->
          </div> <!-- tutup col -->

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 4 : Biaya/Tarif Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert14"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_pert14"></div>
            <!-- AKHIR DARI GRAFIK -->
          </div> <!-- tutup col -->
        </div> <!-- tutup row -->

        <div class="row">
          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 5 : Petugas Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert15"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert15"></div>
            <!-- AKHIR DARI GRAFIK -->
          </div>
          
          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 6 : Fasilitas Akses Arsip",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert16"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert16"></div>
          <!-- AKHIR DARI GRAFIK -->
        </div> <!-- tutup col -->
        </div> <!-- tutup row -->

        <div class="row">
          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 7 : Fasilitas layanan dan baca arsip",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert17"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert17"></div>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 8 : Fasilitas Referensi Pendukung Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert18"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert18"></div>
            <!-- AKHIR DARI GRAFIK -->
          </div>
        </div> <!-- tutup row -->

        <div class="row">
          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 9 : Maklumat Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert19"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert19"></div>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 10 : Penanganan Pengaduan Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert20"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert20"></div>
            <!-- AKHIR DARI GRAFIK -->
          </div>
        </div> <!-- tutup row -->

        <div class="row">
          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Rekapitulasi Total Bulan ini",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_total2"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_total2"></div>
            <!-- AKHIR DARI GRAFIK -->
          </div> <!-- tutup col -->
        </div> <!-- tutup row -->

      </div> <!-- tutup content 2 -->
    </div> <!-- tabbed area -->
    </div> <!-- container -->
  </div> <!-- container -->

<!-- modal -->
<div id="id01" class="modal">
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

<script type="text/javascript">
  google.charts.load('visualization', '1.0', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

// When the document loads do everything inside here ...
    $(document).ready(function(){
    // When a link is clicked
    $("a.tab").click(function () {
      // switch all tabs off
      $(".active").removeClass("active");
      // switch this tab on
      $(this).addClass("active");
      // slide all content up
      $(".content").slideUp();
      // slide this content up
      var content_show = $(this).attr("title");
      $("#"+content_show).slideDown();
    });
  });

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
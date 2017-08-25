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
  <h2 style="font-family:front page neue; text-align:center">Grafik Pengguna</h2>
  <h3 style="font-family:front page neue; text-align:center">Agustus 2017 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 100 Pengguna</h3>

    <div class="container" style="background-color: white; padding-top:5%; padding-bottom:5%;">
        <ul class="tabs">
            <li><a href="#" title="content_1" class="tab active"><span class="glyphicon glyphicon-adjust"></span> &nbsp;&nbsp;&nbsp;diagram lingkaran</a></li>
            <li><a href="#" title="content_2" class="tab"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;&nbsp;diagram batang</a></li>
        </ul> 

    <div class="tabbed_area">
       <div id="content_1" class="content" >

          <a href="<?php echo base_url('layanan/prints1a');?> "target="_blank"><button class="button button1" style="width: 20%"><span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;&nbsp;Cetak Grafik </button></a>

        <div class="row">
          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-usia"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Usia', 'Jumlah'],
              ['< 15', 1], 
              ['15-20', 1],
              ['21-25', 1],
              ['26-30', 1],
              ['31-35', 1],
              ['36-40', 1],
              ['41-45', 1],
              ['46-50', 1],
              ['51-55', 1],
              ['56-60', 1],
              ['> 60', 1]
            ]);

              var options = {'title':'Usia', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-usia'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-jk"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jenis Kelamin', 'Jumlah'],
              ['Laki-laki', 1],
              ['Perempuan', 1]
            ]);

              var options = {'title':'Jenis Kelamin', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-jk'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-warganegara"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Kewarganegaraan', 'Jumlah'],
              ['WNI', 1],
              ['WNA', 1]
            ]);

              var options = {'title':'Kewarganegaraan', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-warganegara'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-pendidikan"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Pendidikan Terakhir', 'Jumlah'],
              ['SMA', 1],
              ['Diploma I-III', 1],
              ['Sarjana/Diploma IV', 1],
              ['Pasca Sarjana', 1],
              ['Doktoral', 1]
            ]);

              var options = {'title':'Pendidikan Terakhir', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-pendidikan'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-profesi"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Profesi', 'Jumlah'],
              ['Mahasiswa/Pelajar', 1],
              ['Dosen', 1],
              ['Peneliti/Sejarawan', 1],
              ['Perusahaan/Swasta', 1],
              ['Instansi Pemerintah Provinsi', 1],
              ['Instansi Pemerintah Kabupaten', 1],
              ['Lain-lain', 1]
            ]);

              var options = {'title':'Profesi', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-profesi'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-tempatstudi"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['ITS', 'Jumlah'],
              ['Unair', 1],
              ['UB', 1],
              ['Unesa', 1],
              ['Unej', 1],
              ['UNM', 1],
              ['UINSA', 1],
              ['UPN', 1],
              ['UMM', 1],
              ['UM Surabaya', 1],
              ['UM Sidoarjo', 1],
              ['Lain-lain', 1],
            ]);

              var options = {'title':'Tempat Studi', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-tempatstudi'));
              chart.draw(data, options);
            }
            </script>
          <!-- AKHIR DARI GRAFIK -->
        </div> <!-- tutup col -->
        </div> <!-- tutup row -->
      </div> <!-- tutup content 1 -->

      <div id="content_2" class="content">
        
      <a href="<?php echo base_url('layanan/prints1b');?> "target="_blank"><button class="button button1" style="width: 20%"><span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;&nbsp;Cetak Grafik </button></a>

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
                  ['Usia < 15', 2, "red"], 
                  ['Usia 15-20', 1, "blue"],
                  ['Usia 21-25', 4, "green"],
                  ['Usia 26-30', 3, ",yellow"],
                  ['Usia 31-35', 5, "pink"],
                  ['Usia 36-40', 1, "purple"],
                  ['Usia 41-45', 3, "orange"],
                  ['Usia 46-50', 4, "cyan"],
                  ['Usia 51-55', 2,"coral"],
                  ['Usia 56-60', 1, "Brown"],
                  ['Usia > 60', 5, "Gold"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Usia",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_usia1"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_usia1"></div>
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
                  ['Laki-laki', 3, "red"], 
                  ['Perempuan', 2, "blue"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Jenis Kelamin",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_jk1"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_jk1"></div>
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
                  ['WNA', 1, "red"], 
                  ['WNI', 5, "blue"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kewarganegaraan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_kewarganegaraan1"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_kewarganegaraan1"></div>
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
                  ['SMA', 1, "red"],
                  ['Diploma I-III', 2, "blue"],
                  ['Sarjana/Diploma IV', 1, "green"],
                  ['Pasca Sarjana', 3, "yellow"],
                  ['Doktoral', 4, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Pendidikan Terakhir",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pendidikan1"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_pendidikan1"></div>
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
                  ['Pelajar/Mahasiswa', 1, "red"],
                  ['Dosen', 2, "blue"],
                  ['Peneliti/Sejarawan', 1, "green"],
                  ['Perusahaan/Swasta', 3, "yellow"],
                  ['Pemprov', 4, "pink"],
                  ['Pemkab', 2, "purple"],
                  ['Lain-lain', 1, "orange"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Profesi",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_profesi1"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_profesi1"></div>
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
                  ['ITS', 2, "red"], 
                  ['Unair', 1, "blue"],
                  ['UB', 4, "green"],
                  ['Unesa', 3, ",yellow"],
                  ['Unej', 5, "pink"],
                  ['UNM', 1, "purple"],
                  ['UINSA', 3, "orange"],
                  ['UPN', 4, "cyan"],
                  ['UMM', 2,"coral"],
                  ['UM SBY', 1, "Brown"],
                  ['UM SDA', 5, "Gold"],
                  ['Lain-lain', 3, "Lime"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Tempat Studi",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_tempatstudi1"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_tempatstudi1"></div>
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
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
  <h2 style="font-family:front page neue; text-align:center">Grafik Kunjungan</h2>
  <h3 style="font-family:front page neue; text-align:center">Agustus 2017 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 300 Pengunjung</h3>

    <div class="container" style="background-color: white; padding-top:5%; padding-bottom:5%;">
        <ul class="tabs">
            <li><a href="#" title="content_1" class="tab active"><span class="glyphicon glyphicon-adjust"></span> &nbsp;&nbsp;&nbsp;diagram lingkaran</a></li>
            <li><a href="#" title="content_2" class="tab"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;&nbsp;diagram batang</a></li>
        </ul> 

    <div class="tabbed_area">
       <div id="content_1" class="content" >

          <a href="<?php echo base_url('layanan/prints2a');?> "target="_blank"><button class="button button1" style="width: 20%"><span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;&nbsp;Cetak Grafik </button></a>

        <div class="row">
          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-keperluan"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Keperluan', 'Jumlah'],
              ['Skripsi/Tesis/Disertasi', 1],
              ['Tugas Kuliah', 1],
              ['Pembuktian Hukum', 1],
              ['Penulisan Sejarah', 1],
              ['Penelusuran Silsilah Keluarga', 1],
              ['Kedinasan', 1],
              ['Lain-lain', 1]
            ]);

              var options = {'title':'Keperluan', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-keperluan'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-fokus"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Fokus Penelitian', 'Jumlah'],
              ['Arsip sebelum 1900', 1],
              ['1901-1945', 1],
              ['1946-1965', 1],
              ['1966-1985', 1],
              ['1986-sekarang', 1]
            ]);

              var options = {'title':'Fokus Penelitian', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-fokus'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-kategori"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Kategori', 'Jumlah'],
              ['Umum', 1],
              ['Secretary Oost Java', 1],
              ['Lembaga Vertikal', 1],
              ['Organisasi Perangkat Daerah', 1],
              ['BUMN', 1],
              ['Arsip Perseorangan', 1],
              ['Lain-lain', 1]
            ]);

              var options = {'title':'Kategori Arsip', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-kategori'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-media"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Media', 'Jumlah'],
              ['Kertas', 1],
              ['Foto', 1],
              ['Film', 1],
              ['Kaset', 1],
              ['Peta', 1],
              ['Lain-lain', 1]
            ]);

              var options = {'title':'Media Arsip', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-media'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-jumlahkunjungan"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Jumlah Kunjungan', 'Jumlah'],
              ['Ke-1', 1],
              ['Ke-2', 1],
              ['Ke-3', 1],
              ['Ke-4', 1],
              ['> 5', 1]
            ]);

              var options = {'title':'Jumlah Kunjungan', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-jumlahkunjungan'));
              chart.draw(data, options);
            }
            </script>
            <!-- AKHIR DARI GRAFIK -->
          </div>

          <div class="col-sm-6">
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
            <div id="grafik-proyeksi"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Proyeksi', 'Jumlah'],
              ['1-2 hari', 1],
              ['3-4 hari', 1],
              ['5-6 hari', 1]
            ]);

              var options = {'title':'Proyeksi Waktu Penelitian', 'width':550, 'height':400};
              var chart = new google.visualization.PieChart(document.getElementById('grafik-proyeksi'));
              chart.draw(data, options);
            }
            </script>  
            <!-- AKHIR DARI GRAFIK -->
          </div> <!-- tutup col -->
        </div> <!-- tutup row -->
      </div> <!-- tutup content 1 -->

      <div id="content_2" class="content">
        
      <a href="<?php echo base_url('layanan/prints2b');?> "target="_blank"><button class="button button1" style="width: 20%"><span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;&nbsp;Cetak Grafik </button></a>

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
                  ['Skripsi/Tesis/Disertasi', 2, "red"], 
                  ['Tugas Kuliah', 1, "blue"],
                  ['Pembuktian Hukum', 4, "green"],
                  ['Penulisan Sejarah', 3, ",yellow"],
                  ['Penelusuran Silsilah Keluarga', 5, "pink"],
                  ['Kedinasan', 1, "purple"],
                  ['Lain-lain', 3, "orange"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Keperlan Pengunjung",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_keperluan1"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_keperluan1"></div>
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
                  ['Arsip sebelum 1900', 3, "red"], 
                  ['1901-1945', 2, "blue"],
                  ['1946-1965', 4, "green"],
                  ['1966-1985', 3, ",yellow"],
                  ['1986-sekarang', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Fokus Tahun Penelitian",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_fokus1"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_fokus1"></div>
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
                  ['Umum', 3, "red"], 
                  ['Secretary Oost Java', 2, "blue"],
                  ['Lembaga Vertikal', 4, "green"],
                  ['Organisasi Perangkat Daerah', 3, ",yellow"],
                  ['BUMN', 5, "pink"],
                  ['Arsip Perseorangan', 1, "purple"],
                  ['Lain-lain', 3, "orange"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kategori arsip yang dicari",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_kategori1"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_kategori1"></div>
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
                  ['Kertas', 1, "red"], 
                  ['Foto', 5, "blue"],
                  ['Film', 4, "green"],
                  ['Kaset', 3, ",yellow"],
                  ['Peta', 5, "pink"],
                  ['Lain-lain', 3, "orange"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Media arsip yang dicari",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_media1"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_media1"></div>
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
                  ['Ke-1', 1, "red"],
                  ['Ke-2', 2, "blue"],
                  ['Ke-3', 1, "green"],
                  ['Ke-4', 3, "yellow"],
                  ['>5', 4, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Jumlah Kunjungan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_jumlahkunjungan1"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_jumlahkunjungan1"></div>
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
                  ['1-2 hari', 1, "red"],
                  ['3-4 hari', 2, "blue"],
                  ['5-6 hari', 1, "green"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Proyeksi Penelitian",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_proyeksi1"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_proyeksi1"></div>
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
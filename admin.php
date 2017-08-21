<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Layanan Kearsipan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/admin-style.css">
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
  <h2 style="font-family:front page neue; text-align:center">Halaman Admin</h2> 
    <div class="container" style="background-color: white; padding-top:5%; padding-bottom:5%;">
      <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'pengguna')" id="defaultOpen">Pengguna</button>
        <button class="tablinks" onclick="openTab(event, 'kunjungan')">Kunjungan</button>
        <button class="tablinks" onclick="openTab(event, 'kuisioner')">Kuisioner</button>
      </div>

      <div id="pengguna" class="tabcontent">
            <h3>Grafik Pengguna</h3>
            
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

      </div>

      <div id="kunjungan" class="tabcontent">
        <h3>Grafik Kunjungan</h3>
        
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


      </div>

      <div id="kuisioner" class="tabcontent">
        <div id="brands" class="tab-pane">
          <ul class="nav nav-tabs" id="brands_tabs">
            <li><a href="#bagian1" data-toggle="tab">Bagian 1</a></li>
            <li><a href="#bagian2" data-toggle="tab">Bagian 2</a></li>
            <li><a href="#bagian3" data-toggle="tab">Bagian 3</a></li>
            <li><a href="#bagian4" data-toggle="tab">Bagian 4</a></li>
            <li><a href="#bagian5" data-toggle="tab">Bagian 5</a></li>
            <li><a href="#bagian6" data-toggle="tab">Bagian 6</a></li>
            <li><a href="#bagian7" data-toggle="tab">Bagian 7</a></li>
            <li><a href="#bagian8" data-toggle="tab">Bagian 8</a></li>
            <li><a href="#bagian9" data-toggle="tab">Bagian 9</a></li>
            <li><a href="#bagian10" data-toggle="tab">Bagian 10</a></li>
          </ul>

            <div class="tab-content">
              <div id="bagian1" class="tab-pane">
                <i>grafik bagian 1</i>
                <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
                <div id="grafik-k1p1"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                  ['k1p1', 'Jumlah'],
                  ['SS', 1],
                  ['S', 1],
                  ['R', 1],
                  ['TS', 1],
                  ['STS', 1]
                ]);
                  var options = {'title':'1.  Ada persyaratan teknis dalam penggunaan Arsip', 'width':550, 'height':400};
                  var chart = new google.visualization.PieChart(document.getElementById('grafik-k1p1'));
                  chart.draw(data, options);
                }
                </script>
              </div>

              <div id="bagian2" class="tab-pane">
                <i>grafik bagian 2</i>
                <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
                <div id="grafik-k2p1"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                  ['k1p1', 'Jumlah'],
                  ['SS', 1],
                  ['S', 1],
                  ['R', 1],
                  ['TS', 1],
                  ['STS', 1]
                ]);
                  var options = {'title':'1.  Memiliki jadwal pelayanan arsip', 'width':550, 'height':400};
                  var chart = new google.visualization.PieChart(document.getElementById('grafik-k2p1'));
                  chart.draw(data, options);
                }
                </script>
              </div>

              <div id="bagian3" class="tab-pane">
                <i>grafik bagian 3</i>
                <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK-->
                <div id="grafik-k3p1"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                  ['k1p1', 'Jumlah'],
                  ['SS', 1],
                  ['S', 1],
                  ['R', 1],
                  ['TS', 1],
                  ['STS', 1]
                ]);
                  var options = {'title':'1.  Ada kejelasan biaya layanan sumber arsip', 'width':550, 'height':400};
                  var chart = new google.visualization.PieChart(document.getElementById('grafik-k3p1'));
                  chart.draw(data, options);
                }
                </script>
              </div>

              <div id="bagian4" class="tab-pane">
                <i>grafik bagian 4</i>
              </div>

              <div id="bagian5" class="tab-pane">
                <i>grafik bagian 5</i>
              </div>

              <div id="bagian6" class="tab-pane">
                <i>grafik bagian 6</i>
              </div>

              <div id="bagian7" class="tab-pane">
                <i>grafik bagian 7</i>
              </div>

              <div id="bagian8" class="tab-pane">
                <i>grafik bagian 8</i>
              </div>

              <div id="bagian9" class="tab-pane">
                <i>grafik bagian 9</i>
              </div>

              <div id="bagian10" class="tab-pane">
                <i>grafik bagian 10</i>
              </div>

            </div>
        </div>
      </div>

    </div>
  </div>

<script>
function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
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

<body>


  <div class="container">
  <h2 style="font-family:front page neue; text-align:center">Grafik Pengunjung</h2>
  <h3 style="font-family:front page neue; text-align:center">Agustus 2017 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 300 Pengunjung</h3>  
    <div class="container" style="background-color: white; padding-top:5%; padding-bottom:5%;"> 

    <!-- <div class="tabbed_area"> -->
       <table>
          <tr>
            <th>
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
            </th>

            <th>
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
            </th>
          </tr>

          <tr>
            <th>
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
            </th>

            <th>
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
            </th>
          </tr>

          <tr>
            <th>
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
            </th>

            <th>
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
            </th>
          </tr>
        </table>
    <!-- </div> tabbed area -->
    </div> <!-- container -->
  </div> <!-- container -->



<script type="text/javascript">
  google.charts.load('visualization', '1.0', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

  var options = {
          title: 'My Daily Activities',
      backgroundColor: '#ddd',
      chartArea: {width:500,height:200}
        };

    $(".tabs a[title='content_2']").click()
    $(".tabs a[title='content_1']").click()

    var chart = new      google.visualization.PieChart(document.getElementById('chart'));

         
    chart.draw(data, options);

 var chart1= new      google.visualization.PieChart(document.getElementById('chart1'));

         
    chart1.draw(data, options);
  }





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

    function myFunction() {
    window.print();
    }

    window.onload = function() {
      myFunction();
    };

</script>


</body>
</html>
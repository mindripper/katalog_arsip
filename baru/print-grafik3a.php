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
  <h2 style="font-family:front page neue; text-align:center">Grafik Kuesioner</h2>
  <h3 style="font-family:front page neue; text-align:center">Agustus 2017 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 300 Responden</h3>  
    <div class="container" style="background-color: white; padding-top:5%; padding-bottom:5%;"> 

    <!-- <div class="tabbed_area"> -->
       <table>
          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 1111111111111111111111111111111-->
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
            </th>

            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 2222222222222222222222222222222-->
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
            </th>
          </tr>

          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 333333333333333333333333333333333-->
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
            </th>

            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 44444444444444444444444444444444444-->
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
            </th>
          </tr>

          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 555555555555555555555555555555555555555-->
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
            </th>

            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 6666666666666666666666666666666666-->
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
            </th>
          </tr>

          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 7777777777777777777777777777777-->
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
            </th>

            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 8888888888888888888888888888888-->
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
            </th>
          </tr>

          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 99999999999999999999999999999999-->
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
            </th>

            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 0000000000000000000000000000-->
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
            </th>
          </tr>

          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
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
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
  <h2 style="font-family:front page neue; text-align:center">Grafik Pengguna</h2>
  <h3 style="font-family:front page neue; text-align:center">Agustus 2017 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 100 Pengguna</h3>  
    <div class="container" style="background-color: white; padding-top:5%; padding-bottom:5%;"> 

    <!-- <div class="tabbed_area"> -->
       <table>
          <tr>
            <th>
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
            </th>

            <th>
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
            </th>
          </tr>

          <tr>
            <th>
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
            </th>

            <th>
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
            </th>
          </tr>

          <tr>
            <th>
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
            </th>

            <th>
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
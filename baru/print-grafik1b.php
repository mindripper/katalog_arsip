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
            </th>

            <th>
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
            </th>
          </tr>

          <tr>
            <th>
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
            </th>

            <th>
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
            </th>
          </tr>

          <tr>
            <th>
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
            </th>

            <th>
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
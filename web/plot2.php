<?php
include '../../db.php';
$gene_list = str_replace(array("\r\n", "\r", "\n", "\t"), " ", $_POST['gene-list']);
$genes = array_filter(explode(" ", $gene_list));
$genes = array_flip($genes);
$q = "SELECT distinct gene,x,y FROM $url[2]";
$points = mysqli_query($db, $q);
$A = "";
$B = "";
while ($point = mysqli_fetch_assoc($points)) {
   $gene = $point[gene];
   $x = $point[x];
   $y = $point[y];
   if (isset($genes[$gene])) {
      $A = $A . "{name: '$gene',x: $x,y: $y},";
   } else $B = $B . "{name: '$gene',x: $x,y: $y},";
}
$A = substr($A, 0, strlen($A) - 1);
$B = substr($B, 0, strlen($B) - 1);
?>
<html>

<head>
   <meta charset="UTF-8" />
   <title>BENviewer - scatter</title>
   <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
   <script src="../../../assets/js/highcharts.js"></script>
</head>

<body>
   <div id="container" style="width: 100%; height: 100%; margin: 0 auto"></div>
   <script language="JavaScript">
      $(document).ready(function() {
         var chart = {
            type: 'scatter',
            zoomType: 'xy'
         };
         var title = {
            text: '<?php echo $url[1]; ?>'
         };
         var subtitle = {
            text: '<?php echo $url[2]; ?>'
         };
         var xAxis = {
            title: {
               enabled: true,
               text: 'X'
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
         };
         var yAxis = {
            title: {
               text: 'Y'
            }
         };
         var plotOptions = {
            scatter: {
               marker: {
                  radius: 5,
                  symbol: 'circle',
                  states: {
                     hover: {
                        enabled: true,
                        lineColor: 'rgb(100,100,100)'
                     }
                  }
               },
               states: {
                  hover: {
                     marker: {
                        enabled: false
                     }
                  }
               },
               tooltip: {
                  headerFormat: '<b>{point.key}<br></b>'
               }
            },
            series: {
               turboThreshold: 0
            }
         };
         var series = [{
            name: 'B',
            color: 'rgba(0, 191, 255, .1)',
            data: [<?php echo $B; ?>]
         },{
            name: 'A',
            color: 'rgba(223, 83, 83, .4)',
            data: [<?php echo $A; ?>]
         }];

         var json = {};
         json.chart = chart;
         json.title = title;
         json.subtitle = subtitle;
         json.xAxis = xAxis;
         json.yAxis = yAxis;
         json.series = series;
         json.plotOptions = plotOptions;
         $('#container').highcharts(json);

      });
   </script>
</body>

</html>
<?php
include '../../db.php';
$cmd = explode("?", $url[3]); //$cmd[1] is the sort cmd
$q = "SELECT func FROM $url[2]";
$func_list = mysqli_query($db, $q);
$funcs = array();
while ($func = mysqli_fetch_assoc($func_list)) {
   if (isset($funcs[$func[func]])) {
      $funcs[$func[func]]++;
   } else $funcs[$func[func]] = 1;
}
?>

<!DOCTYPE html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style="">
<!--<![endif]-->

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="viewport" content="width=device-width">

   <title>BENviewer - list</title>

   <meta name="robots" content="noindex, nofollow">
   <meta name="description" content="BootMetro : Simple and complete web UI framework to create web apps with Windows 8 Metro user interface.">
   <meta name="keywords" content="bootmetro, modern ui, modern-ui, metro, metroui, metro-ui, metro ui, windows 8, metro style, bootstrap, framework, web framework, css, html">
   <meta name="author" content="AozoraLabs by Marcello Palmitessa">
   <link rel="publisher" href="https://plus.google.com/117689250782136016574">

   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">

   <link rel="stylesheet" type="text/css" href="../../assets/css/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/bootmetro-responsive.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/bootmetro-icons.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/datepicker.css">

   <link rel="stylesheet" type="text/css" href="../../assets/css/demo.css">

   <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">

   <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
   <script src="../../assets/js/modernizr-2.6.2.min.js"></script>

   <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3182578-6']);
      _gaq.push(['_trackPageview']);
      (function() {
         var ga = document.createElement('script');
         ga.type = 'text/javascript';
         ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0];
         s.parentNode.insertBefore(ga, s);
      })();
   </script>
</head>

<body>
   <header id="nav-bar" class="container">
      <div class="row">
         <div class="span12">
            <div id="header-container">
               <a id="backbutton" class="win-backbutton" href="/index.php"></a>
               <h5>BENviewer</h5>
               <div class="dropdown">
                  <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#"><?php echo $url[1]; ?><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="/BEN.consensus/">BEN.consensus</a></li>
                     <li><a href="/BEN.reactome/">BEN.reactome</a></li>
                     <li><a href="/BEN.regnetworks/">BEN.regnetworks</a></li>
                     <li class="divider"></li>
                     <li><a href="/index.php">Home</a></li>
                  </ul>
               </div>
            </div>
            <div id="top-info" class="pull-right">

               <a id="logged-user" href="https://sklb.seu.edu.cn/2017/0808/c18444a235378/page.htm" class="win-command pull-right">
                  <span class="win-commandicon win-commandring icon-user"></span>
               </a>
               <div class="pull-left">
                  <h3>SEU.BME</h3>
                  <h4>ZH Lu's Group</h4>
               </div>
            </div>
         </div>
      </div>
   </header>

   <div class="container">
      <div class="row">
         <div class="span12">
            <div id="content-filters" class="row">
               <div class="span12">
                  <ul class="nav nav-pills">
                     <li class="">
                        <a>Algorithm: <?php echo $url[2]; ?></a>
                     </li>
                     <li class="dropdown">
                        <a class="dropdown-toggle accent-color" data-toggle="dropdown" href="#">
                           Sort by
                           <b class="caret" href="#"></b>
                        </a>
                        <ul id="sort-filter" class="dropdown-menu">
                           <li><a href="list.php?name">Name</a></li>
                           <li><a href="list.php?count">Counts</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>

            <div class="row">
               <div class="span12">

                  <table class="table table-condensed table-hover">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Counts</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        if ($cmd[1] == "name") {
                           ksort($funcs);
                        } elseif ($cmd[1] == 'count') {
                           arsort($funcs);
                        }
                        foreach ($funcs as $name => $count) {
                           echo "<tr><td><a href='./$name/'>$name</a></td><td>$count</td></tr>";
                        }
                        ?>
                     </tbody>
                  </table>
               </div>
            </div>

         </div>
      </div>
   </div>

   <footer class="win-ui-dark win-commandlayout navbar-fixed-bottom">
      <div class="container">
         <div class="row">
            <div class="align-center">
               <button class="win-command">
                  <br>
                  <span class="win-label">Copyright © 2020.SKLB All rights reserved.</span>
                  <span class="win-label"><a href="http://beian.miit.gov.cn/">苏ICP备17030521号</a></span>
               </button>
            </div>
         </div>
      </div>
   </footer>

   <script src="//code.jquery.com/jquery-1.10.0.min.js"></script>
   <script>
      window.jQuery || document.write("<script src='assets/js/jquery-1.10.0.min.js'>\x3C/script>")
   </script>
   <script src="assets/js/jquery-1.10.0.min.js"></script>

   <script type="text/javascript" src="../../assets/js/min/bootstrap.min.js"></script>
   <script type="text/javascript" src="../../assets/js/bootmetro-panorama.js"></script>
   <script type="text/javascript" src="../../assets/js/bootmetro-pivot.js"></script>
   <script type="text/javascript" src="../../assets/js/bootmetro-charms.js"></script>
   <script type="text/javascript" src="../../assets/js/bootstrap-datepicker.js"></script>

   <script type="text/javascript" src="../../assets/js/jquery.mousewheel.min.js"></script>
   <script type="text/javascript" src="../../assets/js/jquery.touchSwipe.min.js"></script>

   <script type="text/javascript" src="../../assets/js/holder.js"></script>
   <script type="text/javascript" src="../../assets/js/demo.js"></script>


   <script type="text/javascript">
      $('.panorama').panorama({
         showscrollbuttons: true,
         keyboard: true,
         parallax: true
      });

      $('#pivot').pivot();
   </script>


</body>

</html>
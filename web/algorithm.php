<?php
$url = explode('/', $_SERVER["REQUEST_URI"]);
?>

<!DOCTYPE html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style="">
<!--<![endif]-->

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="viewport" content="width=device-width">

   <title>BENviewer - Select Algorithm</title>

   <meta name="robots" content="noindex, nofollow">
   <meta name="description" content="BootMetro : Simple and complete web UI framework to create web apps with Windows 8 Metro user interface.">
   <meta name="keywords" content="bootmetro, modern ui, modern-ui, metro, metroui, metro-ui, metro ui, windows 8, metro style, bootstrap, framework, web framework, css, html">
   <meta name="author" content="AozoraLabs by Marcello Palmitessa">
   <link rel="publisher" href="https://plus.google.com/117689250782136016574">

   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">

   <link rel="stylesheet" type="text/css" href="../assets/css/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/bootmetro-responsive.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/bootmetro-icons.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/datepicker.css">

   <link rel="stylesheet" type="text/css" href="../assets/css/demo.css">

   <link rel="shortcut icon" href="../assets/ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

   <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
   <script src="../assets/js/modernizr-2.6.2.min.js"></script>

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
                  <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#"><?php echo $url[1]; ?><b class="caret"></b>
                  </a>
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
         <div class="metro span12">
            <div class="metro-sections">

               <div class="metro-section" id="section1">

                  <a class="tile wide imagetext bg-color-orange" href="./deepwalk/">
                     <div class="image-wrapper">
                        <img height=80 width=80 src="../assets/img/D.png">
                     </div>
                     <div class="column-text">
                        <div class="text-header3"><br>EEPWALK</div>
                     </div>
                  </a>

                  <a class="tile wide imagetext bg-color-green" href="./line/">
                     <div class="image-wrapper">
                        <img height=80 width=80 src="../assets/img/L.png">
                     </div>
                     <div class="column-text">
                        <div class="text-header3"><br>INE</div>
                     </div>
                  </a>

                  <a class="tile wide imagetext bg-color-blue" href="./node2vec/">
                     <div class="image-wrapper">
                        <img height=80 width=80 src="../assets/img/N.png">
                     </div>
                     <div class="column-text">
                        <div class="text-header3"><br>ODE2VEC</div>
                     </div>
                  </a>

                  <a class="tile wide imagetext bg-color-red" href="./sdne/">
                     <div class="image-wrapper">
                        <img height=80 width=80 src="../assets/img/S.png">
                     </div>
                     <div class="column-text">
                        <div class="text-header3"><br>DNE</div>
                     </div>
                  </a>
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

   <script>
      window.jQuery || document.write("<script src='../assets/js/jquery-1.10.0.min.js'>\x3C/script>")
   </script>
   <script src="../assets/js/jquery-1.10.0.min.js"></script>

   <script type="text/javascript" src="../assets/js/min/bootstrap.min.js"></script>
   <script type="text/javascript" src="../assets/js/bootmetro-panorama.js"></script>
   <script type="text/javascript" src="../assets/js/bootmetro-pivot.js"></script>
   <script type="text/javascript" src="../assets/js/bootmetro-charms.js"></script>
   <script type="text/javascript" src="../assets/js/bootstrap-datepicker.js"></script>

   <script type="text/javascript" src="../assets/js/jquery.mousewheel.min.js"></script>
   <script type="text/javascript" src="../assets/js/jquery.touchSwipe.min.js"></script>

   <script type="text/javascript" src="../assets/js/holder.js"></script>
   <script type="text/javascript" src="../assets/js/demo.js"></script>


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
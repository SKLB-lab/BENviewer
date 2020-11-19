<!DOCTYPE html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style="">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="viewport" content="width=device-width">

   <title>Visualization of Biology Entity Networks</title>

   <meta name="robots" content="noindex, nofollow">
   <meta name="description" content="BootMetro : Simple and complete web UI framework to create web apps with Windows 8 Metro user interface.">
   <meta name="keywords" content="bootmetro, modern ui, modern-ui, metro, metroui, metro-ui, metro ui, windows 8, metro style, bootstrap, framework, web framework, css, html">
   <meta name="author" content="AozoraLabs by Marcello Palmitessa">
   <link rel="publisher" href="https://plus.google.com/117689250782136016574">

   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">

   <link rel="stylesheet" type="text/css" href="./assets/css/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="./assets/css/bootmetro-responsive.css">
   <link rel="stylesheet" type="text/css" href="./assets/css/bootmetro-icons.css">
   <link rel="stylesheet" type="text/css" href="./assets/css/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="./assets/css/datepicker.css">

   <link rel="stylesheet" type="text/css" href="./assets/css/demo.css">

   <link rel="shortcut icon" href="./assets/ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">

   <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
   <script src="./assets/js/modernizr-2.6.2.min.js"></script>

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
                  <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#">Select Database<b class="caret"></b>
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
         <div class="metro span5">
            <div id="tile-listview-demo" class="tile-listviewitem-container">

               <div class="row-fluid">
                  <div class="tile-listviewitem">
                     <div class="span3">
                        <img height=112 width=112 src="/assets/img/step1.png">
                     </div>
                     <div class="span9">
                        <div class="detail">
                           <div class="title">Step 1</div>
                           <div class="subtitle">Select Database</div>
                           <p>Three BEN databases are provided, which are generated based on Consensus, Reactome and Regnetworks.</p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row-fluid">
                  <div class="tile-listviewitem">
                     <div class="span3">
                        <img height=112 width=112 src="/assets/img/step2.png">
                     </div>
                     <div class="span9">
                        <div class="detail">
                           <div class="title">Step 2</div>
                           <div class="subtitle">Select Algorithm</div>
                           <p>4 algorithms, <a href="https://arxiv.org/pdf/1403.6652.pdf">DEEPWALK</a>, <a href="https://arxiv.org/pdf/1503.03578.pdf">LINE</a>, <a href="https://arxiv.org/pdf/1607.00653.pdf">NODE2VEC</a> and SDNE, are applied in building BEN databases. Thus 12 datasets are made totally.</p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row-fluid">
                  <div class="tile-listviewitem">
                     <div class="span3">
                        <img height=112 width=112 src="/assets/img/step3.png">
                     </div>
                     <div class="span9">
                        <div class="detail">
                           <div class="title">Step 3</div>
                           <div class="subtitle">Upload Own or Use Prepared</div>
                           <p>Upload your interested gene-list or choose one function/pathway from our prepared datasets to make visuallization.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="span7">
            <article class="tile-listviewitem-detail">
               <header>
                  <img src="./assets/img/cover.png" width="120" height="120">
                  <div class="titles">
                     <h1>Visualization of Gene Interaction Networks<br>Based on Graph Embedded Model</h1>
                     <h2>Yunqing Liu, Yunchi Zhu, Zuhong Lu</h2>
                  </div>
               </header>
               <section>
                  <p>As an efficient method for biological knowledge mining, network information visualization can assist researchers in exploring the biological significance of their interested gene sets and even the entire interaction network in an intuitive way. However, present tools such as Cytoscape can only visualize the topographic structure of these networks instead of the information behind each node and edge in them. Here we introduced the graph embedding model, which has been widely applied in node & edge attributes mapping for dimensionality reduction. A network interaction cluster visualization method was developed based on this model.</p>
               </section>
            </article>
         </div>
      </div>
   </div>
   <div id="charms" class="win-ui-dark slide">

      <div id="theme-charms-section" class="charms-section">
         <div class="charms-header">
            <a href="#" class="close-charms win-backbutton"></a>
            <h2>Settings</h2>
         </div>

         <div class="row-fluid">
            <div class="span12">

               <form class="">
                  <label for="win-theme-select">Change theme:</label>
                  <select id="win-theme-select" class="">
                     <option value="metro-ui-light">Light</option>
                     <option value="metro-ui-dark">Dark</option>
                  </select>
               </form>

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

   <script type="text/javascript" src="./assets/js/min/bootstrap.min.js"></script>
   <script type="text/javascript" src="./assets/js/bootmetro-panorama.js"></script>
   <script type="text/javascript" src="./assets/js/bootmetro-pivot.js"></script>
   <script type="text/javascript" src="./assets/js/bootmetro-charms.js"></script>
   <script type="text/javascript" src="./assets/js/bootstrap-datepicker.js"></script>

   <script type="text/javascript" src="./assets/js/jquery.mousewheel.min.js"></script>
   <script type="text/javascript" src="./assets/js/jquery.touchSwipe.min.js"></script>

   <script type="text/javascript" src="./assets/js/holder.js"></script>
   <script type="text/javascript" src="./assets/js/demo.js"></script>


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
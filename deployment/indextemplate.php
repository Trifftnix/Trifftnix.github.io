<!DOCTYPE html>
<html lang="de">
 
<head>
  <!-- Basic meta info
  ==================== -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kochbuch</title>

  <!-- Favicon
  ============ -->
  <link rel="apple-touch-icon" sizes="57x57" href="recipes/images/favicon/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="recipes/images/favicon/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="recipes/images/favicon/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="recipes/images/favicon/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="recipes/images/favicon/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="recipes/images/favicon/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="recipes/images/favicon/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="recipes/images/favicon/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="recipes/images/favicon/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="recipes/images/favicon/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="recipes/images/favicon/favicon-16x16.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="recipes/images/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="recipes/images/favicon/favicon-96x96.png" />

  <!-- CSS files
  ============== -->
  <link rel="stylesheet" type="text/css" href="recipes/css/reset.css" />
  <link rel="stylesheet" type="text/css" href="recipes/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="recipes/css/font-awesome.min.css"  />
  <link rel="stylesheet" type="text/css" href="recipes/css/animate.min.css" />
  <link rel='stylesheet' type='text/css' href='recipes/css/styles.css' type='text/css'>
  <!-- according to daytime:-->
  <!--<script>
	<!--
	function getStylesheet() {
		  var currentTime = new Date().getHours();
		  if (0 <= currentTime&&currentTime < 8) {
		   document.write("<link rel='stylesheet' type='text/css' href='recipes/css/stylesdark.css' type='text/css'>");
		  }
		  if (8 <= currentTime&&currentTime < 15) {
		   document.write("<link rel='stylesheet' type='text/css' href='recipes/css/styles.css' type='text/css'>");
		  }
		  if (15 <= currentTime&&currentTime < 22) {
		   document.write("<link rel='stylesheet' type='text/css' href='recipes/css/styles2.css' type='text/css'>");
		  }
		  if (22 <= currentTime&&currentTime <= 24) {
		   document.write("<link rel='stylesheet' type='text/css' href='recipes/css/stylesdark.css' type='text/css'>");
		  }
	}

	getStylesheet();
	
	</script>
	-->
  <noscript><link href="styles.css" rel="stylesheet"></noscript>

  <!-- Modernizr file
  =================== -->
  <script charset="utf-8" type="text/javascript "src="recipes/js/modernizr.custom.js"></script>

</head>

<body>

  <!-- Splash Screen
  ================== -->
  <div id="splash"></div>

  <!-- Website Logo
  ================= -->
  <section id="logo">
    <div class="container text-center wow pulse">
      <a href="index.html"><img src="recipes/images/logo-white.svg" alt="logo" /></a>
      <br />
      <h1>Kochbuch</h1>
    </div>
  </section>
  
  
  

  <!-- Recipes Categories
  ======================= -->
  <section id="categories">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Kategorien</h2>
        </div>
      </div>
      <div class="row wow zoomIn">
        <!-- Breakfast - Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
			<a href="indexbacken.html">
				<img src="recipes/images/icons/cake.png" alt="cake" width="48" height="48" />
				<br />
				Backen
			</a>
          </div>
        </div>
        <!-- Meat - Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
			<a href="indexfleisch.html">
				<img src="recipes/images/icons/steak.png" alt="meat" width="48" height="48" />
				<br />
				mit Fleisch
			</a>
          </div>
        </div>
        <!-- Seafood - Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
            <a href="indexfisch.html">
				<img src="recipes/images/icons/fish.png" alt="fish" width="48" height="48" />
				<br />
				mit Fisch
			</a>
          </div>
        </div>
        <!-- Snacks- Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
            <a href="indexsnacks.html">
				<img src="recipes/images/icons/peanuts.png" alt="peanuts" width="48" height="48"/>
				<br />
				Snacks
			</a>
          </div>
        </div>
        <!-- Spicy - Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
            <a href="indexspicy.html">
				<img src="recipes/images/icons/chili.png" alt="chili" width="48" height="48" />
				<br />
				Spicy
			</a>
          </div>
        </div>
        <!-- Vegetarian - Category Item -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <div class="category-item text-center">
			<a href="indexvegetarisch.html">
				<img src="recipes/images/icons/vegetarisch.png" alt="vegetarisch" width="48" height="48" />
				<br />
				Vegetarisch
			</a>
          </div>
        </div>
      </div>
      <div class="row wow zoomIn">
        <div class="col-12 text-center show-all">
          <div class="category-item text-center">
            <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
            <br />
            Show All
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recipes Items
  ================== -->
  <section id="items">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Rezepte</h2>
        </div>
      </div>
      <div class="row">
        <!-- recipe items -->
		<?php echo $allrecipes ?>
        
      </div>
    </div>
  </section>

  <!-- Website Footer
  =================== -->
  <footer>
    <div class="container">
      <div class="row">
        <!-- About -->
        <div class="col-md-6 col-sm-12 text-center">
          <h3>About</h3>
          <div class="footer-about">
            "Ein Kochbuch mit meinen persönlichen Favoriten - zusammengestellt aus Kochbüchern, Kochwebsiten und eigenen Rezepten. <br>Das Weblayout ist von <a href="https://jraleman.com/" target="_blank" rel="noopener noreferrer">Jose Ramon</a>”
          </div>
        </div>
        <!-- Author -->
        <div class="col-md-6 col-sm-12 text-center">
          <div class="footer-author">
            Zusammengestellt von Trifftnix.
			<!--<br><a href="indexdark.html"> Dark Mode</a>  -->
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript files
  ===================== -->
  <script charset="utf-8" src="recipes/js/jquery-3.3.1.min.js"></script>
  <script charset="utf-8" src="recipes/js/bootstrap.min.js"></script>
  <script charset="utf-8" src="recipes/js/wow.min.js"></script>
  <script charset="utf-8" src="recipes/js/scripts.js"></script>
</body>

</html>

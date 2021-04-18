<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>

        <title>CSSApps - CSS Bildergalerie - 06</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" href="../site_images/favicon.ico">        
        <link rel="stylesheet" type="text/css" href="../css/cssapps.css">
        <script type="text/javascript" src="../js/cssapps_switch.js"></script>
        <meta name="author" content="Jo Kli">
        <meta name="Publisher" content="http://www.CSSAPPs.de">
        <meta name="Copyright" content="Jo Klimek">
        <meta name="Page-topic" content="">
        <meta name="Content-language" content="DE">
        <meta name="Robots" content="INDEX,FOLLOW">
        <meta name="description" content="Eine mit CSS gestaltete Fotogalerie">
        <meta name="keywords" content="CSS, Fotogalerie, Galerie, CSS Fotogalerie">
        <meta name="viewport" content="width=device-width, user-scalable=yes">

<style type="text/css">
/*
    For private Websites you are
    free to use and modify this App.
    Commercial use needs my permission! 
    Contact me.
    Respect my Copyright, never remove or modify!
    --- (C) Jo Klimek 2011 CssApps.de ---
*/
.vslide{
        position:relative;
        margin:2em auto;
        padding:8px;
        width:600px;
        height:380px;
        background:#ccc;
        overflow:hidden;
}

.scrlcont{
          float:right;
          display:block;
          padding:0;
          margin:0;
          width:135px;
          height:380px;
          overflow:auto;
          background:#666;
}

.scrlcont a{
          display:block;
          margin:0 0 0 5px;
          padding:5px 0 0 0;
          text-decoration:none;
          border:1px solid #666;
}

.scrlcont a span img{
          border:none;
}

.scrlcont a:hover img.prev{
          border:1px solid white;
}

/*    IE needs this to trigger :hover effect   */
.scrlcont a:hover{
          border:1px solid #666667;
}

/*  < .scrlcont a:active span >  for IE-click   */
/*  show the big Image   */
.scrlcont a:hover span{
          left:8px;
          top:8px;
          width:460px;
          height:380px;
          background:#666;
}

.scrlcont .landscape img{
           width:450px;
           margin:5px 0;
           border:none;
}

.scrlcont .portrait img{
           margin:5px 0;
           width:auto;
           height:340px;
           border:none;
}

.scrlcont a img{
          margin: 0 auto;
          width:100px;
          border:1px solid black;
}

.scrlcont span{
          position:absolute;
          left:-9999px;
          text-align:center;
          color:#fff;
          font:normal 13px 'Comic Sans Ms', Arial, sans-serif;
          overflow:hidden;
}

.default{
         float:left;
         left:8px;
         top:8px;
         width:460px;
         height:380px;
         background:#555;
         font:normal 0.9em Arial,sans-serif;
         text-align:center;
         color:#fff;
}


</style>

</head>

	<body class="is-preload font-selector">

		<div id="nav">
        <div class="nav-button">
				<a href="../index.php" class="nav-link">Home</a>
			</div>
			<div class="nav-button">
				<a href="../sites/impressum.php" class="nav-link">Impressum</a>
			</div>
            <div class="nav-button">
				<a href="../sites/styleguide.php" class="nav-link">Styleguide</a>
			</div>
			<div class="nav-button">
				<a href="../sites/webseitenkonzept.php" class="nav-link">Webseitenkonzept</a>
			</div>
			<div class="nav-button">
				<a href="../sites/urheberrecht.php" class="nav-link">Urheberrecht Fragen/ Antworten</a>
			</div>
            <div class="nav-button">
				<a href="../sites/dsgvo.php" class="nav-link">DSGVO</a>
			</div>
			<div class="nav-button">
				<a href="../sites/minifilmprojekt.php" class="nav-link">Minifilmprojekt</a>
			</div>
            <div class="nav-button">
				<a href="../sites/css-animations.php" class="nav-link">CSS-Animationen</a>
			</div>
			<div class="nav-button">
				<a href="../sites/multi-gifs.php" class="nav-link">Multi-Gifs</a>
			</div>
			<div class="nav-button">
				<a href="../sites/bild-formate.php" class="nav-link">Bild-Formate</a>
			</div>
			<div class="nav-button">
				<a href="../sites/video-audioFormate.php" class="nav-link">Video/ Audio Formate</a>
			</div>
		</div>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<h1>Galerie</h1>
						</header>
						<div>
						<!-- dont forget to close before </body> -->
						
						<!-- Font-Switch  END     -->
						<div id="page" class="">
						<div class="appwin">
						<div class="app"><div class="purecss"></div>
							<h4>Eine Foto-Galerie für beliebige Formate</h4>
						<!--         APP  start        -->

						<div class="vslide">

							<div class="default">
								<br><br><br><br><br><br><br><br><br>
								Fahren Sie mit dem Zeiger über<br>
								die Bilder um sie zu vergrössern
								<br><br><br>
								Clicken Sie für eine
								Ganzseitenansicht
							</div>

							<div class="scrlcont">

								<a href="../images/1.jpg">
									<img alt="" class="prev" src="../images/1.jpg">
									<span class="landscape"><img alt="" src="../images/1.jpg">
								</a>

								<a href="../images/2.jpg">
									<img alt="" class="prev" src="../images/2.jpg">
									<span class="landscape"><img alt="" src="../images/2.jpg">
								</a>

								<a href="../images/3.jpg">
									<img alt="" class="prev" src="../images/3.jpg">
									<span class="landscape"><img alt="" src="../images/3.jpg">
								</a>

								<a href="../images/4.jpg">
									<img alt="" class="prev" src="../images/4.jpg">
									<span class="landscape"><img alt="" src="../images/4.jpg">
								</a>

								<a href="../images/5.jpg">
									<img alt="" class="prev" src="../images/5.jpg">
									<span class="landscape"><img alt="" src="../images/5.jpg">
								</a>

								<a href="../images/6.jpg">
									<img alt="" class="prev" src="../images/6.jpg">
									<span class="landscape"><img alt="" src="../images/6.jpg">
								</a>

								<a href="../images/7.jpg">
									<img alt="" class="prev" src="../images/7.jpg">
									<span class="landscape"><img alt="" src="../images/7.jpg">
								</a>

								<a href="../images/8.jpg">
									<img alt="" class="prev" src="../images/8.jpg">
									<span class="landscape"><img alt="" src="../images/8.jpg">
								</a>

								<a href="../images/9.jpg">
									<img alt="" class="prev" src="../images/9.jpg">
									<span class="landscape"><img alt="" src="../images/9.jpg">
								</a>

								<a href="../images/10.jpg">
									<img alt="" class="prev" src="../images/10.jpg">
									<span class="landscape"><img alt="" src="../images/10.jpg">
								</a>

								<a href="../images/11.jpg">
									<img alt="" class="prev" src="../images/11.jpg">
									<span class="landscape"><img alt="" src="../images/11.jpg">
								</a>

								<a href="../images/12.jpg">
									<img alt="" class="prev" src="../images/12.jpg">
									<span class="landscape"><img alt="" src="../images/12.jpg">
								</a>

							</div>
						</div>
						</div>
						</div>
						</div>
						<!--
						<hr />
						<h2>Extra Stuff!</h2>
						<form method="post" action="#">
							<div class="fields">
								<div class="field">
									<input type="text" name="name" id="name" placeholder="Name" />
								</div>
								<div class="field">
									<input type="email" name="email" id="email" placeholder="Email" />
								</div>
								<div class="field">
									<select name="department" id="department">
										<option value="">Department</option>
										<option value="sales">Sales</option>
										<option value="tech">Tech Support</option>
										<option value="null">/dev/null</option>
									</select>
								</div>
								<div class="field">
									<textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
								</div>
								<div class="field">
									<input type="checkbox" id="human" name="human" /><label for="human">I'm a human</label>
								</div>
								<div class="field">
									<label>But are you a robot?</label>
									<input type="radio" id="robot_yes" name="robot" /><label for="robot_yes">Yes</label>
									<input type="radio" id="robot_no" name="robot" /><label for="robot_no">No</label>
								</div>
							</div>
							<ul class="actions special">
								<li><a href="#" class="button">Get Started</a></li>
							</ul>
						</form>
						<hr />
						-->
						<footer>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter">Twitter</a></li>
								<li><a href="#" class="icon brands fa-instagram">Instagram</a></li>
								<li><a href="#" class="icon brands fa-github">Github</a></li>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Tillo Razzai</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>

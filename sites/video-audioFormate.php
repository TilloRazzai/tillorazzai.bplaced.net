<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>M152 Webauftritt</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" type="text/css" href="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.js" defer></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#f6f6f6","text":"#000000","border":"#555555"},"button":{"background":"#555555","text":"#ffffff"}},"position":"bottom"})});</script>
		<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
    	<script src="http://vjs.zencdn.net/c/video.js"></script>
	</head>
	<body class="is-preload">

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
				<a href="../sites/galerie.php" class="nav-link">Galerie</a>
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
		</div>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<h1>Video/ Audio Formate</h1>
						</header>

						<h2>MP4</h2>
						<p>grösse -> 27.4 MB</p>
                        <p>In MP4-Dateien können multimediale Inhalte in Form von mehreren Audio- und Videospuren sowie Untertitel, 2D- und 3D-Grafiken abgespeichert werden. Diese Inhalte lassen sich dann mit Hilfe geeigneter Software lokal abspielen oder über ein Netzwerk streamen.</p>
                        
						<video width="180px" height="300px" controls>
  							<source src="../videos/morgenmodulfilm.mp4" type="video/mp4">
							Your browser does not support the video tag.
						</video> 

						<span class="avatar"></span>
                        <h2>FLV</h2>
						<p>grösse -> 3.94 MB</p>
                        <p>Im Internet und auf Smartphones sind diese Container zuhause. Er ist vor allem auf Internetnutzung und weniger auf den Hausgebrauch ausgelegt, da die Bild- und Tonqualität durch die Komprimierung oft leidet.</p>
                        
						<video id="video1" class="video-js vjs-default-skin" width="180px" height="300px"
        					data-setup='{"controls" : true, "autoplay" : true, "preload" : "auto"}'>
        					<source src="../videos/morgenmodulfilm.flv" type="video/x-flv">
    					</video>

						<span class="avatar"></span>
                        <h2>AVI</h2>
						<p>grösse -> 2.89 MB</p>
                        <p>die fehlende Möglichkeit des direkten Streamings, verhindern dass das Format bei Profis eine Rolle spielt.</p>
						<embed src="../videos/morgenmodulfilm.avi" type="video/avi" height="300px" width="180px">
						</embeded>

                        <span class="avatar"></span>
                        <h2>MPEG</h2>
						<p>grösse -> 3.65 MB</p>
                        <p>MPEG ist der Standard für Video-CDs und wird von fast allen Software-Programmen und Geräten problemlos erkannt. Es unterstützt kein HD.</p>
						<embed src="../videos/morgenmodulfilm.mpeg" autostart="false" height="300px" width="180px">
						</embed>
                        
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
<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<style>
		#transformation:hover{
			transform: rotate(30deg) !important;
		}

		#translation:hover{
			transform: translate(50px,0px) !important;
		}

		#transition{
			transition: font-size 3s !important;
		}

		#transition:hover{
			font-size: 30px !important;
		}

		#loading {
			animation-name: changing;
			animation-duration: 4s;
			animation-direction: alternate;
			animation-timing-function: linear;
			animation-iteration-count: infinite;
		}

		@keyframes changing {
			0% {
				fill: darkgreen;
				width: 20px;
			}
			100% {
				fill: lime;
				width: 200px;
			}
		}
	</style>
	<head>
		<title>M152 Webauftritt</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/sass/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" type="text/css" href="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.js" defer></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#f6f6f6","text":"#000000","border":"#555555"},"button":{"background":"#555555","text":"#ffffff"}},"position":"bottom"})});</script>
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
							<h1>CSS-Animationen</h1>
						</header>
						<p>Die volgenden zwei hover Animationen wurden mit sass implementiert.</p>
						<div class="element1 effect1">
							<h2>Element1</h2>
						</div>
						<div class="element2 effect2">
							<h2>Element2</h2>
						</div>

						<span class="avatar"></span>
						<h2>Transformation css Effekt</h2>
						<p>Auf das Event hover wurde die Schrift verschrägt und ist somit ein Transformationseffekt.</p>
						<p id="transformation">test</p>

						<span class="avatar"></span>
						<h2>Translation css Effekt</h2>
						<p>Auf das Event hover wurde die Schrift 50px nach rechts versetzt und ist somit ein Translationseffekt.</p>
						<p id="translation">test</p>

						<span class="avatar"></span>
						<h2>Transition css Effekt</h2>
						<p>Auf das Event hover wird nach einer Zeit die Schrift auf 30px vergrössert und ist somit ein Transitionseffekt.</p>
						<p id="transition">test</p>

						<span class="avatar"></span>
						<h2>SVG Ladebalken</h2>
						<svg viewBox="0 0 300 100">
						<rect id="loading" x="10" y="10" width="20" height="20" /> </svg>

						<span class="avatar"></span>
						<h2>Canvas</h2>
						
						<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
							Your browser does not support the HTML canvas tag.
						</canvas>

						<script>
							var c = document.getElementById("myCanvas");
							var ctx = c.getContext("2d");
							ctx.font = "20px Arial";
							ctx.fillText("Das ist ein Canvas",10,50);
						</script>
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
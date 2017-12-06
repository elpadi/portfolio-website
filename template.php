<?php
if (!isset($sites)) header("HTTP/1.0 500 Internal Server Error");
?><!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Carlos Padilla, Web Developer | Welcome + Work</title>
		<meta name="description" content="Work showcase of web developer great Carlos A. Padilla Contreras">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->

		<link rel="stylesheet" href="css/normalize.css?v=<?php echo $_ENV['CSS_VERSION']; ?>">
		<link rel="stylesheet" href="css/classes.css?v=<?php echo $_ENV['CSS_VERSION']; ?>">
		<link rel="stylesheet" href="css/main.css?v=<?php echo $_ENV['CSS_VERSION']; ?>">
		<!--script src="js/vendor/modernizr.js"></script-->
	</head>
	<body>
		<div id="container">
			<header id="main-header">
				<nav class="tc uppercase">
					<ul class="horizontal-list no-underline">
						<li><a href="#work">Work</a></li>
						<li><a href="#bio">Bio</a></li>
						<li><a href="resume.pdf">Resume</a></li>
						<li><a href="mailto:padi_05@yahoo.com">Contact</a></li>
						<li><a target="_blank" href="https://github.com/elpadi/">GitHub</a></li>
					</ul>
				</nav>
			</header>
			<main id="content">
				<?php if (!isset($sites)): echo '<p>Bad request.</p>'; else: ?>
				<section id="about">
					<header><h1>Welcome <img src="img/headings/work.jpg" alt=""></h1></header>
					<main class="justified">
						<article>
							<p>I am a freelance full stack web developer working out of New York with <?php echo intval(date('Y')) - 2010; ?> years of experience building websites for clients ranging from real estate to film, music, and art magazines, to corporate and NGOs, news outlets, and online stores.</p>
							<p>Below is some of my previous work and a short bio. Thanks for visiting.</p>
						</article>
					</main>
				</section>
				<section id="work">
					<header><h1>Work <img src="img/headings/service.jpg" alt=""></h1></header>
					<main class="grid grid--3">
						<?php shuffle($sites); foreach ($sites as $site): extract($site); ?>
						<article class="site grid__item">
							<header class="tc">
								<h2><?php echo $title; ?></h2>
								<a class="image-link" href="<?php echo $url; ?>" target="_blank"><img src="/img/sites/<?php echo $slug; ?>.jpg" alt=""></a>
							</header>
							<main class="justified"><?php echo $description; ?></main>
							<footer>
								<h3 class="tc"><?php echo $category; ?></h3>
								<p><strong>Tags: </strong><?php echo implode(', ', $tags); ?></p>
							</footer>
						</article>
						<?php endforeach; ?>
					</main>
					<main class="justified">
						<article>
							<h3>Experience Summary</h3>
							<ul>
								<li>Php:
									<ul>
										<li>Wordpress, Drupal, ProcessWire, Zenphoto, and custom CMS systems.</li>
										<li>Zend Framework, Symfony, Laravel, Slim, and other frameworks.</li>
										<li>E-commerce experience with Magento, Shopify, WooCommerce, and Square POS integration.</li>
									</ul>
								</li>
								<li>JavaScript:
									<ul>
										<li>Complex animations using ThreeJs for 3D and Canvas for 2D.</li>
										<li>Heavy use of audio and video throughout entire sites, plus customized media players.</li>
									</ul>
								</li>
								<li>Cross-browser compatibility and responsive styles for all our sites.</li>
								<li>Complex database queries for sorting and organizing large data sets.</li>
								<li>Dependency management using Composer for php and Bower for JavaScript.</li>
								<li>Code versioning using Git and Subversion.</li>
								<li>Deployment of websites on Apache and NGINX.</li>
								<li>Scripting in python and bash shell, and Makefile for build scripts.</li>
							</ul>
						</article>
					</main>
				</section>
				<section id="bio">
					<header><h1>Bio <img src="img/headings/nuncle.jpg" alt=""></h1></header>
					<main class="justified">
						<header><p><span id="am_i_still_alive" data-start="<?php echo $born; ?>"><?php echo number_format($alive); ?></span> seconds and counting. Born Carlos Alberto Padilla Contreras and raised in <a target="_blank" href="https://en.wikipedia.org/wiki/Santiago_de_los_Caballeros">Santiago de los 30 Caballeros</a> and now moving about NYC, here is a brief description of the time in between.</p></header>
						<article>
							<h2>Early Years</h2>
							<p>Growing up the younger of two boys, raised by a loving and hard working single mother and her father, I was by all accounts a difficult child, made all the worst by the constant antagonism of my annoying older brother who will never allow anyone within reach to comfortably relax. Primary school was an all boys academy run by a strict Spanish military-type figure who had a passion for teaching and discipline.</p>
							<p>Fun fact: When I first stepped into first grade, I was 4 years old.</p>
						</article>
						<article>
							<h2>US<span class="lowercase">of</span>A</h2>
							<p>My family of three (my grandfather was gone by then) moved to NYC in April 04. By then I was done with high school and went to study at City College of New York. Being good at math and thinking I knew my way around computers (I was soon found out), I majored in Computer Engineering.</p>
							<p>After a couple of years the family moved to Albany and my studies continued at SUNY Albany, which required a fortunate change to Computer Science. I moved back to New York right after graduation and I'm still here, having lived in the North Bronx, Chinatown, North Brooklyn, and now by the beach in Far Rockaway.</p>
						</article>
						<article>
							<h2>1s and 0s</h2>
							<p>Besides moving completely to software, an even more important and positive change also took place in Albany. <a href="https://fsf.org/">Free software</a>. I was introduced to unix, gcc, emacs (now a vim user), and I have never looked back.</p>
							<p>I left Albany with expertise in unix systems programming, but one look at the job listings showed web development would give much better prospects. After learning the basics through online guides I was lucky to land my first job. I still can't imagine why two brilliant guys hired me then.</p>
							<p>We ended up being a great fit. Five wonderful years at <a target="_blank" href="https://versionindustries.com">Version Industries</a> in Brooklyn. I could not have ever dreamed of a better working environment, nor could I ever have asked for better work to do, nor better co-workers (including the bosses, who were always more co-workers and friends than bosses).</p>
						</article>
						<article>
							<h2>Now</h2>
							<p>Freelancing and travelling as much as possible. Going on long camping trips and visiting family in between work.</p>
							<p>Proud uncle!!!</p>
							<p class="clearfix"><?php foreach ($tilts as $t) printf('<img src="%s" alt="%s">', $t, basename($t, '.jpg')); ?></p>
						</article>
					</main>
				</section>
				<?php endif; ?>
			</main>
		</div>
		<span id="bg-gradient" class="background page-background">&nbsp;</span>
		<script src="js/main.js?v=<?php echo $_ENV['JS_VERSION']; ?>"></script>
	</body>
</html>

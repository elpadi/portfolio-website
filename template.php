<?php
if (!isset($sites)) header("HTTP/1.0 500 Internal Server Error");
?><!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Carlos Padilla, Web Developer | Welcome + Work</title>
        <meta name="description" content="Showcase of work by web developer great Carlos A. Padilla Contreras">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <!--script src="js/vendor/modernizr.js"></script-->
    </head>
    <body>
			<div id="container">
				<header id="main-header">
					<nav>
						<ul>
							<li><a href="#bio">Bio</a></li>
							<li><a href="#work">Work</a></li>
							<li><a target="_blank" href="https://github.com/elpadi/">GitHub</a></li>
						</ul>
					</nav>
				</header>
				<main id="content">
					<?php if (!isset($sites)): echo '<p>Bad request.</p>'; else: ?>
					<section id="bio">
						<header><h1>Bio</h1></header>
						<main>
							<h2>Early Years</h2>
							<article>
								<p><span id="am_i_still_alive"><?php echo number_format($alive); ?></span> seconds and counting. Born and raised in <a target="_blank" href="https://en.wikipedia.org/wiki/Santiago_de_los_Caballeros">Santiago de los 30 Caballeros</a> and now moving about NYC, here is a brief description of the time in between.</p>
								<p>Growing up the younger of two boys, raised by a single mom and my grandfather, I was by all accounts a difficult child, made all the worst by the constant antagonism of my extremely annoying older brother, who was born with a certain disorder where he cannot allow a person within reach to ever relax. Went to an all boys primary school run by a militant Spanish dictator (probably a General Franco supporter)<sup><a href="#franco">*</a></sup> which also had one of the best academic programs in the city.</p>
								<p>Fun fact: When I first stepped into first grade, I was 4 years old.</p>
								<p>Finally got to hang out with girls on a daily basis when I got to high school, though they never shared my only interests: riding bike around town (sometimes, much to my mother's worries, to other nearby cities) and playing basketball.</p>
							</article>
							<h2>USofA</h2>
							<article>
								<p>My family of three (my grandfather was gone by then) moved to NYC in April 04. By then I was done with high school and went to study at City College of New York. Having been very good at math and knowing my way around computers (or so I thought), I majored in Computer Engineering.</p>
								<p>Mom settled with a job at the Agriculture &amp; Markets Department, and after a promotion we all moved to Albany. My studies continued at UAlbany, but with a fortunate change to Computer Science. I used to think hardware was cool, but programming is much easier.</p>
								<p>I came back to New York right after graduation. Better city, better job pool, and I don't like to drive. I have lived in the North Bronx, Manhattan's Chinatown, North Brooklyn, and now by the beach in Far Rockaway, so a fairly well-rounded New Yorker then.</p>
							</article>
							<h2>1s and 0s</h2>
							<article>
								<p>While at college they missed out on a lot of important skills (e.g. code versioning), I did get to know a bunch of different languages, which I now credit with helping me pick up new languages and frameworks with relative ease.</p>
								<p>Besides moving completely to software, an even more important and positive change also took place in Albany. <a href="https://fsf.org/">Free software</a>. I was introduced to unix, gcc, emacs (now a vim user), and I have never looked back.</p>
								<p>I left Albany with a degree in unix systems programming, but one look at the job offers was all it took to understand that web development would give much better prospects. After learning the basics through online guides I was lucky to land my first job. I still can't imagine why two brilliant guys hired me then.</p>
								<p>We ended up being a great fit. Five wonderful years at <a target="_blank" href="https://versionindustries.com">Version Industries</a> in Brooklyn. I could not have ever dreamed of a better working environment, nor could I ever have asked for better work to do, nor better co-workers (including the bosses, who were always more co-workers and friends than bosses).</p>
							</article>
							<h2>Now</h2>
							<article>
								<p>Freelancing and travelling as much as possible. Going to long camping trips and visiting family in between work.</p>
								<p>Proud uncle!!! (I pitty my niece, subjected to the non-relenting attention of her father)</p>
							</article>
						</main>
						<footer>
							<p id="franco"><sup>*</sup> Completely unfounded claim, <a target="_blank" href="https://en.wikipedia.org/wiki/Donald_Trump_presidential_campaign,_2016">much in the spirit of the moment</a>.</p>
						</footer>
					</section>
					<section id="work">
						<header><h1>Work</h1></header>
						<main>
							<p>portfolio</p>
						</main>
					</section>
					<?php endif; ?>
				</main>
			</div>
    </body>
</html>

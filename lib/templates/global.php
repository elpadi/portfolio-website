<?php
use Portfolio\Templates as T;
?><!doctype html>
<html class="no-js" lang="">
	<head>
		<?php T\partial('head'); ?>
	</head>
	<body>
		<div id="container">
			<header id="main-header">
				<?php T\partial('header'); ?>
			</header>
			<main id="content">
				<section id="about">
					<?php T\partial('about'); ?>
				</section>
				<section id="work">
					<header><h1>Work <?php T\img('headings/service'); ?></h1></header>
					<main class="grid grid--3">
						<?php foreach ($sites as $site): T\partial('site', $site->get()); endforeach; ?>
					</main>
					<main class="justified">
						<article>
							<?php T\partial('experience'); ?>
						</article>
					</main>
				</section>
				<section id="bio">
					<?php T\partial('bio'); ?>
				</section>
			</main>
		</div>
		<span id="bg-gradient" class="background page-background">&nbsp;</span>
		<?php T\js(['main']); ?>
	</body>
</html>

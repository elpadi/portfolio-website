<?php
use Portfolio\Templates as T;
?><article class="site grid__item">
	<header class="tc">
		<h2><?php echo $title; ?></h2>
		<a class="image-link" href="<?php echo $url; ?>" target="_blank"><?php T\site_screenshot($slug); ?></a>
	</header>
	<main class="justified"><?php echo $description; ?></main>
	<footer>
		<h3 class="tc"><?php echo $category; ?></h3>
		<p><strong>Tags: </strong><?php echo implode(', ', $tags); ?></p>
	</footer>
</article>

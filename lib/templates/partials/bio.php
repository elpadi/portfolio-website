<?php
use Portfolio\Templates as T;
?><header><h1>Bio <?php T\img('headings/nuncle'); ?></h1></header>
<main class="justified">
	<header><p><span id="am_i_still_alive" data-start="<?php echo T\birth(); ?>"><?php echo number_format(T\alive()); ?></span> seconds and counting. Born Carlos Alberto Padilla Contreras and raised in <a target="_blank" href="https://en.wikipedia.org/wiki/Santiago_de_los_Caballeros">Santiago de los 30 Caballeros</a> and now moving about NYC, here is a brief description of the time in between.</p></header>
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
		<p class="clearfix"><?php T\tilts(); ?></p>
	</article>
</main>

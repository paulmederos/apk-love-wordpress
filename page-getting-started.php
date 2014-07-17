<?php
/**
 * Template Name: Getting Started
 *
 * @package apk-love
 */

	$page_title = get_post_meta( get_the_ID(), "title", true );
	$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );

	get_header(); 
?>
	
	<?php get_template_part( 'partials/featured-image-small'); ?>

	<div class="main-content wrap group">
		<main id="main" class="site-page site-main page-getting-started" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

			<div class="wrap">

				<h1 class="post-title"><a href="/getting-started">The Beginner's Guide to Getting Started in Parkour &amp; Freerunning</a></h1>

				<a name="intro"></a>
				<p>Do you remember what it felt like to be a child when all your time was spent exploring 
					the world?</p>

				<p>You grabbed, climbed, and felt your way around. Remember the first time you bravely 
					climbed to the top of the stairs? Or when you finally mustered the courage to jump off 
					the couch, and landed, grinning on the ground with a satisfying thud? Or how about 
					the time you raced, as fast as you could, sprinting across an empty space, just because 
					you wanted to? Remember when you were taken to the playground where you could run, 
					jump, roll, climb, laugh and get dirty with other children? </p>

				<p><b>Joy.</b> That’s what you felt.</p>

				<p>Every time you were challenged, you stepped up to conquer that challenge. You had 
					the courage to succeed, and each success felt like the best thing in the world. You 
					were free. There was no stopping you.</p>

				<p>But, we all grow up, or, at least most of us do. Society tells us that things became 
					off-limits. When did you stop going to playgrounds? When is the last time you went
					 barefoot in the fresh cut grass, and felt the ground with your feet? When’s the last 
					 time you did somersaults or rolled down a hill until dizzy, and then laughed about it 
					 until your eyes teared up?</p>

				<p>We thought about these things, too, and realized there was no appropriate answer.</p>

				<p>The truth is, movement is delightful.</p>

				<p>Those of us that call ourselves traceurs (a practitioner of parkour) or freerunners 
					live that joy every day. At it’s heart, you will train parkour because movement and 
					exploration are fundamentally human. It makes you happy.</p>

				<p>At it’s center, the discipline of parkour is about crushing self-doubt by learning 
					how to focus on improvement, by challenging yourself to be better than you are, 
					by connecting with other people in similar mindsets that want nothing more than 
					your success.</p>

				<p>The rewards of training parkour are immense:</p>
				<ul>
					<li>Improved physical health thanks to a high level of movement and activity</li>
					<li>Massive amounts of body control: agility, balance, and power</li>
					<li>Mental strength through problem solving, repetition, and increased confidence</li>
					<li>Self-respect from accomplishing the seemingly impossible and “superhuman”</li>
					<li>Be a part of the community of incredibly supportive, fun, and respectful people: friendship with other traceurs!</li>
				</ul>
			
				<p>Parkour training revolves around two very important things: progression and repetition. 
				You don’t start trying to jump across a 10-foot gap, from the top of a railing to another. 
				You start by jumping in place, where you stand. And you do it over and over until you’re 
				comfortable enough to jump a little higher, push a little further. That’s how we all 
				started&mdash;even “superhumans” like the people on our performance team, the Tribe.</p>

				<p>Parkour is a discipline. It’s hard work. It’s consistent training. There’s no secret 
					shortcuts. We aren’t born “superhuman”, with globs of confidence, coordination, and mental 
					toughness. We train into it. We learn to overcome obstacles. We learn to see the 
					opportunities. We strive to help others, so that their success becomes our success. </p>

				<iframe width="100%" height="360" style="margin:1.5em auto;" src="//www.youtube.com/embed/M1SyoxLf0eA?rel=0" frameborder="0" allowfullscreen></iframe>

				<a name="parkour-and-freerunning"></a>
				<h3>What about freerunning? Is it different from parkour?</h3>
				<p>The movements are the same, but the mindsets are different. Parkour is focused 
					on discipline, and challenging yourself for growth. Traceurs focus on training, 
					conditioning, and the most efficient ways forward. Freerunning is focused on 
					expressing yourself. It’s more about creativity, exploring, and playing around.</p>

				<a name="movements"></a>
				<h3>Start moving: the basic blocks of parkour</h3>
				<p>Now that you have a better understanding of why you should do parkour, what it is, 
					and you’ve taken your first step, we’ll move on to the second step. Let’s walk through 
					the basic foundations, which includes warming up, how to condition, and basic movements 
					like jumping, landing, vaults, and wall maneuvers.</p>

				<ul>
					<li><a href="http://archives.americanparkour.com/academy/tutorials" target="_blank" class="archive-link">APK Academy tutorials</a> - old, but useful</li>
					<li><a href="http://www.youtube.com/playlist?list=PL3ivc4e1qS_PFow3feJ0K4u3-BhYhusVv" target="_blank">Fight or Flight: Basic Vaults</a> - great tutorials on basics vaults</li>
					<li><a href="http://www.reddit.com/r/Parkour/comments/1c599o/interested_in_starting_parkour_start_here/" target="_blank">RogueOperative's Guide to Starting Parkour</a> - excellent breakdown with movement links</li>
				</ul>

				<a name="connect"></a>
				<h3>Find and connect with other traceurs</h3>
				<p>All of the movements you’ve learned above can be practiced anywhere, by yourself, 
					but it’s so much better if you find other traceurs to train with. By finding a 
					local community, you learn first-hand from experienced traceurs. It’s much 
					easier to learn the movements when you can see them happening in front of your eyes. 
					It’s also much easier for an experienced traceur to guide your movement and point 
					out ways to improve if they’re standing right next to you. </p>

				<a name="local"></a>
				<h4>How do you find a local community?</h4>
				<p>Google and Facebook seem to be great places to find local groups. Most major 
				cities around the world have established parkour and freerunning communities 
				that are run by experienced trainers. Smaller towns usually have a small group 
				of dedicated traceurs. Colleges and universities are also wonderful places to 
				find groups.</p>

				<ol>
					<li>Head to Google and type in “parkour city state”, where you replace ‘city’ and 
					‘state’ with your location. Search around and you’ll probably find web pages with 
					groups nearby. You might also want to try “freerunning in city state”. If you don’t 
					find anything here, no sweat, there’s still hope.</li>

					<li>Head over to Facebook and search for “parkour city state”. You might find a 
					Group or a Page belonging to a local community. </li>

					<li>If you can’t find anything in your area, spread out your search to a nearby 
					major city. Even if it takes you an hour to train with a community it’s worth 
					meeting them a few times, especially if it’s your first time training. You’ll 
					find that established communities are well-connected within your area, so by 
					traveling to a major city with a larger community, you might run across other 
					people who live much closer to you!</li>

					<li>There’s no need to be intimidated. In our experience, every group welcomes new 
					members with hugs and open arms. They are there to help you succeed and want 
					nothing more than to gain a new friend through parkour. </li>
				</ol>

				<a name="gyms"></a>
				<h4>What about gyms or training centers?</h4>
				<p>Parkour gyms are beginning to emerge but are still a bit hard to come by. 
				If you’re interested in getting professional instruction, try a quick Google 
				search for parkour programs or gyms in your area. The <a href="/academy/washington-dc">American Parkour Academy</a> 
				is based in Washington, DC and we have <a href="/academy#affiliates">Affiliate Gyms</a> in Minnesota (Fight or Flight 
				Academy), Florida (StrikeGym) and Hawaii (Precision Parkour). </p>

				<p>If you can’t find a gym, don’t worry. Parkour was born outside and it will always be 
				practiced outside. In fact a lot traceurs prefer to practice outside. There are 
				hotspots everywhere. You can train in the woods, at local parks and playgrounds, 
				or on the curb outside your house. If you’re interested in training outside in 
				the natural environment, our friend Rafe Kelley has some great outdoor tutorials 
				and inspirational videos on his <a href="http://www.youtube.com/user/Faelcind" target="_blank">Youtube channel</a>. </p>

				<p>Thinking outside of the box: you could head to your local gymnastics facility and 
				visit them during their open gym hours. Call the gym and explain what you want to 
				do and see if they’ll let you visit to practice parkour. This is a great way to 
				practice some of the more advanced parkour and freerunning movements with mats 
				and trampolines in a safe and controlled environment. It’s also a great way meet 
				other “movement” enthusiasts and maybe a few other traceurs! </p>

				<p>Another option would be to visit a CrossFit gym and ask if you could bring in 
				Parkour equipment (precision trainers, small railings, vault boxes) to train 
				natural movement there. These gyms are all about promoting natural movement 
				and typically have a lot of open space in which you could train during their 
				open gym times. </p>

				<a name="jams"></a>
				<h4>What should you expect in your first training session? What’s a jam?</h4>
				<p>If it’s your first time, you’re in for a treat. Everyone trains at their own 
					pace and level, so you don’t need to worry about killing yourself through a 
					workout. You should check out <a href="http://americanparkour.com/articles/recommended-equipment-for-parkour/" class="archive-link"> our guide on 
					what to wear, and what to bring</a>.</p>

				<p>When people get together to practice parkour, it’s called a jam. It’s not this 
					intense thing where you’ll be running for 2 hours straight. It’s much more relaxed. 
					Usually jams are centered around hotspots. </p>

				<p>A hotspot is a place packed with obstacles that make for fun training. In a 
					typical jam, people start at one hotspot and train until they get bored or 
					want to move on. Then they walk to the next hotspot. Experienced traceurs 
					have built up a catalog of their favorite hotspots in the areas where they 
					train, so follow along and get to know your spots!</p>

				<p>Another common jam is a conditioning session. These are jams focused on 
					training. There is usually a workout planned, and people come together to 
					work-out with others. Its much more fun to train with other people, and you 
					get to push yourself as you follow the group. You also get to learn new 
					techniques for conditioning your body.</p>

				<a name="expectations"></a>
				<h4>Will people laugh at me? I’m scared of embarrassing myself!</h4>
				<p>Relax. Traceurs are well-known for being caring, compassionate, and respectful. 
					We love beginners! If you’re new to parkour, let everyone know. Experienced 
					traceurs will go out of their way to help you get started, and make sure you’re 
					comfortable.</p>

				<p>If you’re scared of falling and embarrassing yourself, just stick around for a 
					few minutes. Even people who have trained for 10+ years fall down and laugh at 
					themselves. It’s part of the discipline. No one will laugh at your for failing; 
					we’ll work with you to pick yourself back up and keep trying until you succeed!</p>

				<p>Scared of falling? Don’t be. As we mentioned earlier, parkour is all about 
					progression and repetition. You won’t be doing anything crazy, and you’re never
					 forced to do any sort of movement. It’s all under your control. The worst that 
					 might happen is you stumble over a curb, or you might fall on your butt. 
					 We all do it. As you fall, you’ll learn how to control your body. Before you know it, 
					 you’ll be falling on purpose for practice!</p>

				<a name="safety"></a>
				<h4>Speaking of falling, should I prepare for injury?</h4>
				<p>You can prepare for a few cuts, scrapes, or bruises. In most cases, you won’t 
				even notice them until after you’re done. Experienced traceurs usually keep 
				a first-aid kit on hand throughout jams just in case more serious injuries happen. 
				You might want to put together a small first-aid kit specifically for parkour training.</p>

				<p>Keep in mind that if you start climbing around dangerous places, there is a real 
				danger. But you’re a beginner, so you shouldn’t be climbing up on top of rooftops, 
				or jumping over death pits. Stay on the ground, and you’ll be fine.</p>

				<a name="questions"></a>
				<h4>Other questions? Reach out to us. We’re here to help.</h4>
				<p>If you have other questions after reading this guide, send us a note on 
					<a href="http://facebook.com/americanparkour">Facebook</a> or 
					<a href="http://twitter.com/americanparkour">Twitter</a>. We respond to 
					every message we receive because we love you all, and we love that you want 
					to get started with parkour. </p>
			</div>
		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div><!-- /.main-content -->

<script type="text/javascript">
	if ('undefined' !== typeof mixpanel) {
		mixpanel.track("Getting Started viewed");
	} else {
		console.log('Mixpanel not loaded.');
	}
</script>

<?php get_footer(); ?>
<?php
	include_once('config.php');
	include_once('functions.php');
	include_once('includes/head.html');
 ?>
 <?php include_once("includes/analyticstracking.php"); ?>

<aside id="sidebar" class="sidebar">
	<h3 class="sidebar-title"><a href="/" style="color: #5aecb8">Cycle</a></h3>
	<?php include('includes/navigation.html'); ?>
</aside>

<main id="content" class="content">

	<header class="header visible-small-down">
		<button id="sidebar-toggle" class="navigation-toggle">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</button>
		<h1 class="header-title">Cycle</h1>
	</header>

	<!-- Grinder -->
	<section id="grinder" class="section section-header">
		<div class="container">
			<h1 class="title">Grinder</h1>
			<p class="lead">An overview of the Grinder's technical specification, design features, and build log.</p>
		</div>
	</section>

	<!-- Grinder Assembly -->
	<section id="grinderassembly" class="section">
		<div class="container">
			<h2 class="section-title">Grinder Assembly</h2>
			<h3>Assembly and Cross Section</h3>
			<div class="row text-center">
				<div class="column-center">
					<img src="img/grinderassembly.png"  width="95%" height="auto%">
				</div>
			</div>
			<p>
			 Our goal with the grinder was to design a compact grinding solution that could reduce big milk jugs or small scrap plastic to 2mm
			 granular pieces. This size is optimal for the extruder to handle at reasonable torque. For this reason we knew that simply throwing
			 everything into a blender wasn’t going to work or create uniform results. To achieve proper results we decided to design the grinder
			 to use a 2 step grinding process. The primary grinder section in the top intakes raw plastic so like a water bottle shreds in at slow speeds.
			 The design allows plastic to be torn down into smaller chunks. The secondary shredders are the second step of this process where the large chunks
			 are reduced to smaller pieces through multiple grinders. The filter at the bottom allows pieces that are not small enough to be kicked back up
			 to be regrinded. This vertical grinding process generates the best results but our design is far from perfect. It is definitely expensive to
			 build a complete metal version. We are looking into how to reduce the grinder from a 2 step grinding process to only 1 step for reduced material
			 cost and complexity.
		 </p>
		<br>
		<h3>Gear Assembly and Box</h3>
		<div class="row text-center">
			<div class="column-center">
				<img src="img/gearboxassembly.png"  width="95%" height="auto%">
			</div>
		</div>
		<p>
		 In order to drive all the components and the actual grinder we need motors that could provide adequate torque and speed. We initially designed everything to be 3d printable so the obvious choice was a Herringbone gear. The advantage of Herringbone gears is that side load on the gear is reduced so there is a much more efficient transfer of torque and smooth motion. This design allowed the gear to be 3d printable without worry of breakage or delamination. We decided to use a square axle for the gears so adhesives or fixtures wouldn’t have to be used to keep the axle from rotating within the gear. The gears also have square cutouts for motor mounting or hand crank attachment. Instead of directly attaching the motors we have to the gears we wanted to use a square adaptor that is custom fitted to our driving force. This can be any motor or a hand crank. To fit your motor to the gear, create a part file in your favorite CAD program to the specification of the cutout (make it a little smaller so it fits in nice when you print it) and then draw in the shape of your motor’s axle. Cut out this shape and you're done. It may take a couple tries to get the fitting right. ABS can shrink about 8% while PLA only shrinks anywhere from 2% to 5%. (These motor mounts aren’t included in the Github)
	 </p>
	<br>
	<h3>Bearing Holder and Axle Cap</h3>
	<div class="row text-center">
		<div class="column-center">
			<img src="img/bearing+cap.png"  width="95%" height="auto%">
		</div>
	</div>
	<p>
	 The axle run all the way through the cylinders and box so we needed a way to cap the end so nothing moved. The simplest solution was a cap that can be right on the end of the axle once assembly is complete. The bearing holder does exactly what it sounds like: it holds a bearing. The holder is designed for a standard 8mm skate bearing that can be bought online or any skate shop. The part can be scaled up or down depending on the size of the bearing. Bearings are used to provide smooth rotation for the cylinders and shredders. The holders are designed to be embedded in the wall of box so cutouts for these are provided in the files.
 </p>
</div>
	</section>

	<!-- Primary Grinder -->
	<section id="primarygrinder" class="section">
		<div class="container">
			<h2 class="section-title">Primary Grinder</h2>
			<h3>Rollers</h3>
			<div class="row text-center">
				<div class="column-center">
					<img src="img/primarygrinder+assembly.png"  width="95%" height="auto%">
				</div>
			</div>
			<p>
			 The rollers are the part that first processes raw plastic by tearing into smaller chunks that can be better handled. Every part of the cylinder modular from the pegs to the axle. The 3D printer we used to print these was a XYZ DaVinci 1.0 which has a build volume of 20x20x20 cm so we had to splice pieces that were too big like the cylinder into two pieces and rejoin them together. Both the complete part files and spliced part files can found on our Github. The spikes on the rollers are situated in such a way that the two roller mesh together when met with a small amount of gap between the teeth to provide a little wiggle room. To do this we offset each cylinder by the spacing of the teeth (the little protruding disk on the cylinder is what does this; the other side of the roller is flat).
		 </p>
		 <h3>Primary Wall Spikes</h3>
		 <div class="row text-center">
			 <div class="column-center">
				 <img src="img/spikes+assembly.png"  width="95%" height="auto%">
			 </div>
		 </div>
		 <p>
		These wall spikes or blocks are really just used to create a tight seal between the rollers and the walls so no raw material falls through and sticks to the rollers. They are specific to the primary rollers so they cannot be used for the secondary shredders due to spacing between the spikes. The spikes also have pegs pre built into them so they can fitted right into the wall.
		</p>
		<h3>Split Axle</h3>
		<div class="row text-center">
			<div class="column-center">
				<img src="img/axle.png"  width="95%" height="auto%">
			</div>
		</div>
		<p>
		 The axle, like many of the parts, is much too big to print so we have to split the axle into two two parts with a peg peice to fit them back together. The circular part of the axle is what fits into the bearing for smooth turning, while the square end fit into the gear. These axles are run through the entire roller obviously there will be lots of friction. To fit our axle I had to reduce the size just a bit with light sanding and turned the heat up on the extruder to induce extra shrinkage. A little oil also makes the axle slide in easier.
	 </p>
	 <h3>Roller Pegs</h3>
		<div class="row text-center">
			<div class="column-center">
				<img src="img/spike+grinder.png"  width="95%" height="auto%">
			</div>
		</div>
		<p>
		 The pegs are pretty simple but it took a lot of tuning to get these to fit snuggly into the cylinder without a problem. To print, I laid the pegs flat on one surface of the spike so I only needed support material for the peg part. This can easily be filed away in post processing so this best way to print the pegs from my experience. The rollers require A LOT of pegs (around 130) so for the plastic prototype I’m printing pegs for every other row.
	 </p>
	</div>
	</section>

	<!-- Secondary Shredder -->
	<section id="secondaryshredder" class="section">
		<div class="container">
			<h2 class="section-title">Secondary Shredders</h2>
			<h3>Blades and Shredders</h3>
			<div class="row text-center">
				<div class="column-center">
					<img src="img/blade+shredder.png"  width="95%" height="auto%">
				</div>
			</div>
			<p>
			The blades of the shredders do the real work. These are designed to be skarp and rotate fast in order to reduce plastic size down into something an extruder can handle. For the plastic prototype, the blades are being laser cut from acrylic because we need a ton. Laser cutting for this reason is ideal. We designed the thickness of the blade to be 1/8 inch so we could use standard acrylic to cut. There are 22 blades per rod so 88 blades for the entire secondary shredding system. For cutting, we stacked 2 sheets of acrylic and set the laser to cut 1/4 inch deep so we could have as few runs as possible.
		 </p>
		 <h3>Blade Spacers</h3>
		 <div class="row text-center">
			 <div class="column-center">
				 <img src="img/spacer+shredder.png"  width="95%" height="auto%">
			 </div>
		 </div>
		 <p>
			The spacers are pretty simple, they fit onto the axle and keep a set distance between the blades so they mesh together nicely when installed into the grinder. These parts are laser cut because they are a simple flat disk shape and we needed a lot of them.
		</p>
		<h3>Shredder Axle</h3>
		<div class="row text-center">
			<div class="column-center">
				<img src="img/shredderaxle.png"  width="95%" height="auto%">
			</div>
		</div>
		<p>
		 The axle is designed in this weird star shape so we could offset the rotation of each blade on the axle. To get a more consistent grind. When the blades mesh together this staggering also improves smooth rotation and prevents jams.
	 </p>
	 <h3>Secondary Wall Spikes</h3>
		<div class="row text-center">
			<div class="column-center">
				<img src="img/secondspikes+assembly.png"  width="95%" height="auto%">
			</div>
		</div>
		<p>
		 These are very similar to the primary wall spikes but the spacing is altered to mesh with the secondary shredders.
	 </p>
	</div>
	</section>

	<!-- Filter -->
	<section id="filter" class="section">
		<div class="container">
			<h2 class="section-title">Filter</h2>
			<h3>Filtering Mesh</h3>
			<div class="row text-center">
				<div class="column-center">
					<img src="img/filter.png"  width="95%" height="auto%">
				</div>
			</div>
			<p>
			 This filter is what keep the granular pieces a uniform size. We made the holes a little bigger than 2 mm wide in order to get something small enough for the extruder. The Filter is the part of our grinder that needs the most work on and is non-functional as a plastic version. For everything else, they can be built with a combination of plastic and metal fabrication (so plastic cylinder and metal spikes) but the filter requires metal components to act like a grater. The filter will be continuously worked on for the duration of this project.
		 </p>
		</div>
	</section>

	<!-- Plastic Prototype -->
	<section id="proto" class="section">
		<div class="container">
			<h2 class="section-title">Plastic Prototype: V1</h2>
			<h3>Build log, pictures, and demo video coming soon! Teaser:</i></h3>
			<div class="row">
				<div class="column-1-3 column-pull-1-13">
						<img src="img/gears_teaser.JPG" width="97%" height="auto">
				</div>
				<div class="column-1-3">
						<img src="img/rollers_teaser.JPG" width="97%" height="auto">
				</div>
				<div class="column-1-3 column-push-1-13">
						<img src="img/rollers_split_teaser.JPG" width="97%" height="auto">
				</div>
			</div>
		</div>
	</section>

	<!-- Extruder -->
	<section id="extruder" class="section section-header">
		<div class="container">
			<h1 class="title">Extruder  <small>(coming soon)</small></h1>
			<p class="lead">An overview of the Extruder's technical specification, design features, and build log.</p>
		</div>
	</section>

<!-- Disqus -->
<section class="section">
	<div id="disqus_thread" class="container"></div>
</section>
	<script type="text/javascript">
	    /* * * CONFIGURATION VARIABLES * * */
	    var disqus_shortname = 'cycle3ddocs';

	    /* * * DON'T EDIT BELOW THIS LINE * * */
	    (function() {
	        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	    })();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>


	<?php include_once('includes/footer.php'); ?>

</main>

<div class="clearfix"></div>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/toggle.js"></script>
<?php include_once('includes/end.html'); ?>

<?php
	include_once('config.php');
	include_once('functions.php');
	include_once('includes/head.html');
?>
<?php include_once("includes/analyticstracking.php"); ?>

<header class="home-header-nav" >
	<div class="nav nav-inline">
		<div class="container text-right">
			<div id='cssmenu'>
				<ul>
				 <li><a href='/docs/journey.php'><span>journey</span></a></li>
			   <li><a href='/docs/'><span>Docs</span></a></li>
			   <li><a href='https://github.com/16abhimasani/Cycle3D'><span>Repo</span></a></li>
			   <li><a href='http://blog.cycle3d.xyz'><span>Blog</span></a></li>
			   <li class='last'><a href='/docs/about.php'><span>About</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
<section class="about-slide">
  <div class="container text-center">
    <a class="about-page-top-title / text-center" href="/">Cycle</a>
  </div>
	<div class="container">
    <br><br><br><br>
    <div class="column-center text-center">
      <h1> <font class="medium-font" size="80px" line-height="2.7" color="black">Crazy ideas + Red Bull</font></h1>
      <br><br><br>
      <h3><i>Cycle has been a constantly evolving project since we started in mid-2014. From <br> meetings with engineers and mentors to 3 day design sessions, we’ve been all over the place. <br> Take a look at what we’ve done in the last year and half.</i></h3>
    </div>
		<br>
    <hr class="divider">
		</div>
	</section>
<section class="journey-slide">
	<div class="container text-center">
    <br><br><br><br>
		<div class="row">
			<div class="column-center">
					<br><br>
					<img src="img/timeline.svg" width="60%" height="auto"></a>
					<br><br><br><br><br>
			</div>
		</div>
	</div>
</section>
<section class="journey-footer">
	<div class="container text-center">
		<div class="row">
			<div class="column-1-3 column-push-1-10">
				<a class="button button-large journey-button" href="https://github.com/16abhimasani/Cycle3D" target="_blank">Repository</a>
			</div>
			<div class="column-1-3 column-push-1-5">
						<a class="button button-large journey-button" href="/docs/">Documentation</a>
			</div>
		</div>
	</div>
</section>


<?php include_once('includes/footer.php'); ?>
<?php include_once('includes/end.html'); ?>

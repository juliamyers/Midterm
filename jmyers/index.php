<?php include "includes/html.inc"; ?>

<body class="z-pattern">

<header class="persistent">
	<div class="container">

		<section class="primary">
			<img src="images/bike.png" alt="bike">
		</section>

		<section class="strong">
		
			<form class="form-inline" action="/action_page.php">
  				<div class="form-group">
  		  		<label for="email">Enter Email to sign up for our newsletter:</label>
   				<input type="email" class="form-control" id="email">
  				</div>
  				<button type="submit" class="btn btn-default">Submit</button>
			</form>

		</section>

	</div><!-- .container -->
</header>

<main>

	<div class="big-message">
		<h1>Copenhagen, Denmark</h1>
		<p class="index"> - One of the World's Happiest Countries - </p>
	</div>

</main>

<footer class="persistent">
	<div class="container">
		
		<section class="weak">
			Explore the Biking City!
		</section>
		
		<section class="terminal">
			<button onclick="window.location.href='subpage.php'">Click to Read More!</button>
		
		</section>
	</div><!-- .container -->
</footer>

</body>
</html>
<?php
  $title = "Silvestri's Special Apps Center!";
  $current = "specialapps";
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Antonio C. Silvestri">
		<meta name="description" content="Access all of Silvestri's Special Applications from this Dashboard.">
		<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	
		<link rel="stylesheet" href="css/styles.css">
		<link rel="shortcut icon" type="image/x-icon" href="/specialapps/img/favicon.ico">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@bytecodeman">
		<meta name="twitter:title" content="<?php echo $title; ?>">
		<meta name="twitter:description" content="Access all of Silvestri's Special Applications from this Dashboard.">
		<meta name="twitter:image" content="https://cs.stcc.edu/specialapps/img/apps-image.jpg">
		<meta property="og:url" content="https://cs.stcc.edu/specialapps/">
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php echo $title; ?>">
		<meta property="og:description" content="Access all of Silvestri's Special Applications from this Dashboard.">
		<meta property="og:image" content="https://cs.stcc.edu/specialapps/img/apps-image.jpg">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({
			  google_ad_client: "ca-pub-9626577709396562",
			  enable_page_level_ads: true
			});
		</script>
	</head>
	<body>
		<?php include "./library/php/navbar.php"; ?>
		<header>
			<div class="container">
				<div class="jumbotron">
					<div class="row">
						<div class="col-lg-8">
							<h1><?php echo $title; ?></h1>
							<p>Access all of Silvestri's Special Applications from this Dashboard.</p>
							<p class="d-print-none"><a href="#" data-toggle="modal" data-target="#myModal"><?php echo $title; ?></a></p>
						</div>
						<div class="col-lg-4 d-print-none">
							<ins class="adsbygoogle"
								style="display:block"
								data-ad-client="ca-pub-9626577709396562"
								data-ad-slot="7064413444"
								data-ad-format="auto"></ins>
							<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section id="apps">
			<div class="container">
				<h2>The Special Apps!</h2>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<a href="alphametics/" title="Alphametics Solver!">
							<div class="card">
								<div class="card-body">
									<img src="alphametics/img/bigcatlion.jpg" alt="">
									<h4 class="card-title">Alphametics Solver!</h4>
									<div class="AppDescription">
										<p>Solve puzzles where words in a formula have digits substituted for its letters to make the formula true.</p>
									</div>
									<span class="btn btn-success btn-block">Access Application</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="wordscape/" title="Wordscape Assistant!">
							<div class="card">
								<div class="card-body">
									<img src="wordscape/img/wordscape.jpg" alt="">
									<h4 class="card-title">Wordscape Assistant!</h4>
									<div class="AppDescription">
										<p>Generates combinations of input letters to form possible words of input size. Great for Crossword Puzzles too!</p>
									</div>
									<span class="btn btn-success btn-block">Access Application</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="factoring/" title="Number Factoring!">
							<div class="card">
								<div class="card-body">
									<img src="factoring/img/factoring.jpg" alt="">
									<h4 class="card-title">Number Factoring!</h4>
									<div class="AppDescription">
										<p>Outputs a number's prime factorization, list of factors, and the factor pairs, sums and differences.</p>
									</div>
									<span class="btn btn-success btn-block">Access Application</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="gcflcm/" title="Numeric GCF/LCM Calculator!">
							<div class="card">
								<div class="card-body">
									<img src="gcflcm/img/gcflcm.png" alt="">
									<h4 class="card-title">GCF/LCM Calculator!</h4>
									<div class="AppDescription">
										<p>Calculates the Greatest Common Factor (GCF) and Lowest Common Multiple (LCM) of multiple <b>numbers</b>.</p>
									</div>
									<span class="btn btn-success btn-block">Access Application</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="lcm/" title="Algebraic Lowest Common Multiple Solver!">
							<div class="card">
								<div class="card-body">
									<img src="lcm/img/lcmicon.png" alt="">
									<h4>Algebraic LCM Solver!</h4>
									<div class="AppDescription">
										<p>Input arbitrary algebraic expressions and determine their Least Common Multiple.</p>
									</div>
									<span class="btn btn-success btn-block">Access Application</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="baseconverter/" title="Number Base Converter!">
							<div class="card">
								<div class="card-body">
									<img src="baseconverter/img/logo.png" alt="">
									<h4>Number Base Converter!</h4>
									<div class="AppDescription">
										<p>Converts a number from one base to another.  This app accepts arbitrarily large numbers!</p>
									</div>
									<span class="btn btn-success btn-block">Access Application</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="#" data-toggle="modal" data-target="#notyet" title="Word Search Puzzle Generator!">
							<div class="card">
								<div class="card-body">
									<img src="wordsearch/img/comingsoon.jpg" alt="">
									<h4>Word Search Puzzles!</h4>
									<div class="AppDescription">
										<p>Generate Word Search Puzzles with an input list of words.</p>
									</div>
									<span class="btn btn-success btn-block">Access Application</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="https://testcenter.stcc.edu/dashboard/" target="_blank" title="Silvestri Suite of STCC Applications (S3A)!">
							<div class="card">
								<div class="card-body">
									<img src="img/dashboard.jpg" alt="">
									<h4>S3A!</h4>
									<div class="AppDescription">
										<p>Silvestri Suite of STCC Applications!<br>A dashboard of Apps written for STCC IT &amp; STCC Testing Center</p>
									</div>
									<span class="btn btn-success btn-block">Access Application</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="/ip2name/" target="_blank" title="IP2NAME - Performs Reverse DNS lookups on Text Files">
							<div class="card">
								<div class="card-body">
									<img src="img/ip2namewordcloud.png" alt="">
									<h4>IP2NAME!</h4>
									<div class="AppDescription">
										<p>IP2NAME - Performs Reverse DNS lookups on Text Files</p>
									</div>
									<span class="btn btn-success btn-block">Access Application</span>
								</div>
							</div>
						</a>
					</div>

				</div>
			</div>
		</section>
		<section id="moreapps">
			<div class="container">
			    <h2>More Special Apps Possible</h2>
				<div class="row">
					<div class="col">
						<p>I have some ideas for apps to add to this website, so please visit every now and then.</p>
						<p>If you have an idea for an app that you think would be useful, would benefit a student, or would make the world a better place, please share ( <a href="mailto:silvestri@stcc.edu">silvestri@stcc.edu</a> ), and if it isn't too involved, and I have the time, I'll code the problem and make it a special app.</p>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col">
						<p>&copy; 2018-2019 <?php echo $title; ?></p>
					</div>
				</div>
			</div>
		</footer>
		<div class="modal fade" id="notyet" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">App Not Yet Implemented</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>App is currently under developemnt</p>
						<p>Check Back Soon</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			require "./library/php/about.php";
		?>

		<script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a576c39d176f4a6"></script>
	</body>
</html>


<?php
	require_once('lib/config.php');	

	$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

	// $tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=merhaba&result_type=recent&count=20');
	$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=banjarbaru&result_type=recent&count=120');
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Dedy Rosyadi</title>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/custom.css" rel="stylesheet">
	</head>
	<body>

		<div class="container">
			<div class="col-md-12">
			<div class="row">
				<h1>API Twitter</h1>	
				<br>
			</div>
			<div class="row">
				<div class="well">
					<form class="form-inline" method="post">
						<div class="form-group">
							<label for="kata-kunci">Kata kunci</label>
							<input type="text" class="form-control" name="kata-kunci" required="true">
						</div>
						<div class="form-group">
							<label for="banyak-data">Banyak Data</label>
							<input type="number" class="form-control" name="banyak-data" required="true" value="10">
						</div>
						
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>
			<div class="row">
				
				<br><br>
				
				<?php $no=1; ?>
				<?php foreach ($tweets->statuses as $key => $tweet) { ?>
					<?php echo $no++ ?>
				     Tweet : <img src="<?=$tweet->user->profile_image_url;?>" /><?=$tweet->text; ?><br>
				<?php } ?>


			</div>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<title><?= $title ?></title>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		<div class="navbar-header">
			<a href="?p=home" class="navbar-brand"><i class="glyphicon glyphicon-home"></i><a>
		</div>
			
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</nav>

	<?= $content ?>
</body>
</html>
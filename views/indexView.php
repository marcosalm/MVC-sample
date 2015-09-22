<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo BASE_REQUEST;?>lib/css/style.css"/>
		<title><?php echo $title;?></title>
	</head>
	<body>
		<div id="container">
			Teste MVC

			<?php foreach($posts as $post):?>
				<h2><?php echo $post['title'];?></h2>
				<hr>
				<p><?php echo $post['content'];?></p>
				<br/><br/>
			<?php endforeach;?>
		</div>
	</body>
</html>

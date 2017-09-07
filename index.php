<?php
$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog wiht Platzi!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Blog Title</h1>
		</div>
		<div class="row">
			<div class="col-md-8">
				<?php
				foreach($blogPosts as $blogPost) {
					echo '<div class="blog-post">';
					echo '<h2>'.$blogPost['title'].'</h2>';
					echo '<p>Jan 1, 2020 by <a href="">Alex</a></p>';
					echo '<div class="blog-post-image">';
					echo '<img src="images/Simpsons_FamilyPicture.png" alt="imagen">';
					echo '</div>';
					echo '<div class="blog-post-content">';
					echo $blogPost['content'];
					echo '</div>';
					echo '</div>';

				}
				?>
			</div>
			<div class="col-md-4">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

			</div>
		</div>
		<div class="row">
			<div class="col-md-12"
				<footer>
					This is a footer<br>
					<a href="admin/index.php">Admin Panel</a>
				</footer>
			</div>
		</div>
</div>
</body>
</html>
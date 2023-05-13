<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$find['file'].'.php')) { include("./logicals/{$find['file']}.php"); } ?>
<?php if(basename("$_SERVER[REQUEST_URI]", ".php")=='?page=gallery'){ include('includes/galleryupload.php'); include('process/galleryprocess.php');}?>

<?php
$cookie_name = "user";
$cookie_value = "Kevin Feige";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $pagetitle['title']?></title>
	<link rel="icon" type="image/x-icon" href="<?=$pageicon['imageicon']?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./styles/style.css" type="text/css">
	<link rel="stylesheet" href="./styles/colors.css">
	<?php if(file_exists('./styles/'.$find['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $find['file']?>.css" type="text/css"><?php } ?>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    	<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar"><br>
           <ul class="navbar-nav text-center">
				<?php foreach ($pages as $url => $page) { ?>
					<?php if(!isset($_SESSION['user']) && $page['menun'][0] || isset($_SESSION['user']) && $page['menun'][1]) { ?>
						<li<?= (($page == $find) ? ' class="active' : '') ?> nav-item">
						<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>" class="nav-link">
						<?= $page['text'] ?></a>
						</li>
					<?php } ?>
				<?php } ?>
			</ul>
		</div>
    </nav>
	<header>
		<br>
		<img src="./images/<?=$header['imagesource']?>" alt="<?=$header['imagealt']?>"> <br>
		<?php if(isset($_SESSION['user'])) { ?>Logged in: <strong style="color:green;"><?= $_SESSION['ln']." ".$_SESSION['fn']." (".$_SESSION['user'].")" ?></strong><?php }else {?><strong style="color:red;">Not logged in!</strong> <?php }?>
		<h1><?= $header['title'] ?></h1>
	</header>
        <?php include("templates/pages/{$find['file']}.tpl.php"); ?>
		<br>
    <footer>
    <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
    </footer>
</body>
</html>


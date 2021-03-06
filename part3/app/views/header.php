<!DOCTYPE html>
<?include_once('../public/admin_functions.php')?>
<html>
	<head>
		<link href="../public/styles.css" rel="stylesheet"/>
		<?php if (isset($title)): ?>
			<title>FT_MiniShop: <?= htmlspecialchars($title) ?></title>
		<?php else: ?>
			<title>FT_MiniShop</title>
		<?php endif ?>
	</head>
	<body>
		<div class="container">
			<div id="top">
				<a href="index.php">
				<div style="width: 40%; height: 15vmin; display: inline-flex; overflow: hidden; justify-content: center">
					<h1>Pusheen Treats</h1>
					<img alt="FT_MiniShop Logo Goes Here" src="../public/img/pusheen.png"/>
				</div></a>
					<ul class="nav" align="right">
						<li><a href="index.php">Home</a></li>
						<li><a href="cart.php">Cart</a></li>
					<?if (!empty($_SESSION["id"])) {?>
						<li><a href="account.php">Account</a></li>
					<?if (is_admin_user($_SESSION["id"])) {?>
						<li><a href="admin.php">Admin</a></li>
					<?}?>
						<li><a href="logout.php">Log Out</a></li>
					<?} else {?>
						<li><a href="login.php">Log In</a></li>
					<?}?>
					</ul>
			</div>
			<div id="sidebar">
				<ul class="categories">
					<li><a href="/public/index.php?cat=breakfast">Breakfast</a></li>
					<li><a href="/public/index.php?cat=lunch">Lunch / Dinner</a></li>
					<li><a href="/public/index.php?cat=dessert">Dessert</a></li>
					<li><a href="/public/index.php?cat=0">Pusheen</a></li>
					<li><a href="/public/index.php?cat=other">Other</a></li>
				</ul>
			</div>
		<div id="middle">

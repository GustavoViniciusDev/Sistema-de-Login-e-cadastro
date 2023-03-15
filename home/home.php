<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Tela Inicial</title>
    <?php
    session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        header('location:index.php');
    }

    $logado = $_SESSION['usuario'];

    ?>
</head>
<body>


<div class="fullscreen-menu-container js-menu-container">

    		<a class="menu-button js-menu-close">
				<div class="menu-icon is-active">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</a>

			<div class="fullscreen-menu">

				<div class="fullscreen-menu__image-container"></div>

				<h1 class="fullscreen-menu__title">Olá  <?php echo $logado; ?></h1>
                <?php   echo '<a href="../validacoes/logout.php?token='.md5(session_id()).'">Sair</a>';?>

				<nav class="fullscreen-menu__nav">
					<ul>

						<li>
							<a href="#">About</a>
						</li>

						<li>
							<a href="#">Portfolio</a>
						</li>

						<li>
							<a href="#">Résumé</a>
						</li>

						<li>
							<a href="#">Blog</a>
						</li>

						<li>
							<a href="#">Contact</a>
						</li>

					</ul>
				</nav>

				<a target="_blank" href="https://twitter.com/matchboxhero10" class="social-button--twitter">
					<i class="icon--twitter"></i>
				</a>

				<a target="_blank" href="#" class="social-button--facebook">
					<i class="icon--facebook"></i>
				</a>

				<a target="_blank" href="#" class="social-button--pintrest">
					<i class="icon--pintrest"></i>
				</a>

			</div>

    	</div>

		<article class="card">

			<aside class="card__image-container">

				<a class="menu-button js-menu-button">
					<div class="menu-icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>

				

			</aside>

			<section class="card__contents">

				<header class="card__header">
					<h1 class="card__title">Fullscreen Menu with jQuery and Flexbox.</h1>
				</header>

				<section class="card__body">
					<p>Navigation is one of the most important elements of your website so today we'll be creating a modern overlay style menu using jQuery and Flexbox.</p>

					<p>Starting with the layout for mobile we'll stack the elements on top of one another and then move on to centre the elements and share the available space between navigation items when the viewport is large enough and then fix the whole content block perfectly centred at a set maximum width, allowing the height to be dictated by the content.</p>
				</section>

				<footer class="card__footer">

					<a target="_blank" href="https://twitter.com/matchboxhero10" class="social-button--twitter">
						<i class="icon--twitter"></i>
					</a>

					<a target="_blank" href="#" class="social-button--facebook">
						<i class="icon--facebook"></i>
					</a>

					<a target="_blank" href="#" class="social-button--pintrest">
						<i class="icon--pintrest"></i>
					</a>

				</footer>

			</section>

		</article>
<!-- Include jQuery and main.js - Short URL http://srt.lt/Ro3W2 -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/script.js"></script>
		






</body>
</html>
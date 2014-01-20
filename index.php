<!DOCTYPE html>

<html lang="nl">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Orange CSS grid</title>
		<link rel="stylesheet" type="text/css" href="CSS/grid.css" />
		<link rel="stylesheet" type="text/css" href="CSS/layout.css" />
	</head>

	<body>
		<div id="site" class="container">
			<header>
				<h1>Orange CSS framework</h1>
			</header>

			<main>
				<p>Orange CSS framework is een klein simpel framework voor responsive websites. Het doel van het framework is een zo compleet mogelijk framework leveren wat alleen het responsive deel van een layout doet. De styling en basisopmaak zul je zelf moeten doen.</p>
				<section>
					<div class="row">
						<div class="col-1">1/1</div>
					</div> <!-- /.row -->

					<div class="row">
						<?php for($a = 1; $a <= 2; $a++) : ?>
						<div class="col-5-10">5/10</div>
						<?php endfor;?>
					</div> <!-- /.row -->

					<div class="row">
						<?php for($b = 1; $b <= 5; $b++) : ?>
						<div class="col-1-5">1/5</div>
						<?php endfor;?>
					</div> <!-- /.row -->

					<div class="row">
						<div class="col-2-5">2/5</div>
						<div class="col-3-5">3/5</div>
					</div> <!-- /.row -->

					<div class="row">
						<?php for($c = 1; $c <= 10; $c++) : ?>
						<div class="col-1-10">1/10</div>
						<?php endfor;?>
					</div> <!-- /.row -->
				</section>

				<section>
					<h3>Formaten</h3>
					<p>Met <em>Orange</em> heb je een aantal opties qua kolommen: </p>
					<ul>
						<li><strong>Vijfdes</strong></li>
						<ul>
							<?php for($i = 1; $i <= 4; $i++) : ?>
							<li><?php print $i;?>/5 = <?php print (100/5) * $i;?>%</li>
							<?php endfor;?>
							<li>1 = 100%</li>
						</ul>
						<li><strong>Tiendes</strong></li>
						<ul>
							<?php for($i = 1; $i <= 9; $i++) : ?>
							<li><?php print $i;?>/10 = <?php print (100/10) * $i;?>%</li>
							<?php endfor;?>
							<li>1 = 100%</li>
						</ul>
					</ul>
				</section>
			</main>
		</div> <!-- /.container -->
	</body>
</html>
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
						<?php for($i = 1; $i <= 2; $i++) : ?>
						<div class="col-5-10"><em>.col-5-10</em> of <em>.col-2-4</em></div>
						<?php endfor;?>
					</div> <!-- /.row -->

					<div class="row">
						<?php for($i = 1; $i <= 4; $i++) : ?>
						<div class="col-1-4"><em>.col-1-4</em></div>
						<?php endfor;?>
					</div> <!-- /.row -->
					
					<div class="row">
						<?php for($i = 1; $i <= 5; $i++) : ?>
						<div class="col-2-10"><em>.col-2-10</em> of <em>.col-1-5</em></div>
						<?php endfor;?>
					</div> <!-- /.row -->

					<div class="row">
						<?php for($i = 1; $i <= 10; $i++) : ?>
						<div class="col-1-10"><em>.col-1-10</em></div>
						<?php endfor;?>
					</div> <!-- /.row -->
				</section>

				<section>
					<h3>Formaten</h3>
					<p>Met <em>Orange</em> heb je een aantal opties qua kolommen: </p>
					<table cellpadding="0" cellspacing="0">
						<thead>
							<tr>
								<th>Klasse</th>
								<th>Breedte</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td><em>.col-1-10</em></td>
								<td>10%</td>
							</tr>
							<tr>
								<td><em>.col-2-10</em> of <em>.col-1-5</em></td>
								<td>20%</td>
							</tr>
							<tr>
								<td><em>.col-1-4</em></td>
								<td>25%</td>
							</tr>
							<tr>
								<td><em>.col-3-10</em></td>
								<td>30%</td>
							</tr>
							<tr>
								<td><em>.col-4-10</em> of <em>.col-2-5</em></td>
								<td>40%</td>
							</tr>
							<tr>
								<td><em>.col-5-10</em> of <em>.col-2-4</em></td>
								<td>50%</td>
							</tr>
							<tr>
								<td><em>.col-6-10</em> of <em>.col-3-5</em></td>
								<td>60%</td>
							</tr>
							<tr>
								<td><em>.col-7-10</em></td>
								<td>70%</td>
							</tr>
							<tr>
								<td><em>.col-3-4</em></td>
								<td>75%</td>
							</tr>
							<tr>
								<td><em>.col-8-10</em> of <em>.col-4-5</em></td>
								<td>80%</td>
							</tr>
							<tr>
								<td><em>.col-9-10</em></td>
								<td>90%</td>
							</tr>
							<tr>
								<td><em>.col-1</em> of <em>.col-10-10</em> of <em>.col-5-5</em> of <em>.col-4-4</em></td>
								<td>100%</td>
							</tr>
						</tbody>
					</table>
				</section>
			</main>
		</div> <!-- /.container -->
	</body>
</html>
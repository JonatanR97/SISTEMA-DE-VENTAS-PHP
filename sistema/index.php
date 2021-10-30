<?php include_once "includes/header.php"; ?>

<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-1">
		<h1 class="h3 mb-0 text-gray-900">BAVALU</h1>
	</div>

	<div class="row">

		<div class="col-lg-5">
			<div class="au-card m-b-30">
				<div class="au-card-inner">
					<h3 class="title-7 m-b-40">LO MAS VENDIDOS</h3>
					<canvas id="polarChart"></canvas>
				</div>
			</div>
		</div>
	</div>

	<div class = "col-sm-5">
			<div class = "au-card mb-30">
				<div class = "au-card-inner">
					<h3 class = "title-2 mb-40"> STOCK MINIMO </h3>
					<canvas id = "sales-chart"> </canvas>
				</div>
			</div>
		</div>


</div>

<?php include_once "includes/footer.php"; ?>
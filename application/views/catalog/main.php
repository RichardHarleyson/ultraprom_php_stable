<div class="gapper"></div>

<div class="container">
	<div class="text-center">
		<a class="btn btn-danger d-block d-md-none mb-3 w-50 mx-auto" data-toggle="collapse" href="#filter_collapse" role="button" aria-expanded="false" aria-controls="filter_collapse">
			Фильтр
		</a>
	</div>

	<div class="row border">
		<div class="col-lg-3 col-xl-3 border">

			<div class="collapse d-md-block" id="filter_collapse">
				<div class="gapper"></div>

				<div class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input" id="customCheck1">
				  <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
				</div>

				<div class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input" id="customCheck2">
				  <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
				</div>

				<div class="custom-control custom-switch">
				  <input type="checkbox" class="custom-control-input" id="customSwitch1">
				  <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
				</div>

				<label for="customRange1">Example range</label>
					<input type="range" class="custom-range" id="customRange1">
			</div>

		</div>
		<div class="col-lg-9 col-xl-9 border">
			<div class="gapper"></div>

			<div class="row">
				<div class="col-lg-4 col-xl-4">
					<h3>Газовые Котлы</h3>
				</div>
				<div class="col-lg-8 col-xl-8">
					Сортировка
				</div>
			</div>
			<div class="gapper"></div>

			<?php foreach(array_chunk($result, 4, true) as $products): ?>
				<div class="row product_lists">
					<?php foreach ($products as $product): ?>
					<div class="col col-12 col-xl-3 col-lg-3 col-md-4 col-xs-12 col-sm-12 text-center">
						<div class="card text-center mx-auto d-block">
							<!-- <img src="<?php echo $product['thumbnail']; ?>" alt="Product Thumbnail"> -->
							<img src="https://via.placeholder.com/250" class="img-fluid" alt="Product Thumbnail">
							<div class="card-body">
								<a href="/product/<?php echo $product['eng_name']; ?>" class="card-title"><span class="font-title"><?php echo $product['title']; ?></span></a>
								<p class="card-text border-top text-warning" style="font-size: 20px;">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
								</p>
								<div class="row card-buttons">
									<div class="col col-9">
										<p class="border rounded price_tablet"><b>18000 uah</b></p>
									</div>
									<div class="col col-3">
										<button class="btn btn-danger"><i  class="fa fa-shopping-cart"></i></button>
										<!-- <p class="border rounded">Cart</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				</div>

			<div class="gapper"><hr></div>
		<?php endforeach; ?>

		</div>
	</div>
</div>

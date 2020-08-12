<div class="PageType_Catalog" id="PageType"></div>
<div class="gapper"></div>

<div class="container">
	<div class="text-center">
		<a class="btn btn-danger d-block d-lg-none mb-3 w-50 mx-auto" data-toggle="collapse" href="#filter_collapse" role="button" aria-expanded="false" aria-controls="filter_collapse">
			Фильтр
		</a>
	</div>

	<div class="row border">
		<div class="col-lg-2 col-xl-2 border-right pl-2 pr-2">

			<div class="collapse d-lg-block" id="filter_collapse" data-filter_headers='<?php echo json_encode($filter_headers);  $filter_header_counter = 0;?>'>

				<div id="filter_headers_info" data-filter_headers='<?php echo json_encode($filter_headers);?>'></div>
				<!-- <div class="btn-group w-100 mt-3" role="group" aria-label="Basic example">
				  <a class="btn btn-primary text-white w-50" onclick='filter_headers(<?php echo json_encode($filter_headers);?>)' data-toggle="collapse" href="#filter_collapse" role="button" aria-expanded="false" aria-controls="filter_collapse">Поиск</a>
				  <a class="btn btn-danger text-white w-50" onclick="document.location.reload(true);">Сброс</a>
				</div> -->

				<div class="mt-1 border-bottom">
					<span class="mb-2 mt-4 font-weight-bold text-primary">Цена</span>
					<div class="form-group row text-center">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-1">
							<input type="text" class="form-control text-dark px-1" id="price_start">
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-1">
							<input type="text" class="form-control text-dark px-1" id="price_end">
						</div>
					</div>
				</div>

				<?php foreach ($filter_data as $key => $value): ?>
					<div class="mt-1 border-bottom" data-filter_key="<?php echo $filter_headers[$filter_header_counter]; $filter_header_counter++; ?>">
						<span class="mb-2 mt-4 font-weight-bold text-primary"><?php echo $key; ?></span>
						<?php foreach ($value as $data): ?>
							<div class="form-check text-left">
								<input class="form-check-input" type="checkbox" value="<?php echo $data; ?>">
								<label class="mb-0" data-info="<?php echo $data; ?>"><?php echo $data; ?></label>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endforeach; ?>

				<!-- <div class="btn-group w-100 my-3" role="group" aria-label="Basic example">
				  <a class="btn btn-primary text-white w-50" onclick='filter_headers(<?php echo json_encode($filter_headers);?>)' data-toggle="collapse" href="#filter_collapse" role="button" aria-expanded="false" aria-controls="filter_collapse">Поиск</a>
				  <a class="btn btn-danger text-white w-50" onclick="document.location.reload(true);">Сброс</a>
				</div> -->

			</div>

		</div>
		<div class="col-lg-10 col-xl-10">
			<div class="gapper"></div>

			<div class="row">
				<div class="col-lg-6 col-xl-6 text-center">
                                        <h1 class=h1-1-1 id="title" data-title="<?php echo $data_title; ?>"><?php echo $title_page; ?></h1>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="form-group">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 align-self-center text-center">
								<label>Сортировать по:</label>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
								<select class="form-control float-left" name="sorting" id="sorting">
									<option value="sale">Акции</option>
									<option value="price_asc">Цена (по возрастанию)</option>
					        <option value="price_desc">Цена (по убыванию)</option>
									<option value="rating_asc">Популярность (по возрастанию)</option>
									<option value="rating_desc">Популярность (по убыванию)</option>
									<option value="title_asc">Название (А - Я)</option>
									<option value="title_desc">Название (Я -А)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="gapper"></div>

			<div class="row product_lists">
			<?php foreach(array_chunk($product_list, 4, true) as $products): ?>
					<?php foreach ($products as $product): ?>
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 my-2  text-center product_item" data-product_price="<?php echo $product['price_uah']; ?>" <?php $filter_info = explode(';', $product['filter_info']); foreach ($filter_info as $item){ $attr = explode(':', $item); echo 'data-'.$attr[0].'="'.$attr[1].'"';}?> >
							<div class="card text-center mx-auto">
									<?php if($product['onsale'] == 1){echo "<div class='card-badge bg-danger'>АКЦИЯ!</div>";} ?>
									<a href="/product/<?php echo $product['eng_name']; ?>">
										<img src="/public/media/uploads/<?php echo $product['image'];?>" class="mx-auto d-block" alt="Product Thumbnail"  data-toggle="tooltip" data-placement="top" title="<?php echo $product['title'] ?>">
									</a>
								<div class="card-body">
									<div class="card-title align-self-center my-0">
										<a href="/product/<?php echo $product['eng_name']; ?>" class=""><span class="font-title"><?php echo $product['title']; ?></span></a>
									</div>
									<p class="card-text border-top text-warning rating" rating="<?php echo $product['rating']; ?>" style="font-size: 20px;"></p>
									<div class="row card-buttons">
										<div class="col col-9">
											<p class="border rounded price_tablet"><b><?php echo number_format($product['price_uah'], 0, ',', ' '); ?> грн</b></p>
										</div>
										<div class="col col-3">
											<button class="btn btn-danger" type="submit" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $product['id']; ?>" data-title="<?php echo $product['title']; ?>" data-price="<?php echo $product['price_uah']; ?>"><i  class="fa fa-shopping-cart"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
				<?php endforeach; ?>
			<!-- <div class="gapper"><hr></div> -->
		<?php endforeach; ?>
		</div>

		</div>
	</div>
</div>

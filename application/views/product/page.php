<div class="PageType_ProductPage" id="PageType"></div>
<div class="container">
	<div class='gapper'></div>

	<nav aria-label="breadcrumb py-1" style="font-size: 15px;">
	  <ol class="breadcrumb bg-white">
	    <li class="breadcrumb-item"><a href="/">Главная</a></li>
	    <!-- <li class="breadcrumb-item"><a href="#">Отопительная Техника</a></li> -->
	    <li class="breadcrumb-item"><a href="/gcatalog/<?=$category_ename[0]['eng_name']; ?>"><?=$category_ename[0]['c_name']; ?></a></li>
	    <li class="breadcrumb-item"><a href="/catalog/<?=$lcategory_ename[0]['eng_name']; ?>"><?=$lcategory_ename[0]['lc_name']; ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page"><?php echo $product[0]['title'] ?></li>
	  </ol>
	</nav>

	<div class="container">
                <h1 class=h1-1><?php echo $product[0]['title']; ?></h1>
	</div>
	<hr>

	<div aria-hidden="true" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div id="imgmodal_inside" class="modal-body mb-0 p-0">
					<img src="/public/media/uploads/<?php echo $product[0]['image'] ?>" alt="" style="width:100%">
				</div>
			</div>
		</div>
	</div>

	<div class="product_content">
		<div class="row">
			<div class="col-xl-4 col-md-5 col-sm-12" style="padding: 0;">
				<!-- <img class="img-fluid" src="https://via.placeholder.com/400" style="margin: 5px"> -->
				<?php if($product[0]['onsale'] == 1){echo "<div class='card-badge bg-danger'>АКЦИЯ!</div>";} ?>
				<div class="m-auto text-center" data-toggle="tooltip" data-placement="top" title="<?=$product[0]['title']; ?>">
					<img class="product_page_img" src="/public/media/uploads/<?php echo $product[0]['image'] ?>"data-target="#modalIMG" data-toggle="modal">
				</div>
			</div>
			<div class="col-xl-4 col-md-6 col-sm-12 align-self-center">
				<div class="container" style="padding-top: 10px;">
					<div class="row mb-3">
						<div class="col-6" style="font-size: 16px;">
							<span>Код товара: <br> Бренд: </span>
						</div>
						<div class="col-6 text-right"style="font-size: 16px;">
							<span><?php echo $product[0]['article']; ?><br><a href="/brand_search/<?php echo $manufacturer[0]['m_name'];?>"><?php echo $manufacturer[0]['m_name']; ?></a></span>
						</div>
					</div>
					<!-- <div class="row mb-3">
						<div class="col-6" style="font-size: 16px;">
							<span>Код товара: <br><?php echo $product[0]['article']; ?></span>
						</div>
						<div class="col-6 text-right " rating="<?php echo $product[0]['rating']; ?>" style="font-size: 16px;">
							<span>Бренд: <br><a href="/brand_search/<?php echo $manufacturer[0]['id'];?>"><?php echo $manufacturer[0]['m_name']; ?></a></span>
						</div>
					</div> -->
					<div class="row">
						<div class="col-6" style="font-size: 16px;">
							<i class="fas fa-check-square text-success"></i>
							<b>В Наличии</b>
						</div>
						<div class="col-6 text-right " rating="<?php echo $product[0]['rating']; ?>" style="font-size: 16px;">
							<p class="text-warning rating" rating="<?php echo $product[0]['rating']; ?>"></p>
						</div>
					</div>
				</div>
				<div class="gapper"></div>
				<div class="row text-center price_row">
					<div class="col col-12 col-lg-6 col-xl-6 mx-auto my-2">
						<p class="price_tablet_solo border rounded mx-auto" style="color: "><b><?php echo number_format($product[0]['price_uah'], 0, ',', ' '); ?> грн</b></p>
					</div>
					<div class="col col-12 col-lg-6 col-xl-6 text-center my-2">
						<a class="btn btn-lg btn-danger" style="width: 155px; color: white" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $product[0]['id']; ?>" data-title="<?php echo $product[0]['title']; ?>" data-eng_name="<?php echo $product[0]['eng_name'];?>" data-price="<?php echo $product[0]['price_uah']; ?>" >В корзину <i  class="fa fa-shopping-cart"></i> </a>
					</div>
				</div>
				<div class="gapper"></div>
				<div class="container text-center">
					<form class="callback_form">
						<div class="input-group">
							<input type="text" id="phone" required class="form-control text-center phone" name="phone" placeholder="+38(___) ___-____" autocomplete="off">
							<div class="input-group-append w-50">
								<button class="btn btn-primary w-100 btn-callback" type="submit" data-product="<?php echo $product[0]['title']; ?>">Заказать</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 align-self-center">
				<div class="d-none d-lg-block">
					<h5 class="text-primary">Доставка</h5>
					<p class="pl-3">
						<i class="text-primary fas fa-dolly fa-2x"></i>
						По Украине: по тарифам "Выбранного перевозчика".<br>
						По г. Днепр: самовывоз со склада, доставка по адресу (по договоренности).
					</p>
					<h5 class="text-primary">Оплата</h5>
					<p class="pl-3">
						<i class="text-primary far fa-credit-card fa-2x"></i>
						Наличными, Приват 24, Monobank, Альфа-Банк, Visa/MasterCard.
					</p>
					<h5 class="text-primary">Гарантия</h5>
					<p class="pl-3">
						<i class="text-primary far fa-file-alt fa-2x"></i>
						Официальная от производителя.
					</p>
				</div>
			</div>
			<!-- <div class="col-xl-3 col-md- col-sm-12">Side bar</div> -->
		</div>
		<hr>
	</div>

	<!-- <div class="gapper"></div> -->

	<ul class="nav nav-tabs" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active px-2" data-toggle="pill" href="#info_section" role="tab" aria-controls="info_section" aria-selected="true">Описание</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link px-2" data-toggle="pill" href="#param_section" role="tab" aria-controls="param_section" aria-selected="false">Характеристики</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link px-2" data-toggle="pill" href="#comment_section" role="tab" aria-controls="comment_section" aria-selected="false">Отзывы</a>
	  </li>
	</ul>
	<div class="tab-content border border-top-0 px-4 py-3" id="pills-tabContent">
	  <div class="tab-pane fade show active" id="info_section" role="tabpanel" aria-labelledby="pills-home-tab">
			<div class="tab_height">
                                        <h2 class=h2-1-1>Описание "<?php echo $product[0]['title'] ?>"</h2>
					<hr class="w-50">
					<div class="text-justify">
						<span>
							<?php echo $product[0]['description'] ?>
						</span>
					</div>
				</div>
		</div>
	  <div class="tab-pane fade" id="param_section" role="tabpanel" aria-labelledby="pills-profile-tab">
			<div class="tab_height">
				<h2 class=h2-1-1>Характеристики "<?php echo $product[0]['title']?>"</h2>
				<div class="">
					<table class="table table-bordered table-hover">
					  <tbody>
							<?php
							 	if(!(empty($product[0]['stat_list']))){
									$stat_list = explode(';', $product[0]['stat_list']);
									foreach ($stat_list as $item){
										$stat = explode('@', $item);
										// var_dump($stat);
										echo
										'<tr>
											<td><b>'.$stat[0].'</b></td>
											<td>'.$stat[1].'</td>
										</tr>';
									}
								}
							?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="tab-pane fade" id="comment_section" role="tabpanel" aria-labelledby="pills-profile-tab">
			<div class="tab_height">
				<h2 class=h2-1-1>Отзывы о "<?php echo $product[0]['title'] ?>"</h2>
				<hr class="w-50">
				<div class="comments">
					<?php {
						if(empty($reviews)){
							echo '<div class="text-center my-3"><h6>Данный товар пока не имеет отзывов. Вы можете оставить свой отзыв о товаре.</h6></div>';
						}else{
							foreach ($reviews as $review) {
								echo '
									<div class="">
										<p class="d-inline mr-3"><span>'.$review['uname'].'</span></p>
										<p class="d-inline text-warning rating" rating="'.$review['rating'].'"></p>
										<p>'.$review['comment'].'</p>
									</div>
									<hr class="w-50">';
							}
						}
					} ?>
					<div class="text-center mt-3">
						<button class="btn btn-primary" data-toggle="collapse" data-target="#reviewformdiv">Оставить отзыв о товаре</button>
					</div>
					<div class="my-3 collapse" id="reviewformdiv">
						<form id="reviewform" data-product_id="<?php echo $product[0]['id'] ?>">
							<div class="form-group">
								<label>Имя:</label>
								<input type="text" class="form-control" name="uname">
							</div>
							<div class="form-group">
								<label>Отзыв:</label>
								<textarea required rows=2 class="form-control" name="review"></textarea>
							</div>
							<div class="my-3 text-center" id="Оценки" onmouseout="Выбрать_звёздочку(-1);" style="font-size: 2rem;"></div>
							<div class="text-center">
								<button class="btn btn-success" type="submit">Сохранить отзыв</button>
							</div>
							<div class="text-center my-3" id="review_form_status">
								<!-- <h5>Спасибо за Ваш отзыв!</h5> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	<hr class="w-50">

	<div class="my-4">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-8 col-12 mb-4 text-xs-center">
				<h3>Похожие товары</h3>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 text-right mb-4">
				<div class="d-none d-md-block">
					<a class="btn btn-primary text-white" id="btn_prev"><i class="fa fa-lg fa-chevron-left"></i></a>
					<a class="btn btn-primary text-white" id="btn_next"><i class="fa fa-lg fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
		<div class="" id="same_products_carousel">
			<?php foreach ($same_products as $sproduct): ?>
				<div class="col col-12 col-xl col-lg-3 col-md-4 col-sm-12 text-center mt-4">
					<div class="card text-center mx-auto">
						<?php if($sproduct['onsale'] == 1){echo "<div class='card-badge bg-danger'>АКЦИЯ!</div>";} ?>
						<a href="/product/<?php echo $sproduct['eng_name']; ?>">
							<img src="/public/media/uploads/<?php echo $sproduct['image']; ?>" class="mx-auto d-block" alt="Product Thumbnail">
						</a>
						<div class="card-body">
							<div class="card-title align-self-center my-0">
								<a href="/product/<?php echo $sproduct['eng_name']; ?>" class=""><span class="font-title"><?php echo $sproduct['title']; ?></span></a>
							</div>
							<p class="card-text border-top text-warning rating" rating="<?php echo $sproduct['rating']; ?>" style="font-size: 20px;"></p>
							<div class="row card-buttons">
								<div class="col col-9">
									<p class="border rounded price_tablet"><b><?php echo number_format($sproduct['price_uah'], 0, ',', ' '); ?> грн</b></p>
								</div>
								<div class="col col-3">
									<button class="btn btn-danger" type="submit" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $sproduct['id']; ?>" data-title="<?php echo $sproduct['title']; ?>" data-eng_name="<?php echo $sproduct['eng_name'];?>" data-price="<?php echo $sproduct['price_uah']; ?>"><i  class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

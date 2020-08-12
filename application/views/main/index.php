<div class="PageType_Index"></div>
<div class="gapper"></div>

<div class='container'>
	<div id="HCarousel" class="carousel slide border d-none d-md-block" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php foreach ($slides as $s): ?>
				<li data-target="#HCarousel" data-slide-to="<?php echo $c_indicator; ?>"></li>
				<?php $c_indicator++; ?>
			<?php endforeach; ?>
		</ol>
		<div class="carousel-inner">
			<?php foreach ($slides as $s): ?>
				<div class="carousel-item">
					<a href="<?=$s['s_url']; ?>"><img src="/public/media/uploads/<?=$s['s_image'] ?>" class="d-block w-100"></a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="d-md-none">
	<img class="img-fluid" src="/public/media/uploads/ultraprom_teplo_mini.jpg" alt="ultraprom_teplo_mini">
</div>

<div class='gapper'></div>

<div class="container">
<div class="text-center">
<h1 class=h1><span class="text-danger">УЛЬТРА</span><span class="text-primary">ПРОМ</span> - Добро пожаловать в мир инженерных сетей</span></h1>
</div>

	<p align="justify">"<span style="color:#dc3545">УЛЬТРА</span><span style="color:#007bff">ПРОМ</span>" - современная, динамично развивающаяся компания, которая оказывает весь комплекс услуг по монтажу внутренних и внешних инженерных коммуникаций и систем, начиная от квартир, частных домов, магазинов и офисных помещений до крупных промышленных объектов.</p>
	<div class="text-center py-3 px-4" style="background: #E6E6FA; border-radius: 10px"><span class="font-weight-bold">Одним из основных и приоритетных направлений деятельности предприятия является оформление и монтаж <a href="/top_menu/heating_system"><strong><span style="color:#0000CD">АВТОНОМНОГО ОТОПЛЕНИЯ В ДНЕПРЕ "ПОД КЛЮЧ"</span></strong></a>.</span></div>
	<div class="text-center mt-3">
		<p>
			<h2 class=h2><span class="text-danger"><strong>ИНТЕРЕСУЕТ АВТОНОМНОЕ ОТОПЛЕНИЕ, НО НЕ ЗНАЕТЕ, С ЧЕГО НАЧАТЬ?</strong></span></h2>
		</p>
		<p>
			<strong>Доверьте узаконение и монтаж автономного отопления в вашей квартире профессионалам своего дела. Позвоните нам для получения консультации или запишитесь на бесплатный просчет проекта для вашей квартиры <a href="/top_menu/contacts">оставив заявку на сайте.</strong></a>
		</p>

                <div class="text-center py-3 px-4" style="background: #E6E6FA; border-radius: 10px"><span class="font-weight-bold"><span style="color:#dc3545">УЛЬТРА</span><span style="color:#007bff">ПРОМ</span> предоставляет к вашим услугам широкий выбор отопительного и климатического оборудования, а также материалов для систем отопления, водопровода, канализации. В нашем <a href="/top_menu/catalog"><span style="color:#0000CD">КАТАЛОГЕ</span></a> вы найдете все, что необходимо для ваших инженерных сетей.</a></span></div>

	</div>
</div>

<hr class="w-50">

<div class="gapper"></div>

<!-- Популярные товары -->
<div class="container">
	<div class="my-3">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-8 col-12 mb-4 text-xs-center">
				<h3 class="">Популярные товары</h3>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 text-right mb-4">
				<div class="d-none d-md-block">
					<a class="btn btn-primary text-white" id="pop_btn_prev"><i class="fa fa-lg fa-chevron-left"></i></a>
					<a class="btn btn-primary text-white" id="pop_btn_next"><i class="fa fa-lg fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
		<div class="" id="pop_products_carousel">
			<?php foreach ($popular as $product): ?>
				<div class="col col-12 col-xl col-lg-3 col-md-4 col-sm-12 text-center mt-4">
					<div class="card text-center mx-auto">
						<?php if($product['onsale'] == 1){echo "<div class='card-badge bg-danger'>АКЦИЯ!</div>";} ?>
						<a href="product/<?php echo $product['eng_name']; ?>">
							<img src="/public/media/uploads/<?php echo $product['image']; ?>" class="mx-auto d-block" alt="Product Thumbnail">
						</a>
					<!-- <img src="https://via.placeholder.com/250" class="img-fluid" alt="Product Thumbnail"> -->
						<div class="card-body">
							<div class="card-title align-self-center my-0" data-toggle="tooltip" data-placement="top" title="<?=$product['title'] ?>">
								<a href="/product/<?php echo $product['eng_name']; ?>" class=""><span class="font-title"><?php echo $product['title']; ?></span></a>
							</div>
							<p class="card-text border-top text-warning rating" rating="<?php echo $product['rating']; ?>" style="font-size: 20px;"></p>
							<div class="row card-buttons">
								<div class="col col-9">
									<p class="border rounded price_tablet" style="color: "><b><?php echo number_format($product['price_uah'], 0, ',', ' '); ?> грн</b></p>
								</div>
								<div class="col col-3">
									<button class="btn btn-danger" type="submit" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $product['id']; ?>" data-title="<?php echo $product['title']; ?>" data-eng_name="<?php echo $product['eng_name'];?>" data-price="<?php echo $product['price_uah']; ?>"><i  class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="gapper"></div>

<!-- Акционные товары -->
<div class="container">
	<div class="my-3">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-8 col-12 mb-4 text-xs-center">
				<h3>Акционные товары</h3>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 text-right mb-4">
				<div class="d-none d-md-block">
					<a class="btn btn-primary text-white" id="onsale_btn_prev"><i class="fa fa-lg fa-chevron-left"></i></a>
					<a class="btn btn-primary text-white" id="onsale_btn_next"><i class="fa fa-lg fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
		<div class="" id="onsale_products_carousel">
			<?php foreach ($onsale as $product): ?>
				<div class="col col-12 col-xl col-lg-3 col-md-4 col-sm-12 text-center mt-4">
					<div class="card text-center mx-auto">
					<?php if($product['onsale'] == 1){echo "<div class='card-badge bg-danger'>АКЦИЯ!</div>";} ?>
						<a href="/product/<?php echo $product['eng_name']; ?>">
							<img src="/public/media/uploads/<?php echo $product['image']; ?>" class="mx-auto d-block" alt="Product Thumbnail">
						</a>
					<!-- <img src="https://via.placeholder.com/250" class="img-fluid" alt="Product Thumbnail"> -->
						<div class="card-body">
							<div class="card-title align-self-center my-0" data-toggle="tooltip" data-placement="top" title="<?=$product['title'] ?>">
								<a href="/product/<?php echo $product['eng_name']; ?>" class=""><span class="font-title"><?php echo $product['title']; ?></span></a>
							</div>
							<p class="card-text border-top text-warning rating" rating="<?php echo $product['rating']; ?>" style="font-size: 20px;"></p>
							<div class="row card-buttons">
								<div class="col col-9">
									<p class="border rounded price_tablet" style="color: "><b><?php echo number_format($product['price_uah'], 0, ',', ' '); ?> грн</b></p>
								</div>
								<div class="col col-3">
									<button class="btn btn-danger" type="submit" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $product['id']; ?>" data-title="<?php echo $product['title']; ?>" data-eng_name="<?php echo $product['eng_name'];?>" data-price="<?php echo $product['price_uah']; ?>"><i  class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<hr class="w-50">

<div class="container">
	<div class="text-center text-primary my-1">
		<!--<h4>Сфера применения наших услуг по монтажу внутренних и внешних инженерных коммуникаций и систем огромна: от квартир, частных домов, магазинов и офисных помещений до крупных промышленных объектов.</h4>-->
	</div>

<div class="text-center py-3 px-4" style="background: #E6E6FA; border-radius: 10px"><span class="font-weight-bold">Сфера применения наших услуг по монтажу внутренних и внешних инженерных коммуникаций и систем огромна: от квартир, частных домов, магазинов и офисных помещений до крупных промышленных объектов.</a></span></div>

<p></p>

<h4><strong><center><span class="text-danger"><span style="color:#0000CD">Направления нашей деятельности:</span></strong></center></h4>

<ol>
  <span class="font-weight-bold"><li>Все виды автономного отопления в Днепре.</li></span>
  <span class="font-weight-bold"><li>Монтаж систем отопления.</li></span>
  <span class="font-weight-bold"><li>Монтаж систем водоснабжения, канализации и все виды сантехнических работ.</li></span>
  <span class="font-weight-bold"><li>Кондиционирование.</li></span>
  <span class="font-weight-bold"><li>Газификация.</li></span>
  <span class="font-weight-bold"><li>Электрификация.</li></span>
  <span class="font-weight-bold"><li>Продажа отопительного и климатического оборудования, а также комплектующих.</li></span>
  <span class="font-weight-bold"><li>Комплексный ремонт.</li></span>
  <span class="font-weight-bold"><li>Сервис оборудования и инженерных систем.</li></span>
  <span class="font-weight-bold"><li>Оформление/Согласование разрешительной и исполнительно-технической документации.</li></span>
  <span class="font-weight-bold"><li>Инженерное проектирование.</li></span>
</ol>

	<p><center>Таким образом, сотрудничая с нашим предприятием, вы получаете полный объем высококвалифицированных услуг <strong>&laquo;ПОД КЛЮЧ&raquo;</strong>.</center></p>

<p><em><span style="font-size:11px"><!--* - Из-за постоянного изменения курса валют, актуальность цен на оборудование и материалы уточняйте у менеджера.--></span></em></p>

</div>

</div>

<!-- <div class="opros d-none d-lg-block border " id="opros">
	<div class="opros_in">
		<form class="">
			<div class="form-group">
				<label>Какой вид автономного отопления вы используете?</label>
				<input type="radio" aria-label="Radio button for following text input">
				<input type="radio" aria-label="Radio button for following text input">
			</div>
		</form>
	</div>
</div> -->

<!-- Вывод товаров
Текстовка -->

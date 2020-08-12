<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?=$desc;?>">
  <meta property="og:title" content="<?=$title;?>">
  <meta property="og:image" content="<?=$og_image;?>">
  <meta property="og:url" content="<?=$og_url;?>">
  <meta property="og:description" content="<?=$desc;?>">
  <meta property="og:site_name" content="ultraprom.com.ua">

<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52304358-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-52304358-1');
</script>


  <link rel="icon" type="" href="/public/media/img/favicon.ico" />

  <title><?php echo $title; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
	<link href="/public/css/style.css" rel="stylesheet">


</head>

<body>
	<!-- <section>
	    <span class="load" id="preloader"></span>
	</section> -->

	<!-- 1st Menu -->
	<div class='container-fluid bg-primary d-none d-md-block'>
		<div class="container">
			<nav class="nav bg-primary justify-content-center nav-pills"  id='top_menu'>
				<li class="nav-item active">
					<a class="nav-link" href="/">Главная</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/about_us">О Нас</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/heating_system">Автономное отопление</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/services">Услуги</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/catalog">Каталог</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/prices">Прайсы</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/contacts">Контакты</a>
				</li>
			</nav>
		</div>
	</div>
	<!-- 1st Menu mobile -->
	<div class="container-fluid d-md-none w-100" id="first_menu_mobile">
		<div class="navbar navbar-expand-md navbar-dark bg-primary">
			<button class="navbar-toggler ml-auto mr-1" data-toggle="collapse" data-target="#first_menu">
				<span class="text-light">
					<i class="fas fa-bars"></i>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="first_menu">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="/">Главная</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link border-bottom" href="/top_menu/about_us">О Нас</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link border-bottom" href="/top_menu/heating_system">Автономное отопление</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link border-bottom" href="/top_menu/services">Услуги</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link border-bottom" href="/top_menu/catalog">Каталог</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link border-bottom" href="/top_menu/prices">Прайсы</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/top_menu/contacts">Контакты</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Header -->
	<div class='container d-none d-md-block' id='header_container'>
		<div class="row">
			<div class="col-xl-1 col-lg-2 col-md-2 align-self-center">
				<a href="/"><img class="img-fluid" src="/public/media/img/logo_compressed.jpg"></a>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-5 align-self-center">
        <form action="/search_page" method="post">
          <div class="input-group">
  					<input type="text" name="query" class="form-control" id="search" placeholder="Поиск" aria-label="Username" aria-describedby="basic-addon1">
  					<div class="input-group-prepend">
  						<button class="btn btn-primary rounded-right" type="submit"><i class="fas fa-search"></i></span>
  					</div>
  				</div>
        </form>
			</div>
			<div class="col-xl-4 col-lg-3 col-md-3 col-phone align-self-center text-center">
				<div class="row">
					<div class="col col-xl-6 col-md-12">
						<!--<img src="/public/media/img/kyivstar.png"><span> +38 (098) 037-77-11</span>-->
              <img src="/public/media/img/kyivstar.png"><a title="Позвонить" href="tel:+380980377711"><span style="color: #212529"> +38 (098) 037-77-11</span></a>

          </div>
					<div class="col col-xl-6 col-md-12">
						<!--<img src="/public/media/img/mts.png"><span> +38 (050) 881-04-49</span>-->
              <img src="/public/media/img/mts.png"><a title="Позвонить" href="tel:+380508810449"><span style="color: #212529"> +38 (050) 881-04-49</span></a>
					</div>

				</div>
			</div>
			<div class="col-xl-2 col-lg-2 d-none d-lg-block align-self-center">
				<button class="btn btn-danger w-100" data-toggle="modal" data-target="#callback">Звонок</button>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-2 align-self-center">
				<a class="btn" href="/cart">
          <i class="text-danger fas fa-cart-arrow-down"></i>
          <span class="cart_counter bg-primary" style="font-size:12px;"><?php echo $cart_counter; ?></span>
        </a>
			</div>
		</div>
	</div>
	<!-- Header mobile -->
	<div class="container d-md-none header_mobile">
		<div class="row justify-center">
			<div class="col col-3 col-sm-2 align-self-center">
				<a href="/"><img class="img-fluid" src="/public/media/img/logo_compressed.jpg"></a>
			</div>
			<div class="col col-6 col-sm-8 align-self-center text-center">
				<div class="row">
					<div class="col-sm-12">
						<!--<img class="d-none d-md-block" src="/public/media/img/kyivstar.png"><span> +38 (098) 037-77-11</span>-->
              <img class="d-none d-md-block" src="/public/media/img/kyivstar.png"><a title="Позвонить" href="tel:+380980377711"><span style="color: #212529">+38 (098) 037-77-11</span></a>
					</div>
					<div class="col-sm-12">
						<!--<img class="d-none d-md-block" src="/public/media/img/mts.png"><span> +38 (050) 881-04-49</span>-->
              <img class="d-none d-md-block" src="/public/media/img/mts.png"><a title="Позвонить" href="tel:+380508810449"><span style="color: #212529">+38 (050) 881-04-49</span></a>

              <div class="text-center">
                <button class="btn btn-danger w-75 my-1" data-toggle="modal" data-target="#callback">Звонок</button>
              </div>
					</div>
				</div>
			</div>
			<div class="col col-3 col-sm-2 align-self-center pl-0">
				<a class="btn" href="/cart">
          <i class="text-danger fas fa-cart-arrow-down"></i>
          <span class="cart_counter bg-primary" style="font-size:12px;"><?php echo $cart_counter; ?></span>
        </a>
			</div>
		</div>
		<div class="container my-2">
      <form action="/search_page" method="post">
        <div class="input-group">
          <input type="text" class="form-control" name="query" id="search" placeholder="Поиск" aria-label="Username" aria-describedby="basic-addon1">
          <div class="input-group-prepend">
            <button class="btn btn-primary rounded-right" type="submit"><i class="fas fa-search"></i></span>
          </div>
        </div>
      </form>
		</div>
	</div>

	<!-- 2nd Menu -->
	<div class="container-fluid bg-primary d-none d-lg-block">
		<div class="container" id='main_menu'>
			<nav class="nav bg-primary nav justify-content-center nav-pills">
        <?php $a = 1;?>
        <?php foreach ($menu as $gc): ?>
          <?php $i = ($a*10)+1; $j = ($a*10)+1; ?>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle active" data-toggle="dropdown" href=""><?php echo $gc['gc_name']; ?></a>
              <div class="dropdown-menu">
                <div class="row">
                  <div class="col col-sm-3 to_hover bg-primary">
                    <ul>
                      <?php foreach ($gc['info'] as $c): ?>
                        <li class="menu_link"><a class="text-light" href="/gcatalog/<?=$c['eng_name']; ?>" id="<?php echo $i; $i++;?>"><?php echo $c['c_name'] ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <div class="col col-sm-9">
                    <?php foreach ($gc['info'] as $c): ?>
                      <div class="menu_items_<?php echo $j; $j++; ?> to_hide">
                        <div class="row">
                          <?php foreach ($c['info'] as $lc): ?>
                            <div class="col col-sm-4 text-center menu_item_block">
                              <a href="/catalog/<?php echo $lc['eng_name'] ?>">
                                <div class="title">
                                  <?php echo $lc['lc_name'] ?>
                                </div>
                                <div class="image mx-auto d-block">
                                  <img style="width: 100px; height: 100px;" src="/public/media/uploads/<?php echo $lc['lc_image']; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $lc['lc_name'] ?>">
                                </div>
                              </a>
                            </div>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </a>
          </li>
        <?php $a++;?>
        <?php endforeach; ?>
			</nav>
		</div>
	</div>
	<!-- 2nd Menu mobile -->
	<div class="container-fluid d-lg-none" id="second_menu_mobile">
		<div class="navbar navbar-expand-lg navbar-dark bg-primary">
			<!-- <a class="navbar-brand " style="font-size: 22px;">Категории</a> -->
			<button class="navbar-toggler ml-auto mr-1" data-toggle="collapse" data-target="#second_menu">
				<span class="text-light">
					<i class="fas fa-bars"></i>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="second_menu">
				<ul class="navbar-nav">

          <?php foreach ($menu as $gc): ?>
            <?php $b = 1; ?>
            <li class="nav-item dropdown">
  						<a class="nav-link dropdown-toggle bg-primary headers border-bottom" data-toggle="dropdown" data-target="dropdown_target" id="<?=$b; ?>">
  							<?=$gc['gc_name']; ?>
  						</a>
  						<ul class="dropdown-menu bg-primary border-0" aria-labelledby="1">
  							<li class="dropdown-submenu">
                  <?php foreach ($gc['info'] as $c): ?>
                    <a class="dropdown-item bg-primary text-light non-headers border-bottom" href="/gcatalog/<?=$c['eng_name']; ?>"><?=$c['c_name']; ?></a>
                    <!-- <ul class="dropdown-menu bg-primary border-0">
                      <?php foreach ($c['info'] as $lc): ?>
                        <li>
                          <a href="/catalog/<?=$cl['eng_name']; ?>" class="dropdown-item text-light border-bottom"><?=$cl['lc_name']; ?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul> -->
                  <?php endforeach; ?>
                </li>
              </ul>
            </li>
          <?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>


<!-- MODAL -->
<div class="modal fade special-font" id="callback">
		<div class="modal-dialog modal-dialog-centered" role="document" >
				<div class="modal-content" style="background-color: #4CA2FF;">
						<div class="modal-header text-center">
								<h3 class="text-white">Всегда готовы перезвонить</h3>
								<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
								</button>
						</div>
						<div class="container" >
								<form class="form mt-1 callback_form_modal" id="callback_form">
										<div class="form-group-lg">
												<label class="text-white">Телефон</label>
												<input type="text" id="phone" required class="form-control form-control-lg text-center my-2 phone" name="phone" placeholder="+38(___) ___-____" autocomplete="off">
												<label class="text-white">Комментарий</label>
												<textarea type="text" id="comment" class="form-control form-control-lg my-2" name="comment" rows="4"></textarea>
												<div class="text-center">
													<button onclick="fbq_onClick()" type="submit" class="btn btn-lg btn-outline-success btn-success text-white mt-1 mb-2 btn-callback" data-product="">Перезвоните</button>
												</div>
												<div class="h3 text-center modal-texts text-white d-none my-2">Отлично! Сейчас перезвоним</div>
										</div>
								</form>
						</div>
				</div>
		</div>
</div>

<div class="wrapper" style="min-height:65%;">
	<?php echo $content; ?>
</div>

<!-- <div class="gapper"></div> -->
<hr class="w-50">


<div class="container-fluid d-none d-lg-block">
	<div class="container">
		<div class="row bg-white py-3">
			<div class="col-lg-2 col-xl-2">
				<a href="/"><img class="img-fluid" src="/public/media/img/logo.jpg" alt=""></a>
			</div>
			<div class="col-lg-5 col-xl-5">
				<div class="row">
					<div class="col-6">
						<span><h5>Покупателю</h5></span>
						<span><a href="/top_menu/about_us">О Нас<br></a></span>
						<span><a href="/top_menu/services">Услуги<br></a></span>
						<!-- <span><a href="">Доставка<br></a></span> -->
						<span><a href="/top_menu/contacts">Контакты<br></a></span>
					</div>
					<div class="col-6">
						<span><h5>Ассортимент</h5></span>
						<span><a href="/top_menu/catalog">Бренды<br></a></span>
						<span><a href="/">Акции<br></a></span>
						<span><a href="/">Популярное<br></a></span>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-xl-2">
				<span><h5>График работы</h5></span>
				<span>Пн-Сб: 8:00-18:00<br></span>
				<span>Вс: Выходной<br></span>
			</div>
			<div class="col-lg-3 col-xl-3">
				<span><h5>Телефоны</h5></span>
				<!--<img src="/public/media/img/kyivstar.png"><span> +38 (098) 037-77-11</span><br>-->
                                <img src="/public/media/img/kyivstar.png"><a title="Позвонить" href="tel:+380980377711"><span style="color: #212529"> +38 (098) 037-77-11</span></a><br>
                                <!--<img src="/public/media/img/mts.png"><span> +38 (050) 881-04-49</span>-->
                                <img src="/public/media/img/mts.png"><a title="Позвонить" href="tel:+380508810449"><span style="color: #212529"> +38 (050) 881-04-49</span></a>
			</div>
		</div>
    <div class="row bg-white pb-3 justify-content-center">
      <div class="col-4 text-right">
        <h5 class="text-primary text-center">"Ультрапром" в социальных сетях! Присоединяйтесь!</h5>
      </div>
<!--
       <div class="col-1">
        <div style="max-height: 45px; max-width: 45px;">
          <a href="https://www.facebook.com/otopleniye.dnepr" class="-auto">
            <img class="img-fluid" src="/public/media/uploads/fb.png" alt="">
          </a>
        </div>
      </div>


        <div class="col-1">
        <div style="max-height: 55px; max-width: 55px;">
          <a href="https://www.instagram.com/ultraprom.dnepr" class="-auto">
            <img class="img-fluid" src="/public/media/uploads/ig.jpeg" alt="">
          </a>
        </div>
      </div>

      <div class="col-1">
        <div style="max-height: 50px; max-width: 50px;">
          <a href="https://twitter.com/ultraprom_ua" class="-auto">
            <img class="img-fluid" src="/public/media/uploads/tw.jpeg" alt="">
          </a>
        </div>
      </div>


      <div class="col-1">
        <div style="max-height: 50px; max-width: 50px;">
          <a href="https://vk.com/ultraprom" class="-auto">
            <img class="img-fluid" src="/public/media/uploads/vk.png" alt="">
          </a>
        </div>
      </div>

      <div class="col-1">
        <div style="max-height: 50px; max-width: 50px;">
          <a href="https://www.youtube.com/channel/UCB9W6HCqv7tBKcZRJxAsPdw/" class="-auto">
            <img class="img-fluid" src="/public/media/uploads/you_tube.jpg" alt="">
          </a>
        </div>
      </div>
-->

<div class="col-1">
        <div style="max-height: 60px; max-width: 60px;">
          <a href="https://www.facebook.com/otopleniye.dnepr" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Facebook" src="/public/media/uploads/F_ULTRA.jpg" alt="Страница Ультрапром в Facebook">
          </a>
        </div>
      </div>


        <div class="col-1">
        <div style="max-height: 60px; max-width: 60px;">
          <a href="https://www.instagram.com/ultraprom.dnepr" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Instagram" src="/public/media/uploads/INST_ULTRA.jpg" alt="Страница Ультрапром в Instagram">
          </a>
        </div>
      </div>

      <div class="col-1">
        <div style="max-height: 60px; max-width: 60px;">
          <a href="https://twitter.com/ultraprom_ua" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Twitter" src="/public/media/uploads/TWI_ULTRA.jpg" alt="Страница Ультрапром в Twitter">
          </a>
        </div>
      </div>

      <div class="col-1">
        <div style="max-height: 60px; max-width: 60px;">
          <a href="https://www.youtube.com/channel/UCB9W6HCqv7tBKcZRJxAsPdw/" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Youtube" src="/public/media/uploads/YOU_TUBE_ULTRA.jpg" alt="Страница Ультрапром в Youtube">
          </a>
        </div>
      </div>

    </div>
	</div>
</div>

<div class="d-block d-lg-none">
  <div class="row m-3">
    <div class="col-md-3 col-sm-4 col-4 my-auto">
			<a href="/"><img class="img-fluid" src="/public/media/img/logo.jpg" alt=""></a>
    </div>
    <div class="col-md-5 col-sm-8 col-8">
      <span><h5>График работы</h5></span>
      <span>Пн-Сб: 8:00-18:00<br></span>
      <span>Вс: Выходной<br></span>
      <span></span>
      <span><h5>Телефоны</h5></span>
      <!--<img src="/public/media/img/kyivstar.png"><span> +38 (098) 037-77-11</span><br>-->
      <img src="/public/media/img/kyivstar.png"><a title="Позвонить" href="tel:+380980377711"><span style="color: #212529"> +38 (098) 037-77-11</span></a><br>
      <!--<img src="/public/media/img/mts.png"><span> +38 (050) 881-04-49</span>-->
      <img src="/public/media/img/mts.png"><a title="Позвонить" href="tel:+380508810449"><span style="color: #212529"> +38 (050) 881-04-49</span></a>
    </div>
    <!-- MD -->
    <div class="col-md-4 d-none d-md-block">
      <div class="my-auto text-center">
        <h5 class="text-primary">"Ультрапром" в социальных сетях! Присоединяйтесь!</h5>
      </div>
      <div class="row">

        <div class="col-6">
          <div style="max-height: 60px; max-width: 60px;">
          <a href="https://www.facebook.com/otopleniye.dnepr" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Facebook" src="/public/media/uploads/F_ULTRA.jpg" alt="Страница Ультрапром в Facebook">
            </a>
          </div>
        </div>

          <div class="col-6">
          <div style="max-height: 60px; max-width: 60px;">
          <a href="https://www.instagram.com/ultraprom.dnepr" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Instagram" src="/public/media/uploads/INST_ULTRA.jpg" alt="Страница Ультрапром в Instagram">
            </a>
          </div>
        </div>

        <div class="col-6">
          <div style="max-height: 60px; max-width: 60px;">
          <a href="https://twitter.com/ultraprom_ua" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Twitter" src="/public/media/uploads/TWI_ULTRA.jpg" alt="Страница Ультрапром в Twitter">
            </a>
          </div>
        </div>


        <!--<div class="col-6">
          <div style="max-height:45px; max-width:45px;">
            <a href="https://vk.com/ultraprom" class="-auto">
              <img class="img-fluid" src="/public/media/uploads/vk.png" alt="">
            </a>
          </div>
        </div>-->

       <div class="col-6">
        <div style="max-height: 60px; max-width: 60px;">
          <a href="https://www.youtube.com/channel/UCB9W6HCqv7tBKcZRJxAsPdw/" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Youtube" src="/public/media/uploads/YOU_TUBE_ULTRA.jpg" alt="Страница Ультрапром в Youtube">
          </a>
        </div>
      </div>


      </div>
    </div>
    <!-- SM -->
    <div class="col-12 my-3 d-block d-md-none">
      <div class="my-2 text-center">
        <h5 class="text-primary">"Ультрапром" в социальных сетях! Присоединяйтесь!</h5>
      </div>
      <div class="row">

         <div class="col">
          <div style="max-height: 60px; max-width: 60px;">
          <a href="https://www.facebook.com/otopleniye.dnepr" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Facebook" src="/public/media/uploads/F_ULTRA.jpg" alt="Страница Ультрапром в Facebook">
            </a>
          </div>
        </div>

        <div class="col">
          <div style="max-height: 60px; max-width: 60px;">
          <a href="https://www.instagram.com/ultraprom.dnepr" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Instagram" src="/public/media/uploads/INST_ULTRA.jpg" alt="Страница Ультрапром в Instagram">
            </a>
          </div>
        </div>

        <div class="col">
          <div style="max-height: 60px; max-width: 60px;">
          <a href="https://twitter.com/ultraprom_ua" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Twitter" src="/public/media/uploads/TWI_ULTRA.jpg" alt="Страница Ультрапром в Twitter">
            </a>
          </div>
        </div>

       <!-- <div class="col">
          <div style="max-height:45px; max-width:45px;">
            <a href="https://vk.com/ultraprom" class="-auto">
              <img class="img-fluid" src="/public/media/uploads/vk.png" alt="">
            </a>
          </div>
        </div>-->

       <div class="col">
        <div style="max-height: 60px; max-width: 60px;">
          <a href="https://www.youtube.com/channel/UCB9W6HCqv7tBKcZRJxAsPdw/" class="-auto">
            <img class="img-fluid" title="Страница Ультрапром в Youtube" src="/public/media/uploads/YOU_TUBE_ULTRA.jpg" alt="Страница Ультрапром в Youtube">
          </a>
        </div>
      </div>

      </div>

    </div>
  </div>
</div>

<!--share42 ВЫКЛЮЧЕНО-->
<!--<div class="share42init" data-top1="350" data-top2="5" data-margin="5"></div>-->
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>

<!--<script type="text/javascript" src="/public/vendor/share42/share42.js"></script>-->
<!--share42 ВЫКЛЮЧЕНО-->

<!--http://uptolike.ru ВКЛЮЧЕНО-->

<script type="text/javascript">(function(w,doc) {
if (!w.__utlWdgt ) {
    w.__utlWdgt = true;
    var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
}})(window,document);
</script>
<div data-mobile-view="true" data-share-size="30" data-like-text-enable="false" data-background-alpha="0.0" data-pid="1872738" data-mode="share" data-background-color="#ffffff" data-hover-effect="scale" data-share-shape="round-rectangle" data-share-counter-size="12" data-icon-color="#ffffff" data-mobile-sn-ids="fb.tm.vb.wh.tw.vk.ln.em." data-text-color="#000000" data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-type="disable" data-orientation="fixed-right" data-following-enable="false" data-sn-ids="fb.tm.vb.wh.tw.vk.ln.em." data-preview-mobile="false" data-selection-enable="true" data-exclude-show-more="false" data-share-style="4" data-counter-background-alpha="1.0" data-top-button="false" class="uptolike-buttons" ></div>
<!--http://uptolike.ru ВКЛЮЧЕНО-->

	<!-- Bootstrap core JavaScript -->
	<script src="/public/vendor/jquery/jquery.min.js"></script>
	<script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/public/js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="/public/vendor/slick-1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/public/vendor/slick-1.8.1/slick/slick-theme.css"/>
	<script type="text/javascript" src="/public/vendor/slick-1.8.1/slick/slick.min.js"></script>
	<script src="/public/vendor/jquery.maskedinput.min.js"></script>
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<script>

	</script>

</body>

</html>

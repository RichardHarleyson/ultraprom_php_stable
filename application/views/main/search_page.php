<div class="gapper"></div>

<div class="container">
  <h3 class="text-primary">Результаты Поиска</h3>

  <div class="gapper"></div>

  <div class="container">
    <div class="row">
      <?php if(empty($result)){ echo '<h5>Нет результатов по данному запросу</h5>' ;} ?>
      <?php foreach ($result as $r): ?>
        <div class="col col-12 col-xl col-lg-3 col-md-4 col-sm-12 text-center mt-4" style="min-width: 230px;">
          <div class="card text-center mx-auto">
						<?php if($r['onsale'] == 1){echo "<div class='card-badge bg-danger'>АКЦИЯ!</div>";} ?>
						<a href="product/<?php echo $r['eng_name']; ?>">
							<img src="/public/media/uploads/<?php echo $r['image']; ?>" class="mx-auto d-block" alt="Product Thumbnail">
						</a>
						<div class="card-body">
							<div class="card-title align-self-center my-0" data-toggle="tooltip" data-placement="top" title="<?=$r['title'] ?>">
								<a href="/product/<?php echo $r['eng_name']; ?>" class=""><span class="font-title"><?php echo $r['title']; ?></span></a>
							</div>
							<p class="card-text border-top text-warning rating" rating="<?php echo $r['rating']; ?>" style="font-size: 20px;"></p>
							<div class="row card-buttons">
								<div class="col col-9">
									<p class="border rounded price_tablet"><b><?php echo number_format($r['price_uah'], 0, ',', ' '); ?> грн</b></p>
								</div>
								<div class="col col-3">
									<button class="btn btn-danger" type="submit" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $r['id']; ?>" data-title="<?php echo $r['title']; ?>" data-price="<?php echo $r['price_uah']; ?>"><i  class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="gapper"></div>

<div class="container">
  <div class="my-3 text-primary text-center">
    <h1 class=h1-1-1-1><?=$category[0]['c_name']; ?></h1>
  </div>
  <div class="my-3">
    <div class="row">
      <?php foreach ($lcategory as $item): ?>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 p-2 mx-auto">
          <div class="mx-auto">
            <a href="/catalog/<?=$item['eng_name']; ?>">
              <div class="card m-auto border-0 shadow-sm p-1 mb-5 bg-white rounded">
                <div class="mx-auto">
                  <div class="mx-auto" style="width: 120px; height: 120px;">
                    <img class="img-fluid" src="/public/media/uploads/<?=$item['lc_image']; ?>" class="mx-auto" alt="">
                  </div>
                  <div class="card-body text-center">
                    <h6 class="card-title"><?=$item['lc_name']; ?></h6>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>



<!--<div class="gapper"></div>

<div class="container">
	<div class="text-center">
		<h2 class=h2-2><strong><center><span class="text-danger"><span style="color:#0000CD">Отопительные котлы</span></strong></center></h2>
	</div>
	<div class="gapper"></div>
	<div class="">
		
			
	
		<p><em><span style="font-size:11px"></span></em></p>
	</div>

</div>-->
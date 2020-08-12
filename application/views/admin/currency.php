<div class="PageType_Currency" id="PageType"></div>
<div class="gapper"></div>

<div class="container text-primary mb-4">
	<h1>Панель Валют</h1>
</div>

<div class="container">
	<div class="col-5">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Валюта</th>
		      <th scope="col">Покупка</th>
		      <th scope="col">Продажа</th>
		    </tr>
		  </thead>
		  <tbody>
				<?php foreach ($vars['currency']as $item => $content): ?>
					<tr>
						<td><?php echo $content->ccy;?></td>
			      <td id="<?php echo $content->ccy; ?>_buy" data-buy="<?php echo floatval($content->buy)?>"><?php echo floatval($content->buy)?></td>
			      <td id="<?php echo $content->ccy; ?>_sale" data-sale="<?php echo floatval($content->sale)?>"><?php echo floatval($content->sale)?></td>
			    </tr>
				<?php endforeach; ?>
		  </tbody>
		</table>
		<div class="button_block w-100 text-center">
				<button class="btn btn-primary w-50 mx-auto" type="button" id="set_curr_auto" name="set_curr_auto">Установить</button>
		</div>
		<div id="auto_status" class="text-success text-center"></div>

		<div class="gapper"></div>

	</div>
</div>

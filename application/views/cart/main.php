<div class="gapper"></div>
<div class="container">
	<?php
	$total_price = 0;
	if(empty($data)){
		echo '
		<h2>Корзина пока пуста</h2>
		<div class="gapper"></div>
		';
	}else{
		echo '
		<h2>Корзина</h2>
		<div class="gapper"></div>
		<table class="table table-responsive-sm">
			 <thead>
				 <tr>
					 <th scope="col">Наименование</th>
					 <th scope="col">Цена</th>
					 <th scope="col">Количество</th>
					 <th scope="col">Итого</th>
					 <th scope="col"></th>
				 </tr>
			 </thead>
			 <tbody>';
			 $index =0;
			 foreach ($data as $item){
				 echo '
				 <tr>
		       <td><a href="/product/'.$item['eng_name'].'">'.$item['title'].'</a></td>
		       <td>'.number_format($item['price_uah'], 0, ',', ' ').' грн.</td>
					<td class="">
		 				<input type="number" class="form-control cart_quantity" step="1"  min="1" data-index="'.$index.'" value="'.$item['quantity'].'" data-price="'.$item['price_uah'].'" style="width: 85px;">
		 			</td>
					<td><div class="item_total_price" data-index="'.$index.'">'.number_format($item['price_uah'], 0, ',', ' ').' грн.</div></td>
		 			<td>
		 				<button class="btn btn-danger" onclick="delete_item(this)" data-index="'.$index.'"><i class="fas fa-trash-alt"></i></button>
		 			</td>
		     </tr>';
				 $index++;
				 $total_price += $item['price_uah'];
			 }
			 echo '
			 <tr>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td>
				 	<button class="btn btn-danger" type="button" onclick="delete_all()"><i class="fas fa-trash-alt"></i></button>
				 </td>
			 </tr>
			 </tbody>
		 		</table>';
	}
	?>

<!-- Modal -->
<div id="cart_order" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title float-left" id="myModalLabel">Форма заказа</h4>
				<button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
      </div>
      <div class="modal-body">
				<div class="my-2">
					<form id="cart_order_form">
						<h4>Доставка</h4>
						<div class="form-group">
					    <label>Ваше Имя</label>
					    <input required type="text" class="form-control" name="uname">
					  </div>
						<div class="form-group">
							<label>Телефон</label>
							<input required type="text" class="form-control" name="uphone">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input required type="text" class="form-control" name="umail">
						</div>
						<div class="form-group">
							<label>Город</label>
							<input required type="text" class="form-control" name="ucity">
						</div>
						<div class="form-group">
							<label>Адрес</label>
							<input type="text" class="form-control" name="uaddr">
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="uhow" value="Доставка курьером по городу" checked>
						  <label class="form-check-label">
						    Доставка курьером по городу
						  </label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="uhow" value="Доставка курьерской клужбой">
							<label class="form-check-label">
								Доставка курьерской клужбой
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="uhow" value="Самовывоз">
							<label class="form-check-label">
								Самовывоз
							</label>
						</div>
						<hr>
						<h4>Оплата</h4>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="upay" value="Наличные курьеру" checked>
							<label class="form-check-label">
								Наличные курьеру
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="upay" value="Оплата на карту(после подтверждения менеджером)">
							<label class="form-check-label">
								Оплата на карту(после подтверждения менеджером)
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="upay" value="Наличные при самовывозе">
							<label class="form-check-label">
								Наличные при самовывозе
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="upay" value="Банковский перевод">
							<label class="form-check-label">
								Банковский перевод
							</label>
						</div>
						<hr>
						<div class="form-group my-2">
							<label>Комментарий к заказу</label>
							<textarea name="ucomment" class="form-control" rows="2"></textarea>
						</div>
						<hr>
						<input  type="hidden" name="total_price" data-total_price="<?php echo $total_price ?>">
						<div class="total_price float-right">
							<h4>Итого: <span><?php echo number_format($total_price, 0, ',', ' ') ?></span> грн.</h4>
						</div>
					</form>
				</div>
      </div>
			<div class="my-3 text-center" id="cart_order_status">

			</div>
      <div class="modal-footer text-center">
        <button class="btn btn-primary mx-auto" onclick="cart_order()">Оформить заказ</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal-End -->

	<div class="row cart_bottom">
		<div class="col col-12 col-lg-5 col-xl-5 align-self-center">
			<div class="btn-group w-100">
				<button class="btn btn-primary w-50" type="button" name="button" onclick="location.href='/';"><b>Продолжить покупки</b></button>
				<button class="btn btn-danger w-50" type="button" data-toggle="modal" data-target="#cart_order"><b>Произвести заказ</b></button>
			</div>
		</div>
		<div class="col col-12 col-lg-5 col-xl-5 text-center align-self-center total_price">
			<h4>Общая стоимость: <span><?php echo number_format($total_price, 0, ',', ' ') ?></span> грн.</h4>
		</div>
	</div>
</div>

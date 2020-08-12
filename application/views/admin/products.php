<div class="gapper"></div>

<div class="container text-primary">
	<h1>Панель Товаров</h1>
</div>

<div class="container">
	<p>
	  <button class="btn btn-primary" data-toggle="collapse" href="#add_product" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Добавить Товар</button>
	  <button class="btn btn-primary" data-toggle="collapse" data-target="#product_list" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Список Товаров</button>
	</p>
</div>

<div class="collapse mx-5" id="add_product">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<h4 class="text-danger">Добавить товар</h4>
				<form id="create_product" method="post">
					<div class="form-group">

						<label>Название</label>
						<input name="title" class="form-control">

						<label>Фото</label>
						<!-- <div class="custom-file">
							<input name="photo" type="file" class="custom-file-input">
							<label class="custom-file-label"></label>
						</div> -->
						<div class="form-group">
							<input type="file" name="photo">
						</div>

						<label>Артикул</label>
						<input name="article" class="form-control">

						<!-- <input type="file" hidden name="hidden_file"> -->

						<label>Цена</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<input name="price" class="form-control">
							</div>
							<select name="currency" class="custom-select">
								<option value="2">&#36;</option>
								<option value="3">&euro;</option>
								<option value="1">&#8372;</option>
							</select>
						</div>

						<label>Рейтинг</label>
						<select name="rating" class="custom-select">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>

						<label>Категория</label>
						<select name="category" class="custom-select">
							<option value="0">. . .</option>
							<?php foreach ($categories as $category){
								echo "<option value=".$category['id'].">".$category['lc_name']."</option>";
							}?>
						</select>

						<label>Свойства для Фильтра</label>
						<div class="filter_info" id="filter_info">

							<div class="input-group" id="filter_manufacturer">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Производитель</span>
								</div>
								<select class="custom-select" name="filter_manufacturer">
									<?php foreach ($manufacturers as $m): ?>
										<option value="<?=$m['m_name']?>" data-m_id="<?=$m['id']; ?>" data-category="<?=$m['c_id']; ?>"><?=$m['m_name'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="input-group" id="filter_country">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Страна Прозводитель</span>
								</div>
								<select class="custom-select" name="filter_country">
									<option value="Великобритания" selected>Великобритания</option>
									<option value="Германия">Германия</option>
									<option value="Дания">Дания</option>
									<option value="Италия">Италия</option>
									<option value="Венгрия">Венгрия</option>
									<option value="Корея">Корея</option>
									<option value="Франция">Франция</option>
									<option value="Турция">Турция</option>
									<option value="Китай">Китай</option>
									<option value="Украина">Украина</option>
									<option value="Словакия">Словакия</option>
									<option value="Португалия">Португалия</option>
									<option value="Польша">Польша</option>
									<option value="Чехия">Чехия</option>
									<option value="Норвегия">Норвегия</option>
									<option value="Румыния">Румыния</option>
									<option value="Малайзия">Малайзия</option>
									<option value="Япония">Япония</option>
									<option value="Гонконг">Гонконг</option>
									<option value="Швеция">Швеция</option>
									<option value="Таиланд">Таиланд</option>
									<option value="Болгария">Болгария</option>
									<option value="Македония">Македония</option>
									<option value="Словения">Словения</option>
									<option value="Испания">Испания</option>
									<option value="Австрия">Австрия</option>
								</select>
							</div>

							<div class="input-group" id="filter_contur">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Контура</span>
								</div>
									<select class="custom-select" name="filter_contur">
										<option value="Одноконтурный" selected>Одноконтурный</option>
										<option value="Двухконтурный">Двухконтурный</option>
										<option value="Двухконтурны с Бойлером">Двухконтурны с Бойлером</option>
									</select>
							</div>

							<div class="input-group" id="filter_contur_count">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Количество контуров</span>
								</div>
									<select class="custom-select" name="filter_contur_count">
										<option value="2" selected>2</option>
										<option value="3">3</option>
										<option value="2 - 4">2 - 4</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="5 - 7">5 - 7</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="8 - 10">8 - 10</option>
										<option value="10">10</option>
										<option value="Свыше 10">Свыше 10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
							</div>

							<div class="input-group" id="filter_power">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тепловая мощность</span>
								</div>
								<select class="custom-select" name="filter_power">
									<option value="До 20 кВт" selected>До 10 кВт</option>
									<option value="До 20 кВт">До 20 кВт</option>
									<option value="20 - 24 кВт">20 - 24 кВт</option>
									<option value="24 - 30 кВт">24 - 30 кВт</option>
									<option value="30 – 40 кВт">30 – 40 кВт</option>
									<option value="Свыше 40 кВт">Свыше 40 кВт</option>
									<option value=""></option>
									<option value="40 – 50 кВт">40 – 50 кВт</option>
									<option value="50 - 100 кВт">50 - 100 кВт</option>
									<option value="60 - 100 кВт">60 - 100 кВт</option>
									<option value="Свыше 100 кВт">Свыше 100 кВт</option>
								</select>
							</div>

							<div class="input-group" id="filter_epower_int">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Электрическая мощность</span>
								</div>
								<select class="custom-select" name="filter_epower_int">
									<option value="3" selected>3</option>
									<option value="3,5">3,5</option>
									<option value="4">4</option>
									<option value="4,5">4,5</option>
									<option value="5">5</option>
									<option value="5,5">5,5</option>
									<option value="6">6</option>
									<option value="6,5">6,5</option>
									<option value="7">7</option>
									<option value="8-10">8-10</option>
									<option value="10,5">10,5</option>
									<option value="11-13">11-13</option>
									<option value="14-20">14-20</option>
									<option value="14">14</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="30">30</option>
									<option value="47">47</option>
								</select>
							</div>

							<div class="input-group" id="filter_epower">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Электрическая мощность</span>
								</div>
								<select class="custom-select" name="filter_epower">
									<option value="до 0,5 кВт" selected>до 0,5 кВт</option>
									<option value="0,5 - 0,9 кВт">0,5 - 0,9 кВт</option>
									<option value="1 - 1,5 кВт">1 - 1,5 кВт</option>
									<option value="1,5 - 2 кВт">1,5 - 2 кВт</option>
									<option value="свыше 2 кВт">свыше 2 кВт</option>
									<option value="3 - 5 кВт">3 - 5 кВт</option>
									<option value="6 - 10 кВт">6 - 10 кВт</option>
									<option value="11 - 15 кВт">11 - 15 кВт</option>
									<option value="16 - 20 кВт">16 - 20 кВт</option>
									<option value="21 - 25 кВт">21 - 25 кВт</option>
									<option value="26 - 30 кВт">26 - 30 кВт</option>
									<option value="36 - 40 кВт">36 - 40 кВт</option>
									<option value="41 - 45 кВт">41 - 45 кВт</option>
									<option value="51 - 60 кВт">51 - 60 кВт</option>
								</select>
							</div>

							<div class="input-group" id="filter_burn_cam">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Отвод продуктов сгорания</span>
								</div>
								<select class="custom-select" name="filter_burn_cam">
									<option value="Турбированный (Turbo)" selected>Турбированный (Turbo)</option>
									<option value="Дымоходный (Atmo)">Дымоходный (Atmo)</option>
								</select>
							</div>

							<div class="input-group" id="filter_instaltype">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип инсталляции</span>
								</div>
								<select class="custom-select" name="filter_instaltype">
									<option value="Инсталляция" selected>Инсталляция</option>
									<option value="Комплект">Комплект</option>
									<option value="Комплектующие для инсталляций">Комплектующие для инсталляций</option>
								</select>
							</div>

							<div class="input-group" id="filter_instaldest">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Назначение инсталляции</span>
								</div>
								<select class="custom-select" name="filter_instaldest">
									<option value="Для унитаза" selected>Для унитаза</option>
									<option value="Для биде">Для биде</option>
									<option value="Для раковины">Для раковины</option>
									<option value="Для писсуара">Для писсуара</option>
								</select>
							</div>

							<div class="input-group" id="filter_burn_cam_type">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Отвод продуктов сгорания</span>
								</div>
								<select class="custom-select" name="filter_burn_cam_type">
									<option value="Открытая" selected>Открытая</option>
									<option value="Закрытая">Закрытая</option>
								</select>
							</div>

							<div class="input-group" id="filter_teploobmen">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Теплообменник</span>
								</div>
								<select class="custom-select" name="filter_teploobmen">
									<option value="Битермический" selected>Битермический</option>
									<option value="Раздельный">Раздельный</option>
								</select>
							</div>

							<div class="input-group" id="filter_heating_square">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Отапливаемая площадь</span>
								</div>
								<select class="custom-select" name="filter_heating_square">
									<option value="До 50 м2">До 50 м2</option>
									<option value="До 80 м2">До 80 м2</option>
									<option value="До 100 м2">До 100 м2</option>
									<option value=""></option>
									<option value="До 120 м2">До 120 м2</option>
									<option value="До 200 м2">До 200 м2</option>
									<option value="До 250 м2">До 250 м2</option>
									<option value="До 300 м2">До 300 м2</option>
									<option value="До 400 м2">До 400 м2</option>
									<option value="Свыше 400 м2">Свыше 400 м2</option>
									<option value=""></option>
									<option value="До 500 м2">До 500 м2</option>
									<option value="Свыше 500 м2">Свыше 500 м2</option>
									<option value=""></option>
									<option value="До 600 м2">До 600 м2</option>
									<option value="До 800 м2">До 800 м2</option>
									<option value="Свыше 800 м2">Свыше 800 м2</option>
								</select>
							</div>

							<div class="input-group" id="filter_tteploobmen">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Теплообменник</span>
								</div>
								<select class="custom-select" name="filter_tteploobmen">
									<option value="Стальной" selected>Стальной</option>
									<option value="Чугунный">Чугунный</option>
								</select>
							</div>

							<div class="input-group" id="filter_nasos">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Насос</span>
								</div>
								<select class="custom-select" name="filter_nasos">
									<option value="Есть" selected>Есть</option>
									<option value="Нет">Нет</option>
								</select>
							</div>

							<div class="input-group" id="filter_napryajenie">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Напряжение Питания, В</span>
								</div>
								<select class="custom-select" name="filter_napryajenie">
									<option value="220" selected>220</option>
									<option value="380">380</option>
									<option value="220-380">220-380</option>
								</select>
							</div>

							<div class="input-group" id="filter_montaj">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Монтажа</span>
								</div>
								<select class="custom-select" name="filter_montaj">
									<option value="Напольные" selected>Напольный</option>
									<option value="Настенный">Настенный</option>
								</select>
							</div>

							<div class="input-group" id="filter_rozjig">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Розжига</span>
								</div>
								<select class="custom-select" name="filter_rozjig">
									<option value="Электро" selected>Электро</option>
									<option value="Пьезо">Пьезо</option>
									<option value="Батарейки">Батарейки</option>
									<option value="Турбинка">Турбинка</option>
								</select>
							</div>

							<div class="input-group" id="filter_otvod">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Способ Отвода Газов</span>
								</div>
								<select class="custom-select" name="filter_otvod">
									<option value="Турбированный (Turbo)" selected>Турбированный (Turbo)</option>
									<option value="Дымоходный">Дымоходный</option>
									<option value="Парапетный">Парапетный</option>
								</select>
							</div>

							<div class="input-group" id="filter_controller">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Управление</span>
								</div>
								<select class="custom-select" name="filter_controller">
									<option value="Механическое" selected>Механическое</option>
									<option value="Электронное">Электронное</option>
									<option value="Сенсорное">Сенсорное</option>
									<option value="Электромеханическое">Электромеханическое</option>
								</select>
							</div>


							<div class="input-group" id="filter_rad_type">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип</span>
								</div>
								<select class="custom-select" name="filter_rad_type">
									<option value="Тип 11" selected>Тип 11</option>
									<option value="Тип 22">Тип 22</option>
									<option value="Тип 33">Тип 33</option>
								</select>
							</div>

							<div class="input-group" id="filter_rad_height">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Высота</span>
								</div>
								<select class="custom-select" name="filter_rad_height">
									<option value="200" selected>200</option>
									<option value="300">300</option>
									<option value="400">400</option>
									<option value="500">500</option>
									<option value="600">600</option>
									<option value="900">900</option>
								</select>
							</div>

							<div class="input-group" id="filter_rad_length">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Длинна</span>
								</div>
								<select class="custom-select" name="filter_rad_length">
									<option value="400" selected>400</option>
									<option value="500">500</option>
									<option value="600">600</option>
									<option value="700">700</option>
									<option value="800">800</option>
									<option value="900">900</option>
									<option value="1000">1000</option>
									<option value="1100">1100</option>
									<option value="1200">1200</option>
									<option value="1300">1300</option>
									<option value="1400">1400</option>
									<option value="1500">1500</option>
									<option value="1600">1600</option>
									<option value="1700">1700</option>
									<option value="1800">1800</option>
									<option value="1900">1900</option>
									<option value="2000">2000</option>
									<option value="2100">2100</option>
									<option value="2200">2200</option>
									<option value="2300">2300</option>
									<option value="2400">2400</option>
									<option value="2500">2500</option>
									<option value="2600">2600</option>
									<option value="2700">2700</option>
									<option value="2800">2800</option>
									<option value="2900">2900</option>
									<option value="3000">3000</option>
								</select>
							</div>

							<div class="input-group" id="filter_rad_conn">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Подключение</span>
								</div>
								<select class="custom-select" name="filter_rad_conn">
									<option value="Боковое" selected>Боковое</option>
									<option value="Нижнее">Нижнее</option>
									<option value="Над мойкой">Над мойкой</option>
									<option value="Под мойкой">Под мойкой</option>
								</select>
							</div>

							<div class="input-group" id="filter_apex">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Межосевое расстояние</span>
								</div>
								<select class="custom-select" name="filter_apex">
									<option value="200" selected>200</option>
									<option value="300">300</option>
									<option value="350">350</option>
									<option value="500">500</option>
									<option value="800">800</option>
									<option value="900">900</option>
									<option value="1000">1000</option>
									<option value="1200">1200</option>
									<option value="1400">1400</option>
									<option value="1600">1600</option>
									<option value="1800">1800</option>
									<option value="2000">2000</option>
								</select>
							</div>

							<div class="input-group" id="filter_rad_sec">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Количество Секций</span>
								</div>
								<select class="custom-select" name="filter_rad_sec">
									<option value="3" selected>3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>

							<div class="input-group" id="filter_deep_sec">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Глубина секций</span>
								</div>
								<select class="custom-select" name="filter_deep_sec">
									<option value="80" selected>80</option>
									<option value="85">85</option>
									<option value="88">88</option>
									<option value="90">90</option>
									<option value="96">96</option>
									<option value="100">100</option>
								</select>
							</div>

							<div class="input-group" id="filter_rad_elem_comp">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Комплектации</span>
								</div>
								<select class="custom-select" name="filter_rad_elem_comp">
									<option value="Кран Маевского" selected>Кран Маевского</option>
									<option value="Напольный крепеж">Напольный крепеж</option>
									<option value="Настенный крепеж">Настенный крепеж</option>
									<option value="Кронштейн угловой">Кронштейн угловой</option>
									<option value="Кронштейн анкерный">Кронштейн анкерный</option>
									<option value="Решетка конвектора">Решетка конвектора</option>
									<option value="Присоединительный набор">Присоединительный набор</option>
									<option value="Кронштейн для сушки белья">Кронштейн для сушки белья</option>
								</select>
							</div>

							<div class="input-group" id="filter_rad_kind">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Радиатора</span>
								</div>
								<select class="custom-select" name="filter_rad_kind">
									<option value="Чугунные" selected>Чугунные</option>
									<option value="Панельные">Панельные</option>
									<option value="Секционные">Секционные</option>
									<option value="Внутрипольные">Внутрипольные</option>
								</select>
							</div>

							<div class="input-group" id="filter_rad_eradius">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Диаметр подключения</span>
								</div>
								<select class="custom-select" name="filter_rad_eradius">
									<option value="1" selected>1</option>
									<option value="1/2">1/2</option>
									<option value="3/4">3/4</option>
								</select>
							</div>

							<div class="input-group" id="filter_pressure">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Рабочее давление</span>
								</div>
								<select class="custom-select" name="filter_pressure">
									<option value='10' selected>10</option>
									<option value='12'>12</option>
									<option value='14'>14</option>
								</select>
							</div>

							<div class="input-group" id="filter_crantype">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Вид крана</span>
								</div>
								<select class="custom-select" name="filter_crantype">
									<option value='Прямой' selected>Прямой</option>
									<option value='Угловой'>Угловой</option>
									<option value='Термоголовка'>Термоголовка</option>
								</select>
							</div>

							<div class="input-group" id="filter_pipe_rad">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Диаметр Трубы</span>
								</div>
								<select class="custom-select" name="filter_pipe_rad">
									<option value="6" selected>6</option>
									<option value="8">8</option>
						      <option value="10">10</option>
									<option value="12">12</option>
						      <option value="14">14</option>
									<option value="15">15</option>
						      <option value="16">16</option>
						      <option value="17">17</option>
						      <option value="18">18</option>
						      <option value="20">20</option>
									<option value="22">22</option>
									<option value="25">25</option>
						      <option value="26">26</option>
						      <option value="28">28</option>
						      <option value="32">32</option>
						      <option value="35">35</option>
									<option value="40">40</option>
									<option value="42">42</option>
									<option value="52">52</option>
									<option value="54">54</option>
									<option value="60">60</option>
									<option value="65">65</option>
									<option value="76">76</option>
									<option value="89">89</option>
									<option value="102">102</option>
									<option value="114">114</option>
									<option value="160">160</option>
								</select>
							</div>


							<div class="input-group" id="filter_flour_montaj">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип монтажа</span>
								</div>
								<select class="custom-select" name="filter_flour_montaj">
									<option value="В стяжку" selected>В стяжку</option>
									<option value="В слой плиточного клея">В слой плиточного клея</option>
									<option value="Под напольное покрытие">Под напольное покрытие</option>
								</select>
							</div>

							<div class="input-group" id="filter_flour_type">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Вид пола</span>
								</div>
								<select class="custom-select" name="filter_flour_type">
									<option value="Мат нагревательный" selected>Мат нагревательный</option>
									<option value="Двужильный кабель">Двужильный кабель</option>
									<option value="Одножильный кабель">Одножильный кабель</option>
									<option value="Инфракрасная пленка">Инфракрасная пленка</option>
									<option value="Алюминиевый мат">Алюминиевый мат</option>
									<option value="Терморегуляторы">Терморегуляторы</option>
								</select>
							</div>

							<div class="input-group" id="filter_stype">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип</span>
								</div>
								<select class="custom-select" name="filter_stype">
									<option value="Встраиваемый" selected>Встраиваемый</option>
									<option value="Наружный">Наружный</option>
								</select>
							</div>

							<div class="input-group" id="filter_ttype">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Изделия ТП</span>
								</div>
								<select class="custom-select" name="filter_ttype">
									<option value="Труба для теплого пола" selected>Труба для теплого пола</option>
									<option value="Коллекторная группа">Коллекторная группа</option>
									<option value="Маты и плиты для пола">Маты и плиты для пола</option>
									<option value="Смесительный узел">Смесительный узел</option>
									<option value="Автоматика">Автоматика</option>
									<option value="Шкафы">Шкафы</option>
									<option value="Термоголовка с датчиком">Термоголовка с датчиком</option>
									<option value="Добавки в бетон">Добавки в бетон</option>
									<option value="Демпферная лента">Демпферная лента</option>
									<option value="Крепежи">Крепежи</option>
									<option value="Комплектующие">Комплектующие</option>
								</select>
							</div>

							<div class="input-group" id="filter_flour_cabtype">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип кабеля</span>
								</div>
								<select class="custom-select" name="filter_flour_cabtype">
									<option value="Двухжильный" selected>Двухжильный</option>
									<option value="Одножильный">Одножильный</option>
								</select>
							</div>

							<div class="input-group" id="filter_flour_cabrad">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Диаметр кабеля</span>
								</div>
								<select class="custom-select" name="filter_flour_cabrad">
									<option value="3" selected>3</option>
									<option value="4">4</option>
									<option value="7">7</option>
									<option value="5,5">5,5</option>
									<option value="0,9-1,8">0,9-1,8</option>
								</select>
							</div>

							<div class="input-group" id="filter_flour_isqr">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Площадь мата, м2</span>
								</div>
								<select class="custom-select" name="filter_flour_isqr">
									<option value="0,3 - 3,0" selected>0,3 - 3,0</option>
									<option value="3,1 - 6,0">3,1 - 6,0</option>
									<option value="6,1 - 9,0">6,1 - 9,0</option>
									<option value="9,1 - 12,0">9,1 - 12,0</option>
									<option value="более 12,0">более 12,0</option>
								</select>
							</div>

							<div class="input-group" id="filter_tdryer_type">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Полотенцесушителя</span>
								</div>
								<select class="custom-select" name="filter_tdryer_type">
									<option value="Водяные" selected>Водяные</option>
									<option value="Электрические">Электрические</option>
								</select>
							</div>
							<div class="input-group" id="filter_tdryer_form">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Форма</span>
								</div>
								<select class="custom-select" name="filter_tdryer_form">
									<option value="Змеевик" selected>Змеевик</option>
									<option value="Лесенка">Лесенка</option>
									<option value="Поворотный">Поворотный</option>
								</select>
							</div>
							<div class="input-group" id="filter_tdryer_connect">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Подключение</span>
								</div>
								<select class="custom-select" name="filter_tdryer_connect">
									<option value="Нижнее" selected>Нижнее</option>
									<option value="Боковое">Боковое</option>
									<option value="Над мойкой">Над мойкой</option>
									<option value="Под мойкой">Под мойкой</option>
								</select>
							</div>
							<div class="input-group" id="filter_tdryer_colour">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Цвет</span>
								</div>
								<select class="custom-select" name="filter_tdryer_colour">
									<option value="Белый" selected>Белый</option>
									<option value="Сталь">Сталь</option>
									<option value="Хром">Хром</option>
								</select>
							</div>

							<div class="input-group" id="filter_fitting_type">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Фитинга</span>
								</div>
								<select class="custom-select" name="filter_fitting_type">
									<option value="Заглушка" selected>Заглушка</option>
									<option value="Муфта соеденительная">Муфта соеденительная</option>
									<option value="Муфта редукционная">Муфта редукционная</option>
									<option value="Муфта с внутренней резьбой">Муфта с внутренней резьбой</option>
									<option value="Муфта с наружной резьбой">Муфта с наружной резьбой</option>
									<option value="Муфта с накидной гайкой">Муфта с накидной гайкой</option>
									<option value="Угол соеденительный">Угол соеденительный</option>
									<option value="Угол с внутренней резьбой">Угол с внутренней резьбой</option>
									<option value="Угол с наружной резьбой">Угол с наружной резьбой</option>
									<option value="Угол установочный">Угол установочный</option>
									<option value="Тройник равнопроходной">Тройник равнопроходной</option>
									<option value="Тройник редукционный">Тройник редукционный</option>
									<option value="Тройник с внутренней резьбой">Тройник с внутренней резьбой</option>
									<option value="Тройник с наружной резьбой">Тройник с наружной резьбой</option>
									<option value="Тройник двойной">Тройник двойной</option>
									<option value="Кран, вентиль">Кран, вентиль</option>
									<option value="Планка монтажная">Планка монтажная</option>
									<option value="Коллектор">Коллектор</option>
								</select>
							</div>

							<div class="input-group" id="filter_ppr_type">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Изделия</span>
								</div>
								<select class="custom-select" name="filter_ppr_type">
									<option value="Трубы" selected>Трубы</option>
									<option value="Фитинги">Фитинги</option>
									<option value="Крепления">Крепления</option>
								</select>
							</div>

							<div class="input-group" id="filter_stockfit_type">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Фитинга Канализации</span>
								</div>
								<select class="custom-select" name="filter_stockfit_type">
									<option value="Труба" selected>Труба</option>
									<option value="Заглушка">Заглушка</option>
									<option value="Муфта">Муфта</option>
									<option value="Колено">Колено</option>
									<option value="Тройник">Тройник</option>
									<option value="Редукция">Редукция</option>
									<option value="Ревизия">Ревизия</option>
									<option value="Компенсатор">Компенсатор</option>
									<option value="Крестовина">Крестовина</option>
									<option value="Адаптер чугун-пластик">Адаптер чугун-пластик</option>
									<option value="Колено универсальное">Колено универсальное</option>
									<option value="Колено WC">Колено WC</option>
									<option value="Манжет">Манжет</option>
									<option value="Трап сточный">Трап сточный</option>
									<option value="Фитинги">Фитинги</option>
									<option value="Хомут крепежный">Хомут крепежный</option>
									<option value="Силикон">Силикон</option>
								</select>
							</div>

							<div class="input-group" id="filter_stock_rad">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Диаметр Канализации</span>
								</div>
								<select class="custom-select" name="filter_stock_rad">
									<option value="110мм" selected>110мм</option>
									<option value="160мм">160мм</option>
									<option value="200мм">200мм</option>
									<option value="250мм">250мм</option>
									<option value="3150мм">315мм</option>
									<option value="400мм">400мм</option>
									<option value="500мм">500мм</option>
								</select>
							</div>


							<div class="input-group" id="filter_wheating">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Обогрев Зимой</span>
								</div>
								<select class="custom-select" name="filter_wheating">
									<option value="-5°С" selected>-5°С</option>
									<option value="-7°С">-7°С</option>
									<option value="-10°С">-10°С</option>
									<option value="-15°С">-15°С</option>
									<option value="-20°С">-20°С</option>
									<option value="-22°С">-22°С</option>
									<option value="-23°С">-23°С</option>
									<option value="-25°С">-25°С</option>
									<option value="-30°С">-30°С</option>
								</select>
							</div>

							<div class="input-group" id="filter_invert">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Инвертная Технология</span>
								</div>
								<select class="custom-select" name="filter_invert">
									<option value="Нет" selected>Нет</option>
									<option value="Да">Да</option>
								</select>
							</div>

							<div class="input-group" id="filter_bpower">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Мощность,БТЕ/час</span>
								</div>
								<select class="custom-select" name="filter_bpower">
									<option value="05" selected>05</option>
									<option value="07">07</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="15">15</option>
									<option value="18">18</option>
									<option value="24">24</option>
									<option value="28">28</option>
									<option value="30">30</option>
									<option value="36">36</option>
								</select>
							</div>

							<div class="input-group" id="filter_wallwd">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Толщина стенки, мм</span>
								</div>
								<select class="custom-select" name="filter_wallwd">
									<option value="6" selected>6</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="13">13</option>
									<option value="15">15</option>
								</select>
							</div>

							<div class="input-group" id="filter_csquare">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Площадь, м2</span>
								</div>
								<select class="custom-select" name="filter_csquare">
									<option value="до 5 м2" selected>до 5 м2</option>
									<option value="6 - 10 м2">6 - 10 м2</option>
									<option value="11 - 15 м2">11 - 15 м2</option>
									<option value="до 15 м2">до 15 м2</option>
									<option value="16 - 20 м2">16 - 20 м2</option>
									<option value="до 20 м2">до 20 м2</option>
									<option value="21 - 25 м2">21 - 25 м2</option>
									<option value="до 25 м2">до 25 м2</option>
									<option value="26 - 30 м2">26 - 30 м2</option>
									<option value="до 30 м2">до 30 м2</option>
									<option value="30 м2">30 м2</option>
									<option value="свыше 30 м2">свыше 30 м2</option>
									<option value="до 35 м2">до 35 м2</option>
									<option value="35 м2">35 м2</option>
									<option value="до 40 м2">до 40 м2</option>
									<option value="40 м2">40 м2</option>
									<option value="до 50 м2">до 50 м2</option>
									<option value="до 60 м2">до 60 м2</option>
									<option value="до 70 м2">до 70 м2</option>
									<option value="до 80 м2">до 80 м2</option>
									<option value="до 90 м2">до 90 м2</option>
									<option value="до 100 м2">до 100 м2</option>
									<option value="до 120 м2">до 120 м2</option>
								</select>
							</div>

							<div class="input-group" id="filter_ctype">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип хладагента</span>
								</div>
								<select class="custom-select" name="filter_ctype">
									<option value="R-32" selected>r-32</option>
									<option value="R-410a">r-410a</option>
									<option value="R-410">r-410</option>
								</select>
							</div>


							<div class="input-group" id="filter_napor">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Напор, м</span>
								</div>
								<select class="custom-select" name="filter_napor">
									<option value="2 - 3 м" selected>2 - 3 м</option>
									<option value="3 - 4 м">3 - 4 м</option>
									<option value="4 - 5 м">4 - 5 м</option>
									<option value="6 - 8 м">6 - 8 м</option>
									<option value="8 - 12 м">8 - 12 м</option>
								</select>
							</div>

							<div class="input-group" id="filter_effect">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Производительность, м</span>
								</div>
								<select class="custom-select" name="filter_effect">
									<option value="2 - 4 м3/час" selected>2 - 4 м3/час</option>
									<option value="4 - 5 м3/час">4 - 5 м3/час</option>
									<option value="5 - 6 м3/час">5 - 6 м3/час</option>
									<option value="6 - 8 м3/час">6 - 8 м3/час</option>
									<option value="8 - 12 м3/час">8 - 12 м3/час</option>
									<option value="10 - 12 м3/час">10 - 12 м3/час</option>
								</select>
							</div>

							<div class="input-group" id="filter_effect_lmin">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Производительность, л/мин</span>
								</div>
								<select class="custom-select" name="filter_effect_lmin">
									<option value="1,8" selected>1,8</option>
									<option value="2,0">2,0</option>
									<option value="2,5">2,5</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="7">7</option>
									<option value="9,8">9,8</option>
									<option value="11,5">11,5</option>
									<option value="13,1">13,1</option>
								</select>
							</div>

							<div class="input-group" id="filter_mlength">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Монтажная Длина, мм</span>
								</div>
								<select class="custom-select" name="filter_mlength">
									<option value="130мм" selected>130мм</option>
									<option value="180мм">180мм</option>
								</select>
							</div>

							<div class="input-group" id="filter_nepower">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Потребляемая Мощность, Вт</span>
								</div>
								<select class="custom-select" name="filter_nepower">
									<option value="20 - 40 Вт" selected>20 - 40 Вт</option>
									<option value="40 - 60 Вт">40 - 60 Вт</option>
									<option value="60 - 80 Вт">60 - 80 Вт</option>
									<option value="80 - 100 Вт">80 - 100 Вт</option>
									<option value="100 - 120 Вт">100 - 120 Вт</option>
									<option value="120 - 150 Вт">120 - 150 Вт</option>
									<option value="150 - 200 Вт">150 - 200 Вт</option>
									<option value="200 - 250 Вт">200 - 250 Вт</option>
								</select>
							</div>


							<div class="input-group" id="filter_bform">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Форма Бойлера</span>
								</div>
								<select class="custom-select" name="filter_bform">
									<option value="Цилиндрический" selected>Цилиндрический</option>
									<option value="Прямоугольный">Прямоугольный</option>
									<option value="Slim (тонкий)">Slim (тонкий)</option>
									<option value="Плоский">Плоский</option>
									<option value="Компактный">Компактный</option>
								</select>
							</div>

							<div class="input-group" id="filter_bset">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Установка Бойлера</span>
								</div>
								<select class="custom-select" name="filter_bset">
									<option value="Под мойку" selected>Под мойку</option>
						      <option value="Над мойкой">Над мойкой</option>
									<option value="Вертикальный">Вертикальный</option>
									<option value="Горизонтальный">Горизонтальный</option>
						      <option value="Настенный">Настенный</option>
						      <option value="Настенный вертикальный">Настенный вертикальный</option>
						      <option value="Настенный горизонтальный">Настенный горизонтальный</option>
						      <option value="Вертикальный/Горизонтальный">Вертикальный/Горизонтальный</option>
						      <option value="Напольный">Напольный</option>
								</select>
							</div>

							<div class="input-group" id="filter_tentype">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Тэна</span>
								</div>
								<select class="custom-select" name="filter_tentype">
									<option value='Сухой' selected>Сухой</option>
									<option value='Мокрый'>Мокрый</option>
								</select>
							</div>

							<div class="input-group" id="filter_extbarrel">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Расширительный Бак</span>
								</div>
								<select class="custom-select" name="filter_extbarrel">
									<option value='Есть' selected>Есть</option>
									<option value='Нет'>Нет</option>
								</select>
							</div>

							<div class="input-group" id="filter_usefor">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Применяются для</span>
								</div>
								<select class="custom-select" name="filter_usefor">
									<option value='Бойлеров' selected>Бойлеров</option>
									<option value='Котлов'>Котлов</option>
								</select>
							</div>

							<div class="input-group" id="filter_wsqrt">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Обьем воды</span>
								</div>
								<select class="custom-select" name="filter_wsqrt">
									<option value='7' selected>7</option>
									<option value='10'>10</option>
									<option value='11'>11</option>
									<option value='12'>12</option>
									<option value='13'>13</option>
									<option value='14'>14</option>
									<option value='15'>15</option>
									<option value='17'>17</option>
									<option value='18'>18</option>
									<option value='27'>27</option>
								</select>
							</div>

							<div class="input-group" id="filter_heatingfloor_power">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Общая мощность, Вт</span>
								</div>
								<select class="custom-select" name="filter_heatingfloor_power">
									<option value='0 - 500' selected>0 - 500</option>
									<option value='510 - 1000'>510 - 1000</option>
									<option value='1010 - 2000'>1010 - 2000</option>
									<option value='2010 - 3000'>2010 - 3000</option>
									<option value='более 3000'>более 3000</option>
								</select>
							</div>

							<div class="input-group" id="filter_heatingfloor_worksub">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Назначение пола</span>
								</div>
								<select class="custom-select" name="filter_heatingfloor_worksub">
									<option value='Под плитку' selected>Под плитку</option>
									<option value='Под стяжку'>Под стяжку</option>
									<option value='Под ламинат, линолеум'>Под ламинат, линолеум</option>
									<option value='Для наружного обогрева'>Для наружного обогрева</option>
								</select>
							</div>

							<div class="input-group" id="filter_bsqrt">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Обьем Бойлера</span>
								</div>
								<select class="custom-select" name="filter_bsqrt">
									<option value='1 - 10' selected>1 - 10</option>
									<option value='5 - 10'>5 - 10</option>
									<option value='11 - 15'>11 - 15</option>
									<option value='11 - 20'>11 - 20</option>
									<option value='16 - 30'>16 - 30</option>
									<option value='21 - 30'>21 - 30</option>
									<option value='31 - 50'>31 - 50</option>
									<option value='51 - 60'>51 - 60</option>
									<option value='61 - 80'>61 - 80</option>
									<option value='81 - 100'>81 - 100</option>
									<option value='101 - 120'>101 - 120</option>
									<option value='101 - 150'>101 - 150</option>
									<option value='121 - 150'>121 - 150</option>
									<option value='151 - 200'>151 - 200</option>
									<option value='201 - 250'>201 - 250</option>
									<option value='201 - 300'>201 - 300</option>
									<option value='251 - 300'>251 - 300</option>
									<option value='300'>300</option>
									<option value='301 - 400'>301 - 400</option>
									<option value='400'>400</option>
									<option value='401 - 500'>401 - 500</option>
									<option value='500'>500</option>
									<option value='501 - 700'>501 - 700</option>
									<option value='750'>750</option>
									<option value='800'>800</option>
									<option value='701 - 1000'>701 - 1000</option>
									<option value='1000'>1000</option>
									<option value='1001 - 2000'>1001 - 2000</option>
									<option value='2000'>2000</option>
									<option value='2001 - 5000'>2001 - 5000</option>
								</select>
							</div>


							<div class="input-group" id="filter_ptype">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Тип Программатора</span>
								</div>
								<select class="custom-select" name="filter_ptype">
									<option value='Проводной' selected>Проводной</option>
									<option value='Беспроводной'>Беспроводной</option>
									<option value='с Wi-Fi'>с Wi-Fi</option>
								</select>
							</div>

							<div class="input-group" id="filter_diametr">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Диаметр Подключения, "</span>
								</div>
								<select class="custom-select" name="filter_diametr">
									<option value='1/4' selected>1/4"</option>
									<option value='1/2'>1/2"</option>
									<option value='3/8'>3/8"</option>
									<option value='3/4'>3/4"</option>
									<option value='1'>1"</option>
									<option value='1 1/4'>1 1/4"</option>
									<option value='1 1/2'>1 1/2"</option>
									<option value='2'>2"</option>
									<option value='2 1/4'>2 1/4"</option>
									<option value='2 1/2'>2 1/2"</option>
									<option value='М 30 х 1,5'>М 30 х 1,5</option>
								</select>
							</div>

							<div class="input-group" id="filter_worksub">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Рабочая среда</span>
								</div>
								<select class="custom-select" name="filter_worksub">
									<option value='Вода' selected>Вода</option>
									<option value='Газ'>Газ</option>
								</select>
							</div>

							<div class="input-group" id="filter_dest">
								<div class="input-group-prepend w-50">
									<span class="input-group-text w-100">Назначение</span>
								</div>
								<select class="custom-select" name="filter_dest">
									<option value='Холодная вода' selected>Холодная вода</option>
									<option value='Горячая вода'>Горячая вода</option>
									<option value='Холодная + Горячая вода'>Холодная + Горячая вода</option>
								</select>
							</div>


						</div>

					</div>
					<!-- form-group -->
				</div>

					<div class="col-6">
					<div class="form-group mt-5">
						<!-- <textarea name="query_list" class="form-control" rows="2">производитель:_;страна-производитель:_;тип-контура:_;мощность:_;</textarea> -->
					<label>Параметры Товара</label>
					<div class="my-3 text-center">
						<a class="btn btn-primary text-white" onclick="add_param(this)">Добавить свойство</a>
					</div>
					<div id="product_param_list" class="border-bottom">
						<div class="my-2">
							<span>Параметр</span>
							<span class="d-inline float-right">Значение</span>
						</div>
						</div>

						<label>Описание</label>
						<textarea name="description" id="product_description" class="form-control" rows="10"></textarea>

						<div class="custom-control custom-checkbox text-center my-2">
							<input name="available" type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">В Наличии</label>
						</div>
						<div class="custom-control custom-checkbox text-center my-2">
							<input name="popular" type="checkbox" class="custom-control-input" id="customCheck3">
							<label class="custom-control-label" for="customCheck3">Популярный Товар</label>
						</div>
						<div class="custom-control custom-checkbox text-center my-2">
							<input name="onsale" type="checkbox" class="custom-control-input" id="customCheck2">
							<label class="custom-control-label" for="customCheck2">Акционный</label>
						</div>
					</div>

					<div class="text-center">
						<button type="submit" class="btn btn-primary w-50">Добавить</button>
					</div>
				</form>
			</div>
			<div class="col-4">

			</div>
		</div>
	</div>

</div>

<div aria-hidden="modaltrue" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div id="imgmodal_inside" class="modal-body mb-0 p-0">
				<img src="/public/media/uploads/" alt="" style="width:100%">
			</div>
		</div>
	</div>
</div>

<div aria-hidden="true" class="modal fade" id="modal_params" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="m-3">
				<h4>Параметры Товара</h4>
			</div>
			<div id="param_modal_inside" class="modal-body"></div>
			<div class="my-3 text-center">
				<div class="button-group">
					<button class="btn btn-success" onclick="save_params(this)" id="save_params_btn" data-product_id="">Сохранить</button>
					<button class="btn btn-primary" onclick="add_param_modal(this)">Добавить Свойство</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div aria-hidden="true" class="modal fade" id="modal_filter" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="m-3">
				<h4>Параметры Фильтра</h4>
			</div>
			<div id="filter_modal_inside" class="modal-body">
				<div class="filter_info" id="modal_filter_info">
					<form id="modal_filter_form">

				  <div class="input-group" id="modal_filter_manufacturer">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Производитель</span>
				    </div>
				    <select class="custom-select" name="filter_manufacturer">
				      <?php foreach ($manufacturers as $m): ?>
				        <option value="<?=$m['m_name']?>" data-m_id="<?=$m['id']; ?>" data-category="<?=$m['c_id']; ?>"><?=$m['m_name'] ?></option>
				      <?php endforeach; ?>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_country">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Страна Прозводитель</span>
				    </div>
				    <select class="custom-select" name="filter_country">
							<option value="Великобритания" selected>Великобритания</option>
							<option value="Германия">Германия</option>
				      <option value="Дания">Дания</option>
				      <option value="Италия">Италия</option>
							<option value="Венгрия">Венгрия</option>
				      <option value="Корея">Корея</option>
				      <option value="Франция">Франция</option>
				      <option value="Турция">Турция</option>
				      <option value="Китай">Китай</option>
				      <option value="Украина">Украина</option>
				      <option value="Словакия">Словакия</option>
				      <option value="Португалия">Португалия</option>
				      <option value="Польша">Польша</option>
				      <option value="Чехия">Чехия</option>
				      <option value="Норвегия">Норвегия</option>
				      <option value="Румыния">Румыния</option>
				      <option value="Малайзия">Малайзия</option>
				      <option value="Япония">Япония</option>
				      <option value="Гонконг">Гонконг</option>
				      <option value="Швеция">Швеция</option>
				      <option value="Таиланд">Таиланд</option>
				      <option value="Болгария">Болгария</option>
				      <option value="Македония">Македония</option>
				      <option value="Словения">Словения</option>
							<option value="Испания">Испания</option>
							<option value="Австрия">Австрия</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_contur">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Контура</span>
				    </div>
				      <select class="custom-select" name="filter_contur">
				        <option value="Одноконтурный" selected>Одноконтурный</option>
				        <option value="Двухконтурный">Двухконтурный</option>
				        <option value="Двухконтурны с Бойлером">Двухконтурны + бойлер</option>
				      </select>
				  </div>

					<div class="input-group" id="modal_filter_contur_count">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Количество контуров</span>
						</div>
							<select class="custom-select" name="filter_contur_count">
								<option value="2" selected>2</option>
								<option value="3">3</option>
								<option value="2 - 4">2 - 4</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="5 - 7">5 - 7</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="8 - 10">8 - 10</option>
								<option value="10">10</option>
								<option value="Свыше 10">Свыше 10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
					</div>

				  <div class="input-group" id="modal_filter_power">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тепловая мощность</span>
				    </div>
				    <select class="custom-select" name="filter_power">
				      <option value="До 20 кВт" selected>До 10 кВт</option>
				      <option value="До 20 кВт">До 20 кВт</option>
				      <option value="20 - 24 кВт">20 - 24 кВт</option>
				      <option value="24 - 30 кВт">24 - 30 кВт</option>
				      <option value="30 – 40 кВт">30 – 40 кВт</option>
				      <option value="Свыше 40 кВт">Свыше 40 кВт</option>
				      <option value=""></option>
				      <option value="40 – 50 кВт">40 – 50 кВт</option>
				      <option value="50 - 100 кВт">50 - 100 кВт</option>
				      <option value="60 - 100 кВт">60 - 100 кВт</option>
				      <option value="Свыше 100 кВт">Свыше 100 кВт</option>
				    </select>
				  </div>

					<div class="input-group" id="modal_filter_epower_int">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Электрическая мощность</span>
						</div>
						<select class="custom-select" name="filter_epower_int">
							<option value="3" selected>3</option>
							<option value="3,5">3,5</option>
							<option value="4">4</option>
							<option value="4,5">4,5</option>
							<option value="5">5</option>
							<option value="5,5">5,5</option>
							<option value="6">6</option>
							<option value="6,5">6,5</option>
							<option value="7">7</option>
							<option value="8-10">8-10</option>
							<option value="10,5">10,5</option>
							<option value="11-13">11-13</option>
							<option value="14-20">14-20</option>
							<option value="14">14</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="30">30</option>
							<option value="47">47</option>
						</select>
					</div>

				  <div class="input-group" id="modal_filter_epower">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Электрическая мощность</span>
				    </div>
				    <select class="custom-select" name="filter_epower">
							<option value="до 0,5 кВт" selected>до 0,5 кВт</option>
							<option value="0,5 - 0,9 кВт">0,5 - 0,9 кВт</option>
							<option value="1 - 1,5 кВт">1 - 1,5 кВт</option>
							<option value="1,5 - 2 кВт">1,5 - 2 кВт</option>
							<option value="свыше 2 кВт">свыше 2 кВт</option>
							<option value="3 - 5 кВт">3 - 5 кВт</option>
				      <option value="6 - 10 кВт">6 - 10 кВт</option>
				      <option value="11 - 15 кВт">11 - 15 кВт</option>
				      <option value="16 - 20 кВт">16 - 20 кВт</option>
				      <option value="21 - 25 кВт">21 - 25 кВт</option>
				      <option value="26 - 30 кВт">26 - 30 кВт</option>
				      <option value="36 - 40 кВт">36 - 40 кВт</option>
				      <option value="41 - 45 кВт">41 - 45 кВт</option>
				      <option value="51 - 60 кВт">51 - 60 кВт</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_burn_cam">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Отвод продуктов сгорания</span>
				    </div>
				    <select class="custom-select" name="filter_burn_cam">
				      <option value="Турбированный (Turbo)" selected>Турбированный (Turbo)</option>
				      <option value="Дымоходный (Atmo)">Дымоходный (Atmo)</option>
				    </select>
				  </div>

					<div class="input-group" id="modal_filter_instaltype">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Тип инсталляции</span>
						</div>
						<select class="custom-select" name="filter_instaltype">
							<option value="Инсталляция" selected>Инсталляция</option>
							<option value="Комплект">Комплект</option>
							<option value="Комплектующие для инсталляций">Комплектующие для инсталляций</option>
						</select>
					</div>

					<div class="input-group" id="modal_filter_instaldest">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Назначение инсталляции</span>
						</div>
						<select class="custom-select" name="filter_instaldest">
							<option value="Для унитаза" selected>Для унитаза</option>
							<option value="Для биде">Для биде</option>
							<option value="Для раковины">Для раковины</option>
							<option value="Для писсуара">Для писсуара</option>
						</select>
					</div>

			  	<div class="input-group" id="modal_filter_burn_cam_type">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Отвод продуктов сгорания</span>
						</div>
						<select class="custom-select" name="filter_burn_cam_type">
							<option value="Открытая" selected>Открытая</option>
							<option value="Закрытая">Закрытая</option>
						</select>
					</div>

				  <div class="input-group" id="modal_filter_teploobmen">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Теплообменник</span>
				    </div>
				    <select class="custom-select" name="filter_teploobmen">
				      <option value="Битермический" selected>Битермический</option>
				      <option value="Раздельный">Раздельный</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_heating_square">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Отапливаемая площадь</span>
				    </div>
				    <select class="custom-select" name="filter_heating_square">
				      <option value="До 50 м2">До 50 м2</option>
				      <option value="До 80 м2">До 80 м2</option>
				      <option value="До 100 м2">До 100 м2</option>
				      <option value=""></option>
				      <option value="До 120 м2">До 120 м2</option>
				      <option value="До 200 м2">До 200 м2</option>
				      <option value="До 250 м2">До 250 м2</option>
				      <option value="До 300 м2">До 300 м2</option>
				      <option value="До 400 м2">До 400 м2</option>
				      <option value="Свыше 400 м2">Свыше 400 м2</option>
				      <option value=""></option>
				      <option value="До 500 м2">До 500 м2</option>
				      <option value="Свыше 500 м2">Свыше 500 м2</option>
				      <option value=""></option>
				      <option value="До 600 м2">До 600 м2</option>
				      <option value="До 800 м2">До 800 м2</option>
				      <option value="Свыше 800 м2">Свыше 800 м2</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_tteploobmen">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Теплообменник</span>
				    </div>
				    <select class="custom-select" name="filter_tteploobmen">
				      <option value="Стальной" selected>Стальной</option>
				      <option value="Чугунный">Чугунный</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_nasos">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Насос</span>
				    </div>
				    <select class="custom-select" name="filter_nasos">
				      <option value="Есть" selected>Есть</option>
				      <option value="Нет">Нет</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_napryajenie">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Напряжение Питания, В</span>
				    </div>
				    <select class="custom-select" name="filter_napryajenie">
				      <option value="220" selected>220</option>
				      <option value="380">380</option>
				      <option value="220-380">220-380</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_montaj">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Монтажа</span>
				    </div>
				    <select class="custom-select" name="filter_montaj">
				      <option value="Напольные" selected>Напольный</option>
				      <option value="Настенный">Настенный</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_rozjig">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Розжига</span>
				    </div>
				    <select class="custom-select" name="filter_rozjig">
				      <option value="Электро" selected>Электро</option>
				      <option value="Пьезо">Пьезо</option>
							<option value="Батарейки">Батарейки</option>
							<option value="Турбинка">Турбинка</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_otvod">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Способ Отвода Газов</span>
				    </div>
				    <select class="custom-select" name="filter_otvod">
				      <option value="Турбированный (Turbo)" selected>Турбированный (Turbo)</option>
				      <option value="Дымоходный">Дымоходный</option>
				      <option value="Парапетный">Парапетный</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_controller">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Управление</span>
				    </div>
				    <select class="custom-select" name="filter_controller">
				      <option value="Механическое" selected>Механическое</option>
				      <option value="Электронное">Электронное</option>
							<option value="Сенсорное">Сенсорное</option>
				      <option value="Электромеханическое">Электромеханическое</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_rad_type">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип</span>
				    </div>
				    <select class="custom-select" name="filter_rad_type">
				      <option value="Тип 11" selected>Тип 11</option>
				      <option value="Тип 22">Тип 22</option>
				      <option value="Тип 33">Тип 33</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_rad_height">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Высота</span>
				    </div>
				    <select class="custom-select" name="filter_rad_height">
				      <option value="200" selected>200</option>
				      <option value="300">300</option>
				      <option value="400">400</option>
				      <option value="500">500</option>
				      <option value="600">600</option>
				      <option value="900">900</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_rad_length">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Длинна</span>
				    </div>
				    <select class="custom-select" name="filter_rad_length">
				      <option value="400" selected>400</option>
				      <option value="500">500</option>
				      <option value="600">600</option>
				      <option value="700">700</option>
				      <option value="800">800</option>
				      <option value="900">900</option>
				      <option value="1000">1000</option>
				      <option value="1100">1100</option>
				      <option value="1200">1200</option>
				      <option value="1300">1300</option>
				      <option value="1400">1400</option>
				      <option value="1500">1500</option>
				      <option value="1600">1600</option>
				      <option value="1700">1700</option>
				      <option value="1800">1800</option>
				      <option value="1900">1900</option>
				      <option value="2000">2000</option>
				      <option value="2100">2100</option>
				      <option value="2200">2200</option>
				      <option value="2300">2300</option>
				      <option value="2400">2400</option>
				      <option value="2500">2500</option>
				      <option value="2600">2600</option>
				      <option value="2700">2700</option>
				      <option value="2800">2800</option>
				      <option value="2900">2900</option>
				      <option value="3000">3000</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_rad_conn">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Подключение</span>
				    </div>
				    <select class="custom-select" name="filter_rad_conn">
				      <option value="Боковое" selected>Боковое</option>
				      <option value="Нижнее">Нижнее</option>
							<option value="Над мойкой">Над мойкой</option>
							<option value="Под мойкой">Под мойкой</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_apex">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Межосевое расстояние</span>
				    </div>
				    <select class="custom-select" name="filter_apex">
				      <option value="200" selected>200</option>
							<option value="300">300</option>
				      <option value="350">350</option>
				      <option value="500">500</option>
				      <option value="800">800</option>
				      <option value="900">900</option>
				      <option value="1000">1000</option>
				      <option value="1200">1200</option>
				      <option value="1400">1400</option>
				      <option value="1600">1600</option>
				      <option value="1800">1800</option>
				      <option value="2000">2000</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_rad_sec">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Количество Секций</span>
				    </div>
				    <select class="custom-select" name="filter_rad_sec">
				      <option value="3" selected>3</option>
				      <option value="4">4</option>
				      <option value="5">5</option>
				      <option value="6">6</option>
				      <option value="7">7</option>
				      <option value="8">8</option>
				      <option value="9">9</option>
				      <option value="10">10</option>
				      <option value="11">11</option>
				      <option value="12">12</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_deep_sec">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Глубина секций</span>
				    </div>
				    <select class="custom-select" name="filter_deep_sec">
				      <option value="80" selected>80</option>
							<option value="85">85</option>
							<option value="88">88</option>
				      <option value="90">90</option>
				      <option value="96">96</option>
				      <option value="100">100</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_rad_elem_comp">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Комплектации</span>
				    </div>
				    <select class="custom-select" name="filter_rad_elem_comp">
				      <option value="Кран Маевского" selected>Кран Маевского</option>
				      <option value="Напольный крепеж">Напольный крепеж</option>
				      <option value="Настенный крепеж">Настенный крепеж</option>
				      <option value="Кронштейн угловой">Кронштейн угловой</option>
				      <option value="Кронштейн анкерный">Кронштейн анкерный</option>
				      <option value="Решетка конвектора">Решетка конвектора</option>
				      <option value="Присоединительный набор">Присоединительный набор</option>
				      <option value="Кронштейн для сушки белья">Кронштейн для сушки белья</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_rad_kind">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Радиатора</span>
				    </div>
				    <select class="custom-select" name="filter_rad_kind">
				      <option value="Чугунные" selected>Чугунные</option>
				      <option value="Панельные">Панельные</option>
				      <option value="Секционные">Секционные</option>
				      <option value="Внутрипольные">Внутрипольные</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_rad_eradius">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Диаметр подключения</span>
				    </div>
				    <select class="custom-select" name="filter_rad_eradius">
				      <option value="1" selected>1</option>
				      <option value="1/2">1/2</option>
				      <option value="3/4">3/4</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_pipe_rad">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Диаметр Трубы</span>
				    </div>
				    <select class="custom-select" name="filter_pipe_rad">
							<option value="6" selected>6</option>
							<option value="8">8</option>
				      <option value="10">10</option>
							<option value="12">12</option>
				      <option value="14">14</option>
							<option value="15">15</option>
				      <option value="16">16</option>
				      <option value="17">17</option>
				      <option value="18">18</option>
				      <option value="20">20</option>
							<option value="22">22</option>
							<option value="25">25</option>
				      <option value="26">26</option>
				      <option value="28">28</option>
				      <option value="32">32</option>
				      <option value="35">35</option>
							<option value="40">40</option>
							<option value="42">42</option>
							<option value="52">52</option>
							<option value="54">54</option>
							<option value="60">60</option>
							<option value="65">65</option>
							<option value="76">76</option>
							<option value="89">89</option>
							<option value="102">102</option>
							<option value="114">114</option>
							<option value="160">160</option>
				    </select>
				  </div>


				  <div class="input-group" id="modal_filter_flour_montaj">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип монтажа</span>
				    </div>
				    <select class="custom-select" name="filter_flour_montaj">
				      <option value="В стяжку" selected>В стяжку</option>
				      <option value="В слой плиточного клея">В слой плиточного клея</option>
				      <option value="Под напольное покрытие">Под напольное покрытие</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_flour_type">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип пола</span>
				    </div>
				    <select class="custom-select" name="filter_flour_type">
							<option value="Мат нагревательный" selected>Мат нагревательный</option>
							<option value="Двужильный кабель">Двужильный кабель</option>
							<option value="Одножильный кабель">Одножильный кабель</option>
							<option value="Инфракрасная пленка">Инфракрасная пленка</option>
							<option value="Алюминиевый мат">Алюминиевый мат</option>
							<option value="Терморегуляторы">Терморегуляторы</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_stype">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип</span>
				    </div>
				    <select class="custom-select" name="filter_stype">
				      <option value="Встраиваемый" selected>Встраиваемый</option>
				      <option value="Наружный">Наружный</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_ttype">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Изделия ТП</span>
				    </div>
				    <select class="custom-select" name="filter_ttype">
				      <option value="Труба для теплого пола" selected>Труба для теплого пола</option>
				      <option value="Коллекторная группа">Коллекторная группа</option>
				      <option value="Маты и плиты для пола">Маты и плиты для пола</option>
				      <option value="Смесительный узел">Смесительный узел</option>
				      <option value="Автоматика">Автоматика</option>
				      <option value="Шкафы">Шкафы</option>
				      <option value="Термоголовка с датчиком">Термоголовка с датчиком</option>
				      <option value="Добавки в бетон">Добавки в бетон</option>
				      <option value="Демпферная лента">Демпферная лента</option>
				      <option value="Крепежи">Крепежи</option>
				      <option value="Комплектующие">Комплектующие</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_flour_cabtype">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип кабеля</span>
				    </div>
				    <select class="custom-select" name="filter_flour_cabtype">
				      <option value="Двухжильный" selected>Двухжильный</option>
				      <option value="Одножильный">Одножильный</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_flour_cabrad">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Диаметр кабеля</span>
				    </div>
				    <select class="custom-select" name="filter_flour_cabrad">
				      <option value="3" selected>3</option>
				      <option value="4">4</option>
				      <option value="7">7</option>
				      <option value="5,5">5,5</option>
				      <option value="0,9-1,8">0,9-1,8</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_flour_isqr">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Площадь мата, м2</span>
				    </div>
				    <select class="custom-select" name="filter_flour_isqr">
							<option value="0,3 - 3,0" selected>0,3 - 3,0</option>
							<option value="3,1 - 6,0">3,1 - 6,0</option>
							<option value="6,1 - 9,0">6,1 - 9,0</option>
							<option value="9,1 - 12,0">9,1 - 12,0</option>
							<option value="более 12,0">более 12,0</option>
				    </select>
				  </div>

					<div class="input-group" id="modal_filter_tdryer_type">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Тип Полотенцесушителя</span>
						</div>
						<select class="custom-select" name="filter_tdryer_type">
							<option value="Водяные" selected>Водяные</option>
							<option value="Электрические">Электрические</option>
						</select>
					</div>
					<div class="input-group" id="modal_filter_tdryer_form">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Форма</span>
						</div>
						<select class="custom-select" name="filter_tdryer_form">
							<option value="Змеевик" selected>Змеевик</option>
							<option value="Лесенка">Лесенка</option>
							<option value="Поворотный">Поворотный</option>
						</select>
					</div>
					<div class="input-group" id="modal_filter_tdryer_connect">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Подключение</span>
						</div>
						<select class="custom-select" name="filter_tdryer_connect">
							<option value="Нижнее" selected>Нижнее</option>
							<option value="Боковое">Боковое</option>
							<option value="Над мойкой">Над мойкой</option>
							<option value="Под мойкой">Под мойкой</option>
						</select>
					</div>
					<div class="input-group" id="modal_filter_tdryer_colour">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Цвет</span>
						</div>
						<select class="custom-select" name="filter_tdryer_colour">
							<option value="Белый" selected>Белый</option>
							<option value="Сталь">Сталь</option>
							<option value="Хром">Хром</option>
						</select>
					</div>


				  <div class="input-group" id="modal_filter_fitting_type">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Фитинга</span>
				    </div>
				    <select class="custom-select" name="filter_fitting_type">
				      <option value="Заглушка" selected>Заглушка</option>
				      <option value="Муфта соеденительная">Муфта соеденительная</option>
				      <option value="Муфта редукционная">Муфта редукционная</option>
				      <option value="Муфта с внутренней резьбой">Муфта с внутренней резьбой</option>
				      <option value="Муфта с наружной резьбой">Муфта с наружной резьбой</option>
				      <option value="Муфта с накидной гайкой">Муфта с накидной гайкой</option>
				      <option value="Угол соеденительный">Угол соеденительный</option>
				      <option value="Угол с внутренней резьбой">Угол с внутренней резьбой</option>
				      <option value="Угол с наружной резьбой">Угол с наружной резьбой</option>
				      <option value="Угол установочный">Угол установочный</option>
				      <option value="Тройник равнопроходной">Тройник равнопроходной</option>
				      <option value="Тройник редукционный">Тройник редукционный</option>
				      <option value="Тройник с внутренней резьбой">Тройник с внутренней резьбой</option>
				      <option value="Тройник с наружной резьбой">Тройник с наружной резьбой</option>
				      <option value="Тройник двойной">Тройник двойной</option>
				      <option value="Кран, вентиль">Кран, вентиль</option>
				      <option value="Планка монтажная">Планка монтажная</option>
				      <option value="Коллектор">Коллектор</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_ppr_type">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Изделия</span>
				    </div>
				    <select class="custom-select" name="filter_ppr_type">
				      <option value="Трубы" selected>Трубы</option>
				      <option value="Фитинги">Фитинги</option>
				      <option value="Крепления">Крепления</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_stockfit_type">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Фитинга Канализации</span>
				    </div>
				    <select class="custom-select" name="filter_stockfit_type">
				      <option value="Труба" selected>Труба</option>
				      <option value="Заглушка">Заглушка</option>
				      <option value="Муфта">Муфта</option>
				      <option value="Колено">Колено</option>
				      <option value="Тройник">Тройник</option>
				      <option value="Редукция">Редукция</option>
				      <option value="Ревизия">Ревизия</option>
				      <option value="Компенсатор">Компенсатор</option>
				      <option value="Крестовина">Крестовина</option>
				      <option value="Адаптер чугун-пластик">Адаптер чугун-пластик</option>
				      <option value="Колено универсальное">Колено универсальное</option>
				      <option value="Колено WC">Колено WC</option>
				      <option value="Манжет">Манжет</option>
				      <option value="Трап сточный">Трап сточный</option>
				      <option value="Фитинги">Фитинги</option>
				      <option value="Хомут крепежный">Хомут крепежный</option>
				      <option value="Силикон">Силикон</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_stock_rad">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Диаметр Канализации</span>
				    </div>
				    <select class="custom-select" name="filter_stock_rad">
				      <option value="110мм" selected>110мм</option>
				      <option value="160мм">160мм</option>
				      <option value="200мм">200мм</option>
				      <option value="250мм">250мм</option>
				      <option value="3150мм">315мм</option>
				      <option value="400мм">400мм</option>
				      <option value="500мм">500мм</option>
				    </select>
				  </div>


				  <div class="input-group" id="modal_filter_wheating">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Обогрев Зимой</span>
				    </div>
				    <select class="custom-select" name="filter_wheating">
				      <option value="-5°С" selected>-5°С</option>
				      <option value="-7°С">-7°С</option>
				      <option value="-10°С">-10°С</option>
				      <option value="-15°С">-15°С</option>
				      <option value="-20°С">-20°С</option>
							<option value="-22°С">-22°С</option>
				      <option value="-23°С">-23°С</option>
				      <option value="-25°С">-25°С</option>
				      <option value="-30°С">-30°С</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_invert">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Инвертная Технология</span>
				    </div>
				    <select class="custom-select" name="filter_invert">
				      <option value="Нет" selected>Нет</option>
				      <option value="Да">Да</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_bpower">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Мощность,БТЕ/час</span>
				    </div>
				    <select class="custom-select" name="filter_bpower">
				      <option value="05" selected>05</option>
				      <option value="07">07</option>
				      <option value="09">09</option>
							<option value="10">10</option>
				      <option value="11">11</option>
				      <option value="12">12</option>
				      <option value="13">13</option>
				      <option value="15">15</option>
				      <option value="18">18</option>
				      <option value="24">24</option>
							<option value="28">28</option>
				      <option value="30">30</option>
				      <option value="36">36</option>
				    </select>
				  </div>

					<div class="input-group" id="modal_filter_wallwd">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Толщина стенки, мм</span>
						</div>
						<select class="custom-select" name="filter_wallwd">
							<option value="6" selected>6</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="13">13</option>
							<option value="15">15</option>
						</select>
					</div>

				  <div class="input-group" id="modal_filter_csquare">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Площадь, м2</span>
				    </div>
				    <select class="custom-select" name="filter_csquare">
							<option value="до 5 м2" selected>до 5 м2</option>
							<option value="6 - 10 м2">6 - 10 м2</option>
							<option value="11 - 15 м2">11 - 15 м2</option>
							<option value="до 15 м2">до 15 м2</option>
							<option value="16 - 20 м2">16 - 20 м2</option>
							<option value="до 20 м2">до 20 м2</option>
							<option value="21 - 25 м2">21 - 25 м2</option>
							<option value="до 25 м2">до 25 м2</option>
							<option value="26 - 30 м2">26 - 30 м2</option>
							<option value="до 30 м2">до 30 м2</option>
							<option value="30 м2">30 м2</option>
							<option value="свыше 30 м2">свыше 30 м2</option>
							<option value="до 35 м2">до 35 м2</option>
							<option value="35 м2">35 м2</option>
							<option value="до 40 м2">до 40 м2</option>
							<option value="40 м2">40 м2</option>
							<option value="до 50 м2">до 50 м2</option>
							<option value="до 60 м2">до 60 м2</option>
							<option value="до 70 м2">до 70 м2</option>
							<option value="до 80 м2">до 80 м2</option>
							<option value="до 90 м2">до 90 м2</option>
							<option value="до 100 м2">до 100 м2</option>
							<option value="до 120 м2">до 120 м2</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_ctype">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип хладагента</span>
				    </div>
				    <select class="custom-select" name="filter_ctype">
				      <option value="R-32" selected>r-32</option>
				      <option value="R-410a">r-410a</option>
				      <option value="R-410">r-410</option>
				    </select>
				  </div>


				  <div class="input-group" id="modal_filter_napor">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Напор, м</span>
				    </div>
				    <select class="custom-select" name="filter_napor">
				      <option value="2 - 3 м" selected>2 - 3 м</option>
				      <option value="3 - 4 м">3 - 4 м</option>
				      <option value="4 - 5 м">4 - 5 м</option>
				      <option value="6 - 7 м">6 - 8 м</option>
				      <option value="8 - 12 м">8 - 12 м</option>
				    </select>
				  </div>

					<div class="input-group" id="modal_filter_effect_lmin">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Производительность, л/мин</span>
						</div>
						<select class="custom-select" name="filter_effect_lmin">
							<option value="1,8" selected>1,8</option>
							<option value="2,0">2,0</option>
							<option value="2,5">2,5</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="7">7</option>
							<option value="9,8">9,8</option>
							<option value="11,5">11,5</option>
							<option value="13,1">13,1</option>
						</select>
					</div>

				  <div class="input-group" id="modal_filter_effect">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Производительность, м</span>
				    </div>
				    <select class="custom-select" name="filter_effect">
				      <option value="2 - 4 м3/час" selected>2 - 4 м3/час</option>
				      <option value="4 - 5 м3/час">4 - 5 м3/час</option>
				      <option value="5 - 6 м3/час">5 - 6 м3/час</option>
				      <option value="6 - 8 м3/час">6 - 8 м3/час</option>
				      <option value="8 - 12 м3/час">8 - 12 м3/час</option>
				      <option value="10 - 12 м3/час">10 - 12 м3/час</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_mlength">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Монтажная Длина, мм</span>
				    </div>
				    <select class="custom-select" name="filter_mlength">
				      <option value="130мм" selected>130мм</option>
				      <option value="180мм">180мм</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_nepower">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Потребляемая Мощность, Вт</span>
				    </div>
				    <select class="custom-select" name="filter_nepower">
				      <option value="20 - 40 Вт" selected>20 - 40 Вт</option>
				      <option value="40 - 60 Вт">40 - 60 Вт</option>
				      <option value="60 - 80 Вт">60 - 80 Вт</option>
				      <option value="80 - 100 Вт">80 - 100 Вт</option>
				      <option value="100 - 120 Вт">100 - 120 Вт</option>
				      <option value="120 - 150 Вт">120 - 150 Вт</option>
				      <option value="150 - 200 Вт">150 - 200 Вт</option>
				      <option value="200 - 250 Вт">200 - 250 Вт</option>
				    </select>
				  </div>


				  <div class="input-group" id="modal_filter_bform">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Форма Бойлера</span>
				    </div>
				    <select class="custom-select" name="filter_bform">
				      <option value="Цилиндрический" selected>Цилиндрический</option>
				      <option value="Прямоугольный">Прямоугольный</option>
				      <option value="Slim (тонкий)">Slim (тонкий)</option>
				      <option value="Плоский">Плоский</option>
				      <option value="Компактный">Компактный</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_bset">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Установка Бойлера</span>
				    </div>
				    <select class="custom-select" name="filter_bset">
				      <option value="Под мойку" selected>Под мойку</option>
				      <option value="Над мойкой">Над мойкой</option>
							<option value="Вертикальный">Вертикальный</option>
							<option value="Горизонтальный">Горизонтальный</option>
				      <option value="Настенный">Настенный</option>
				      <option value="Настенный вертикальный">Настенный вертикальный</option>
				      <option value="Настенный горизонтальный">Настенный горизонтальный</option>
				      <option value="Вертикальный/Горизонтальный">Вертикальный/Горизонтальный</option>
				      <option value="Напольный">Напольный</option>
				    </select>
				  </div>

				  <div class="input-group" id="modal_filter_tentype">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Тэна</span>
				    </div>
				    <select class="custom-select" name="modal_filter_tentype">
				      <option value='Сухой' selected>Сухой</option>
				      <option value='Мокрый'>Мокрый</option>
				    </select>
				  </div>

					<div class="input-group" id="modal_filter_extbarrel">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Расширительный Бак</span>
						</div>
						<select class="custom-select" name="modal_filter_extbarrel">
							<option value='Есть' selected>Есть</option>
							<option value='Нет'>Нет</option>
						</select>
					</div>

					<div class="input-group" id="modal_filter_usefor">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Применяются для</span>
						</div>
						<select class="custom-select" name="filter_usefor">
							<option value='Бойлеров' selected>Бойлеров</option>
							<option value='Котлов'>Котлов</option>
						</select>
					</div>

					<div class="input-group" id="modal_filter_wsqrt">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Обьем воды</span>
						</div>
						<select class="custom-select" name="filter_wsqrt">
							<option value='7' selected>7</option>
							<option value='10'>10</option>
							<option value='11'>11</option>
							<option value='12'>12</option>
							<option value='13'>13</option>
							<option value='14'>14</option>
							<option value='15'>15</option>
							<option value='17'>17</option>
							<option value='18'>18</option>
							<option value='27'>27</option>
						</select>
					</div>

				  <div class="input-group" id="modal_filter_bsqrt">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Обьем Бойлера</span>
				    </div>
				    <select class="custom-select" name="filter_bsqrt">
							<option value='1 - 10' selected>1 - 10</option>
							<option value='5 - 10'>5 - 10</option>
							<option value='11 - 15'>11 - 15</option>
							<option value='11 - 20'>11 - 20</option>
							<option value='16 - 30'>16 - 30</option>
							<option value='21 - 30'>21 - 30</option>
							<option value='31 - 50'>31 - 50</option>
							<option value='51 - 60'>51 - 60</option>
							<option value='61 - 80'>61 - 80</option>
							<option value='81 - 100'>81 - 100</option>
							<option value='101 - 120'>101 - 120</option>
							<option value='101 - 150'>101 - 150</option>
							<option value='121 - 150'>121 - 150</option>
							<option value='151 - 200'>151 - 200</option>
							<option value='201 - 250'>201 - 250</option>
							<option value='201 - 300'>201 - 300</option>
							<option value='251 - 300'>251 - 300</option>
							<option value='300'>300</option>
							<option value='301 - 400'>301 - 400</option>
							<option value='400'>400</option>
							<option value='401 - 500'>401 - 500</option>
							<option value='500'>500</option>
							<option value='501 - 700'>501 - 700</option>
							<option value='750'>750</option>
							<option value='800'>800</option>
							<option value='701 - 1000'>701 - 1000</option>
							<option value='1000'>1000</option>
							<option value='1001 - 2000'>1001 - 2000</option>
							<option value='2000'>2000</option>
							<option value='2001 - 5000'>2001 - 5000</option>
				    </select>
				  </div>


				  <div class="input-group" id="modal_filter_ptype">
				    <div class="input-group-prepend w-50">
				      <span class="input-group-text w-100">Тип Программатора</span>
				    </div>
				    <select class="custom-select" name="filter_ptype">
				      <option value='Проводной' selected>Проводной</option>
				      <option value='Беспроводной'>Беспроводной</option>
				      <option value='с Wi-Fi'>с Wi-Fi</option>
				    </select>
				  </div>

					<div class="input-group" id="modal_filter_diametr">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Диаметр Подключения</span>
						</div>
						<select class="custom-select" name="filter_diametr">
							<option value='1/4' selected>1/4"</option>
							<option value='1/2'>1/2"</option>
							<option value='3/8'>3/8"</option>
							<option value='3/4'>3/4"</option>
							<option value='1'>1"</option>
							<option value='1 1/4'>1 1/4"</option>
							<option value='1 1/2'>1 1/2"</option>
							<option value='2'>2"</option>
							<option value='2 1/4'>2 1/4"</option>
							<option value='2 1/2'>2 1/2"</option>
							<option value='М 30 х 1,5'>М 30 х 1,5</option>
						</select>
					</div>

					<div class="input-group" id="modal_filter_pressure">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Рабочее давление</span>
						</div>
						<select class="custom-select" name="filter_pressure">
							<option value='10' selected>10</option>
							<option value='12'>12</option>
							<option value='14'>14</option>
						</select>
					</div>

					<div class="input-group" id="modal_filter_heatingfloor_power">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Общая мощность, Вт</span>
						</div>
						<select class="custom-select" name="filter_heatingfloor_power">
							<option value='0 - 500' selected>0 - 500</option>
							<option value='510 - 1000'>510 - 1000</option>
							<option value='1010 - 2000'>1010 - 2000</option>
							<option value='2010 - 3000'>2010 - 3000</option>
							<option value='более 3000'>более 3000</option>
						</select>
					</div>

					<div class="input-group" id="modal_filter_crantype">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Вид крана</span>
						</div>
						<select class="custom-select" name="filter_crantype">
							<option value='Прямой' selected>Прямой</option>
							<option value='Угловой'>Угловой</option>
							<option value='Термоголовка'>Термоголовка</option>
						</select>
					</div>

					<div class="input-group" id="modal_filter_worksub">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Рабочая среда</span>
						</div>
						<select class="custom-select" name="filter_worksub">
							<option value='Вода' selected>Вода</option>
							<option value='Газ'>Газ</option>
						</select>
					</div>

					<div class="input-group" id="modal_filter_heatingfloor_worksub">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Назначение пола</span>
						</div>
						<select class="custom-select" name="filter_heatingfloor_worksub">
							<option value='Под плитку' selected>Под плитку</option>
							<option value='Под стяжку'>Под стяжку</option>
							<option value='Под ламинат, линолеум'>Под ламинат, линолеум</option>
							<option value='Для наружного обогрева'>Для наружного обогрева</option>
						</select>
					</div>

					<div class="input-group" id="modal_filter_dest">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100">Назначение</span>
						</div>
						<select class="custom-select" name="filter_dest">
							<option value='Холодная вода' selected>Холодная вода</option>
							<option value='Горячая вода'>Горячая вода</option>
							<option value='Холодная + Горячая вода'>Холодная + Горячая вода</option>
						</select>
					</div>

					</form>
				</div>

			</div>
			<div class="my-3 text-center">
				<div class="button-group">
					<button class="btn btn-success" onclick="save_filter(this)" id="save_filter_btn" data-product_id="">Сохранить</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="collapse show mx-5" id="product_list">
	<h4 class="text-danger">Список Товаров</h4>
	<div class="input-group my-3">
		<div class="form-group mx-3 w-25">
			<label>Категории Товаров</label>
			<select name="list_category" id="product_category_filter" class="custom-select product_filter">
				<option value="0">Выберите категорию</option>
				<?php foreach ($categories as $c){
					echo "<option value=".$c['id'].">".$c['lc_name']."</option>";
				}?>
			</select>
		</div>
		<div class="form-group mx-3 w-25">
			<label>Производители</label>
			<select name="manufacturers" id="product_manufacturer_filter" class="custom-select product_filter">
				<option value="0">Выберите производителя</option>
				<?php foreach ($manufacturers as $m){
					echo "<option value=".$m['id'].">".$m['m_name']."</option>";
				}?>
			</select>
		</div>
	</div>
	<div class="m-3">
		<div class="">
			<table class="table w-auto">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Название</th>
						<th scope="col">Фото</th>
						<th scope="col">Артикул</th>
						<th scope="col">Цена</th>
						<th scope="col">Описание</th>
						<th scope="col">Опции</th>
						<th scope="col">Акция</th>
						<th scope="col">Популярный</th>
						<th scope="col">Наличие</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($products as $product) {
						$is_onsale = '';
						$is_available = '';
						$is_popular = '';
						if($product['onsale'] == 1){
							$is_onsale = 'checked';
						}
						if($product['available'] == 1){
							$is_available = 'checked';
						}
						if($product['popular'] == 1){
							$is_popular = 'checked';
						}
						echo '
						<tr class="list_item d-none" data-product_type="'.$product['category_id'].'" data-product_manufacturer="'.$product['manufacturer_id'].'">
						<form id="form_'.$product['id'].'">
						<td class="py-1 px-0">'
							.'<a href="/product/'.$product['eng_name'].'">'.$product['id'].'</a>'.
						'</td>'
						.'<td class="py-1 px-0"  style="min-width: 250px;">'
							.'<textarea rows=2 class="form-control" name="item_title" value="">'.$product['title'].'</textarea>'.
						'</td>'
						.'<td class="py-1 px-1" style="min-width: 90px;">
							<a  onclick="call_imgmodal_photo(this)" class="btn btn-primary text-white" data-target="#modalIMG" data-toggle="modal" data-photo="'.$product['image'].'">
								<i class="fas fa-search"></i>
							</a>
							<label class="m-0 ml-1 text-white" data-toggle="tooltip" title="Загрузка" for="file_'.$product['id'].'">
								<a class="btn btn-primary btn_file_input">
									<i class="far fa-file-image"></i>
								</a>
							</label>
							<input class="file_input" id="file_'.$product['id'].'" name="photo" type="file" style="width: 0.1px; height: 0.1px; opacity: 0; z-index: -1; position: absolute; overflow: hidden">
						</td>'
						.'<td class="py-1 px-1" style="width: 120px;">
								<div class="">
									<input name="item_article" class="form-control w-100" value="'.(($product['article'])).'">
								</div>
							</td>'
						.'<td class="py-1 px-1" style="width: 160px;">'
						.'<div class="input-group my-0">
								<div class="input-group-prepend d-inline-block">
									<input name="item_price" class="form-control" style="width: 80px;"  value="'.$product['price'].'">
								</div>
								<select name="item_currency" class="custom-select d-inline-block" style="width: 65px;">
									<option value="2" '.(($product['currency'] == '2') ? 'selected="selected"' : '').'>&#36;</option>
									<option value="3" '.(($product['currency'] == '3') ? 'selected="selected"' : '').'>&euro;</option>
									<option value="1" '.(($product['currency'] == '1') ? 'selected="selected"' : '').'>&#8372;</option>
								</select>
							</div>'.
							// .'<input name="item_price" data-product_currency="'.$product['currency'].'" value="'.$product['price'].'">'.
						'</td>'
						.'<td class="py-1 px-0">'
							.'<textarea  class="form-control comment_expand" name="item_description" rows="1">'.$product['description'].'</textarea>'.
						'</td>'
						.'<td class="py-1 px-1">
							<div class="btn-group" role="group">'
								.'<button class="btn btn-primary mr-1" onclick="item_params(this)" data-target="#modal_params" data-toggle="modal" data-product_id="'.$product['id'].'" data-item_params="'.$product['stat_list'].'"><i class="fas fa-list-ul"></i></button>'
								.'<button class="btn btn-primary mr-1" onclick="item_filter(this)" data-target="#modal_filter" data-toggle="modal" data-product_id="'.$product['id'].'" data-item_filter="'.$product['filter_info'].'"><i class="fas fa-filter"></i></button>'
								.'<button class="btn btn-primary ml-1" onclick="copy_item(this)" data-toggle="tooltip" title="Копировать" data-product_id="'.$product['id'].'"><i class="far fa-copy"></i></button>'
							.'</div>'
						.'</td>'
						.'<td class="py-1 px-0 text-center">'
						.'<input name="item_onsale" '.$is_onsale.' type="checkbox">'.
							// .'<span data-product_id="'.$product['id'].'">'.$product['onsale'].'</span>'.
						'</td>'
						.'<td class="py-1 px-0 text-center">'
						.'<input name="item_popular" '.$is_popular.' type="checkbox">'.
							// .'<span data-product_id="'.$product['id'].'">'.$product['onsale'].'</span>'.
						'</td>'
						.'<td class="py-1 px-0 text-center">'
						.'<input name="item_available" '.$is_available.' type="checkbox">'.
							// .'<span data-product_id="'.$product['id'].'">'.$product['onsale'].'</span>'.
						'</td>'
						.'<td class="py-1 px-0">
							<div class="btn-group" role="group">'
								.'<button class="btn btn-success mr-1" onclick="product_upd(this)" data-toggle="tooltip" title="Сохранить" data-product_id="'.$product['id'].'"><i class="text-white fas fa-save"></i></button>'
								.'<button class="btn btn-danger ml-1" onclick="product_del(this)" data-toggle="tooltip" title="Удалить" data-product_id="'.$product['id'].'"><i class="text-white fas fa-trash"></i></button>'
							.'</div>'
						.'</td>
							</form>'
						.'</tr>';
					} ?>

				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="gapper"></div>

<div class="gapper"></div>

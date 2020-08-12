<div class="gapper"></div>

<div class="container">
	<!--Section: Contact v.2-->
	<section class="mb-4">

	    <!--Section heading-->
	    <h2 class="h1-responsive font-weight-bold text-center my-4 text-primary">Обратная связь</h2>

	    <div class="row">

	        <!--Grid column-->
	        <div class="col-md-9 mb-md-0 mb-5">
	            <form id="contact-form" name="contact-form" method="POST">

	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                            <input type="text" id="name" name="name" class="form-control">
	                            <label for="name" class="">Имя</label>
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                            <input required type="text" id="email" name="email" class="form-control">
	                            <label for="email" class="">E-mail</label>
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                </div>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="md-form mb-0">
	                            <input type="text" id="subject" name="subject" class="form-control">
	                            <label for="subject" class="">Тема письма</label>
	                        </div>
	                    </div>
	                </div>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-12">

	                        <div class="md-form">
	                            <textarea required type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
	                            <label for="message">Сообщение</label>
	                        </div>

	                    </div>
	                </div>
	                <!--Grid row-->

									<div class="text-center">
											<button class="btn w-25 btn-primary text-light d-none d-md-block mx-auto" type="submit">Отправить</button>
											<button class="btn w-100 btn-primary text-light d-md-none" type="submit">Отправить</button>
									</div>
									<div class="status text-center mt-4"></div>

	            </form>

	        </div>
	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-md-3 text-center">
	            <ul class="list-unstyled mb-0">
	                <li><i class="fas fa-map-marker-alt fa-2x text-primary"></i>
	                    <p>Украина, Днепропетровск, пл. Десантников, 1</p>
	                </li>

	                <p><li><i class="fas fa-phone mt-1 fa-2x text-primary"></i></p>
	                    <!--<p>(098)-037-77-11<br>(050) 881-04-49</p>-->
                            <img src="/public/media/img/kyivstar.png"><a title="Позвонить" href="tel:+380980377711"><span style="color: #212529"> (098) 037-77-11</span></a>
                            <p><img src="/public/media/img/mts.png"><a title="Позвонить" href="tel:+380508810449"><span style="color: #212529"> (050) 881-04-49</span></a></p>
	                </li>

	                <li><i class="fas fa-envelope mt-1 fa-2x text-primary"></i>
	                    <p>ultrapromdp@gmail.com<br>ultraprom@ukr.net<br></p>
                             Напишите нам:
                            <!--<a href="tg://resolve?domain=Ultraprom"><span style="color: #212529">Написать в Telegram</span></a><br>-->
                            <!--<a href="viber://add?number=380980377711"><span style="color: #212529">Написать в Viber</span></a>-->
                            <a title="Написать в Telegram" href="tg://resolve?domain=Ultraprom"><img src="/public/media/img/telegram35x35.png"></a>
                            <!--<a title="Написать в Viber" href="viber://add?number=380980377711"><img src="/public/media/img/viber35x35.png"></a>-->
<?php
function isMobile() { 
return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
   if(isMobile()){?>
   <a title="Написать в Viber" href="viber://add?number=380980377711"><img src="/public/media/img/viber35x35.png"></a>
   <?php
   }else{?>
   <a title="Написать в Viber" href="viber://chat?number=+380980377711"><img src="/public/media/img/viber35x35.png"></a>
<?php } ?>

	                </li>
	            </ul>
	        </div>
	        <!--Grid column-->

	    </div>

	</section>
	<!--Section: Contact v.2-->
</div>

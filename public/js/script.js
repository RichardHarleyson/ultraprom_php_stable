// возвращает cookie с именем name, если есть, если нет, то undefined
function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

// Carousels

$(document).ready(function(){
  $('.carousel-item').first().addClass('active');
  $('HCarousel').carousel({
    interval: 3000
  });
  $('.carousel-indicators li').first().addClass('active');

	$('#same_products_carousel').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		// prevArrow: '<a class="position-absolute" style="top: 50%; left: -50px;"><i class="fas fa-chevron-left fa-2x text-d"></i></a>',
		// nextArrow: '<a class="position-absolute" style="top: 50%; right: -50px;"><i class="fas fa-chevron-right fa-2x text-d"></i></a>',
		prevArrow: '#btn_prev',
		nextArrow: '#btn_next',
    autoplay: true,
    autoplaySpeed: 3000,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
	});
	$('#pop_products_carousel').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		// prevArrow: '<a class="position-absolute" style="top: 50%; left: -50px;"><i class="fas fa-chevron-left fa-2x text-d"></i></a>',
		// nextArrow: '<a class="position-absolute" style="top: 50%; right: -50px;"><i class="fas fa-chevron-right fa-2x text-d"></i></a>',
		prevArrow: '#pop_btn_prev',
		nextArrow: '#pop_btn_next',
    autoplay: true,
    autoplaySpeed: 3000,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
	});
	$('#onsale_products_carousel').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		// prevArrow: '<a class="position-absolute" style="top: 50%; left: -50px;"><i class="fas fa-chevron-left fa-2x text-d"></i></a>',
		// nextArrow: '<a class="position-absolute" style="top: 50%; right: -50px;"><i class="fas fa-chevron-right fa-2x text-d"></i></a>',
		prevArrow: '#onsale_btn_prev',
		nextArrow: '#onsale_btn_next',
    autoplay: true,
    autoplaySpeed: 3000,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
	});
});
//====================================================================

// function search(){
//   $.ajax({
//     type: 'POST',
//     url: '/search_page',
//     data: $('#').val(),
//     success:
//   });
// }

$(document).ready(function(){
				 //-- Click on detail
				 $("ul.menu-items > li").on("click",function(){
						 $("ul.menu-items > li").removeClass("active");
						 $(this).addClass("active");
				 })

				 $(".attr,.attr2").on("click",function(){
						 var clase = $(this).attr("class");

						 $("." + clase).removeClass("active");
						 $(this).addClass("active");
				 })

				 //-- Click on QUANTITY
				 $(".btn-minus").on("click",function(){
						 var now = $(".section > div > input").val();
						 if ($.isNumeric(now)){
								 if (parseInt(now) -1 > 0){ now--;}
								 $(".section > div > input").val(now);
						 }else{
								 $(".section > div > input").val("1");
						 }
				 })
				 $(".btn-plus").on("click",function(){
						 var now = $(".section > div > input").val();
						 if ($.isNumeric(now)){
								 $(".section > div > input").val(parseInt(now)+1);
						 }else{
								 $(".section > div > input").val("1");
						 }
				 })

				 // =======================================================

				 // Menu hover buttons
				 $('#11').hover(function() {
				 	$('.to_hide').hide();
				 	$('.menu_items_11').show();
				 });

				 $('#12').hover(function() {
				 	$('.to_hide').hide();
				 	$('.menu_items_12').show();
				 });

				 $('#13').hover(function() {
				 	$('.to_hide').hide();
				 	$('.menu_items_13').show();
				 });

         $('#14').hover(function() {
          $('.to_hide').hide();
          $('.menu_items_14').show();
         });

         $('#15').hover(function() {
          $('.to_hide').hide();
          $('.menu_items_15').show();
         });

				 $('#21').hover(function() {
				 	$('.to_hide').hide();
				 	$('.menu_items_21').show();
				 });

				 $('#22').hover(function() {
				 	$('.to_hide').hide();
				 	$('.menu_items_22').show();
				 });

         $('#23').hover(function() {
          $('.to_hide').hide();
          $('.menu_items_23').show();
         });

         $('#24').hover(function() {
          $('.to_hide').hide();
          $('.menu_items_24').show();
         });

				 $('#31').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_31').show();
				 });

				 $('#32').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_32').show();
				 });

				 $('#41').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_41').show();
				 });

				 $('#42').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_42').show();
				 });

				 $('#51').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_51').show();
				 });

				 $('#52').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_52').show();
				 });

				 $('#61').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_61').show();
				 });

				 $('#62').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_62').show();
				 });
				// ====================================================
				// Mobile menu dropdowns
				 $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
				  if (!$(this).next().hasClass('show')) {
				    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				  }
				  var $subMenu = $(this).next(".dropdown-menu");
				  $subMenu.toggleClass('show');


				  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				    $('.dropdown-submenu .show').removeClass("show");
				  });

				  return false;
					// ==================================================


				});

		 });
// =============================================================
// Main page product carousel slider startup
$(document).ready(function(){
	// Product carousel
	$('#product_carousel div:first-child').addClass('active');
});


// ===============================================================
// Catalog page range widget

// =================================================================
// Rating
window.onload = function() {
    function addRating(){
        var rating = document.querySelectorAll(".rating");

        for (var i = 0; i < rating.length; i++){
            var attribute = +rating[i].getAttribute("rating");
            var difference = 5 - attribute;

            for (var j = 0; j < attribute; j++){
                var starGold = document.createElement("div");
                starGold.className = "gold";
                rating[i].appendChild(starGold);
            }

            for (var k = 0; k < difference; k++){
                var starGrey = document.createElement("div");
                starGrey.className = "grey";
                rating[i].appendChild(starGrey);
            }
        }
    }
    function addRating2(){
        var rating = document.querySelectorAll(".rating");

        for (var i = 0; i < rating.length; i++){
            var attribute = +rating[i].getAttribute("rating");

            for (var j = 5; j > 0; j--){
                if (attribute > 0){
                    var starGold = document.createElement("div");
                    starGold.className = "fas fa-star";
                    rating[i].appendChild(starGold);
                } else {
                    var starGrey = document.createElement("div");
                    starGrey.className = "far fa-star";
                    rating[i].appendChild(starGrey);
                }
                attribute--;
            }
        }
    }
    // addRating();
    addRating2();
 }

// Review
// Форма отзывов
$(document).ready(function(){
	if($('#PageType').is(".PageType_ProductPage")){
		var Оценка = -1;

		var Строка_звёздочек = document.getElementById("Оценки");
		for (let сч = 0; сч < 5; сч++) {
			let звёздочка = document.createElement('span');
			звёздочка.onclick = function () { Выбрать_звёздочку(сч, true); };
			звёздочка.onmouseover = function () { Выбрать_звёздочку(сч); };
			звёздочка.innerHTML = "★";
			Строка_звёздочек.appendChild(звёздочка);
		}

		function Выбрать_звёздочку(зв, уст = false) {
			if (уст) Оценка = зв; else if (зв < 0) зв = Оценка;
			Array.from(document.querySelectorAll("#Оценки span")).forEach(function (зн, сч) {
				зн.style.color = сч > зв ? "#000" : "#ffc107";
				зн.classList.add = сч > зв ? "schecked" : "";
			});
		};
	};
})

function star_test(){
	event.preventDefault();
	// var stars = $('#Оценки span[style="color: rgb(255, 193, 7)"]');
	var stars = $('#Оценки span').filter(function(){
		return $(this).css('color') == 'rgb(255, 193, 7)';
	})
	return stars.length;
}

$(document).ready(function(){
	$('#reviewform').submit(function(){
		// event.preventDefault();
		var data = $(this).serialize();
		var stars = star_test();
		data += '&rating='+stars+'&product_id='+$(this).data('product_id');
    var url = '/product_review/new_review';
    console.log(url);
    $.ajax({
      type: 'POST',
      url: url,
      data: data,
      dataType: 'text',
      success: function(res){
        console.log(res);
        $('#review_form_status').html('<h5>Спасибо за Ваш отзыв!</h5>');
      }
    })
	})
})
// ==========================================================


// Add to cart
$(function () {
  $('[data-toggle="popover"]').popover()
})


// =================================================================
// CART

function add_item(element){
	event.preventDefault();
	$.ajax({
		type: "POST",
		url: '/cart/add_item',
		data: {id: $(element).data('id'), title: $(element).data('title'), price_uah: $(element).data('price'), eng_name: $(element).data('eng_name')},
		success:function(res){
			if(res==true){
				setTimeout(function () {
						$(element).popover('hide');
				}, 2500);
				$(element).removeClass('btn-danger');
				$(element).addClass('btn-success');
				$(element).attr('onclick','');
				$(element).attr('data-toggle','');
				$(element).empty();
				$(element).html('<i class="fas fa-check"></i>');
				// $(element).replaceWith( '<button class="btn btn-success"  data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину"><i class="fas fa-check"></i></button>' );
				// alert('Добавлено в корзину');
        $.ajax({
          type: 'GET',
          url : '/cart/get_cart_count',
          success: function(res){
            $('.cart_counter').text(res);
          }
        })
			};
		}
	});
}

function delete_item(element){
	event.preventDefault();
	$.ajax({
		type: "POST",
		url: '/cart/delete_item',
		data: {index: $(element).data('index')},
		success:function(res){
			var id = $(element).data('index');
			$('[data-index='+id+']').parents('tr').remove();
			count_total();
		}
	});
}

function delete_all(){
	event.preventDefault();
	$.ajax({
		type: "POST",
		url: '/cart/empty_cart',
		success:function(res){
			if(res==true){
				location.href='/';
			}else{
				alert('Что то пошло не так');
			}
		}
	});
}

function count_total(){
	var total = 0;
	$('.cart_quantity').each(function(){
		total = total + ($(this).val() * $(this).data('price'));
	});
	$('.total_price').empty();
	$("input[name='total_price']").attr('data-total_price', total);
	// $("input[name='total_price']").val(total);
	$('.total_price').html('<h4>Итого: '+new Intl.NumberFormat('ru-RU').format(total)+' грн</h4>');
}

function count_item_total(index){
	var total = 0;
	// Считываем текущий quantity
	total = total + $('input[data-index="'+index+'"]').val() * $('input[data-index="'+index+'"]').data('price');
	$('div[data-index="'+index+'"]').empty();
	$('div[data-index="'+index+'"]').html(new Intl.NumberFormat('ru-RU').format(total)+' грн');
}

$(".cart_quantity").change(function(){
	count_total();
	count_item_total(($(this).data('index')));
});

function hide_all_cart(){
  $('tr').hide();
}

function cart_order(){
	event.preventDefault();
	var data = $('#cart_order_form').serialize();
	data +='&total_price='+$("input[name='total_price']").data('total_price');
	$.ajax({
		type: "POST",
		url: '/cart/cart_order',
		data: data,
		success(res){
			$('#cart_order_status').html('<h3 class="text-primary">Заказ отправлен в обработку</h3><h4 class="text-primary">Возвращаемся на Главную...</h4>');
			// setTimeout(function(){$('#cart_order').modal('hide');}, 2000);
      setTimeout(function(){
        $.ajax({
          type: "POST",
          url: '/cart/empty_cart',
          success:function(res){
            if(res==true){
              location.href='/';
            }else{
              alert('Что то пошло не так');
            }
          }
        });
      }, 4000);
		}
	});
}

// ===============================================================
// INPUT MASK
$(function(){
  $(".phone").mask("+38(999) 999-9999");
	$('.phone').focus();
});
// =========================================================
// CALLBACK
$(document).ready(function(){
	$('.callback_form').submit(function(){
		var data = $(this).serialize();
		data += "&product=" + encodeURIComponent($(this).find(':submit').data('product'));
		callback(data);
		$(this).trigger('reset');
		event.preventDefault();
	});
	$('.callback_form_modal').submit(function(){
		var data = $(this).serialize();
		callback(data);
		$(this).trigger('reset');
		event.preventDefault();
	});
});

function callback(data){
	event.preventDefault();
	$.ajax({
		type: "POST",
		url: '/clients/callback',
		data: data,
		success:function(res){
			alert('Сейчас перезвоним');
		}
	});
}
// ===============================================================
// Contacts
$(document).ready(function(){
	$('#contact-form').submit(function(){
		$('.status').html('Отправляем...');
		var data = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: '/top_menu/contacts_send',
			data: data,
			success:function(res){
				$(this).trigger('reset');
				$('.status').html('Отправлено');
			}
		});
		event.preventDefault();
	});
});
// ==================================================================
// ADMIN
function admin_log_in(){
	$.ajax({
		type: 'POST',
		url: '/admin/log_in',
		data: $('#admin_login_form').serialize(),
		success:function(res){
			if(res == 1){
				$('.login_status').html('<h4 class="text-success">Все верно</h4>');
				window.location.href = "/admin/panel";
			}else{
				$('.login_status').html('<h4 class="text-danger">Неверный логин или пароль</h4>');
			}
		}
	});
	event.preventDefault();
}

$(document).ready(function(){
	$('#create_product').submit(function(){
		event.preventDefault();
		var data = new FormData($('form')[0]);
    var params = $('#product_param_list input[name="params"]').map(function(){
      if(this.value != '')
        return this.value
    }).get();
    var values = $('#product_param_list input[name="values"]').map(function(){
      return this.value
    }).get();
    var param_string = '';
    for(let i=0; i<params.length; i++){
      param_string += params[i] + '@' + values[i] + ';';
    }
    data.append('param_string', param_string);
    data.append('m_id', $('select[name="filter_manufacturer"]').find('option:selected').data('m_id'));
		$.ajax({
			type: 'POST',
			url: '/admin/create_product',
			data: data,
			processData: false,
			contentType: false,
			success:function(res){
        console.log(res);
				alert('Товар Успешно Добавлен');
        // document.location.reload();
			}
		});
	});
});

function product_upd(elem){
  event.preventDefault();
	var omg_parent = $(elem).parent().parent().parent();
  var curform = document.getElementById('form_'+$(elem).data('product_id'));
  var data = new FormData(curform);
  var params = $('#param_modal_inside input[name="params"]').map(function(){
    if(this.value != '')
      return this.value
  }).get();
  var values = $('#param_modal_inside input[name="values"]').map(function(){
    return this.value
  }).get();
  var param_string = '';
  for(let i=0; i<params.length; i++){
    param_string += params[i] + '@' + values[i] + ';';
  }
  data.append('param_string', param_string);
  data.append('del','false');
  data.append('id', $(elem).data('product_id'));
  $.ajax({
		type: 'POST',
		url: '/admin/product_update',
		data: data,
    contentType : false,
    processData : false,
		success: function(res){
			console.log(res);
			omg_parent.css('background', 'green');
			setTimeout(function(){ omg_parent.css('background', 'white') }, 2000);
		}
	})
}

$('textarea.comment_expand').focus(function () {
    $(this).animate({ height: "20rem", width:"35rem" }, 300);
});

$('textarea.comment_expand').focusout(function () {
    $(this).animate({ height: "2.5rem", width:"15rem" }, 300);
});

function call_imgmodal_photo(elem){
  var photo = $(elem).data('photo');
  console.log(photo);
  $('#imgmodal_inside').html('<img src="/public/media/uploads/'+photo+'" alt="" style="width:100%">');
}

function setback(elem){
	elem.css('background', 'white');
}

function product_del(elem){
	if(!confirm('Вы Уверены?')){
		return 0;
	}
  event.preventDefault();
	var data = '&item_id='+$(elem).data('product_id')+'&del=true';
	var omg_parent = $(elem).parent().parent().parent();
	$.ajax({
		type: 'POST',
		url: '/admin/product_update',
		data: data,
		success: function(res){
      console.log(res);
			omg_parent.css('background', 'red');
			setTimeout(function(){ omg_parent.hide(); }, 2000);
		}
	})
}

$(document).ready(function(){
  $('#add_product').on('show.bs.collapse', function () {
    $('#product_list').collapse('hide');
  })
  $('#product_list').on('show.bs.collapse', function () {
    $('#add_product').collapse('hide');
  })
})

//Параметры товара
function add_param(elem){
  var param_list = '<div class="input-group my-2"><div class="input-group-prepend w-50"><input name="params" type="text" class="form-control" placeholder="Высота(см)"></div>-<input name="values" type="text" class="form-control" placeholder="150"> <a class="btn btn-danger text-white" onclick=remove_param(this)>X</a></div>';
  $('#product_param_list').append(param_list);
}

function item_params(elem){
  event.preventDefault();
  $('#param_modal_inside').html('');
  $('#save_params_btn').attr('data-product_id', $(elem).data('product_id'));
  var params = $(elem).data('item_params');
  params = params.split(';');
  console.log(params);
  params.forEach(set_param_modal);
}

function set_param_modal(item){
  var data = item.split('@');
  var param_list = '<div class="input-group my-2"><div class="input-group-prepend w-50"><input name="params" type="text" class="form-control" placeholder="Высота(см)" value="'+data[0]+'"></div>-<input name="values" type="text" class="form-control  w-25" placeholder="150" value="'+data[1]+'"> <a class="btn btn-danger text-white" onclick=remove_param(this)>X</a></div>';
  $('#param_modal_inside').append(param_list);
}

function save_params(elem){
  var data = new FormData();
  var params = $('#param_modal_inside input[name="params"]').map(function(){
    if(this.value != '')
      return this.value
  }).get();
  var values = $('#param_modal_inside input[name="values"]').map(function(){
    return this.value
  }).get();
  var param_string = '';
  for(let i=0; i<params.length; i++){
    param_string += params[i] + '@' + values[i] + ';';
  }
  data.append('param_string', param_string);
  data.append('product_id', $(elem).data('product_id'));
  $.ajax({
		type: 'POST',
		url: '/admin/upd_params',
		data: data,
    contentType : false,
    processData : false,
		success: function(res){
			console.log(res);
      alert('Сохранено');
		}
	})
}

function add_param_modal(elem){
  var param_list = '<div class="input-group my-2"><div class="input-group-prepend w-50"><input name="params" type="text" class="form-control" placeholder="Высота(см)"></div>-<input name="values" type="text" class="form-control" placeholder="150">  <a class="btn btn-danger text-white" onclick=remove_param(this)>X</a></div>';
  $('#param_modal_inside').append(param_list);
}

function remove_param(elem){
  $(elem).parent().remove();
}

/////////////////////////////////////////
// Фильтр
function item_filter(elem){
  event.preventDefault();
  $("#modal_filter_info div[class='input-group']").hide();
	$("#modal_filter_info div[class='input-group'] select").prop("disabled", true);
  $('#save_filter_btn').attr('data-product_id', $(elem).data('product_id'));
  var params = $(elem).data('item_filter');
  params = params.split(';');
  params.forEach(set_filter_modal);
}

function set_filter_modal(item){
  var data = item.split(':');
  console.log(data);
  $('#modal_'+data[0]).show();
  $('#modal_'+data[0]+' select').prop('disabled', false);
  $('#modal_'+data[0]+' select option[value="'+data[1]+'"]').attr('selected', 'selected');
  // $("#molda_"+data[0]+" select option[value='"+data[1]+"']").attr('selected', 'selected');
}

function save_filter(elem){
  event.preventDefault();
  var modal_form = document.getElementById('modal_filter_form');
  var data = new FormData(modal_form);
  data.append('product_id', $(elem).data('product_id'));
  data.append('manufacturer_id', $('#modal_filter_form select[name="filter_manufacturer"]').find('option:selected').data('m_id'));
  $.ajax({
    type: 'POST',
    url: '/admin/update_filter',
    data: data,
    contentType : false,
    processData : false,
    success: function(res){
      console.log(res);
    }
  })
}

$(document).ready(function(){

  // $('select[name="list_category"]')
  // $('select[name="manufacturers"]')
  $('.product_filter').change(function(){
    $('tr[class="list_item"]').hide();
    if($('select[name="list_category"]').val() != 0){
      // for all
      //   visible a
      // console.log($('tr[data-product_type="'+$('select[name="list_category"]').val()+'"]').length);
      $('tr[data-product_type="'+$('select[name="list_category"]').val()+'"]').show();
    } else {
      // for all
      //   visible all
      $('tr[class="list_item"]').show();
    }
    if($('select[name="manufacturers"]').val() != 0){
      // for visible
      //   visible b
      // console.log($('tr[data-product_manufacturer="'+$('select[name="manufacturers"]').val()+'"]:visible').length);
      $('tr[class="list_item"]').each(function(){
        if($(this).data('product_manufacturer') != $('select[name="manufacturers"]').val()){
          $(this).hide();
        }
      })
    } else {
      // for visible
      //   visible all
      // $('tr[class="list_item"] visible').show(); //pass
    }
  });

});


$(document).ready(function(){
  try{
    if(localStorage.getItem('product_category_filter') && localStorage.getItem('product_manufacturer_filter')){
      $('#product_category_filter option[value="'+localStorage.getItem('product_category_filter')+'"]').attr('selected', 'selected');
      $('#product_manufacturer_filter option[value="'+localStorage.getItem('product_manufacturer_filter')+'"]').attr('selected', 'selected');
      $('.product_filter').trigger('change');
      show_products(localStorage.getItem('product_category_filter'),localStorage.getItem('product_manufacturer_filter'));
    }
  }
  catch (e){
    console.log('Не удалось установить Фильтр');
    logMyErrors(e);
  }
  $('.product_filter').change(function(){
    localStorage.setItem('product_category_filter', $('select[name="list_category"]').val());
    localStorage.setItem('product_manufacturer_filter', $('select[name="manufacturers"]').val());
    show_products($('select[name="list_category"]').val(), $('select[name="manufacturers"]').val());
  })
})

function show_products(type_id, manufacturer_id){
  console.log(type_id, manufacturer_id);
  $('.list_item').addClass('d-none');
  if(manufacturer_id == 0){
    $('.list_item[data-product_type='+type_id+']').removeClass('d-none');
  }else{
    $('.list_item[data-product_manufacturer='+manufacturer_id+']').filter(function(){
      return $(this).data('product_type') == type_id;
    }).removeClass('d-none');
  }
}

//Сохраняем фильтр пользователя
function user_filter_save(){
  filter_data = $('input[class="form-check-input"]:checked').val();
  filter_page = window.location.href.split('/');
  filter_global_data = {'pagetype': filter_page[filter_page.length-1] , 'pagedata': filter_page};
  // filter_data.append()
  localStorage.setItem('filter_global_data', filter_global_data);
  console.log(filter_global_data);
  console.log('op');
  // filter_data.each(function(){
  //   console.log($(this).val());
  // })
}

$(document).ready(function(){
  if($('#PageType').has('PageType_Catalog')){
  //   filter_page = window.location.href.split('/');
  //   localStorage.setItem('filter_page', filter_page[filter_page.length-1]);
    $('input[class="form-check-input"]').change(function(){
      try{
        user_filter_save();
      }
      catch (e){
        console.log(e);
      }
    });
  }
})

////////////////////////////////////////
function copy_item(elem){
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: '/admin/copy_item',
    data: {product_id: $(elem).data('product_id')},
    success: function(res){
      $('#product_list').collapse('hide');
      $('#add_product').collapse('show');
      ///////////////////////////////////
      var copy_item = $.parseJSON(res);
      console.log(copy_item);
      $('#create_product input[name="title"]').val(copy_item.title);
      // $('#create_product input[name="photo"]').val(copy_item.image);
      $('#create_product input[name="article"]').val(copy_item.article);
      $('#create_product input[name="price"]').val(copy_item.price);
      $('#create_product select[name="currency"] option[value="'+copy_item.currency+'"]').attr('selected', 'selected');
      $('#create_product select[name="rating"] option[value="'+copy_item.rating+'"]').attr('selected', 'selected');
      $('#create_product select[name="category"] option[value="'+copy_item.category_id+'"]').attr('selected', 'selected');
      $('#create_product select[name="category"]').trigger('change');
      //////////////////
      var filter_data = copy_item.filter_info.split(';');
      console.log(filter_data);
      filter_data.forEach(function(item){
        var pair = item.split(':');
        $('select[name="'+pair[0]+'"] option[value="'+pair[1]+'"]').attr('selected', 'selected');
      });
      //////////////////
      var stat_data = copy_item.stat_list.split(';');
      $('#product_param_list').html('');
      stat_data.forEach(function(item){
        var pair = item.split('@');
        var param_list = '<div class="input-group my-2"><div class="input-group-prepend w-50"><input name="params" type="text" class="form-control" placeholder="Высота(см)" value="'+pair[0]+'"></div>-<input name="values" type="text" class="form-control" placeholder="150" value="'+pair[1]+'"> <a class="btn btn-danger text-white" onclick=remove_param(this)>X</a></div>';
        $('#product_param_list').append(param_list);
      });
      //////////////////
      $('#product_description').val(copy_item.description);
      // $('#create_product textarea[name="description"]').val(copy_item.description);
    }
  });
}

$(document).ready(function(){
	// Вырубили все
	$("#filter_info div[class='input-group']").hide();
	$("#filter_info div[class='input-group'] input").prop("disabled", true);
	$("#filter_info div[class='input-group'] select").prop("disabled", true);
})

$("select[name='category']").change(function(){
	// Вырубили все
	$("#filter_info div[class='input-group']").hide();
	$("#filter_info div[class='input-group'] input").prop("disabled", true);
	$("#filter_info div[class='input-group'] select").prop("disabled", true);
	//
	$('#filter_manufacturer').show();
	$('#filter_manufacturer select').prop('disabled', false);
	$('#filter_country').show();
	$('#filter_country select').prop('disabled', false);
	if($(this).val() == '1'){
		//Настенные Газовые Котлы:
		// Бренд, Камера Сгорания, Теплообменник, Страна Прозводитель, Контур, Мощность
		// Вырубили все
		// Включаем только нужные
		$('#filter_burn_cam').show();
		$('#filter_burn_cam select').prop('disabled', false);
		$('#filter_contur').show();
		$('#filter_contur select').prop('disabled', false);
		$('#filter_power').show();
		$('#filter_power select').prop('disabled', false);
    $('#filter_heating_square').show();
    $('#filter_heating_square select').prop('disabled', false);
	}else if ($(this).val() == '2') {
		//Напольные Газовые Котлы:
		// Бренд, Страна производитель, мощность, контур, теплообменник, тип розжига, способ отвода газов
		// Вырубили все
		// Включаем только нужные
		$('#filter_power').show();
		$('#filter_power select').prop('disabled', false);
		$('#filter_contur').show();
		$('#filter_contur select').prop('disabled', false);
		$('#filter_burn_cam').show();
		$('#filter_burn_cam select').prop('disabled', false);
    $('#filter_heating_square').show();
    $('#filter_heating_square select').prop('disabled', false);
	}else if ($(this).val() == '3') {
		// Конденсационные Газовые Котлы:
		// Производитель, Страна производитель, мощность, кол-во контуров.
		// Вырубили все
		// Включаем только нужные
    $('#filter_contur').show();
		$('#filter_contur select').prop('disabled', false);
		$('#filter_power').show();
		$('#filter_power select').prop('disabled', false);
    $('#filter_heating_square').show();
    $('#filter_heating_square select').prop('disabled', false);
	}else if ($(this).val() == '4') {
		// Электрические Котлы:
		// Бренд, Страна Производитель, Наличие Насоса, /Напряжение/, управление, Мощность
		// Вырубили все
		// Включаем только нужные
		$('#filter_epower').show();
		$('#filter_epower select').prop('disabled', false);
		$('#filter_napryajenie').show();
		$('#filter_napryajenie select').prop('disabled', false);
		$('#filter_nasos').show();
		$('#filter_nasos select').prop('disabled', false);
    $('#filter_heating_square').show();
    $('#filter_heating_square select').prop('disabled', false);
    $('#filter_extbarrel').show();
    $('#filter_extbarrel select').prop('disabled', false);
	}
  else if($(this).val() == '5'){
    // Твердотопливные котлы
    // Бренд, мощность
    // Вырубили все
    //
    $('#filter_power').show();
    $('#filter_power select').prop('disabled', false);
    $('#filter_tteploobmen').show();
    $('#filter_tteploobmen select').prop('disabled', false);
    $('#filter_controller').show();
    $('#filter_controller select').prop('disabled', false);
    $('#filter_heating_square').show();
    $('#filter_heating_square select').prop('disabled', false);
  }
  else if($(this).val() == '6'){
    // Комплектующие для котлов
    // Бренд, страна
    // Вырубили все
    $('#filter_country').hide();
    $('#filter_country select').prop('disabled', true);
  }
  else if($(this).val() == '7'){
		// Стальные радиаторы:
		// Бренд, Страна Производитель, тип, высота, длина, подключение
		$('#filter_rad_type').show();
		$('#filter_rad_type select').prop('disabled',false);
		$('#filter_rad_height').show();
		$('#filter_rad_height select').prop('disabled', false);
		$('#filter_rad_length').show();
		$('#filter_rad_length select').prop('disabled', false);
		$('#filter_rad_conn').show();
		$('#filter_rad_conn select').prop('disabled', false);
	}
	else if($(this).val() == '8'){
		// Алюминиевые радиаторы:
		// Бренд, Страна Производитель, межосевое расстояние
		// Вырубили все
		// Включаем только нужные
		$('#filter_apex').show();
		$('#filter_apex select').prop('disabled', false);
    $('#filter_deep_sec').show();
    $('#filter_deep_sec select').prop('disabled', false);
    $('#filter_rad_conn').show();
    $('#filter_rad_conn select').prop('disabled', false);
	}
	else if($(this).val() == '9'){
		// Биметаллические радиаторы:
		// Бренд, Страна Производитель, межосевое расстояние
		// Вырубили все
		// Включаем только нужные
    $('#filter_apex').show();
		$('#filter_apex select').prop('disabled', false);
    $('#filter_deep_sec').show();
    $('#filter_deep_sec select').prop('disabled', false);
    $('#filter_rad_conn').show();
    $('#filter_rad_conn select').prop('disabled', false);
	}
	else if($(this).val() == '10'){
		// Чугунные радиаторы:
		// Бренд, Страна Производитель, межосевое расстояние
		// Вырубили все
		// Включаем только нужные
	}
	else if($(this).val() == '11'){
		// Электрические радиаторы:
	}
	else if($(this).val() == '12'){
		// Дизайнерские радиаторы:
		$('#filter_country').hide();
		$('#filter_select select').prop('disabled', true);
	}
	else if($(this).val() == '13'){
		// Комплектующие для радиаторов:
    $('#filter_country').hide();
		$('#filter_select select').prop('disabled', true);
	}
	else if($(this).val() == '14'){
		// Электрический теплый пол:
		$('#filter_flour_type').show();
		$('#filter_flour_type select').prop('disabled', false);
		$('#filter_heatingfloor_worksub').show();
		$('#filter_heatingfloor_worksub select').prop('disabled', false);
    $('#filter_heatingfloor_power').show();
    $('#filter_heatingfloor_power select').prop('disabled', false);
		$('#filter_flour_isqr').show();
		$('#filter_flour_isqr select').prop('disabled', false);
	}
	else if($(this).val() == '15'){
		// Трубы для теплого пола:
    $('#filter_pipe_rad').show();
		$('#filter_pipe_rad select').prop('disabled', false);
	}
	else if($(this).val() == '16'){
		// Инфракрасный теплый пол:
	}
	else if($(this).val() == '17'){
		// Водяной теплый пол
    $('#filter_ttype').show();
		$('#filter_ttype select').prop('disabled', false);
	}
	else if($(this).val() == '18'){
		// Коллекторные шкафы
    $('#filter_contur_count').show();
    $('#filter_contur_count select').prop('disabled', false);
    $('#filter_contur_count').show();
    $('#filter_contur_count select').prop('disabled', false);
    $('#filter_stype').show();
		$('#filter_stype select').prop('disabled', false);
	}
	else if($(this).val() == '19'){
		// ППР трубы и фитинги
    $('#filter_ppr_type').show();
    $('#filter_ppr_type select').prop('disabled', false);
    $('#filter_fitting_type').show();
    $('#filter_fitting_type select').prop('disabled', false);
	}
	else if($(this).val() == '20'){
		// Обжимные фитинги
    $('#filter_pipe_rad').show();
    $('#filter_pipe_rad select').prop('disabled', false);
    $('#filter_ppr_type').show();
    $('#filter_ppr_type select').prop('disabled', false);
    $('#filter_fitting_type').show();
    $('#filter_fitting_type select').prop('disabled', false);
	}
	else if($(this).val() == '21'){
		// Изоляция для труб
    $('#filter_wallwd').show();
    $('#filter_wallwd select').prop('disabled', false);
    $('#filter_pipe_rad').show();
    $('#filter_pipe_rad select').prop('disabled', false);
	}
	else if($(this).val() == '22'){
		// Металлопластиковые трубы
    $('#filter_pipe_rad').show();
    $('#filter_pipe_rad select').prop('disabled', false);
	}
	else if($(this).val() == '23'){
		// Внутренняя канализация
    $('#filter_stockfit_type').show();
    $('#filter_stockfit_type select').prop('disabled', false);
	}
	else if($(this).val() == '24'){
		// Наружная канализация
    $('#filter_stockfit_type').show();
    $('#filter_stockfit_type select').prop('disabled', false);
    $('#filter_stock_rad').show();
    $('#filter_stock_rad select').prop('disabled', false);
	}
	else if($(this).val() == '25'){
		// Бесшумная канализация
    $('#filter_stockfit_type').show();
    $('#filter_stockfit_type select').prop('disabled', false);
	}
	else if($(this).val() == '26'){
		// Кондиционеры настенного типа
    $('#filter_wheating').show();
    $('#filter_wheating select').prop('disabled', false);
    $('#filter_invert').show();
    $('#filter_invert select').prop('disabled', false);
    $('#filter_bpower').show();
    $('#filter_bpower select').prop('disabled', false);
    $('#filter_csquare').show();
    $('#filter_csquare select').prop('disabled', false);
    $('#filter_ctype').show();
    $('#filter_ctype select').prop('disabled', false);
	}
	else if($(this).val() == '27'){
		// Мобильные кондиционеры
    $('#filter_bpower').show();
    $('#filter_bpower select').prop('disabled', false);
    $('#filter_csquare').show();
    $('#filter_csquare select').prop('disabled', false);
    $('#filter_ctype').show();
    $('#filter_ctype select').prop('disabled', false);
	}
  else if($(this).val() == '34'){
    // Увлажнители Воздуха
    $('#filter_country').hide();
    $('#filter_country select').prop('disabled', true);
    $('#filter_csquare').show();
    $('#filter_csquare select').prop('disabled', false);
  }
	else if($(this).val() == '28'){
		// Циркуляционные насосы
    $('#filter_napryajenie').show();
    $('#filter_napryajenie select').prop('disabled', false);
    $('#filter_napor').show();
    $('#filter_napor select').prop('disabled', false);
    $('#filter_effect').show();
    $('#filter_effect select').prop('disabled', false);
    $('#filter_nepower').show();
    $('#filter_nepower select').prop('disabled', false);
    $('#filter_mlength').show();
    $('#filter_mlength select').prop('disabled', false);
	}
	else if($(this).val() == '29'){
		// Бойлеры электрические
    $('#filter_bform').show();
    $('#filter_bform select').prop('disabled', false);
    $('#filter_bset').show();
    $('#filter_bset select').prop('disabled', false);
    $('#filter_tentype').show();
    $('#filter_tentype select').prop('disabled', false);
    $('#filter_bsqrt').show();
    $('#filter_bsqrt select').prop('disabled', false);
	}
	else if($(this).val() == '30'){
		// Проточные электрические водонагреватели
    $('#filter_rad_conn').show();
    $('#filter_rad_conn select').prop('disabled', false);
    $('#filter_epower_int').show();
    $('#filter_epower_int select').prop('disabled', false);
    $('#filter_effect_lmin').show();
    $('#filter_effect_lmin select').prop('disabled', false);
	}
	else if($(this).val() == '31'){
		// Газовые колонки
    $('#filter_wsqrt').show();
    $('#filter_wsqrt select').prop('disabled', false);
    $('#filter_epower_int').show();
    $('#filter_epower_int select').prop('disabled', false);
    $('#filter_burn_cam_type').show();
    $('#filter_burn_cam_type select').prop('disabled', false);
    $('#filter_rozjig').show();
    $('#filter_rozjig select').prop('disabled', false);
	}
  else if($(this).val() == '34'){
    // Увлажнители воздуха
    // $('#filter_country').hide();
    // $('#filter_country select').prop('disabled', true);
  }
  else if($(this).val() == '35'){
    // Программаторы
    $('#filter_ptype').show();
    $('#filter_ptype select').prop('disabled', false);
  }
  else if($(this).val() == '36'){
    // Стабидизаторы Напряжения
    $('#filter_country').hide();
    $('#filter_country select').prop('disabled', true);
  }
  else if($(this).val() == '37'){
    // Электрические полотенцесушители
    $('#filter_tdryer_type').show();
    $('#filter_tdryer_type select').prop('disabled', false);
    $('#filter_tdryer_form').show();
    $('#filter_tdryer_form select').prop('disabled', false);
    $('#filter_tdryer_connect').show();
    $('#filter_tdryer_connect select').prop('disabled', false);
    $('#filter_tdryer_colour').show();
    $('#filter_tdryer_colour select').prop('disabled', false);
  }
  else if($(this).val() == '44'){
    // Гидроаккумуляторы
    $('#filter_bsqrt').show();
    $('#filter_bsqrt select').prop('disabled', false);
    $('#filter_bset').show();
    $('#filter_bset select').prop('disabled', false);
  }
  else if($(this).val() == '45'){
    // Грязевики и шламоуловители
    $('#filter_diametr').show();
    $('#filter_diametr select').prop('disabled', false);
    $('#filter_worksub').show();
    $('#filter_worksub select').prop('disabled', false);
    $('#filter_dest').show();
    $('#filter_dest select').prop('disabled', false);
  }
  else if($(this).val() == '46'){
    // Конвекторы электрические
    $('#filter_epower').show();
    $('#filter_epower select').prop('disabled', false);
    $('#filter_csquare').show();
    $('#filter_csquare select').prop('disabled', false);
    $('#filter_controller').show();
    $('#filter_controller select').prop('disabled', false);
  }
  else if($(this).val() == '47'){
    // Коллекторы теплого пола
    $('#filter_nasos').show();
    $('#filter_nasos select').prop('disabled', false);
    $('#filter_contur_count').show();
    $('#filter_contur_count select').prop('disabled', false);
  }
  else if($(this).val() == '48'){
    // Воздухоотводчики
    $('#filter_diametr').show();
    $('#filter_diametr select').prop('disabled', false);
    $('#filter_pressure').show();
    $('#filter_pressure select').prop('disabled', false);
  }
  else if($(this).val() == '49'){
    // Радиаторная запорная арматура
    $('#filter_diametr').show();
    $('#filter_diametr select').prop('disabled', false);
    $('#filter_crantype').show();
    $('#filter_crantype select').prop('disabled', false);
    $('#filter_rad_conn').show();
    $('#filter_rad_conn select').prop('disabled', false);
    $('#filter_extbarrel').show();
    $('#filter_extbarrel select').prop('disabled', false);
  }
  else if($(this).val() == '50'){
    // Группы безопасности
    $('#filter_diametr').show();
    $('#filter_diametr select').prop('disabled', false);
    $('#filter_usefor').show();
    $('#filter_usefor select').prop('disabled', false);
  }
  else if($(this).val() == '51'){
    // Редукторы давления
    $('#filter_diametr').show();
    $('#filter_diametr select').prop('disabled', false);
    $('#filter_dest').show();
    $('#filter_dest select').prop('disabled', false);
    $('#filter_extbarrel').show();
    $('#filter_extbarrel select').prop('disabled', false);
  }
  else if($(this).val() == '52'){
    // Инсталляции
    $('#filter_instaltype').show();
    $('#filter_instaltype select').prop('disabled', false);
    $('#filter_instaldest').show();
    $('#filter_instaldest select').prop('disabled', false);
  }

});

//Обновление категорий, подкатегорий, ссылок слайдов
function update_gcategory(){
    event.preventDefault();
    var get_gcategory = prompt('Новое значение', '');
    console.log(get_gcategory);
    if (get_gcategory != null) {
      $.ajax({
        type: 'POST',
        url: '/admin/update_gcategory',
        data: {id : $('select[name="global_category"] :selected').val(), gc_name : get_gcategory},
        success: function(rest){
          console.log(rest);
          alert('Обновлено');
        }
      });
    } else {
      return 0;
    }
};

function update_category(){
    event.preventDefault();
    var get_category = prompt('Новое значение', '');
    console.log(get_category);
    if (get_category != null) {
      $.ajax({
        type: 'POST',
        url: '/admin/update_category',
        data: {id : $('select[name="category"] :selected').val(), c_name : get_category},
        success: function(rest){
          console.log(rest);
          alert('Обновлено');
        }
      });
    } else {
      return 0;
    }
};

function update_lcategory(){
    event.preventDefault();
    var get_lcategory = prompt('Новое значение', '');
    console.log(get_lcategory);
    if (get_lcategory != null) {
      $.ajax({
        type: 'POST',
        url: '/admin/update_lcategory',
        data: {id : $('select[name="lcategory_list"] :selected').val(), lc_name : get_lcategory},
        success: function(rest){
          console.log(rest);
          alert('Обновлено');
        }
      });
    } else {
      return 0;
    }
};

function update_slide_href(){
    event.preventDefault();
    var get_href = prompt('Новое значение', '');
    console.log(get_href);
    if (get_href != null) {
      $.ajax({
        type: 'POST',
        url: '/admin/update_slide_href',
        data: {id : $('select[name="slides"] :selected').val(), slide_href : get_href},
        success: function(rest){
          console.log(rest);
          alert('Обновлено');
        }
      });
    } else {
      return 0;
    }
};


//////////////////////////////////////////////////

$(document).ready(function(){

  $('input[type="file"]').change(function(){
    $(this).parent().find('a.btn').removeClass('btn-warning');
    $(this).parent().find('a.btn').addClass('btn-primary');
  })

  $('#upd_c_photo').change(function(){
    result = confirm('Обновить Фото?');
    if(!result){
      return 0;
    }
    event.preventDefault();
    var data = new FormData(document.getElementById('upd_category'));
    // console.log($(this).val());
    $.ajax({
      type: 'POST',
      url: '/admin/upd_category',
      data: data,
      processData: false,
      contentType: false,
      success: function(res){
        alert('Фото Обновлено');
        console.log(res);
      }
    })
  })

  $('#upd_lc_photo').change(function(){
    result = confirm('Обновить Фото?');
    if(!result){
      return 0;
    }
    event.preventDefault();
    var data = new FormData(document.getElementById('upd_lcategory'));
    console.log($(this).val());
    $.ajax({
      type: 'POST',
      url: '/admin/upd_lower_category',
      data: data,
      processData: false,
      contentType: false,
      success: function(res){
        alert('Фото Обновлено');
        console.log(res);
      }
    })
  })

  $('#add_category').submit(function(){
    event.preventDefault();
    var data = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: '/admin/add_category',
      data: data,
      success: function(res){
        console.log(res);
        alert('Добавлено');
        // подсветка
      }
    })
  });

  $('#add_lower_category').submit(function(){
    event.preventDefault();
    var data = new FormData(document.getElementById('add_lower_category'));
    // console.log($('#new_lc_photo]').val());
    $.ajax({
      type: 'POST',
      url: '/admin/add_lower_category',
      data: data,
      processData: false,
      contentType: false,
      success: function(res){
        alert('Добавлено');
        console.log(res);
      }
    })
  });

  $('#add_manufacturer').submit(function(){
    event.preventDefault();
    var data = new FormData(document.getElementById('add_manufacturer'));
    $.ajax({
      type: 'POST',
      url: '/admin/add_manufacturer',
      data: data,
      processData: false,
      contentType: false,
      success: function(res){
        alert('Добавлено');
        console.log('Добавлено');
      }
    })
  });
})

function del_category(elem){
  result = confirm('Удалить Категорию?');
  if(!result){
    return 0;
  }
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: '/admin/del_category',
    data: {category_id: $(elem).parent().find('select[name="category_list"]').val()},
    success: function(res){
      console.log(res);
      alert('Удалено');
    }
  });
}

$(document).ready(function(){
  $('select[name="lcategory_list"]').change(function () {
    $('#show_lc_photo').data('photo', $(this).find(':selected').data('lc_photo'));
  })

  $('select[name="lcategory_list"]').trigger("change");
})

function del_lcategory(elem){
  result = confirm('Удалить Подкатегорию?');
  if(!result){
    return 0;
  }
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: '/admin/del_lcategory',
    data: {lcategory_id: $(elem).parent().find('select[name="lcategory_list"]').val()},
    success: function(res){
      console.log(res);
      alert('Удалено');
    }
  });
}

function del_manufacturer(){
  event.preventDefault();
  console.log($('#manufacturer').val());
  $.ajax({
    type: 'POST',
    url: '/admin/del_manufacturer',
    data: { manufacturer_id : $('#manufacturer').val()},
    success: function(res){
      $('#manufacturer').find('option:selected').remove();
    }
  })
}

function del_slide(){
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: '/admin/del_slide',
    data: { slide_id: $('select[name="slides"]').val()},
    success: function(res){
      $('select[name="slides"]').find('option:selected').remove();
    }
  })
}

$(document).ready(function(){
  $('#add_slide').submit(function(){
    event.preventDefault();
    var data = new FormData(document.getElementById('add_slide'));
    $.ajax({
      type: 'POST',
      url: '/admin/add_slide',
      data: data,
      processData: false,
      contentType: false,
      success: function(res){
        console.log(res);
        alert('Слайд Добавлен');
      }
    })
  });
})

function del_review(elem){
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: '/admin/upd_reviews',
    data: {review_id: $(elem).data('r_id'), r_status: 0},
    success: function(res){
      $(elem).parent().parent().hide();
    }
  })
}

function set_review(elem){
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: '/admin/upd_reviews',
    data: {review_id: $(elem).data('r_id'), product_id:$(elem).data('product_id') , r_status: 1},
    success: function(res){
      console.log(res);
      $(elem).parent().parent().hide();
    }
  })
}

$(document).ready(function(){
	if($('#PageType').is(".PageType_Currency")){
		$('#set_curr_auto').on('click',function(){
			var curr_data = { usd_buy: $('#USD_buy').data('buy'), usd_sale: $('#USD_sale').data('sale'), eur_buy: $('#EUR_buy').data('buy'), eur_sale: $('#EUR_sale').data('sale'), };
			$.ajax({
				type: 'POST',
				url: '/admin/currency_auto_update',
				data: curr_data,
				success:function(res){
					if( res == 1){
						$('#auto_status').html('<h4>Курс Установлен</h4>');
					}
				}
			});
		});
	}
});

// ====================================================================
// CATALOG
$(document).ready(function(){
	if($('#PageType').is(".PageType_Catalog")){
    var filter_headers = $('#filter_headers_info').data('filter_headers');
		$("input[type='checkbox']").change(function () {
    	var product_list = document.querySelectorAll(".product_item");
    	var checkboxes_state = [];
    	var current_request = {};
    	var checkboxes_on = {};
    	// Минимальная и максимальная цена товаров для полей воода цены
    	var min_price = Number($('#price_start').val());
    	var max_price = Number($('#price_end').val());

    	for( key in filter_headers){
    		//Собираем состояние всех чекбоксов по всем заголовкам
    		checkboxes_state[key] = document.querySelectorAll("[data-filter_key="+filter_headers[key]+"] input");
    		//Выделяем зажатые чекбоксы
    		for(let i = 0; i < checkboxes_state[key].length; i++){
    			if(checkboxes_state[key][i].checked){
    				// console.log('checked');
    				checkboxes_on[checkboxes_state[key][i].getAttribute('value')] = 1;
    				current_request[filter_headers[key]] = 1;
    			}else{
    				continue;
    			}
    		}
    	}
    	if(isEmpty(checkboxes_on)){
    		$('.product_item').show();
    		for(let i = 0; i < product_list.length; i++){
    			if(!(product_list[i].getAttribute("data-product_price") >= min_price && product_list[i].getAttribute("data-product_price") <= max_price)){
    				product_list[i].style.display = "none";
    				continue;
    			}
    		}
    		how_many(filter_headers)
    		return true;
    	}
    	//Перебираем товары их свойство по текущему заголовку
    	for(let i = 0; i < product_list.length; i++){
    		if(!(product_list[i].getAttribute("data-product_price") >= min_price && product_list[i].getAttribute("data-product_price") <= max_price)){
    			product_list[i].style.display = "none";
    			continue;
    		}
    		for(key in filter_headers){
    			if(!(filter_headers[key] in current_request) ){
    				continue;
    			}
    			var curr_attr = product_list[i].getAttribute("data-"+filter_headers[key]);
    			if(curr_attr in checkboxes_on){
    				product_list[i].style.display = "block";
    			}else{
    				product_list[i].style.display = "none";
    				break;
    			}
    		}
    	}
    	// Пересчитываем кол-во доступных товаров по текущей настройке фильтра
    	how_many(filter_headers);
    });
		get_min_max();
		how_many(filter_headers);
		$("input[type='checkbox']").click(function () {
			how_many(filter_headers);
		});
		var sort_type = $('#sorting').val();
		var url = window.location.pathname.split("/").pop();
		$('option:selected', 'select[name="sorting"]').removeAttr('selected');
		$("select option[value="+url).attr("selected","selected");
		$('select[name="sorting"]').on('change', function() {
			window.location.href = "/catalog/"+$('#title').data('title')+"/sort/"+this.value;
		});
	};
});

// function filter_headers(filter_headers){
//   alert('Filter_Headers Called!');
//   // var filter_headers = $('#filter_headers_info').data('filter_headers');
// 	var product_list = document.querySelectorAll(".product_item");
// 	var checkboxes_state = [];
// 	var current_request = {};
// 	var checkboxes_on = {};
// 	// Минимальная и максимальная цена товаров для полей воода цены
// 	var min_price = Number($('#price_start').val());
// 	var max_price = Number($('#price_end').val());
//
// 	for( key in filter_headers){
// 		//Собираем состояние всех чекбоксов по всем заголовкам
// 		checkboxes_state[key] = document.querySelectorAll("[data-filter_key="+filter_headers[key]+"] input");
// 		//Выделяем зажатые чекбоксы
// 		for(let i = 0; i < checkboxes_state[key].length; i++){
// 			if(checkboxes_state[key][i].checked){
// 				// console.log('checked');
// 				checkboxes_on[checkboxes_state[key][i].getAttribute('value')] = 1;
// 				current_request[filter_headers[key]] = 1;
// 			}else{
// 				continue;
// 			}
// 		}
// 	}
// 	if(isEmpty(checkboxes_on)){
// 		$('.product_item').show();
// 		for(let i = 0; i < product_list.length; i++){
// 			if(!(product_list[i].getAttribute("data-product_price") >= min_price && product_list[i].getAttribute("data-product_price") <= max_price)){
// 				product_list[i].style.display = "none";
// 				continue;
// 			}
// 		}
// 		how_many(filter_headers)
// 		return true;
// 	}
// 	//Перебираем товары их свойство по текущему заголовку
// 	for(let i = 0; i < product_list.length; i++){
// 		if(!(product_list[i].getAttribute("data-product_price") >= min_price && product_list[i].getAttribute("data-product_price") <= max_price)){
// 			product_list[i].style.display = "none";
// 			continue;
// 		}
// 		for(key in filter_headers){
// 			if(!(filter_headers[key] in current_request) ){
// 				continue;
// 			}
// 			var curr_attr = product_list[i].getAttribute("data-"+filter_headers[key]);
// 			if(curr_attr in checkboxes_on){
// 				product_list[i].style.display = "block";
// 			}else{
// 				product_list[i].style.display = "none";
// 				break;
// 			}
// 		}
// 	}
// 	// Пересчитываем кол-во доступных товаров по текущей настройке фильтра
// 	how_many(filter_headers);
// }

function isEmpty(obj) {
		for (var key in obj) {
		return false;
		}
		return true;
}

// Подсчет колва товаров на каждое свойство фильтра
function how_many(filter_headers){
	var product_list = document.querySelectorAll(".product_item");
	var labels = [];

	for( key in filter_headers){
		//Собираем состояние всех чекбоксов по всем заголовкам
		labels[key] = document.querySelectorAll("[data-filter_key="+filter_headers[key]+"] label");

		for(let i = 0; i < labels[key].length; i++){
			var attr_counter = 0;
			// Получаем заголовок текущего свойства
			var curr_attr = labels[key][i].getAttribute("data-info");
			// Прогоняемся по списку товаров для подсчета
			for(let j = 0; j < product_list.length; j++){
        // console.log(filter_headers[key]);
        if(filter_headers[key] != 'filter_manufacturer'){
  				if(product_list[j].getAttribute("data-"+filter_headers[key]) == curr_attr && !( product_list[j].style.display == 'none')){
  					attr_counter++;
  				}
        }else if (product_list[j].getAttribute("data-"+filter_headers[key]) == curr_attr) {
          attr_counter++;
        }
			}
			// Устанавливаем кол-во элементов доступных при данных настройках фильтра
			labels[key][i].innerHTML = curr_attr + ' ('+attr_counter+')';
		}
	}
}

function get_min_max(){
	var product_list = document.querySelectorAll(".product_item");
		// Минимальная и максимальная цена товаров для полей воода цены
	var min_price = product_list[0].getAttribute("data-product_price");
	var max_price = product_list[0].getAttribute("data-product_price");
	// Считаем максимальный и минимальный ценник
	for(let j = 0; j < product_list.length; j++){
		if(!( product_list[j].style.display == 'none')){
			// Вычисляем минмиальный ценник
			if(Number(product_list[j].getAttribute("data-product_price")) <= min_price){
				min_price = product_list[j].getAttribute("data-product_price");
			}
			if(Number(product_list[j].getAttribute("data-product_price")) >= max_price){
				max_price = product_list[j].getAttribute("data-product_price");
			}
		}
	}
	// Устанавливаем минимальный и максимальный ценники
	$('#price_start').val(min_price);
	$('#price_end').val(max_price);
}




// =======================================================================

// back-to-top
// ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

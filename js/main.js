/* ----------- Иконка Гамбургера ----------- */

$(document).ready(function(){
	$('.hamburger').click(function(){
		$(this).toggleClass('open');
		/*$('nav').toggleClass('open');*/
		var ham = $('nav');
	if(ham.is(':visible')){
		ham.hide(100);
	}
	else {
		ham.show(100);
	}
	});
});

/* ----------- Плавный скролл к секции ----------- */

$(".nav__link").click(function () {
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 1400);
    });

$(".menu__link").click(function () {
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 1400);
    });

/* ----------- Модальное окно ----------- */

$('.feedback').on("submit", function(e) {
    e.preventDefault();
    var form = $(this),
        name = form.find('input[type="text"]'),
        tel = form.find('input[type="tel"]'),
        email = form.find('input[type="email"]'),
        btn = form.find(".btn");
    //проверка на наличие букв в имени в начале
    let regName = /^[а-яА-ЯёЁa-zA-Z]+[0-9-_]*[а-яА-ЯёЁa-zA-Z]*$/g;
    //отключаем кнопку, чтобы не было повторного клика по ней, пока отравляется наш скрипт
    btn.attr('disabled', true).addClass('disabled');
    var data = form.serialize();
    $.ajax({
        url: 'php/sendform.php',
        type: 'POST',
        data: data,
    }).done(function(data) {
        //записываем код, который сработает в случае успешной отправки формы на сервер
        console.log("Ok!");
        $('#messageModal').find('p.date')
        $('#messageModal').modal('show');
        $("form").trigger("reset");
        btn.removeAttr('disabled').removeClass('disabled'); // делаем кнопку отправки формы снова доступной
    }).fail(function() {
        //здесь размещаем код, который будет выводится в случае ошибки с отправкой формы или письма
        btn.removeAttr('disabled').removeClass('disabled'); // делаем кнопку отправки формы снова доступной
        console.log("Error from mail!!!" + data);
 
    });
});

/* ----------- Модальное окно на добавление отзыва ----------- */

$('.review').on("submit", function(e) {
    e.preventDefault();
    var form = $(this),
        name = form.find('input[id="name"]'),
        textarea = form.find('input[id="textarea"]'),
        btn = form.find(".btn");
    //проверка на наличие букв в имени в начале
    let regName = /^[а-яА-ЯёЁa-zA-Z]+[0-9-_]*[а-яА-ЯёЁa-zA-Z]*$/g;
    //отключаем кнопку, чтобы не было повторного клика по ней, пока отравляется наш скрипт
    btn.attr('disabled', true).addClass('disabled');
    var data = form.serialize();
    $.ajax({
        url: 'php/sendreviews.php',
        type: 'POST',
        data: data,
    }).done(function(data) {
        //записываем код, который сработает в случае успешной отправки формы на сервер
        console.log("Ok!");
        $('#messageModal').modal('show');
        $("form").trigger("reset");
        btn.removeAttr('disabled').removeClass('disabled'); // делаем кнопку отправки формы снова доступной
    }).fail(function() {
        //здесь размещаем код, который будет выводится в случае ошибки с отправкой формы или письма
        btn.removeAttr('disabled').removeClass('disabled'); // делаем кнопку отправки формы снова доступной
        console.log("Error from mail!!!" + data);
 
    });
});
/* ----------- Отзывы из БД. ----------- */

$(document).ready(function(){
	$.getJSON('php/3randreviews.php', function( data ) {
		$("#indexpage").append(data);
	});

	$.getJSON('php/allreviews.php', function( data ) {
		$("#reviewspage").append(data);
	});

/* ----------- Возвращение стандартного значения при потере фокуса поля. ----------- */

	var arrid = new Map([
		['idname', $('#name').val()],
		['idyourphone', $('#yourphone').val()],
		['idemail', $('#email').val()],
		['idnamech', ''],
		['idyourphonech', '+7 ('],
		['idemailch', '']
	]);
	
	/*------- Недоступная кнопка при значении полей равном стандартному или "пустому"---------*/

	var btn = $('#button');

	$('#button').ready(function () {
		btn.attr('disabled', true).addClass('disabled');
	});

	/* Фокус на поле ввода */

	$('.field').on('focusin', function(e) {
		var defcur = '';
		var curval = '';
		var id = '';

		id = $(this).attr('id');
		var clickId = '#' + id; // Получаем id поля ввода.
		defcur = $(clickId).val(); // Передаём переменной defcur текущее значение поля 
		if (defcur == arrid.get('id' + id)) {
			$(clickId).val(arrid.get('id' + id + 'ch')); // Очищаем поле при клике
		} else {
			$(clickId).val();
		}
		
		/* Ввод символов */

		$(clickId).on('input', function (e) {
        	e = e || window.event; // Use e if it exists or e will be equal to window.event
        	var key = e.which || e.keyCode; // keyCode detection
    		if ((key == 8 || key == 46) && ($(clickId).val() == '')) {
				arrid.set(('id' + id + 'ch'), $(clickId).val());
			} else {
				arrid.set(('id' + id + 'ch'), $(clickId).val());
			}
        	if (!(($('#name').val() == ("Ваше имя")) || (($('#yourphone').val() == ("Ваш телефонный номер")) || ($('#yourphone').val() == ("+7 ("))) || ($('#email').val() == ("Ваша электронная почта")))) {
        		btn.removeAttr('disabled').removeClass('disabled');
        	}
        	if (!(($('#name').val() == ("Ваше имя")) || (($('#textarea').val() == (""))))) {
        		btn.removeAttr('disabled').removeClass('disabled');
        	}
    	});
  		
  		/* Потеря фокуса с поля ввода */

		$(clickId).on('focusout', function (e) {
	    	if ($(clickId).val() == ''){
	        	$(clickId).val(arrid.get('id' + id));
	    	}
    	});
	});

});


/* Автовысота текстового поля */
$('#textarea').on('input', function(e) {
	this.style.height = '1px';
	this.style.height = (this.scrollHeight + 6) + 'px'; 
});


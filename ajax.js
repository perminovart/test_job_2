/* Article FructCode.com */
$( document ).ready(function() {
    $("#btn_save").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', '/save.php');
			return false; 
		}
    );
    $("#btn_unload").click(
		function(){
			unloadAjaxForm('result_form', 'ajax_form', '/unload.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
		dataType: "html", //формат данных
		cache: false,
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
		success: function(response) { //Данные отправлены успешно
			result = $.parseJSON(response);
			$('#result_form').html(result.message);
			$("#ajax_form")[0].reset(); //очистим поля после отпрвки
			
    	},
    	error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}
 
function unloadAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
		dataType: "html", //формат данных
		cache: false,
        data: ("#"+ajax_form),
		success: function(response) { //Данные отправлены успешно
			$('#ajax_form').remove();
        	$('#result_form').html('Данные успешно выгружены');
    	},
    	error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}
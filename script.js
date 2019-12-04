$(document).ready(function() 
{
    $("#send").click(
		function()
		{
			sendAjaxForm('result_answer', 'ajax_form', 'action.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_answer, ajax_form, url) 
{
    $.ajax({
        url:     url, // url страницы (action.php)
        type:     "POST", // метод отправки
        dataType: "html", // формат данных
        data: $("#"+ajax_form).serialize(),  // сеарилизация объекта
        success: function(response) 
		{ // данные отправлены успешно
        	result = $.parseJSON(response);
			
        	$('#result_answer').html('Успешно отправлено!<br>Name: '+result.name+'<br>Email: '+result.email);
    	},
    	error: function(response) 
		{ // данные не отправлены
            $('#result_answer').html('Error!');
    	}
 	});
}
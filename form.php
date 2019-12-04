<?php
echo "
	<html>
		<head>
			<script src='jquery-1.7.1.min.js'></script>
			<script src='script.js'></script>
		</head>
		<body>    
			<form action='' id='ajax_form'  method='POST'>
				<p>Name: <input type='input' name='name' maxlength='50' required /></p>
				<p>Email: <input type='email' name='email' maxlength='50' required /></p>
				<p><input type='button' id='send' value='Отправить заявку на обратный звонок' /></p>
			</form> 
			<div id='result_answer'></div>  
		</body>
	</html>
	"
?>

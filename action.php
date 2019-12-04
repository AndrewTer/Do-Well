<?php
	if (isset($_POST["name"]) && isset($_POST["email"])) 
	{
		// создание письма
		$to = $_POST["email"];
		$subject = "Test";
		$message = $_POST["name"];
		mail($to, $subject, $message);
		
		// формирование массива для JSON ответа
		$result = array(
			'name' => $_POST["name"],
			'email' => $_POST["email"]
		); 

		// перевод массива в JSON
		echo json_encode($result); 
	}
?>

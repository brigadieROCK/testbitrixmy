<?php
    $text = "Ваш индивидуальный текст";
	$time = date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
	// Открываем файл в нужном нам режиме. Нам же, нужно его создать и что то записать.
	$fp = fopen("file.txt", "w");//поэтому используем режим 'w'
	 
	// записываем данные в открытый файл
	fwrite($fp, $text);
	 
	//не забываем закрыть файл, это ВАЖНО
	fclose($fp);
?>
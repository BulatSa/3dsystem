<?php
$subject = $_POST["form_subject"];
$mailto = $_POST["mailto"];
$message = "";
$tofile = $subject . ";";

foreach ($_POST as $input_name => $input_val) {
	$input_val = htmlspecialchars(strip_tags(trim($input_val)));
	if (($input_name != "form_subject") && ($input_name != "mailto") && ($input_name != "MAX_FILE_SIZE")) {
		if ( !strpos($input_name, '_label')){
			$input_label = $input_name . '_label';
			if (!empty($_POST[$input_label])) {
				$message .= $_POST[$input_label] . ": " . $input_val . "<br>";
			} else {
				$message .= $input_name . ": " . $input_val . "<br>";
			}
			$tofile .= $input_val . ";";
		}
	}
}

//запись в файл
$today = date("j.m.Y, G:i");
$tofile .= $today."\n";

$file = 'orders.csv';
$bom = "\xEF\xBB\xBF";
@file_put_contents($file, $bom . $tofile . file_get_contents($file));
//запись в файл конец

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('phpmailer.php');
require_once('phpmailer_exception.php');

$mail = new PHPMailer(true);

try {
	$mail->CharSet = 'utf-8';
	$mail->setFrom('no-reply@3dsystem.pro', '3dsystem.pro');
	if ($mailto == 'tender') {
		$mail->addAddress('tender@3dsystem.pro');
	} else {
		$mail->addAddress('mukminov@abs3d.ru');
	}
	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $message;

	//Обрабатываем файлы
	if (isset($_FILES)) { //если есть файлы в форме
		foreach ($_FILES as $file_item) {
			if (!is_array($file_item['error'])) { //проверяем множественное или нет поле файла
				if ($file_item['error'] == UPLOAD_ERR_OK) {
					$mail->addAttachment($file_item['tmp_name'],$file_item['name']);
				}
			} else {
				foreach ($file_item["error"] as $key => $error){
					if ($error == UPLOAD_ERR_OK) {
						$tmp_name = $file_item["tmp_name"][$key];
						$name = $file_item["name"][$key];
						$mail->addAttachment($tmp_name,$name);
					}
				}
			}
		}
	}
	//Обрабатываем файлы

	//возвращаем массив с результатом
	$result = array();
	$result['MAIL_SUBJECT'] = $mail->Subject;
	$result['MAIL_BODY'] = $mail->Body;
	$result['MAIL_FROM'] = $mail->From;
	$result['MAIL_FROM_NAME'] = $mail->FromName;

	$mail->send();
	$result['MAILER_CHECK'] = 'Mail OK';
} catch (Exception $e) {
	$result['MAILER_ERROR'] = $e->errorMessage();
}

$result = json_encode($result);
echo $result;

?>
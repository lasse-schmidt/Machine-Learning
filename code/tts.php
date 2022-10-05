<?php
	$lang = $_POST['languageTarget'];
	$text = $_POST['target'];
	$text = htmlspecialchars($text);
	$text = rawurlencode($text);
	$html = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$text.'&tl='.$lang);
	$player="<audio hidden' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
	echo $player;
?>

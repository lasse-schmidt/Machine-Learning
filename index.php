<!DOCTYPE html>
<html lang="da">
  <head>
    <!--Charset-->
    <meta charset="UTF-8">

    <!--Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5">

    <!--Title-->
    <title>Oversætteren</title>

    <!--Favicon-->
    <link href="gfx/favicon.png" rel="icon" type="image/png">

    <!--Reset css, Style css, Starts css-->
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!--Ajax lib-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Font-awesome-->
    <script src="https://kit.fontawesome.com/7a26c8da44.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <form onSubmit="return false;" id="translate">
      <div>
        <select name="input-lang" id="input-lang">
	        <option value="auto" selected>Auto Detect</option>
          <option value="ar">Arabisk</option>
          <option value="da">Dansk</option>
          <option value="en">Engelsk</option>
          <option value="fi">Finsk</option>
          <option value="fr">Fransk</option>
          <option value="hi">Hindi</option>
          <option value="nl">Hollandsk</option>
          <option value="it">Italiensk</option>
          <option value="ja">Japansk</option>
          <option value="zh-CN">Kinesisk</option>
          <option value="no">Norsk</option>
          <option value="pl">Polsk</option>
          <option value="pt">Portugisisk</option>
          <option value="ru">Russisk</option>
          <option value="es">Spansk</option>
          <option value="sv">Svensk</option>
          <option value="de">Tysk</option>
        </select>

        <textarea  placeholder="Angiv tekst" id="source"></textarea>
        <div class="options-empty">

        </div>
      </div>
      <div>
        <select name="output-lang" id="output-lang">
          <option value="ar">Arabisk</option>
          <option value="da">Dansk</option>
          <option value="en" selected>Engelsk</option>
          <option value="fi">Finsk</option>
          <option value="fr">Fransk</option>
          <option value="hi">Hindi</option>
          <option value="nl">Hollandsk</option>
          <option value="it">Italiensk</option>
          <option value="ja">Japansk</option>
          <option value="zh-CN">Kinesisk</option>
          <option value="no">Norsk</option>
          <option value="pl">Polsk</option>
          <option value="pt">Portugisisk</option>
          <option value="ru">Russisk</option>
          <option value="es">Spansk</option>
          <option value="sv">Svensk</option>
          <option value="de">Tysk</option>
        </select>

        <textarea placeholder="Oversættelse" readonly id="target"></textarea>

        <div class="options">
          <span class="far fa-copy copy-icon" title="Kopier tekst" onclick="copyText();"></span>
          <span class="fas fa-volume-up tts-icon" title="Oplæs tekst" onclick="play();"></span>
        </div>
      </div>
    </form>

    <div id="audio">

    </div>

    <script src="js/translate.js"></script>
    <script src="js/copytext.js"></script>
    <script src="js/tts.js"></script>
  </body>
</html>

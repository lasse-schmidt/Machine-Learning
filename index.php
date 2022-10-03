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
    <form>
      <div>
        <select >
          <option >Dansk</option>
        </select>

        <textarea  placeholder="Angiv tekst"></textarea>
      </div>
      <div>
        <select >
          <option >Dansk</option>
        </select>

        <div>
          <textarea  placeholder="Oversættelse"></textarea>
          <span class="fas fa-volume-up tts-icon"></span>
        </div>
      </div>
    </form>
  </body>
</html>

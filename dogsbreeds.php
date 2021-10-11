<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <script type="text/javascript" src="share42\share42.js"></script>
  <link rel="stylesheet" href="css/style.css">

  <title>сайт</title>
</head>
<body class="body">
  <header class="header-style">
    <?php include ('menu.html')  ?>
  </header>
      <div id="wrapper" class="wrapper">
        <div id="section4" class="section-4">
            <div id="container" class="container">

              <ul class="breadcrumb">
                <li><a href="index.php">Главная</a></li>
                <li> Породы</li>
              </ul>

              <form id="sub" action='phpscr/sqlselect.php' method='post'>
                <select size="1"  куrequired >
                  <option disabled selected>Выберите породу</option>
                  <option value="Овчарка">Овчарка</option>
                  <option value="Золотисный ретривер">Золотисный ретривер</option>
                  <option value="Лабрадор">Лабрадор</option>
                  <option value="Сенбернар">Сенбернар</option>
                </select>
                <input type="submit" name="open" value="Показать">
              </form>

              <div id="block-breed" class="block-breed">
                <div id="block-ovcharka" class="block-ovcharka"></div>
                <li><a href="index.php">Главная</a></li>
              </div>
              
              <div id="block-breed" class="block-breed">
                <div id="block-ovcharka" class="block-ovcharka"></div>
                <li><a href="index.php">Главная</a></li>
              </div>

            </div>
          </div>
        </div>
  <?php include ('footer.html')  ?>
</body>
</html>

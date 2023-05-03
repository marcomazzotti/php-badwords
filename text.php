<?php
$paragraph = $_GET["paragraph"];
$badword = $_GET["bad-word"];
$censored = "***";
$censored_paragraph = str_replace($badword, $censored, $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad word</title>
</head>
<body>
  <h2>Il tuo testo:</h2>
  <p>
    <?php echo $paragraph; ?>
  </p>

  <h2>La lunghezza del testo:</h2>
  <p>
    <?php echo strlen($paragraph); ?>
  </p>

  <h2>Il tuo testo censurato:</h2>
  <p>
    <?php echo $censored_paragraph; ?>
  </p>

  <h2>La lunghezza del testo censurato:</h2>
  <p>
    <?php echo strlen($censored_paragraph); ?>
  </p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="text.php" method="GET">
    <label for="paragraph">Inserisci un testo</label>
    <input type="text" id="paragraph" name="paragraph">

    <label for="bad-word">Parola da censurare?</label>
    <input type="text" id="bad-word" name="bad-word">

    <button type="submit">Invia</button>
  </form>
</body>
</html>
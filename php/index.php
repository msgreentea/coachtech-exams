<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>6</th>
      <th>7</th>
      <th>8</th>
      <th>9</th>
    </tr>
    <?php

    for ($a = 1; $a <= 9; $a++) {
      echo '<br />';
      for ($b =1; $b <= 9; $b++) {
        echo '<br />' . $a * $b . '<br />';
      }
      echo '<br />';
    }
    ?>
  </table>
</body>
</html>


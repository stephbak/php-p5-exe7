<?php
$department = array(
  '02' => 'Aisne',
  '59' => 'Nord',
  '60'=> 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme',
);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie5</title>
</head>
<body>
  <table>
    <td><?= $department['02'] ?></td>
    <td><?= $department['59'] ?></td>
    <td><?= $department['60'] ?></td>
    <td><?= $department['62'] ?></td>
    <td><?= $department['80'] ?></td>
    <td><?= $department['51'] = 'Marne' ?></td>
  </table>
</body>
</html>

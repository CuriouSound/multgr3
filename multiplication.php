<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Projet multiplication</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha184-MCw98/SFnGE8fJT1GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="table.css">
</head>
<body>
  <h1>Projet multiplication</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-1">première table

      </div>
      <div class="col-md-1">deuxième table

      </div>
      <div class="col-md-1">troisiéme table

      </div>
      <div class="col-md-1">quatrième table

      </div>
      <div class="col-md-1">cinquième table

      </div>
      <div class="col-md-1">sixème table

      </div>
      <div class="col-md-1">septième table

      </div>
      <div class="col-md-1">huitième table

      </div>
      <div class="col-md-1">neuvième table

      </div>
      <div class="col-md-1">dixième table

      </div>
    </div>
  </div>
  <?php

for ($i = 1; $i <= 10; $i++)
{
    Echo 'La Table de multiplication de '.$i.'<br>';
    for ($j = 1; $j <= 10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
}






?>

</body>
</html>

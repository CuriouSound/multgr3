<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Evaluation</title>


  <link rel="stylesheet" href="table.css">
</head>
<body>
  <h1>Evaluation</h1>
<style>

</style>
<?php
if($_POST['reviser']){


  $nb =rand(1,10);
  $table= $_POST['select'];

  print_r($_POST);

  echo $nb.'x'.$table.'<br>';

  $resultat=($table*$nb) ;

  if(isset($_POST['valider'])){


    if($resultat==$_POST['reponse']){
        echo "gagner";
        echo $resultat;

    }
    else{
      echo "faux";
    }
  }
}
?>

  <form method="post" action="#">

    <select id="monselect" name="select">
      <option value="1">table 1</option>
      <option value="2" >table 2</option>
      <option value="3">table 3</option>
      <option value="4">table 4</option>
      <option value="5">table 5</option>
      <option value="6">table 6</option>
      <option value="7">table 7</option>
      <option value="8">table 8</option>
      <option value="9">table9</option>
      <option value="10">table 10</option>
    </select>
      <input style="display : none" name="reponse" value="<?php echo $nb * $table ?>">

      <input type="submit" name="reviser" value="Evaluer"><br>

      <input type="text" name="calcul" value="<?php echo $nb.'x'.$table.' = ' ; ?>">

      <input type="text" name="reponse">
      <input type="submit" name="valider" value="Valider">
     <!--  <input type="submit" value="Calculer" >
 -->
  </form>


<!-- //   echo'<br>';!
//   if (isset($_POST['select'])){
//    for ($i = 1; $i <= 10; $i++)
//    {
//     echo $_POST['select'].' x '.$i.' = '. $_POST['select']*$i.'<br>';
//   }
// } -->



<br><br><br><br><br><br><br><br><br><br>

<!-- <?php
for ($i = 1; $i <= 10; $i++)
{
    Echo 'La Table de multiplication de '.$i.'<br>';
    for ($j = 1; $j <= 10; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
}





?> -->

</body>
</html>


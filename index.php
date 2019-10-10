
<?php
require_once 'classes' . DIRECTORY_SEPARATOR . 'Player.php';

$players = array(
new Player('Černá Mamba' , 'cra' , 'bomb'),
new Player('Kneflík' , 'kn' , 'boots'),
new Player('Daleký rýč' , 'dr' , 'flag'),
new Player('Carol Blondie' , 'cabl' , 'rank'),
new Player('Tlusté Koleno' , 'tlko' , 'map'),
new Player('Jan Sloup' , 'jasl' , 'rude'),
);

 ?>
<!DOCTYPE html>

<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOL</title>
    <link rel="stylesheet" type="text/css" href="font/flaticon.css">
<style>
<?php foreach ($players as $player) {
  ?>.player-<?php echo $player->getId();
  ?>:before{
    font-size: <?php echo $player->getSize();
      ?>px;
    }<?php
  }
  ?>
</style>
</head>
<body>

  <div class="row">
    <?php
  foreach ($players as $player) {?>
    <p>Player <?php echo $player->getName(); ?> = <?php echo $player->getSize(); ?><p>
    <span class="flaticon-<?php echo $player->getIcon(); ?> player-<?php echo $player->getId();?>" style="color:<?php echo $player->getColor(); ?>;"> </span>
    <?php
    }
    ?>
  </div>
</body>
</div>

</html>

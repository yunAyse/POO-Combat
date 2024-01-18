<?php 
// an interface for the user who can create a hero.
// the user can also choose a hero alive from a list.
require_once 'config/autoload.php';
require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkyFight</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="heroName" id="">
    <input type="submit" value="Lets Go">
  </form>
</body>
</html>

<?php

// if the hero name is entered, create an instance of the Heroes Manager.
if (isset($_POST['heroName']) && !empty($_POST['heroName'])) {
  $heroManager = new HeroesManager($db);
  
  // then with the instance of the new Hero,
  $hero = new Hero($heroName);
  // I call the add method from the manager. (and as an argument, I add the hero instance [I guess])
  $heroManager->add($hero);
}
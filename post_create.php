<?php 
session_start();

include_once('config/mysql.php');
include_once('users.php');
include_once('variables.php');

$title = $_POST['title'];
$recipe = $_POST['recipe'];
$_POST = [
    "title" => "Cassoulet",
    "recipe" => "Avec du lard",

];
/* echo $_POST["title"];
 $myRecipe = new Recipe();
    $myRecipe->setTitle($_POST["title"]);
    $myRecipe->setRecipe($_POST["recipe"]);
    $myRecipe->setIsEnabled(1);
    $myRecipe->setAuthor($loggedUser['email']);
*/


$insertRecipe = $mysqlClient->prepare('INSERT INTO  recipes(title, recipe, author, is_enabled) VALUES (:title , :recipe , :author , :is_enabled)' );
$insertRecipe->execute([
    'title' => $title,
    'recipe' => $recipe,
    'is_enabled' => 1,
    'author' => $loggedUser['email'],
    //'title' => $myRecipe->getTitle(),
    //'recipe' => $myRecipe->getRecipe(),
    //'is_enabled' => $myRecipe->getIsEnabled(),
    //'author' => $myRecipe->getAuthor()
]);

?>
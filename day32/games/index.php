<?php
$pdo= new PDO (
    'mysql:dbname=games; host=127.0.0.1; charset=utf8',
    'root',
    ''
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//select all the games
//1-returns all the records, means true
$query= "
SELECT `game`.*
FROM `game`
WHERE 1
ORDER BY `name` 
";

$stmt=$pdo->prepare($query);
$stmt->execute();

$stmt->setFetchMode(PDO::FETCH_OBJ);

//array of objects from table game
$games=$stmt->fetchAll();

//select all the genres

$query= "
SELECT *
FROM `game_has_genre`
INNER JOIN `genre`
    ON  `game_has_genre`.`genre_id` = `genre`.`id`
    ORDER BY `genre`.`name` 
";

$stmt = $pdo->prepare($query);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_OBJ);
$objects=$stmt->fetchAll();

$genres_by_game=array();
foreach($objects as $object)
{
    $genres_by_game[$object->game_id][]=$object;
}

//var_dump($games);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
    <link rel="stylesheet" href="css/style.css">
    <script
  src="http://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>
<body>
   
        <button id="button">Fade in</button>
   
<?php foreach ($games as $game):?>
    <div id="game_<?php echo $game->id; ?>" class="game">
    <div class="image">
        <img src="<?php echo $game->image_url;?>" />
    </div>
    <div class="info">
        <h2 class="name"><?php echo $game->name;?></h2>
        <div class="release"><?php echo $game->released_at;?></div>
        <div class="genres">
        <?php foreach ($genres_by_game[$game->id] as $genre): ?> 
            <a href="#">
            <?php echo $genre->name; ?></a>
            <?php endforeach;?>
        </div>
        <div class="description">
           <?php echo $game->description;?>
        </div>
        <div class="rating"><?php echo $game->rating;?>%</div>        
    </div>
</div>
<?php endforeach;?>
</body>
</html>

<script>
$(document).ready(function(){

//code here will be run only after the document is ready

});

//the same way but shorter
$(function(){

//code here will be run only after the document is ready
var headings = $('h2:first'); //return jQuery object
console.log(headings);
});

//div id=list
var basic_element=document.getElementById('list');
var jquery_selection = $('#list');
//basic element-jQuery selection

var game_1_element = document.getElementById('game_1');
var game_1_jquery =$('#game_1');

console.log(game_1_element);
console.log(game_1_jquery);

//to retrieve the real html element from jquery selection
var game_1_element_again=game_1_jquery[0];
console.log(game_1_element_again);

//to make a jquery object out of an html element
var game_1_jquery_again=$(game_1_element);
console.log(game_1_jquery_again);

$('.game').fadeOut(2000);
</script>
 



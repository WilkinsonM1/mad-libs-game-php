<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h1>Mad Libs Game</h1>
    <p>
     Please enter a word for each input to complete the following story: <br>

     "Roses are {color} <br>
     {Plural Noun} are blue <br>
     I love {celebrity}" <br>
    </p>

    <br><br>
    <form action="site.php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural Noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>

        <input type="submit" >
    
    </form>
    <br><br>

    <?php 
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        if($color && $pluralNoun && $celebrity){echo "Roses are $color <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity <br>";};
        
    ?>
</body>
</html>
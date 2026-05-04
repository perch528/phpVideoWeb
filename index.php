<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perch hub</title>
    <link rel="stylesheet" href="index_style.css">
</head>
<body>
    <h2>perch hub</h2>

    <?php 
        $path = "./virtual";
        $list = scandir($path);
        foreach($list as $item){
            // echo "<a href='next.php?path=$path/$item&fName=$item'>".$item."</a>"."</br>";
            if (preg_match('/\.(mp4|ts|mov)$/i', $item)) {
                echo "<a href='vplayer.php?path=$path/$item&fName=$item'>".$item."</a>"."</br>";
            }
            elseif (preg_match('/\.(jpg|jpeg|png|gif)$/i', $item))
            {
                # code...
                echo "<a href='iplayer.php?path=$path/$item&fName=$item'>".$item."</a>"."</br>";
            }
            else
            {
                echo "<a href='next.php?path=$path/$item&fName=$item'>".$item."</a>"."</br>";
            }
        }
    ?>
</body>
</html>
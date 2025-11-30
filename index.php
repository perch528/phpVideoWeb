<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perch pornhub</title>
    <link rel="stylesheet" href="index_style.css">
</head>
<body>
    <h2>perch pornhub</h2>

    <?php 

        $passwd = $_GET["token"];
        if ($passwd == "114514") {
            # code...
            $path = "./mp4";
            $list = scandir($path);
            foreach($list as $item){
                echo "<a href='next.php?path=$path/$item&fName=$item'>".$item."</a>"."</br>";
            }
        } else {
            # code...
            echo "Token is error!".'</br>';
            echo "Are you kidding me?".'</br>';
        }
    ?>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perch player</title>
    <link rel="stylesheet" href="player_style.css">
</head>
<body>
    <h2>perch player</h2>
    <?php
        $srcPath = $_GET["path"];
        $srcPath = rtrim($srcPath,'/');
        //  echo "<div id='videoPlayer'><video width='400rem' height='300rem' src='$srcPath' controls></video></div>";
        echo <<<html
            <div id='videoPlayer'>
                <video width='400rem' height='300rem' src='$srcPath' controls muted></video>
            </div>
        html;
    ?>
    <!-- <video width='300rem' height='150rem' src='.\mp4\virtual\36.mp4' controls></video> -->
</body>
</html>
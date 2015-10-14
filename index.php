<!DOCTYPE html>
<html>
<head>
    <title>Snakeberry Player</title>
    <meta name="author" content="Lukas Weiß">
</head>
<body>
<div>
    <center>
        <a href="index.php?action=play" title="play">play</a> ||
        <a href="index.php?action=stop" title="stop">stop</a> ||
        <a href="index.php?action=getVolume" title="get volume">get volume</a> ||
        <a href="index.php?action=volume100" title="set volume 100%">set volume 100%</a> ||
        <a href="index.php?action=volume0" title="set volume 0%">set volume 0%</a>
    </center>
</div>
<hr>
<br>
<center>
    <?php
    include 'player.php';
    ?>
</center>
</body>
</html>
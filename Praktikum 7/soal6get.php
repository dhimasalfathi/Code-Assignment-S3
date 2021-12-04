<html>

<body>

    Welcome <?php echo $_POST["name"]; ?><br>
    Your Comment is: <?php echo $_POST["comment"]; ?>

    <?php
    $myFile = "guestbook.txt";
    $fh = fopen($myFile, 'a') or die("can't open file");

    $stringData = $_POST["name"] . " ; ";
    fwrite($fh, $stringData);

    $stringData = $_POST["comment"] . "\n";
    fwrite($fh, $stringData);

    fclose($fh);
    ?>
</body>

</html>
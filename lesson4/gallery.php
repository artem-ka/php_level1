<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    $bigFiles = scandir($_SERVER[DOCUMENT_ROOT]."/img/big");
    $smallFiles = scandir($_SERVER[DOCUMENT_ROOT]."/img/small");
    for($i = 2; $i < count($smallFiles); $i++){
        echo "<a href=\"img/big/".$bigFiles[$i]."\" target=\"_blank\"><img src=\"img/small/".$smallFiles[$i]."\"></a>";
    }
    ?>
</body>
</html>
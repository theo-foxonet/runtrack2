<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }

    for ($i = 0; $i < $count; $i += 2) {
        print($str[$i]);
    }
    ?>
</body>
</html>

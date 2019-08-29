<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Ooga booga";
        
        echo "<h1>Hello $name</h1>";

        $tal1 = 123;
        $tal2 = (int) "8502";
        $tal3 = true;
        $tal4 = (int) 11.2359325;
        $tal5 = "null";

        $tal6 = $tal1 + $tal2 + $tal3 + $tal4;
        echo "<h1>$tal1 + $tal2 + $tal3 + $tal4 + $tal5 = $tal6</h1>";

    ?>
</body>
</html>
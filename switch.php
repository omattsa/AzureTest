<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<p>
    <?php
   $wantedGoods = "sausage";

    switch ($wantedGoods){
        case "specs":
            echo "You must be 16 to buy specs";
            break;
        case "mugs":
            echo "You must be 18 to buy mugs";
            break;
        case "sausage":
            echo "You must be 21 to buy Sausage Rolls";
            break;
        default:
            echo "Why are Aberdonians such morons?";
    }
    ?>
</p>
</body>
</html>
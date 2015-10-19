<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<p>
    <?php
    $myAge = 15;
    if ($myAge >= 21){
        print "You can buy Sausage Rolls, Mugs & Specs ";
    }
    elseif ($myAge >= 18){
        print "You can buy Mugs & Specs ";
    }
    elseif($myAge >= 16) {
        print "You Can buy Specs ";
    }
    else{
        print "You can't buy anything child! ";
    }
    ?>
</p>
</body>
</html>
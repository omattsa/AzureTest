<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<p>
    <?php
   $provisionedActivities = array("Specs", "Drugs","Rock and Roll");

    foreach($provisionedActivities as $x){
        print "<p>$x</p>";
    }

    $provisionedActivities[1] = "hugs";
    foreach($provisionedActivities as $y){
        print "<p>$y</p>";
    }
    ?>
</p>
</body>
</html>
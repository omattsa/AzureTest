<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<p>
    <?php
   $numberofHobbits = 2;

    switch ($numberofHobbits){
        case 1:
            echo "1 sad hobbit";
            break;
        case 2:
            echo "2 happy hobbits";
            break;
        case 3:
            echo "3 hobbits are a crowd";
            break;
        default:
            echo "All the hobbits have gone home";
    }
    ?>
</p>
</body>
</html>
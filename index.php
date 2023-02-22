<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> 
            Web Dev Training
        </title>

    </head>



    <body>
        <h1> Καλωσήλθατε στην εκπαίδευση!</h1>
        <?php
        
        switch ($periptosi) {
            case "Mon":
                echo "Today is Monday";
                break;

            case "Tue":
                echo "Today is Tuesday";
                break;

            case "Wed":
                echo "Today is Wednesday";
                break;

            case "Thu":
                echo "Today is Thursday";
                break;

            case "Fri":
                echo "Today is Friday";
                break;

            case "Sat":
                echo "Today is Saturday";
                break;

            case "Sun":
                echo "Today is Sunday";
                break;

            default:
                echo "Wonder which day is this ?";
        }
        ?>

    </body>
</html>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #main{
            display:flex;
            justify-content:center;
            align-items:center;
        }
    </style>
</head>
<body id="main">
        <div>
            <?php 
                $name = "Daish";
                if ($name=="Bruno"){
                    echo "1";
                }

                echo "<p>2</p>";

            ?>
        </div>
</body>
</html>
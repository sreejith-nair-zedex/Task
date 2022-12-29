<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .black_square {
        height: 10px;
        width: 10px;
        background-color: #000;
    }

    .white_square {
        height: 10px;
        width: 10px;
        background-color: #fff;
    }
</style>

<body>
    <?php
    echo '<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">';


    // echo <table>
    for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
        $value = $i;
        for ($j = 0; $j < 8; $j++) {
            if ($value % 2 == 0) {
                echo "<td height=35px width=30px bgcolor=black></td>";
                $value++;
            } else {
                echo "<td height=35px width=30px bgcolor=white></td>";
                $value++;
            }
        }
        echo "</tr>";
        // echo "<br>";
    }
    echo '</table>';
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
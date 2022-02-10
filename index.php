<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méchants bots</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    //Call function
    require "function.php";

    //Call all Composer dependencies
    Composer();

    //Get the content of badiplist.txt as an array - Each line is value of the array
    $txt_file    = file_get_contents('badiplist.txt');
    $rows        = explode("\n", $txt_file);
    echo "<table>";
    echo "<tr><th>Who ?</th><th>When ?</th><th>What?</th><th>Where</th></tr>";

    foreach ($rows as $row) {

        //Split each lines  as an array
        $explrows = preg_split('/<[^>]*[^\/]>/', $row);


        //Split each value of arrays as 
        foreach ($explrows as $explrow) {

            $explrow_expl = explode("\t", $explrow);

            echo "<tr>";
            echo "<td>" . $explrow_expl[0] . "</td>";
            echo "<td>" . $explrow_expl[1] . "</td>";
            echo "<td>" . $explrow_expl[2] . "</td>";
            echo "<td>" . $explrow_expl[3] . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";

    ?>
</body>

</html>
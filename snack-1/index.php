<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

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
    $turn = [
        [
            "home" => "Celtics",
            "guest" => "Warriors",
            "points-home" => "90",
            "points-guest"  => "120",
        ],
        [
            "home" => "Cavaliers",
            "guest" => "Nets",
            "points-home" => "96",
            "points-guest" => "110",
        ],
        [
            "home" => "Heat",
            "guest" => "Clippers",
            "points-home" => "134",
            "points-guest" => "130",
        ],
        [
            "home" => "Bulls",
            "guest" => "Pacers",
            "points-home" => "80",
            "points-guest" => "91",
        ],
        [
            "home" => "Spurs",
            "guest" => "Rockets",
            "points-home" => "96",
            "points-guest" => "97",
        ],
    ];
    ?>

    <h1>Calendario NBA 8 Giugno 2022</h1>

    <ul>
        <?php for ($i = 0; $i < count($turn); $i++) {
            $match = $turn[$i];
        ?>
            <li>
                <h4> Match numero <?php echo $i + 1 ?>: <br>
                    <?php echo $match["home"]; ?> - <?php echo $match["guest"]; ?>
                    <br>
                    <?php echo $match["points-home"]; ?> - <?php echo $match["points-guest"]; ?>

                </h4>
            </li>

        <?php } ?>
    </ul>

</body>

</html>
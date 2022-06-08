<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


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
    $num_random = [];
    while (count($num_random) < 15) {
        $num_create = rand(1, 15);
        if (!in_array($num_create, $num_random)) {
            $num_random[] = $num_create;
        }
    }
    ?>

    <h2> La lista di numeri casuali è: <?php echo join(" - ", $num_random) ?></h2>

</body>

</html>
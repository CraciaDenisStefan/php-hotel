<?php
    include __DIR__. "/partials//hotels.php";

    if(isset($_GET['parking'])){
        $parking = [];

        foreach($hotels as $hotel_parking){
        if($hotel_parking['parking'] == filter_var($_GET['parking'], FILTER_VALIDATE_BOOLEAN)){
            $parking [] = $hotel_parking;
        }else if($_GET['parking'] == 'null'){
            $parking [] = $hotel_parking;
        }
    };
    $hotels = $parking;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Hotels</title>
</head>
<body>

    <header>
    <?php include __DIR__. "/partials/template/header.php"?>
    </header>

    <main>
        <div class="container pt-5">

        <form class="mb-5 " action="index.php" method="GET">
        <div class="form-group">
            <label class="controll-label m-2">Filtra per parcheggio</label>
            <select name="parking" class="form-control form_parking" require>
                <option value='null' selected >Tutti</option>
                <option value="1">Ha parcheggio</option>
                <option value="0">Non ha parcheggio</option>
            </select>
        </div>
        <div class="form-group m-2">
            <button type=submit class="btn btn-danger">Filtra</button>          
        </div>
    </form>

            <table class="table table-striped">      
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Hotel</th>
                    <th class="d-none d-md-block" scope="col">Descrizione</th>
                    <th scope="col"> Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th class="d-none d-sm-block" scope="col">Distanza</th>
                    </tr>
                </thead>
                <?php foreach($hotels as $index => $hotel){ ?>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $index +1 ?></th>
                    <td><?php echo $hotel['name'] ?></td>
                    <td class="d-none d-md-block"><?php echo $hotel['description'] ?></td>
                    <td><?php echo ($hotel['parking'] == true) ? 'Posiede parcheggio' : 'Non ha parcheggio' ?></td>
                    <td><?php echo $hotel['vote'] ?></td>
                    <td class="d-none d-sm-block"><<?php echo $hotel['distance_to_center'] ?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </main>

    <footer>
    <?php include __DIR__. "/partials/template/footer.php"?>
    </footer>
</body>
</html>
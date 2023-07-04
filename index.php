<?php
    include __DIR__. "/partials//hotels.php"

    
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
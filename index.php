<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>E-commerce</title>
</head>
<body>
    <?php
        require __DIR__ . "/modules/prodotto.php";
        require __DIR__ . "/modules/categoria.php";
        require __DIR__ . "/modules/gioco.php";
        require __DIR__ . "/modules/cuccia.php";
        require __DIR__ . "/modules/cibo.php";

        $gatto = new Categoria("gatto");

        $pesce = new Gioco("Fish", 50, $gatto, "https://m.media-amazon.com/images/I/71TnS1rh-cL._AC_UF894,1000_QL80_.jpg");
        $topo = new Gioco("Topo", 10, $gatto, "https://www.zooexpert.it/5055-large_default/gioco-gatto-topo-meccanico.jpg");


    ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-4">
                <div class="card p-4 text-center">
                    <?php
                        echo "<img src='$pesce->immagine'>" . "<br>";
                        echo "Nome: " . $pesce->nome . "<br>";
                        echo "Prezzo: " . $pesce->prezzo . "<br>";
                        echo "Categoria: " . $pesce->categoria->nome . "<br>";
                    ?>
                </div>
            </div>
            <div class="col-4">
                <div class="card p-4 text-center">
                    <?php
                        echo "<img src='$topo->immagine'>" . "<br>";
                        echo "Nome: " . $topo->nome . "<br>";
                        echo "Prezzo: " . $topo->prezzo . "<br>";
                        echo "Categoria: " . $topo->categoria->nome . "<br>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>E-commerce</title>
</head>
<style>
    h1 {
        margin-bottom: 0;
        color: yellow;
    }
</style>
<body>
    <?php
        require __DIR__ . "/modules/prodotto.php";
        require __DIR__ . "/modules/categoria.php";
        require __DIR__ . "/modules/gioco.php";
        require __DIR__ . "/modules/cuccia.php";
        require __DIR__ . "/modules/cibo.php";

        $categoriaGatto = new Categoria("Gatto", '<i class="fa-solid fa-cat"></i>');
        $categoriaCane = new Categoria("Cane", '<i class="fa-solid fa-dog"></i>');

        $prodotti = [
            $pesce = new Gioco(
                "Fish",
                10,
                $categoriaGatto,
                "https://m.media-amazon.com/images/I/71TnS1rh-cL._AC_UF894,1000_QL80_.jpg",
                "Cura e divertimento per il tuo amico a quattro zampe: prodotti di alta qualità per animali domestici.",
                "green"
            ),
            $topo = new Gioco(
                "Topo",
                15,
                $categoriaGatto,
                "https://is1-ssl.mzstatic.com/image/thumb/Purple71/v4/a4/14/ab/a414ab54-200f-08e1-2326-52d3a7d2024a/source/512x512bb.jpg",
                "Cura e divertimento per il tuo amico a quattro zampe: prodotti di alta qualità per animali domestici.",
                "blue"
            ),
            $naturalTrainer = new Cibo(
                "Natural Trainer",
                13,
                $categoriaGatto,
                "https://www.animalhouseitalia.it/17089-large_default/trainer-natural-adult-sterilised-con-salmone-gr300-croccantini-gatto.jpg",
                "Cura e divertimento per il tuo amico a quattro zampe: prodotti di alta qualità per animali domestici.",
                300
            ),
            $pallina = new Gioco(
                "Pallina",
                5,
                $categoriaCane,
                "https://shop-cdn-m.mediazs.com/bilder/spiky/ball/large/in/tpr/6/400/62906_PLA_TPR_Spiky_Ball_large_12_FG__53_6.jpg",
                "Cura e divertimento per il tuo amico a quattro zampe: prodotti di alta qualità per animali domestici.",
                "red"
            ),
            $joe = new Cuccia(
                "JOE SLEEP",
                50,
                $categoriaCane,
                "https://www.omlet.it/images/cache/400/400/Topology_Dog_Bed_with_Bolster_Topper_and_Black_Metal_Hairpin_Feet_-_Medium.jpg",
                "Cura e divertimento per il tuo amico a quattro zampe: prodotti di alta qualità per animali domestici.",
                "grande"
            ),
            $ultimaCroccantini = new Cibo(
                "Ultima Croccantini",
                8,
                $categoriaCane,
                "https://www.ideashoppingcenter.it/files/archivio_Files/Foto/39099_2.JPG",
                "Cura e divertimento per il tuo amico a quattro zampe: prodotti di alta qualità per animali domestici.",
                150
            ),
        ];

    ?>
    <header class="container-fluid bg-black">
        <div class="row">
            <div class="p-3 d-flex justify-content-center align-items-center">
                <h1>Paws & Claws</h1>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="row mt-4">
            <?php foreach ($prodotti as $prodotto) { ?>
                <div class="col-4 p-2">
                    <div class="card p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mt-2"><?= $prodotto->nome ?></h3>
                            <span><?= $prodotto->categoria->icona ?></span>
                        </div>
                        <img class="card-image" src="<?= $prodotto->immagine ?>" alt="<?= $prodotto->nome ?>">
                        <small class="mb-2"><?= get_class($prodotto) ?></small>
                        <p><?= $prodotto->descrizione ?></p>
                        <small>
                            <?php
                                if (method_exists($prodotto, 'getColore')) {
                                    $colore = $prodotto->getColore();
                                    echo "Colore: $colore";
                                } elseif (method_exists($prodotto, 'getPeso')) {
                                    $peso = $prodotto->getPeso();
                                    echo "Peso: $peso";
                                } elseif (method_exists($prodotto, 'getDimensione')) {
                                    $dimensione = $prodotto->getDimensione();
                                    echo "Dimensione: $dimensione";
                                }
                            ?>
                        </small>
                        <small>Prezzo: <?php 
                            try {
                                echo $prodotto->getPrezzo();
                            } catch (RangeException $e) {
                                echo "Prezzo non disponibile: " . $e->getMessage();
                            } catch (Exception $e) {
                                echo "Prezzo non disponibile: " . $e->getMessage();
                            }
                        ?></small>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>
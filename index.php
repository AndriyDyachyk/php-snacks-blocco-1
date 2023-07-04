<?php 

// SNACK 1
$array_squadre = [
    [
        'match' => 'Virtus Segafreddo Bologna - Openjobmetis Varese',
        'result' => '98 - 82'

    ],
    [
        'match' => 'EA7 Emporio Armani Milano - Banco di Sardegna Sassari',
        'result' => '79 - 67'

    ],
    [
        'match' => 'Umana Reyer Venezia - Nutribullet Treviso Basket',
        'result' => '107 - 73'

    ],
    [
        'match' => 'UNAHOTELS Reggio Emilia - Dolomiti Energia Trentino',
        'result' => '94 - 70'

    ],
    [
        'match' => 'Carpegna Prosciutto Pesaro - Bertram Yachts Derthona Trotona',
        'result' => '82 - 78'

    ],
    [
        'match' => 'Happy Casa Brindisi - Pallacanestro Trieste',
        'result' => '92 - 70'

    ],
    [
        'match' => 'Tezenis Verona - Gevi Napoli Basket',
        'result' => '82 - 88'

    ],
    [
        'match' => 'Givova Scafati - Germani Brescia',
        'result' => '92 - 88'

    ]
];
// FINE SNACK 1

// SNACK 2
$flage_name = false;
$flage_email = false;
$flage_age = false;

if(isset($_GET['nome']) && isset($_GET['mail']) && isset($_GET['eta'])){
    if(strlen($_GET['nome']) > 3){
        $flage_name = true;
    }
    if(str_contains($_GET['mail'], '@') && str_contains($_GET['mail'], '.')){
        $flage_email = true;
    }
    if(is_numeric($_GET['eta'])){
        $flage_age = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- SNACK 1 -->
    <div class="container">
        <div class="row">
            <?php foreach($array_squadre as $partite) { ?>
                <li>
                    <?php echo $partite['match'].' | '.$partite['result']; ?>
                </li>
                <?php } ?>
        </div>
    </div>
    <!-- FINE SNACK 1 -->
    <hr>
    <div class="container">
        <div class="row">
            <form action="index.php" method="GET">
                <input type="text" name="nome" placeholder="Inserisci il tuo nome">
                <input type="email" name="mail" placeholder="Inserisci la tua mail">
                <input type="text" name="eta">
                <button type="submit">Invia</button>
            </form>
            <?php if(isset($_GET['nome']) && isset($_GET['mail']) && isset($_GET['eta'])) { ?>
                <div>
                    <?php if($flage_age && $flage_email && $flage_age) {
                            echo 'Accesso riuscito';    
                        }
                        else{
                            echo 'Accesso negato';
                        }
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>

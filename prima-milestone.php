<?php

$database = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://e.snmc.io/i/1200/s/a2a2ecb1bf60d82c2d4adadc1bd19529/2712641'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid ">
        <div class="bar d-flex align-items-center"><img src="https://loghi-famosi.com/wp-content/uploads/2020/09/Logo-della-Spotify.png" alt=""></div>
            <div class="container row">
                <div class="col d-flex">

                    <?php

                        foreach($database as $singola){ ?>
                            
                            <div class="paragrafo">
                                <?php echo "<a href=\"\"><img class=\"immagine\"  src=\"{$singola['poster']}\"></a>"; ?>
                                <h3 class="titolo"> <?php echo $singola['title'] ?> </h3>
                                <p class="autore"> <?php echo $singola['author'] ?> </p>
                                <p class="anno"> <?php echo $singola['year'] ?> </p>
                            </div>
                            
                        <?php }
                    ?>
    
                </div>
            </div>

            <div class="container row">
                <div class="col d-flex">
                    
                    <?php

                        foreach($database as $singola){ ?>
                            
                            <div class="paragrafo">
                                <?php echo "<a href=\"\"><img class=\"immagine\"  src=\"{$singola['poster']}\"></a>"; ?>
                                <h3 class="titolo"> <?php echo $singola['title'] ?> </h3>
                                <p class="autore"> <?php echo $singola['author'] ?> </p>
                                <p class="anno"> <?php echo $singola['year'] ?> </p>
                            </div>
                            
                        <?php }
                    ?>
    
                </div>
            </div>
    </div>

</body>
</html>
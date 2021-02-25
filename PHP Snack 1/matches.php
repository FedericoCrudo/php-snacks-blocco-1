<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php 
    $matches=[
        [
            "casa"=>"Olimpia Milan",
            "ospite"=>"Cantù",
            "pC"=>55,
            "pO"=>60,
        ],
        [
            "casa"=>"Inter",
            "ospite"=>"juventus",
            "pC"=>40,
            "pO"=>20,
        ],
        [
            "casa"=>"Napoli",
            "ospite"=>"Torino",
            "pC"=>55,
            "pO"=>30,
        ],
        [
            "casa"=>"Olimpia Milan",
            "ospite"=>"Cantù",
            "pC"=>55,
            "pO"=>60,
        ],


    ];

    $lunghezzaArray=count($matches);


?>
<?php
/**
 * @return array
 */
function getCars()
{
    return [
        [
            "id" => 1,
            "name" => "Audi",
            "type" => "RS6",
            "img" => "img/audirs6.jpeg",
        ],
        [
            "id" => 2,
            "name" => "Audi",
            "type" => "R8",
            "img" => "img/audir8.jpeg",
        ],
        [
            "id" => 3,
            "name" => "Audi",
            "type" => "Q8",
            "img" => "img/audiq8.jpeg",
        ],
        [
            "id" => 4,
            "name" => "Bugatti",
            "type" => "Veyron",
            "img" => "img/bugattiveyron.jpeg",
        ],
        [
            "id" => 5,
            "name" => "Bugatti",
            "type" => "Atlantic",
            "img" => "img/atlantic.jpeg",
        ],
        [
            "id" => 6,
            "name" => "Bugatti",
            "type" => "Chiron Pur Sport",
            "img" => "img/pursport.jpeg",
        ],
        [
            "id" => 7,
            "name" => "Ferrari",
            "type" => "F40",
            "img" => "img/f40.jpeg",
        ],
        [
            "id" => 8,
            "name" => "Ferrari",
            "type" => "SF90 Stradale",
            "img" => "img/stradale.jpeg",
        ],
        [
            "id" => 9,
            "name" => "Ferrari",
            "type" => "812 Superfast",
            "img" => "img/superfast.jpeg",
        ],
        [
            "id" => 10,
            "name" => "Lamborghini",
            "type" => "Urus",
            "img" => "img/urus.jpeg",
        ],
        [
            "id" => 11,
            "name" => "Lamborghini",
            "type" => "Huracan Performante",
            "img" => "img/performante.jpeg",
        ],
        [
            "id" => 12,
            "name" => "Lamborghini",
            "type" => "Miura",
            "img" => "img/miura.jpeg",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getCarDetails($id)
{
    $tags = [
        1 => [
            "name" => "Audi RS6",
            "info" =>"740 pk",
            "price" => "€699,- per dag",
            "img" => "img/audirs6.jpeg",
        ],
        2 => [
            "name" => "Audi R8",
            "info" => "610 pk",
            "price" => "€1299,- per dag",
            "img" => "img/audir8.jpeg",
        ],
        3 => [
            "name" => "Audi Q8",
            "info" => "231 pk",
            "price" => "€295,- per dag",
            "img" => "img/audiq8.jpeg",
        ],
        4 => [
            "name" => "Bugatti Veyron",
            "info" => "1000 pk",
            "price" => "€2999,- per dag",
            "img" => "img/bugattiveyron.jpeg",
        ],
        5 => [
            "name" => "Bugatti Atlantic",
            "info" => "135 pk",
            "price" => "€9999,- per dag",
            "img" => "img/atlantic.jpeg",
        ],
        6 => [
            "name" => "Bugatti Chiron Pur Sport",
            "info" => "1500 pk",
            "price" => "€3899,- per dag",
            "img" => "img/pursport.jpeg",
        ],
        7 => [
            "name" => "Ferrari F40",
            "info" => "478 pk",
            "price" => "€2099,- per dag",
            "img" => "img/f40.jpeg",
        ],
        8 => [
            "name" => "Ferrari SF90 Stradale",
            "info" => "780 pk",
            "price" => "€1360,- per dag",
            "img" => "img/stradale.jpeg",
        ],
        9 => [
            "name" => "Ferrari 812 Superfast",
            "info" => "812 pk",
            "price" => "€995,- per dag",
            "img" => "img/superfast.jpeg",
        ],
        10 => [
            "name" => "Lamborghini Urus",
            "info" => "650 pk",
            "price" => "€899,- per dag",
            "img" => "img/urus.jpeg",
        ],
        11 => [
            "name" => "Lamborghini Huracán Performante",
            "info" => "610 pk",
            "price" => "€755,- per dag",
            "img" => "img/performante.jpeg",
        ],
        12 => [
            "name" => "Lamborghini Miura",
            "info" => "385 pk",
            "price" => "€1200,- per dag",
            "img" => "img/miura.jpeg",
        ],
    ];

    return $tags[$id];
}
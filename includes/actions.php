<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => 1,
            "brand" => "Lamborghini",
            "model" => "Huracan",
        ],
        [
            "id" => 2,
            "brand" => "Lamborghini",
            "model" => "Urus",
        ],
        [
            "id" => 3,
            "brand" => "Bugatti",
            "model" => "Veyron",
        ],
        [
            "id" => 4,
            "brand" => "Citroen",
            "model" => "DS",
        ],
        [
            "id" => 5,
            "brand" => "Ford",
            "model" => "Mustang",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDishDetails($id)
{
    $tags = [
        1 => [
            "price" => "$1000 a day",
            "tags" => ['cheese', 'oven']
        ],
        2 => [
            "recipe" => "You can make this delicious Dutch meal by ...",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],
        3 => [
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],
        4 => [
            "recipe" => "Everytime in the city after midnight",
            "tags" => ['kapsalon', 'tasty', 'meat']
        ],
        5 => [
            "recipe" => "Specialty when on holiday in Spain",
            "tags" => ['fish']
        ],
    ];

    return $tags[$id];
}
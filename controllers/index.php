
<?php
// $books = [
//     [        'name' => 'Do Androids Dream of Electric Sheep?',
//         'author' => 'Philip K. Dick',
//         'releaseYear' => 1968,
//         'purchaseUrl' => 'http://example.com'    ],  

//           [        'name' => 'Project Hail Mary',
//         'author' => 'Andy Weir',
//         'releaseYear' => 2021,
//         'purchaseUrl' => ''    ],    

//         [        'name' => 'The Martian',
//         'author' => 'Andy Weir',
//         'releaseYear' => 2011,
//         'purchaseUrl' => 'http://'
//     ]
// ];

// $filteredBooks = array_filter($books, function ($book) {
//     return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
// });

function dd($val){
    var_dump($val);
    die(); 
}


require "views/index.view.php";
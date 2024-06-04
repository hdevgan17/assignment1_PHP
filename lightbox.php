<?php

/*******w******** 
    
    Name: Harshdeep Devgan
    Date: 18 May, 2024
    Description: Assignment 1 Intro to PHP
                 Unsplash image gallery
                 Javascript Responsive Lightbox

****************/

$config = [

    'gallery_name' => 'Purely Pixels',
 
    'local_images' => [
        [
            'filename' => 'bball.jpg',
            'thumbnail' => 'bball_thumbnail.jpg',
            'photographer' => 'Markus Spiske',
        ],
        [
            'filename' => 'farm.jpg',
            'thumbnail' => 'farm_thumbnail.jpg',
            'photographer' => 'Illiya Vjestica',
        ],
        [
            'filename' => 'golf.jpg',
            'thumbnail' => 'golf_thumbnail.jpg',
            'photographer' => 'Randy Chen',
        ],
        [
            'filename' => 'stadium.jpg',
            'thumbnail' => 'stadium_thumbnail.jpg',
            'photographer' => 'Tyler Nix',
        ],
        [
            'filename' => 'compass.jpg',
            'thumbnail' => 'compass_thumbnail.jpg',
            'photographer' => 'Jordan Madrid',
        ],
        [
            'filename' => 'moon.jpg',
            'thumbnail' => 'moon_thumbnail.jpg',
            'photographer' => 'Benjamin Voros'
        ],
        [
            'filename' => 'rocket.jpg',
            'thumbnail' => 'rocket_thumbnail.jpg',
            'photographer' => 'SpaceX',
        ],
        [
            'filename' => 'tree.jpg',
            'thumbnail' => 'tree_thumbnail.jpg',
            'photographer' => 'Simon Wilkes',
        ]
    ]
 
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
    <title><?= $config['gallery_name']?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1>
        <?php echo $config['gallery_name']; ?>
    </h1>

    <div id="gallery">
        <?php foreach($config['local_images'] as $image):?>
            <div class="image">
                <h2>
                    <?php echo $image['photographer'];?>
                </h2>
                <a href="images/<?php echo $image['filename']?>">
                    <img src="images/<?php echo $image['thumbnail']?>" alt="local image">
                </a>
            </div> 
        <?php endforeach; ?>
    </div>

    <script>
        new LuminousGallery(document.querySelectorAll(".image a"));
    </script>

</body>
</html>
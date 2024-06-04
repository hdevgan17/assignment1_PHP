<?php

/*******w******** 
    
    Name: Harshdeep Devgan
    Date: 18 May, 2024
    Description: Assignment 1 Intro to PHP
                 Unsplash image gallery

****************/

$config = [

    'gallery_name' => 'Purely Pixels',
 
    'unsplash_categories' => ['Dog', 'Village', 'Food', 'Cars', 'Technology', 'Football', 'Rain', 'Flowers'],
 
    'local_images' => [
        [
            'filename' => 'bball.jpg',
            'photographer' => 'Markus Spiske',
            'homepage' => 'https://unsplash.com/@markusspiske'
        ],
        [
            'filename' => 'farm.jpg',
            'photographer' => 'Illiya Vjestica',
            'homepage' => 'https://unsplash.com/@illiyapresents'
        ],
        [
            'filename' => 'golf.jpg',
            'photographer' => 'Randy Chen',
            'homepage' => 'https://unsplash.com/@bchen0'
        ],
        [
            'filename' => 'stadium.jpg',
            'photographer' => 'Tyler Nix',
            'homepage' => 'https://unsplash.com/@nixcreative'
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
    <title><?= $config['gallery_name']?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1>
        <?php echo $config['gallery_name']; ?>
    </h1>

    <div id="gallery">
        <?php foreach($config['unsplash_categories'] as $category): ?>
        <div>
            <h2><?php echo $category;?></h2>
            <img src="https://source.unsplash.com/300x200/?<?php echo $category;?>" alt="<?php echo $category ?>image">
        </div>
        <?php endforeach; ?>
    </div>

    <h1>
        <?php echo count($config['local_images']). " Large Images";?>
    </h1>

    <div id="large-images">
        <?php foreach($config['local_images'] as $image):?>
            <img src="images/<?php echo $image['filename'] ?>" alt="local image">
            <h3 class="photographer">
                <a href="<?php echo $image['homepage'];?>"><?php echo $image['photographer'];?></a>
            </h3>
        <?php endforeach; ?>
    </div>
</body>
</html>
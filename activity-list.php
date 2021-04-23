<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/activity-list.css" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
</head>
<body>
<?php include __DIR__ . '/parts-php/html-navbar.php'; ?>
<section class="hero-section">
    <div class="container">
        <div class="hero-section-image">
            <h3 class="title ff-noto">千里之行始於足下</h3>
        </div>
    </div>
</section>

<section class="activity-section">
    <div class="container">
        <div class="filter-section">
            <div class="rank">
                
            </div>
            <div class="place"></div>
            <div class="level"></div>
            <div class="time"></div>
            <div class="price"></div>
        </div>
    </div>
</section>


<?php include __DIR__ . '/parts-php/html-scripts&footer.php'; ?>

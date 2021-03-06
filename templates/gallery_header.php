<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- Stylesheet referencing my custom styling -->
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/gallery_styles.css">
    <!-- Set up necessary to access Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans&display=swap" rel="stylesheet">
    <!-- Set up necessary to access FontAwesome's assets -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- <script src="scripts/script.js"></script> -->
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/toggle_filter.js" defer></script>
    <script src="scripts/displayList.js" defer></script>
    <script src="scripts/gallery_events.js" defer></script>
    <script src="scripts/modal.js" defer></script>
    <script src="scripts/lazy_loading.js" defer></script>
</head>

<body>
    <div class="container">
        <!-- Navigation bar markup -->
        <nav id="navbar">
        <div><a href="./"><button class="logo"><i class="fas fa-book"></i> MTG Deck Builder</button></a></div>
            <!-- <div><button class="nav_button">Card Data <i class="fas fa-arrow-circle-down"></i></button></div>
            <div><button class="nav_button"><i class="fas fa-search"></i> Search cards...</button></div> -->
            <div>
                <a href="gallery.php"><button class="nav_button gallery">View Gallery</i></button></a>
                <a href="deck.php"><button class="nav_button demo">Demo (Build Deck)</button></a>
            </div>
        </nav>
    </div>
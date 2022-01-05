<!DOCTYPE html>
<html lang="en">

<?php echo "hello" ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pok&eacute;mon Compendium</title>
    <!-- Stylesheet referencing my custom styling -->
    <link rel="stylesheet" href="styles.css">
    <!-- Set up necessary to access Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans&display=swap" rel="stylesheet">
    <!-- Set up necessary to access FontAwesome's assets -->
    <script src="https://kit.fontawesome.com/d42f872671.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!-- Navigation bar markup -->
        <nav id="navbar">
            <div><button class="logo"><i class="fas fa-archive"></i> Pok&eacute;mon Compendium</button></div>
            <div><button class="nav_button">Pok&eacute;mon Data <i class="fas fa-arrow-circle-down"></i></button></div>
            <div><button class="nav_button"><i class="fas fa-search"></i> Search Pok&eacute;mon...</button></div>
            <div>
                <button class="nav_button">Sign Up</button>
                <button class="nav_button">Log In</button>
            </div>
        </nav>

        <!-- Welcome section markup (picture + introduction titles) -->
        <section id="welcome">
            <div><img src="images/cyndaquil.png" alt="Main picture here." class="welcome_image"></div>
            <div>
                <h1 class="welcome_text">Welcome to <br> Pok&eacute;mon Compendium!</h1>
                <p class="welcome_subtext">A fan-made web application that provides <br>
                    a unique rendition of the beloved franchise's Pok&eacute;dex.</p>
            </div>
        </section>
    </div>

    <!-- About section markup (describing this project + picture) -->
    <section id="about">
        <div>
            <h2 class="about_header">About This Project</h2>
            <p class="about_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Laudantium doloremque sapiente, culpa, dolorem consequuntur reprehenderit qui laboriosam et,
                blanditiis explicabo vitae id? Autem enim, nulla vitae accusamus ipsum soluta animi amet
                maxime nisi iste alias voluptatibus architecto nesciunt, magnam iusto repellendus ea!
                Alias molestiae numquam neque labore sequi aliquam porro?</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, asperiores.</p>
            <ul>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
            </ul>
        </div>
        <div>
            <img src="images/gengar.png" alt="About picture here." class="about_image">
        </div>
    </section>

    <div class="container">
        <section id="box_items">
            <div>Features</div>
            <div class="box">View Pokedex</div>
            <div class="box">View Pokemon Moves</div>
            <div class="box">View Pokemon Items</div>
        </section>
    </div>

    <section id="timeline">
        <div>Insert Pokemon's Official Twitter Timeline Here</div>
    </section>

    <footer id="footer">
        <div>Footer here</div>
    </footer>

</body>

</html>
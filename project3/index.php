<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niharika Agrawal, CSC 170 Project 3</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navigation.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="inc/slideshow.js" defer></script>
</head>

<body>
    <?php include('inc/header.php'); ?> <!-- Include the header here -->

    <?php include('inc/navigation.php'); ?> <!-- Include the navigation here -->

    <div id="slideshow" class="slideshow-container">
        <div class="slides">
            <img src="images/hozier1.jpg" class="slide" alt="Slide 1">
            <img src="images/NY_Map.png" class="slide" alt="Slide 2">
            <img src="images/two-players.png" class="slide" alt="Slide 3">
            <img src="images/images5.jpeg" class="slide" alt="Slide 4">
        </div>
    </div>
    
    <main class="bio-layout">

        <section class="excerpts">

            <div class="excerpt">
                <img src="images/hozier1.jpg" class = "slide" alt="Hozier Slideshow Image">
                <div class="excerpt-text">
                    <h2>Hozier</h2>
                    <p class="lead">Andrew John Hozier-Byrne (born 17 March 1990), known professionally as Hozier (/ˈhoʊziər/ HOH-zee-ər), is an Irish musician. His music primarily draws from folk, soul and blues, often using religious and literary themes and taking political or social justice stances. His debut single, "Take Me to Church" (2013), became a rock radio hit in the U.S., peaked at number two on the Billboard Hot 100 and was certified multi-platinum in several countries. His eponymous debut studio album...</p>
                    <a href="hozier.html">Read more about Hozier ›</a>
                </div>
            </div>

            <div class="excerpt">
                <img src="images/NY_Map.png" class = "slide" alt="NYC Slideshow Image">
                <div class="excerpt-text">
                    <h2>New York City</h2>
                    <p class="lead">New York, often called New York City or NYC, is the most populous city in the United States, located at the southern tip of New York State on one of the world's largest natural harbors. The city comprises five boroughs, each coextensive with a respective county. The city is the geographical and demographic center of both the Northeast megalopolis and the New York metropolitan area, the largest metropolitan area in the United States by both population and urban area. New York is...</p>
                    <a href="NYC.html">Read more about New York City ›</a>
                </div>
            </div>

            <div class="excerpt">
                <img src="images/two-players.png" class = "slide" alt="Underwater Hockey Slideshow Image">
                <div class="excerpt-text">
                    <h2>Underwater Hockey</h2>
                    <p class="lead">Underwater hockey (UWH), also known as Octopush in the United Kingdom, is a globally played limited-contact sport in which two teams compete to manoeuvre a puck across the bottom of a swimming pool into the opposing team's goal by propelling it with a hockey stick (or pusher). A key challenge of the game is that players are not able to use breathing devices such as scuba gear whilst playing, they must hold their breath. The game originated...</p>
                    <a href="underwater-hockey.html">Read more about Underwater Hockey ›</a>
                </div>
            </div>

            <div class="excerpt">
                <img src="images/images5.jpeg" class = "slide" alt="Stardew Valley Slideshow Image">
                <div class="excerpt-text">
                    <h2>Stardew Valley</h2>
                    <p class="lead">Stardew Valley is a 2016 farm life simulation role-playing video game developed by Eric "ConcernedApe" Barone. Players take the role of a character who inherits their deceased grandfather's dilapidated farm in a place known as "Stardew Valley". The game was originally released for Windows in February 2016 before being ported to other platforms. Stardew Valley is...</p>
                    <a href="stardew-valley.html">Read more about Stardew Valley ›</a>
                </div>
            </div>

        </section>
      
    </main>
      
    <footer>
        <section id="References">
            <div>&copy; 2025 Niharika Agrawal; CSC 170 Web Design and Development</div>
        </section>
    </footer>

    <input type="hidden" name="myEmail" value="nagrawa5@u.rochester.edu">
    <input type="hidden" name="myAnimal" value="cat">

</body>
</html>

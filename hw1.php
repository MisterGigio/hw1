<?php
session_start();
include("hw1_login/connect.php");

// Funzione per ottenere il nome utente
function getUsername($conn)
{
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while ($row = mysqli_fetch_array($query)) {
            return $row['username'];
        }
    }
    return false;
}

// Controlla se l'utente è loggato e ottiene il nome utente
$username = getUsername($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitchfork</title>
    <link rel="stylesheet" href="hw1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=PT+Serif+Caption:ital@0;1&family=Pinyon+Script&family=Roboto:ital,wght@0,100..900;1,100..900&family=Zain:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,300;1,400&display=swap"
        rel="stylesheet">
    <script src="js/hw1.js" defer></script>
    <script src="js/hw1-list-more-from-pitchfork.js" defer></script>
    <script src="js/hw1-more-from-pitchfork.js" defer></script>
    <script src="js/hw1-spotify.js" defer></script>
    <script src="js/hw1-newsAPI.js" defer></script>
</head>

<body>
    <!-- Header: nav bar, logo, newsletter e logIn -->
    <header>
        <div class="header-top"> <!-- Header Top -->
            <button class="menu-toggle-btn">☰</button>
            <a href="hw1.php"><img class="logo" src="hw1_Immagini/logo.png" alt="logo"></a>
            <?php
            if ($username) {
                echo "<p class='button'>Hello, " . $username . "</p>";
                echo "<a class='button' href='hw1_login/logout.php'>Logout</a>";
            } else {
                echo "<a class='button' href='hw1_login/index_login.html'>Accedi</a>";
            }
            ?>
        </div>

        <hr class="menu-separator">

        <nav class="nav-bar"> <!-- Nav bar -->
            <ul>
                <li><a href="navBar/reviews/albums.php" class="nav-link">Reviews</a></li>
                <li><a href="navBar/moreFromPitchfork/moreFromPitchfork.php" class="nav-link">More From Pitchfork</a></li>
                <li><a href="navBar/features/features.php" class="nav-link">Features</a></li>
                <li><a href="#container-spotify">Search Albums</a></li>
                <li><a href="#newsAPI-container">Best New Music</a></li>
            </ul>
        </nav>

    </header>

    <div id="menuOverlay" class="menu-overlay">
        <ul>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">More From Pitchfork</a></li>
            <li><a href="#">Search Albums</a></li>
            <li><a href="#">Best New Music</a></li>
        </ul>
    </div>

    <!-- Container - Main News -->
    <section id="container">
        <!--  Main news in alto a sinistra -->
        <div class="left-container">
            <div class="left-container-card">
                <img src="hw1_Immagini/haimShare.webp" alt="img-card">
                <h3 class="nav-bar-option">NEWS</h3>
                <h1 class="title">
                    Haim Share New Song “Everybody’s Trying to Figure Me Out”
                </h1>
                <span class="author">By Jazz Monroe</span>
                <span class="date">April 4, 2025</span>
            </div>

            <div class="left-container-card hrLine"> <!-- Main news in basso a sinistra -->
                <img src="hw1_Immagini/ayaMade.webp" alt="img-card">
                <h3 class="nav-bar-option">COLUMNS</h3>
                <h1 class="title">
                    How Ays Made <em>Hexed!</em>, One of the Best, Most Unhinged Albums of the Year
                </h1>
                <span class="author">By Meaghan Garvey <br> Photography by Roxy Lee</span>
                <span class="date">April 3, 2025</span>
            </div>

        </div>
        <div class="center-container center-hr">
            <div class="main-left-container-card"> <!-- Main Title, notizia principale, al centro della pagina -->
                <img src="hw1_Immagini/top10.webp" alt="img-card">
                <h3 class="nav-bar-option">NEWS</h3>
                <h1 class="main-title">
                    10 Albums Out This Week You Should Listen to Now
                </h1>
                <span class="author">By Madison Bloom, Jazz Monroe, and Walden Green</span>
                <span class="date">April 4, 2025</span>
            </div>
            <!-- Main title, seconda notizia principale, al centro della pagina -->
            <div class="side-left-container-card side-hr">
                <div class="side-info">
                    <h3 class="nav-bar-option">NEWS</h3>
                    <h1 class="title">
                        Watch Perfume Genius Perform "It's a Mirror" on <em>Fallon</em>
                    </h1>
                    <span class="author">By Madison Bloom</span>
                    <span class="date">April 4, 2025</span>
                </div>
                <div class="side-img">
                    <img src="hw1_Immagini/mirror.webp" alt="img-card">
                </div>
            </div>
        </div>
        <!-- Articoli meno rilevanti, tutti sulla destra -->
        <div class="right-container">
            <div class="side-article hrLineRight">
                <h4>Michael Hurley, Underground Folk Legend and Singer-Songwriter, Dies at 83</h4>
                <span class="author">By Madison Bloom</span>

            </div>
            <div class="side-article hrLineRight">
                <h4>The 72 Most Anticipated Tours of 2025</h4>
                <span class="author">By Pitchfork</span>

            </div>
            <div class="side-article hrLineRight">
                <h4>The 20 Best Albums of 2025 So Far</h4>
                <span class="author">By Anna Gaca, Jeremy D. Larson, Marissa Lorusso and Philip Sherburne</span>
            </div>
            <div class="side-article hrLineRight">
                <h4>FKA twigs Cancels Coachella 2025 Performances Due to Ongoing Visa Issues</h4>
                <span class="author">By Matthew Strauss</span>

            </div>
            <div class="side-article hrLineRight">
                <h4>Nine Inch Nails-Scored <em>Tron: Ares</em> Gets First Trailer</h4>
                <span class="author">By Walden Green</span>
            </div>
        </div>
    </section>

    <!-- SEZIONE REVIEWS -->
    <!-- CONTENITORE PADRE: contiene tutte le informazioni della reviews -->
    <section id="reviews">
        <!-- Contenitore titolo -->
        <div class="reviews-title">
            <h1><a href="navBar/reviews/albums.php">Reviews</a></h1>
            <!-- Titolo -->
        </div>
        <!-- Prima colonna (Main Reviews) -->
        <!-- CONTENITORE FIGLIO: contiene le altre colonne da dividere -->
        <div class="reviews-container">

            <!-- CONTENITORE NIPOTE: contiene l'immagine principale della sezione review -->
            <div class="main-reviews">
                <img width="543" height="704" src="hw1_Immagini/maintenantJamais.webp" alt="img-card">
                <h3 class="nav-bar-reviews">ROCK</h3>
                <h1 class="title-reviews">
                    <em>Maintenant Jamais</em>
                </h1>
                <h3 class="artist-reviews">
                    Population II
                </h3>
                <p class="description-reviews">
                    The Montreal trio’s mix of prog excess and punk attitude landed its 2020 debut on John Dwyer’s
                    Castle
                    Face label. On LP no. 3, the group hones its songwriting while honoring its exploratory instincts.
                </p>
                <span class="author">By Stuart Berman</span>
            </div>

            <!-- Seconda colonna (Side Reviews) -->
            <!-- CONTENITORE NIPOTE: contiene altri 3 div, notizie di secondo rilievo -->
            <div class="side-reviews">
                <!-- PRIMO CONTENITORE PRO-NIPOTE: contiene due contenitori per l'immagine il testo -->
                <div class="side-sections-reviews">
                    <div class="side-sections-info">
                        <h3 class="nav-bar-reviews">EXPERIMENTAL</h3>
                        <h1 class="title-reviews">
                            <em>Los Thuthanaka</em>
                        </h1>
                        <h3 class="artist-reviews">
                            Los Thuthanaka
                        </h3>
                        <p class="description-reviews">
                            The Montreal trio’s mix of prog excess and punk attitude landed its 2020 debut on John
                            Dwyer’s
                            Castle
                            Face label. On LP no. 3, the group hones its songwriting while honoring its exploratory
                            instincts.
                        </p>
                        <span class="author">By Joshua Minsoo Kim</span>
                    </div>
                    <div class="side-section-img">
                        <img width="424" height="424" src="hw1_Immagini/thuthanaka.webp" alt="img-card">
                    </div>
                </div>




                <!-- SECONDO CONTENITORE PRO-NIPOTE: contiene due contenitori per l'immagine il testo -->
                <div class="side-sections-reviews">
                    <div class="side-sections-info">
                        <h3 class="nav-bar-reviews">POP / R &amp; B / ELECTRONIC</h3>
                        <h1 class="title-reviews">
                            <em>star</em>
                        </h1>
                        <h3 class="artist-reviews">
                            2hollis
                        </h3>
                        <p class="description-reviews">
                            The internet rapper and producer’s new album is wired-up and ready to dance, confronting his
                            growing
                            fame through festival-ready beats that bang like post-millennial supernovae.
                        </p>
                        <span class="author">By Jude Noel</span>
                    </div>
                    <div class="side-section-img">
                        <img width="424" height="424" src="hw1_Immagini/star.webp" alt="img-card">
                    </div>
                </div>




                <!-- TERZO CONTENITORE PRO-NIPOTE: contiene due contenitori per l'immagine il testo -->
                <div class="side-sections-reviews">
                    <div class="side-sections-info">
                        <h3 class="nav-bar-reviews">ELECTRONIC / EXPERIMENTAL</h3>
                        <h1 class="title-reviews">
                            <em>their internal diapasons</em>
                        </h1>
                        <h3 class="artist-reviews">
                            Milosz Kedra
                        </h3>
                        <p class="description-reviews">
                            The Polish composer’s spectral, textural music—written on an instrument he designed from
                            scavenged
                            organ pipes—swarms with beautifully unruly ideas.
                        </p>
                        <span class="author">By Philip Sherburne</span>
                    </div>
                    <div class="side-section-img">
                        <img width="424" height="424" src="hw1_Immagini/diapasons.webp" alt="img-card">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn" onclick="onSeeMoreClick()">SEE MORE</button>
    </section>

    <!-- MORE REVIEWS -->
    <!-- CONTENITORE PADRE -->
    <section id="container-more-reviews">
        <div class="container-more-title">
            <h1>More Reviews</h1> <!-- Titolo -->
        </div>

        <!-- CONTENITORE FIGLIO -->
        <div class="reviews-more-container">
            <!-- PRIMO CONTENITORE NIPOTE -->
            <div class="more-reviews-side-container">
                <img width="332" height="186" src="hw1_Immagini/mayhem.webp" alt="">
                <h3 class="nav-bar-more-reviews">R &amp; B </h3>
                <h1 class="title-more-reviews"><em>MAYHEM</em></h1>
                <span class="author-more-reviews">Lady Gaga</span>
                <p class="paragraph-more-reviews">
                    On her seventh album, Lady Gaga returns to pop with the larger-than-life sound. She delves into the
                    inner turmoil of fame while reminding you why she’s earned it.
                </p>
            </div>
            <!-- SECONDO CONTENITORE NIPOTE -->
            <div class="more-reviews-side-container">
                <img width="332" height="186" src="hw1_Immagini/melancholy.webp" alt="">
                <h3 class="nav-bar-more-reviews"> ROCK </h3>
                <h1 class="title-more-reviews"><em>For Melancholy Brunettes (&amp; sad women)</em></h1>
                <span class="author-more-reviews">Japanese Breakfast</span>
                <p class="paragraph-more-reviews">
                    Michelle Zauner’s lovely, pensive, capital-R Romantic fourth album takes a step back from
                    autobiography to examine the performances and peril of fame itself.
                </p>
            </div>
            <!-- TERZO CONTENITORE NIPOTE -->
            <div class="more-reviews-side-container">
                <img width="332" height="186" src="hw1_Immagini/ddr.webp" alt="">
                <h3 class="nav-bar-more-reviews">ROCK</h3>
                <h1 class="title-more-reviews"><em>Radio DDR</em></h1>
                <span class="author-more-reviews">Sharp Pins</span>
                <p class="paragraph-more-reviews">
                    Lifeguard’s Kai Slater bottles the feeling of youthful, lovestruck invincibility with enough
                    scream-a-long hooks and artful riffs that his second album feels like a greatest-hits collection.
                </p>
            </div>
            <div class="more-reviews-side-container">
                <img width="332" height="186" src="hw1_Immagini/cityClowns.webp" alt="">
                <h3 class="nav-bar-more-reviews">ELECTRONIC</h3>
                <h1 class="title-more-reviews"><em>City of Clowns</em></h1>
                <span class="author-more-reviews">Marie Davidson</span>
                <p class="paragraph-more-reviews">
                    Forget dancing like no one’s watching: The Québécois musician’s latest LP is raving under
                    surveillance capitalism, offering pranksterish critiques over Y2K-inspired beats.
                </p>
            </div>
        </div>
    </section>

    <section id="more-from-pitchfork">
        <div class="mfp-title">
            <h1><a href="navBar/moreFromPitchfork/moreFromPitchfork.php">More From Pitchfork</a></h1>
        </div>
        <div class="more-from-pitchfork-top"></div>
        <div class="more-from-pitchfork-bottom"></div>
    </section>

    <!-- SEZIONE API DI SPOTIFY -->
    <section id="container-spotify">
        <div class="container-spotify-title">
            <h1>Search a Spotify's Albums</h1>
            <form id="search-formAPI">
                <label for="albumAPI"></label>
                <input type="text" id="albumAPI" name="albumAPI" placeholder="Search an album..." required>
                <button type="submit">SEARCH</button>
            </form>
        </div>
        <div id="album-viewAPI"></div>
    </section>

    <!-- SEZIONE FEATURES -->
    <!-- CONTENITORE PADRE -->
    <section id="container-features">
        <!-- Titolo -->
        <div class="container-features-title">
            <h1><a href="navBar/features/features.php">Features</a></h1>
        </div>
        <!-- CONTENITORE FIGLIO -->
        <div class="features-container">


            <!-- CONTENITORI NIPOTI -->
            <div class="features-side-container">
                <img width="615" height="307" src="hw1_Immagini/adamScott.webp" alt="">
                <h3 class="nav-bar-features">5-10-15-20</h3>
                <h1 class="title-features">
                    Adam Scott On the Music That Made Him
                </h1>
                <h2></h2>
                <span class="author-features">By Jeremy D. Larson</span>
                <span class="date-features">March 21, 2025</span>
            </div>





            <div class="features-side-container">
                <img width="614" height="345" src="hw1_Immagini/bladee.webp" alt="">
                <h3 class="nav-bar-features">COVER STORY</h3>
                <h1 class="title-features">
                    A Rare Interview With Bladee, the Mystic Oracle of Internet Rap
                </h1>
                <span class="author-features">By Meaghan Garvey</span>
                <span class="date-features">February 25, 2025</span>
            </div>





            <div class="features-side-container">
                <img width="615" height="307" src="hw1_Immagini/top50.webp" alt="">
                <h3 class="nav-bar-features">LISTS &amp; GUIDES</h3>
                <h1 class="title-features">
                    The 50 Most Anticipated Albums of Spring 2025
                </h1>
                <span class="author-features">By Madison Bloom, Nina Corcoran</span>
                <span class="date-features">March 19, 2025</span>
            </div>





            <div class="features-side-container">
                <img width="614" height="345" src="hw1_Immagini/blackCountry.webp" alt="">
                <h3 class="nav-bar-features">INTERVIEW</h3>
                <h1 class="title-features">
                    Black Country, New Road Head Into the Unkonown
                </h1>
                <span class="author-features">By Ian Cohen</span>
                <span class="date-features">January 30, 2025</span>
            </div>
        </div>
    </section>

    <!-- SEZIONE API NEWSAPI -->
    <section id="newsAPI-container">
        <div class="container-news-title">
            <h1>Music News</h1>
            <form id="search-form-newsAPI">
                <input type="text" id="search-query" placeholder="Search a news..." required>
                <button type="submit">SEARCH</button>
            </form>
        </div>
        <div id="news-viewAPI"></div>
    </section>

    <!-- FOOTER -->
    <footer id="main-footer">
        <!-- SEZIONE PRIMO FIGLIO DEL FOOTER: contenitore superiore del footer -->
        <div class="top-footer">
            <!-- PRIMO CONTENITORE (SINISTRA) NIPOTE -->
            <div class="left-footer">
                <h4>Pitchfork</h4>
                <p>The most trusted voice in music</p>

                <!-- SEZIONE ICONE SOCIAL -->
                <div class="social-icons">
                    <a href="#" class="social-icon" id="social-facebook"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABfUlEQVR4nO2Xv4rCQBDG9zk+QdBgYZcqYGNhZZlH0C5PYGlpGbCIVaxSCwp5AEvJC6QQ0qj9phH8Q+Y4iwNNQLhL3Cw3Ax+kWNjvNzO7sxEASGcJ1QbAAFCfRXALQX0mwYcYekqoNgAGgPosglsI1Weq3W5Tr9ej4XBI/X7/8d3pdOpdgUajQY7j0G63o9vtRkUxGo3qCdBsNmmz2dC7GI/H9QTwPO+t+doCmKZJ1+uVtAWYTqeFZtM0pfl8TpPJ5EeWZdUPYL1eFwLYtl36XqIKgCiKcubjOC59H1QF8G32NVarlT4A+/0+B7BcLvUG8H2fAVBFBVzXJSnlk+73e64Cl8slt05KSYPBQG0LLRYL+m1kWUaGYegLcDgc1B/ivwBst1u9AfwSbiZRxo9Kt9t9UpIkObNBEOTWtVot9QBF4jkArgC4hV6D30LgWwh8jaKCmSN4kIEnMdWuhcIwpOPxSOfz+aHT6USz2UyfM4APSqg2AAaA+iziP7fQF0EgIaH7vrTwAAAAAElFTkSuQmCC"
                            alt="Facebook"></a>
                    <a href="#" class="social-icon" id="social-tiktok"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEO0lEQVR4nO2ayS9sURCH/R3H2Nq40m2K6IQ0doQIW2KIYGNhYUkMMeyQIBYiIRHBwsLKQiIh5hgTQ0zRQayENk/18qv0ubmaftrj9b3tvUoqnHPrXvXdqnNOnXP5CCHoJ6iP1g78BxH/WkTy8/NpamqKrq+vSWu5urpiX/Ly8j4H0tbWRnqV1tZW90AQCcj9/T3V1dWRyWTSPG1MJhP7Ap8g70XmDcj09DQb40atAYSTNjQ0sG9Isw9BkI8QPURCvBMZiN1u/xhEitZOCxfqyj+PgExOTr4ZtAsLC+Tn5+ddIDc3N+/OQFar1btAbm9v+ZlGo5Hb7e3t3K6trfXOiBgdIKmpqfTy8kLHx8cUEhLivRERQtDY2Bj3jY6Ofmqs6AIkODhY6YuKiiKbzcb94+PjZDab9Q9yd3fHzzQYDK/6LRYL7e/v8zXUdCMjI1RVVUWxsbHeBQINCwujrq4uZSGGHB4e6hNE1khBQUHKujI7O8sQ0iY8PJzKysrYDpODV4BImZiYoNDQUMXOaDTqG+Th4YGfGRgY+OpvQPb29qikpIQCAgK0B4mLi6PGxkaamZmh09NTdhzT60cgGxsbyu8XFxe0tLSkDQim0+7ubiV1nEXaPT4+chtvXf030K6urqajo6NX99lsNs+BoKReXl5mW6zSyPeKigpKS0tzG0T9PNRdRUVFVFlZSYmJiZ4BQS6vrq6yHd5mdnb2b5/hDoi7+q0gvb29bHNwcKBswOBkeXk5DQ0NvXnG09MTt/39/fUDYrFY+A1DU1JSuA8r8fr6Oqnl7OxM3yBtjhOWgYEBJc22t7eVqRQ5np6e/mqr/Pz8zNdlcagLkA3HlJmbm8vtmpoabgNGXd2qFZMBxNfXVz8gV46aSO4jsHZASktLXd6jOxCDwcDXUATKPlm9utq2Ip0gSC+0MU4gGDeaRuTacYQq02h+fp7bxcXF79pjQoBgN6g+0lFPBpqAbG5u8vWsrCxuNzc3cxvrilwnpOLt4zAN0tfXx304JYTMzc1pC9LR0cHXe3p6lPL75OSE+1ZWVqigoICSk5OpsLBQWfnPz88pJiaG7YeHh7mvqalJWxCr1cr5jXGSkJCgpI+EcRakUEZGhmKHe1GbxcfHawsihKDBwUG2WVtbU2YvRKalpYUWFxd5h4exg7SLjIzk6xEREbS7u8v3odD8Ewjx3SBwemdnR4GRkXGlSUlJij3GkvoQQlMQIQQ7L51DmmHMZGZmKk7iZ05ODvX39ytFI8oYd09LhKdAZGSQZrIEkeL8lQsgKDRdrfyagwiHYhB3dnbS1taWcoaFXR7KGdRmKDS/CiA8AeKsnz0G/Ssgdrtdtx96oqOj2bfLy8uPQeRKXF9fr7nj4iuf3mQJgUULMF+dZb5DzWYzQ3zqYygUn4C9/vO0UEUGIVSfyXrdPwwIL1QfrR34DyJ+aER+AZaselMGgi/VAAAAAElFTkSuQmCC"
                            alt="TikTok"></a>
                    <a href="#" class="social-icon" id="social-instagram"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACPElEQVR4nO2Wy67xUBTHPcfOoUYYYoJHYEL7Bi4vQZm6PITrC6BPIUEFMXAb03HLiOyT/4pKzjnqVPlyBp+VrKTZXZffXnvti4sxxv9SXW8A9l4Cdr9JJEniiqJwTdP4+Xzmvwls9vs9+Yii6LwJPR4P73Q6/FlBDMR6GKBzSW4YBi+XyzwSifCPj49fZwSbaDTKq9UqPxwOFKPdbj8GIEnSNXk8Hne8xxOJxBUilUrZB1AUhZwqlYqjxI1Gg8uyTN+oBKTX69kH0DSNnFD27/+8Xi8vFotcVVWaHXQ8HlNCQRDIZjAY8Hq9Tt+xWIxi7XY7+wCn04mc3G73l/FwOMwXi4Vlw83ncx4Khb74IAYEMW0DmPJ95mby5XLJ0+k09/l8pJlMhq/Xa/o3m82ulbgX72GAUqlEY6vVivv9/h8+GDMhCoXC6wEmkwmNYeZWzZfNZskGPfFyAMMwaAwltwJAFSC6rr8eQNf1vwVQVZXG0HBWALlcjmxGo9HrAWRZpjE02q0mDAQCfLvdkk0+n389gCAItM8hm82GGg4gUMzcTD6dTn9cPg8DnCwOIhwyJsQtQfJgMPj8QaTdOYpRCexzrDN2BnQ4HFLZb127jo7ifr9PTrhIrBrOrtZqNYrV7XbtA4iiSE64aHClOk0O3+PxSLGSyaR9AMYYPSJMCFQCjww7DxKsOcqOmZvJW62WsydZ+wLxjDSbTWdPMnZRvGTwmEATmbvjnsAGtvCxKvtDAOwfq+sNwP73JfgE0mFawI4HK88AAAAASUVORK5CYII="
                            alt="Instagram"></a>
                    <a href="#" class="social-icon" id="social-youtube"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEsUlEQVR4nO1Z6St8bxT3d1xcoexkydZYIoWZQsk2llCWNyQSCVHIvEC2JFnK8oI3imQvyxulbCG7N7JmZ+zn1zm503cs15gZ36vvb06dmuae5znn85zlOfdcPYZh4F9gPaEN0AFhdB5hBA8fRpcjjPAnzeg8wvzDHmFZFry9vSE+Ph5yc3OhsrISOjs7YWBgAKampmBhYQF2dnbg+PgYzs/PieVyOfxJ19fXimcHBwewvb1N66anp2FoaAg6OjqgoqICcnJySI9YLAZHR0fSrREQV1dXqK6uhtXVVXh8fASh6P7+Hvr7+wnYt4FkZmbCzc2N0oaHh4d0+t3d3VBTUwMFBQWQmpoKkZGRpMTLywscHBzA0tKS2NTUVGlPc3NzxTN7e3vw9PSkdbg+OTkZ8vLyyNNdXV0wOjoKW1tbSgeIv4uKilQHgm59fn6mxej26OhoUi5E3LMsCxKJhEIY6eXlBRISEr4GYmhoCHt7e7SooaEB9PX1BU9i5pUbGxvJrsXFxa+B+Pn5kfDR0ZHKSfa32MzMTFFAnJ2d+YEkJSWR4Pj4uOCGMx8wegNJKpXyAykuLibBtrY2wY1mPuDe3l6yLz8/nx9Ic3MzCfJVBz6enJwEX1/fHwNSVVVF9rW2tvIDGR4eJsHExES1FHFlEg/EyspK60DS0tJIBx4YL5DZ2VkSDAoKUhsIR2dnZxQC2iwaEomE9l5bW+MHsry8TIJYvTQBMjg4qPi9vr4OMTExWgHi7u5Oe56cnPADwX4JSSQSaQQEf4eHh1N7w9HY2Bj1a5oAsbOzo72enp7e3XFKQLANQcJWQ1MgyAYGBpCenk7NJJc/7e3tYGtrq9b+xsbGCh34+1Mgl5eXJIR9kTaAcGxhYQF1dXXUACJhB1xaWgpGRkbf1vHw8PChjUpAuCZN3QT9DAjH2FhiiGmSP6enp7QWw0wwIB4eHjAyMqKQww43Li7uWzqurq6+9sjFxQUJqdvt/nRosSxLHfCXyb6/v0+KnJycfmWy29jYKO6ot8+UgKCrkTCWNQUSFhYGKysriv+00b6IRCLaa3d3lx/I0tISCQYGBv7KC1EsFn/6TqIEZGZmhgTxMtMEyE+1KFKpVPHmygsEX/KRsrKy1AaiaR4wPJydnU06enp6+IHU1taSIA4X1FGkjTaE4WGsfEg4NuIFgp5AQoN+yhhNuP81YrAS8gIJDQ0lQbxPsHQKbTjzhrliFBwczA8E45obBX01EPvbbGJiAre3t2Qf3ie8QJCx3iNNTEz8qklK4+s4CIeEHz1/B8Tf318xdpmfn4fY2Fi1ulRtMMuyFBncvXR3d/dppOh9Vq+5toIrqZubm5Rs9fX1UFhYCCkpKRASEgI+Pj7g4uJC/ZmqeYUGWltb0xtfQEAAREREUAKXlJRAU1MTTRbxIuVadiTsenEK+u0hNuZLWVkZeQVPQlXCGOam7m+Z61xVJblcTvrLy8vfte0qA/mT8aTd3NwgKioKMjIyQCaTQUtLC/T19VFOzc3NwcbGBn0u4IzGzwh8nxVQHtfhetwH95PJZLQ/6kF936mcuu/szC+oZIzOI4zwJ8/oPMIIf9qMziOM8CfM/F898h9IbSjOPAp+ngAAAABJRU5ErkJggg=="
                            alt="YouTube"></a>
                </div>
            </div>
            <!-- SECONDO CONTENITORE (CENTRO) NIPOTE -->
            <div class="center-footer">
                <h4>MORE FROM PITCHFORK</h4>
                <ul>
                    <li><a href="video">VIDEO</a></li>
                    <li><a href="listsGuides">LISTS &amp; GUIDES</a></li>
                    <li><a href="podcast">PODCAST</a></li>
                    <li><a href="masthead">MASTHEAD</a></li>
                    <li><a href="rss">RSS</a></li>
                </ul>
            </div>
            <!-- TERZO CONTENITORE (DESTRA) NIPOTE -->
            <div class="right-footer">
                <h4>EVENTS</h4>
                <ul>
                    <li>PITCHFORK MUSIC FESTIVAL CHICAGO</li>
                    <li>PITCHFORK MUSIC FESTIVAL LONDON</li>
                    <li>PITCHFORK MUSIC FESTIVAL PARIS</li>
                    <li>PITCHFORK MUSIC FESTIVAL CDMX</li>
                    <li>ALL EVENTS</li>
                </ul>
            </div>
        </div>

        <!-- SEZIONE SECONDO FIGLIO DEL FOOTER: contenitore inferiore del footer -->
        <div id="footer-side">
            <!-- Sezione informazioni -->
            <div class="bottom-footer">
                <ul>
                    <li>USER AGREEMENT</li>
                    <li>PRIVACY POLICY</li>
                    <li>YOUR CALIFORNIA PRIVACY RIGHTS</li>
                    <li>NEWSLETTER</li>
                    <li>RSS FEEDS</li>
                    <li>CONTACT</li>
                    <li>ACCESSIBILITY HELP</li>
                    <li>ADVERTISING</li>
                </ul>
            </div>
            <!-- Parte disclaimer -->
            <div class="disclaimer-footer">
                <p>
                    &reg;
                    2025 Condé Nast. All rights reserved. Pitchfork may earn a portion of sales from products that
                    are
                    purchased through our site as part of our Affiliate Partnerships with retailers. The material on
                    this site may not be reproduced, distributed, transmitted, cached or otherwise used, except with
                    the
                    prior written permission of Condé Nast. Ad Choices
                </p>
            </div>
        </div>
    </footer>

    <section id="modal-view" class="hidden"></section>

</body>

</html>
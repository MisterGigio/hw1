<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <link rel="stylesheet" href="../navBar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=DM+Serif+Text:ital@0;1&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=PT+Serif+Caption:ital@0;1&family=Pinyon+Script&family=Roboto:ital,wght@0,100..900;1,100..900&family=Zain:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,300;1,400&display=swap"
        rel="stylesheet">
    <script src="../createNavBarCard.js" defer></script>
    <script src="../reviews/albums-card.js" defer></script>
    <script src="../hamburger.js" defer></script>
</head>

<body>
    <?php include "../../php/fileHeader.php" ?>
    <div id="container">
        <h1 class="title">ALBUMS</h1>
        <nav>
            <ul>
                <li><a href="albums.php">ALBUMS</a></li>
                <li><a href="bestNewAlbums.php">BEST NEW ALBUMS</a></li>
                <li><a href="bestNewReissues.php">BEST NEW REISSUES</a></li>
                <li><a href="eightAlbums.php">8.0+ REVIEWS</a></li>
                <li><a href="sundayReviews.php">SUNDAY REVIEWS</a></li>
                <li><a href="tracks.php">TRACKS</a></li>
            </ul>
        </nav>
    </div>
    <section id="img-container">
        <div class="img-full-container"></div>
    </section>

    <?php include "../../php/fileFooter.php" ?>
</body>


</html>
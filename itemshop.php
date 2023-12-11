<?php
$movie = "http://www.omdbapi.com/?apikey=f4196ce9";
if (isset($_GET["enter"])) {
    $type = $_GET["Type"];
    var_dump($type);
    $filmName = $_GET["text"];
    $movies = "$movie&type=$type&s=$filmName";
    // echo $type;
    echo "<br>";
    echo $movies;
    echo "<br>";
    $contents = file_get_contents($movies);
    $jsonMovies = json_decode($contents, true);
    echo "<br>";
    // var_dump($jsonMovies);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TOKKO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="item_shop.css">

    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
    <style>
        /* footer {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            margin-top: 25%;
        }

        .footer {
            display: flex;
            width: 81.5%;
            padding-right: 10px;
            padding-top: 10px;
            margin: 0 10%;
            padding-bottom: 10px;
            gap: 5rem;
            margin-top: 25px;
            background: url(backgroundmovies.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            padding-left: 25px;
            justify-content: space-between;
        }

        .right {
            display: flex;
        }

        .right i {
            font-size: 30px;
            color: white;
            padding-top: 20px;
        }

        .right p {
            font-size: 20px;
            padding-left: 5px;
            color: white;
            padding-top: 20px;
        }

        .left {
            display: flex;
        }

        .left .left-text {
            font-style: oblique;
            color: white;
            padding: 0 15px;
        } */
    </style>
</head>

<body>
    <header>
        <a href="home.php" class="logo">TOKKO</a>

        <ul class="navlist">
            <li><a href="movies.php">HOME</a></li>
            <li><a href="home.php">MOVIES</a></li>
            <li><a href="itemshop.php" class="active">ITEMSHOP</a></li>
        </ul>
        <form action="">
            <input type="text" name="text" placeholder="Search..." class="input" />
            <select name="Type">
                <option value="series">Series</option>
                <option value="movie">Movie</option>
            </select>
            <button type="submit" name="enter">Click Here</button>
        </form>

        <div class="bx bx-menu" id="menu-icon"></div>

        <label class="hamburger">
            <input type="checkbox" />
            <svg viewBox="0 0 30 30">
                <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                <path class="line" d="M7 16 27 16"></path>
            </svg>
            <div class="menu">
                <p class="home">
                    <a href="aboutus.php"><b>ABOUT US</b></a>
                </p>
                <p class="home">
                    <a href="https://github.com/isallls/webPrograming.git"><b>CONTACT</b></a>
                </p>
                <p class="responsive"><a href="home.php">HOME</a></p>
                <p class="responsive"><a href="movies.php">MOVIES</a></p>
                <p class="responsive"><a href="itemshop.php">ITEMSHOP</a></p>
                <p>
                    <button class="Btn">
                        <div class="sign">
                            <svg viewBox="0 0 512 512">
                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                            </svg>
                        </div>
                        <div class="text">
                            <a href="loginpage.html">Logout</a>
                        </div>
                    </button>
                </p>
            </div>
        </label>
    </header>


    <!-- View -->
    <section>
        <!-- start looping movies -->
        <div class="container">
            <?php if (isset($jsonMovies)) { ?>
                <?php if ($jsonMovies["Response"] == "True") { ?>
                    <?php foreach ($jsonMovies["Search"] as $row) { ?>
                        <?php if ($row["Poster"] != "N/A") {
                            $image = $row["Poster"];
                        } else {
                            $image = "http://placehold.it/300x440";
                        } ?>
                        <div class="movie">
                            <img src="<?= $image ?>" alt="" /><!-- width="250px" height="300px" -->
                            <p>
                                <?= $row["Title"] ?>
                            </p>
                            <button>Click Here</button>
                        </div>
                    <?php    }  ?>
                <?php  } ?>
            <?php } ?>

        </div>
        <!-- end looping movies -->
        <!-- condition if movie/series not found -->
        <script>
            <?php if (isset($jsonMovies["Response"])) { ?>
                alert(" <?= $jsonMovies["Error"] ?> ")
            <?php } ?>
        </script>
        <!-- end of condition if movie/series not found -->
    </section>
                
    <!-- FOOTER -->
    <footer>
        <div class="footer">
            <div class="right">
                <i class="fa-brands fa-github"></i>
                <p>&#169; - Made by Mahasiswa Gabut</p>
            </div>
            <div class="left">
                <div class="left-text">
                    <p>Blog</p>
                    <p>About</p>
                    <p>Shop</p>
                    <p>Contact GitHub</p>
                    <p>Pricing</p>
                </div>
                <div class="left-text">
                    <P>API</P>
                    <P>Training</P>
                    <P>Status</P>
                    <P>Security</P>
                </div>
                <div class="left-text">
                    <p>Terms</p>
                    <p>Privacy</p>
                    <p>Docs</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<?php
include "./backend/database.php";


$sql1 = "SELECT * FROM `blog` ORDER BY `blog_id` DESC";

$result = $conn->query($sql1);


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./components/style/nav-1.css">
    <link rel="stylesheet" href="./components/style/nav-2.css">
    <link rel="stylesheet" href="./components/style/footer.css">
    <link rel="stylesheet" href="./components/style/header.css">
    <link rel="stylesheet" href="./components/style/blog.css">
    <link rel="stylesheet" href="./components/style/blog-card.css">

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav>
            <?php
            include "./components/nav-1.php";
            ?>
        </nav>
        <nav>
            <?php
            include "./components/nav-2.php";
            ?>
        </nav>
        <section>
            <div class="header">
                <img src="images/footer-background.jpg" alt="">
                <div class="header-text">
                    <div>
                        <h1>Blog</h1>
                        <div class="header-url">
                            <ul>
                                <li>
                                    <a href="">Home</a>
                                </li>
                                <li>/</li>
                                <li>
                                    <a href="">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-content">
                <div class="box">
                    <div class="blog-list">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $blog_id = $row["blog_id"];
                                $blog_title = $row["blog_title"];
                                $description = $row["description"];
                                $writer = $row["writer"];
                                $date = $row["date"];
                                $image_url = $row["image_url"];
                                $writer_image_url = $row["writer_image_url"];
                                
                                echo '
                                
                                <a href="blog-view.php?id='.$blog_id.'" class="blog-card">
                                    <div class="blog-card-header">
                                        <img src="'.$image_url.'" class="blog-card-header-image" alt="">
                                    </div>
                                    <div class="blog-card-details">
                                        <h2>'.$blog_title.'</h2>
                                        <p>
                                            '.$description.'
                                        </p>
                                        <div class="blog-writer">
                                            <div class="blog-writer-content-1">
                                                <img src="'.$writer_image_url.'" alt="">
                                                <h5>'.$writer.'</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                ';
                            }
                        }
                        ?>

                        <!-- <a href="" class="blog-card">
                            <div class="blog-card-header">
                                <img src="images/footer-background.jpg" class="blog-card-header-image" alt="">
                            </div>
                            <div class="blog-card-details">
                                <h2>Best Interior Oppertunity</h2>
                                <p>Real estate festival is one of the famous feval for explain to you how all this
                                    mistaolt deand praising pain wasnad I will give complete</p>
                                <div class="blog-writer">
                                    <div class="blog-writer-content-1">
                                        <img src="images/footer-background.jpg" alt="">
                                        <h5>Tharindu Kulasinghe</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="blog-card">
                            <div class="blog-card-header">
                                <img src="images/footer-background.jpg" class="blog-card-header-image" alt="">
                            </div>
                            <div class="blog-card-details">
                                <h2>Best Interior Oppertunity</h2>
                                <p>Real estate festival is one of the famous feval for explain to you how all this
                                    mistaolt deand praising pain wasnad I will give complete</p>
                                <div class="blog-writer">
                                    <div class="blog-writer-content-1">
                                        <img src="images/footer-background.jpg" alt="">
                                        <h5>Tharindu Kulasinghe</h5>
                                    </div>
                                </div>
                            </div>
                        </a> -->
                    </div>
                </div>
            </div>

        </section>
        <footer>
            <?php
            include "./components/footer.php"
            ?>
        </footer>
    </div>

    <script src="./components/javascript/nav.js"></script>
</body>

</html>
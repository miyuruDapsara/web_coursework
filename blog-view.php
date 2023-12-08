<!DOCTYPE html>
<html lang="en">

<?php
include "./backend/database.php";

$blog_id = "";

if (isset($_GET['id'])) {
    if($_GET['id'] !== ""){
        $blog_id = $_GET['id'];
    }else{
        header("Location: blog.php");
    }
    
} else {
    header("Location: blog.php");
}

$sql1 = "SELECT * FROM `blog` WHERE blog_id = $blog_id";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $blog_id = $row["blog_id"];
        $blog_title = $row["blog_title"];
        $description = $row["description"];
        $writer = $row["writer"];
        $date = $row["date"];
        $image_url = $row["image_url"];
        $writer_image_url = $row["writer_image_url"];
    }
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./components/style/nav-1.css">
    <link rel="stylesheet" href="./components/style/nav-2.css">
    <link rel="stylesheet" href="./components/style/footer.css">
    <link rel="stylesheet" href="./components/style/header.css">
    <link rel="stylesheet" href="./components/style/blog-card.css">
    <link rel="stylesheet" href="./components/style/blog-view.css">

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
            <!-- <div class="header">
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
            </div> -->
            <div class="blog-content">
                <div class="box">
                    <div class="blog-view">
                        <div class="blog-view-content-1">
                            <div class="blog-view-header">
                                <img src="<?php
                                            if (isset($image_url)) {
                                                echo $image_url;
                                            }
                                            ?>" alt="">
                            </div>
                            <h1>
                                <?php
                                if (isset($blog_title)) {
                                    echo $blog_title;
                                }
                                ?>
                            </h1>
                            <div class="blog-view-writer">
                                <img src="<?php
                                            if (isset($writer_image_url)) {
                                                echo $writer_image_url;
                                            }
                                            ?>" alt="">
                                <div>
                                    <p>By <span><?php
                                                if (isset($writer)) {
                                                    echo $writer;
                                                }
                                                ?>,</span>
                                        <?php
                                        if (isset($date)) {
                                            echo $date;
                                        }
                                        ?></p>
                                </div>
                            </div>
                            <p>
                                <?php
                                if (isset($description)) {
                                    echo $description;
                                }
                                ?>
                            </p>
                        </div>
                        <div class="blog-view-content-2">
                            <?php

                            $sql2 = "SELECT * FROM `blog` ORDER BY `blog_id` DESC LIMIT 6";
                            $result2 = $conn->query($sql2);
                            if ($result2->num_rows > 0) {
                                while ($row = $result2->fetch_assoc()) {
                                    $blog_id = $row["blog_id"];
                                    $blog_title = $row["blog_title"];
                                    $description = $row["description"];
                                    $writer = $row["writer"];
                                    $date = $row["date"];
                                    $image_url = $row["image_url"];
                                    $writer_image_url = $row["writer_image_url"];

                                    echo '
                                
                                <a href="blog-view.php?id=' . $blog_id . '" class="blog-card">
                                    <div class="blog-card-header">
                                        <img src="' . $image_url . '" class="blog-card-header-image" alt="">
                                    </div>
                                    <div class="blog-card-details">
                                        <h2>' . $blog_title . '</h2>
                                        <p>
                                            ' . $description . '
                                        </p>
                                        <div class="blog-writer">
                                            <div class="blog-writer-content-1">
                                                <img src="' . $writer_image_url . '" alt="">
                                                <h5>' . $writer . '</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                ';
                                }
                            }
                            ?>

                        </div>
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
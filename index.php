<!DOCTYPE html>
<html lang="en">

<?php
include "./backend/database.php";


$sql1 = "SELECT * FROM `properties` ORDER BY property_id DESC LIMIT 6";
$result = $conn->query($sql1);


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./components/style/nav-1.css">
    <link rel="stylesheet" href="./components/style/nav-2.css">
    <link rel="stylesheet" href="./components/style/footer.css">
    <link rel="stylesheet" href="./components/style/home.css">
    <link rel="stylesheet" href="./components/style/property-card.css">

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
                <div class="header-background">
                    <img src="images/footer-background.jpg" alt="">
                </div>
                <div class="box">
                    <div class="header-content">
                        <h1>Find Your Dream House</h1>
                        <p>
                            Dream homes made real. Discover, invest, and thrive with our dedicated team and tailored solutions </p>
                        <div class="header-input">
                            <input type="text" placeholder="Search for Homes. . . ." id="search-bar">
                            <button id="search-button">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-property">
                <div class="box">
                    <div class="property-header">
                        <h1>Featured Properties</h1>
                        <p>Handpicked Exclusive Properties By Our Team.</p>
                    </div>
                    <div class="property-list">

                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $propertyId = $row["property_id"];
                                $property_title = $row["property_title"];
                                $property_address = $row["property_address"];
                                $description = $row["description"];
                                $price = $row["price"];
                                $property_size = $row["property_size"];
                                $bedrooms = $row["bedrooms"];
                                $bathrooms = $row["bathrooms"];
                                $garage = $row["garage"];
                                $garage_size = $row["garage_size"];
                                $year_built = $row["year_built"];
                                $property_type = $row["property_type"];
                                $property_status = $row["property_status"];
                                $location_url = $row["location_url"];


                                // sql 2
                                // $sql2 = "SELECT * FROM `properties_features` WHERE property_id = $propertyId";
                                // $result2 = $conn->query($sql2);
                                // if ($result2->num_rows > 0) {
                                //     while ($row2 = $result2->fetch_assoc()) {
                                //         // echo
                                //     }
                                // }

                                $property_image = "";

                                $sql3 = "SELECT * FROM `properties_image` WHERE property_id = $propertyId";
                                $result3 = $conn->query($sql3);
                                if ($result3->num_rows > 0) {
                                    $row3 = $result3->fetch_assoc();
                                    $property_image = $row3["image_url"];
                                }
                                // echo $property_title;
                                // break;
                                echo '
                                    <a href="property.php?id=' . $propertyId . '" class="property-card">
                                        <div class="property-card-header">
                                            <img src="' . $property_image . '" alt="">
                                            <div class="property-card-type">
                                                <p>
                                                    ' . $property_status . '
                                                </p>
                                            </div>
                                        </div>
                                        <div class="property-details-line">
                                            <div class="property-details-line-content">
                                                <div>
                                                    <p><i class="ri-home-4-line"></i> <span>' . $property_size . '</span></p>
                                                    <span> Acres</span>
                                                </div>
                                            </div>
                                            <div class="property-details-line-content property-details-line-content-2">
                                                <div>
                                                    <p><i class="ri-hotel-bed-line"></i> <span>' . $bedrooms . '</span></p>
                                                    <span>Bedrooms</span>
                                                </div>
                                            </div>
                                            <div class="property-details-line-content property-details-line-content-3">
                                                <div>
                                                    <p><i class="ri-drop-line"></i> <span>' . $bathrooms . '</span></p>
                                                    <span>Bathrooms</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-details">
                                            <h1>
                                            ' . $property_title . '
                                            </h1>
                                            <p><i class="ri-map-pin-fill"></i> ' . $property_address . '</p>
                                            <p class="property-price">LKR.' . $price . '</p>
                                        </div>
                        </a>';
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>


                        <!-- <a href="" class="property-card">
                            <div class="property-card-header">
                                <img src="images/footer-background.jpg" alt="">
                                <div class="property-card-type">
                                    <p>
                                        For Sell
                                    </p>
                                </div>
                            </div>
                            <div class="property-details-line">
                                <div class="property-details-line-content">
                                    <div>
                                        <p><i class="ri-home-4-line"></i> <span>20,000</span></p>
                                        <span> Acres</span>
                                    </div>
                                </div>
                                <div class="property-details-line-content property-details-line-content-2">
                                    <div>
                                        <p><i class="ri-hotel-bed-line"></i> <span>3</span></p>
                                        <span>Bedrooms</span>
                                    </div>
                                </div>
                                <div class="property-details-line-content property-details-line-content-3">
                                    <div>
                                        <p><i class="ri-drop-line"></i> <span>3</span></p>
                                        <span>Bathrooms</span>
                                    </div>
                                </div>
                            </div>
                            <div class="property-details">
                                <h1>
                                    Family Home For Sale
                                </h1>
                                <p><i class="ri-map-pin-fill"></i> west flaminggo road, las vegas</p>
                                <p class="property-price">$ 256,596</p>
                            </div>
                        </a>
                        <a href="" class="property-card">
                            <div class="property-card-header">
                                <img src="images/footer-background.jpg" alt="">
                                <div class="property-card-type">
                                    <p>
                                        For Sell
                                    </p>
                                </div>
                            </div>
                            <div class="property-details-line">
                                <div class="property-details-line-content">
                                    <div>
                                        <p><i class="ri-home-4-line"></i> <span>20,000</span></p>
                                        <span> Acres</span>
                                    </div>
                                </div>
                                <div class="property-details-line-content property-details-line-content-2">
                                    <div>
                                        <p><i class="ri-hotel-bed-line"></i> <span>3</span></p>
                                        <span>Bedrooms</span>
                                    </div>
                                </div>
                                <div class="property-details-line-content property-details-line-content-3">
                                    <div>
                                        <p><i class="ri-drop-line"></i> <span>3</span></p>
                                        <span>Bathrooms</span>
                                    </div>
                                </div>
                            </div>
                            <div class="property-details">
                                <h1>
                                    Family Home For Sale
                                </h1>
                                <p><i class="ri-map-pin-fill"></i> west flaminggo road, las vegas</p>
                                <p class="property-price">$ 256,596</p>
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
    <script src="./components/javascript/index.js"></script>
</body>

</html>
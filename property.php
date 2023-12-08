<!DOCTYPE html>
<html lang="en">

<?php
include "./backend/database.php";


$propertyId = "";

if (isset($_GET['id'])) {
    if($_GET['id'] !== ""){
        $propertyId = $_GET['id'];
    }else{
        header("Location: properties.php");
    }
    
} else {
    header("Location: properties.php");
}

$sql1 = "SELECT * FROM `properties` WHERE property_id = $propertyId";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // $propertyId = $row["property_id"];
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
    }
}

$sql2 = "SELECT * FROM `properties_features` WHERE property_id = $propertyId";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    while ($row2 = $result2->fetch_assoc()) {
        $air_conditioning = $row2["air_conditioning"];
        $swiming_pool = $row2["swiming_pool"];
        $central_heating = $row2["central_heating"];
        $spa = $row2["spa"];
        $pets_allow = $row2["pets_allow"];
        $car_parking = $row2["car_parking"];
        $gym = $row2["gym"];
        $alarm = $row2["alarm"];
        $window_covering = $row2["window_covering"];
        $free_wifi = $row2["free_wifi"];
    }
}

$sql3 = "SELECT * FROM `properties_image` WHERE property_id = $propertyId";

$sql4 = "SELECT * FROM `property_floor_plan` WHERE property_id = $propertyId";



?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./components/style/nav-1.css">
    <link rel="stylesheet" href="./components/style/nav-2.css">
    <link rel="stylesheet" href="./components/style/footer.css">
    <link rel="stylesheet" href="./components/style/property.css">
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
            <div class="property">
                <div class="property-header">
                    <div class="property-header-image">
                        <?php
                        $property_image = "";
                        $result3 = $conn->query($sql3);
                        if ($result3->num_rows > 0) {
                            while ($row3 = $result3->fetch_assoc()) {
                                $property_image = $row3["image_url"];

                                echo '
                                        <img src="' . $property_image . '" alt="">
                                        ';
                            }
                        }
                        ?>
                        <!-- <img src="images/footer-background.jpg" alt=""> -->
                    </div>
                    <div class="box">
                        <div class="property-arrow-content">
                            <div class="property-arrow-content-1">
                                <div class="property-arrow-left">
                                    <i class="ri-arrow-left-s-line"></i>
                                </div>
                            </div>
                            <div class="property-arrow-content-2">
                                <div class="property-arrow-right">
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-contnet">
                    <div class="box">
                        <div class="property-title">
                            <div class="property-title-content-1">
                                <h1>
                                <?php
                                    if (isset($property_title)) {
                                        echo $property_title;
                                    }
                                    ?>
                                </h1>
                                <span>
                                <?php
                                    if (isset($property_address)) {
                                        echo $property_address;
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class="property-title-content-2">
                                <h1>LKR.
                                <?php
                                    if (isset($price)) {
                                        echo $price;
                                    }
                                    ?>

                                </h1>
                            </div>
                        </div>
                        <div class="property-content-1">
                            <div class="property-description">
                                <h2>Description</h2>
                                <p>
                                    <?php
                                    if (isset($description)) {
                                        echo $description;
                                    }
                                    ?>
                                </p>
                                <h2 style="margin-top: 30px;">Floor Plan</h2>
                                <div class="property-floor">
                                    <?php
                                    $result4 = $conn->query($sql4);
                                    if ($result4->num_rows > 0) {
                                        while ($row4 = $result4->fetch_assoc()) {
                                            $property_floor_type = $row4["property_floor_type"];
                                            $image_url = $row4["image_url"];
                                            $area = $row4["area"];

                                            if ($property_floor_type == "First Floor") {
                                                echo '
                                                <div class="property-floor-content active">
                                                    <h4>First Floor <span>'.$area.'</span></h4>
                                                    <i class="ri-arrow-down-s-line property-floor-arrow"></i>
                                                    <div class="property-floor-content-details">
                                                        <img src="'.$image_url.'" alt="">
                                                    </div>
                                                </div>';
                                            }

                                            if ($property_floor_type == "Second Floor") {
                                                echo '
                                                <div class="property-floor-content">
                                                    <h4>Second Floor <span>'.$area.'</span></h4>
                                                    <i class="ri-arrow-down-s-line property-floor-arrow"></i>
                                                    <div class="property-floor-content-details">
                                                        <img src="'.$image_url.'" alt="">
                                                    </div>
                                                </div>
                                                ';
                                            }

                                            if ($property_floor_type == "Garage") {
                                                echo '
                                                <div class="property-floor-content ">
                                                    <h4>Garage <span>'.$area.'</span></h4>
                                                    <i class="ri-arrow-down-s-line property-floor-arrow"></i>
                                                    <div class="property-floor-content-details">
                                                        <img src="'.$image_url.'" alt="">
                                                    </div>
                                                </div>
                                                ';
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                                <h2 style="margin-top: 35px;">Location</h2>
                                <div class="property-location">
                                    <iframe src="
                                    <?php
                                    if (isset($location_url)) {
                                        echo $location_url;
                                    }
                                    ?>
                                    " style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="property-info">
                                <h2>Property Details</h2>
                                <div class="property-info-content">
                                    <div class="property-info-content-1">
                                        <ul>
                                            <li>
                                                <h3>Property ID:</h3>
                                                <span>R<?php
                                                        if (isset($propertyId)) {
                                                            echo $propertyId;
                                                        }
                                                        ?></span>
                                            </li>
                                            <li>
                                                <h3>Price:</h3>
                                                <span>LKR.<?php
                                                            if (isset($price)) {
                                                                echo $price;
                                                            }
                                                            ?></span>
                                            </li>
                                            <li>
                                                <h3>Property Size:</h3>
                                                <span>
                                                    <?php
                                                    if (isset($property_size)) {
                                                        echo $property_size;
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <h3>Bedrooms:</h3>
                                                <span>
                                                    <?php
                                                    if (isset($bedrooms)) {
                                                        echo $bedrooms;
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <h3>Bathrooms:</h3>
                                                <span>
                                                    <?php
                                                    if (isset($bathrooms)) {
                                                        echo $bathrooms;
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-info-content-2">
                                        <ul>
                                            <li>
                                                <h3>Garage:</h3>
                                                <span>
                                                    <?php
                                                    if (isset($garage)) {
                                                        echo $garage;
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <h3>Garage Size:</h3>
                                                <span>
                                                    <?php
                                                    if (isset($garage_size)) {
                                                        echo $garage_size;
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <h3>Year Built:</h3>
                                                <span>
                                                    <?php
                                                    if (isset($year_built)) {
                                                        echo $year_built;
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <h3>Property Type:</h3>
                                                <span>
                                                    <?php
                                                    if (isset($property_type)) {
                                                        echo $property_type;
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <h3>Property Status:</h3>
                                                <span>
                                                    <?php
                                                    if (isset($property_status)) {
                                                        echo $property_status;
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h2 style="margin-top: 30px;">Features</h2>
                                <div class="property-info-content">
                                    <div class="property-info-content-1">
                                        <ul>
                                            <li>
                                                <?php
                                                if (isset($air_conditioning)) {
                                                    if ($air_conditioning == 1) {
                                                        echo "<h3><i class='ri-check-fill'></i></h3>";
                                                    } else {
                                                        echo "<h3><i class='ri-close-fill'></i></h3>";
                                                    }
                                                }
                                                ?>

                                                <span>Air Conditioning</span>
                                            </li>
                                            <li>
                                                <?php
                                                if (isset($swiming_pool)) {
                                                    if ($swiming_pool == 1) {
                                                        echo "<h3><i class='ri-check-fill'></i></h3>";
                                                    } else {
                                                        echo "<h3><i class='ri-close-fill'></i></h3>";
                                                    }
                                                }
                                                ?>
                                                <span>Swiming Pool</span>
                                            </li>
                                            <li>
                                                <?php
                                                if (isset($air_conditioning)) {
                                                    if ($air_conditioning == 1) {
                                                        echo "<h3><i class='ri-check-fill'></i></h3>";
                                                    } else {
                                                        echo "<h3><i class='ri-close-fill'></i></h3>";
                                                    }
                                                }
                                                ?>
                                                <span>Central Heating</span>
                                            </li>
                                            <li>
                                                <?php
                                                if (isset($central_heating)) {
                                                    if ($central_heating == 1) {
                                                        echo "<h3><i class='ri-check-fill'></i></h3>";
                                                    } else {
                                                        echo "<h3><i class='ri-close-fill'></i></h3>";
                                                    }
                                                }
                                                ?>
                                                <span>Spa & Massage</span>
                                            </li>
                                            <li>
                                                <?php
                                                if (isset($spa)) {
                                                    if ($spa == 1) {
                                                        echo "<h3><i class='ri-check-fill'></i></h3>";
                                                    } else {
                                                        echo "<h3><i class='ri-close-fill'></i></h3>";
                                                    }
                                                }
                                                ?>
                                                <span>Pets Allow</span>
                                            </li>
                                            <li>
                                                <?php
                                                if (isset($pets_allow)) {
                                                    if ($pets_allow == 1) {
                                                        echo "<h3><i class='ri-check-fill'></i></h3>";
                                                    } else {
                                                        echo "<h3><i class='ri-close-fill'></i></h3>";
                                                    }
                                                }
                                                ?>
                                                <span>Car Parking</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-info-content-2">
                                        <ul>
                                            <!-- <li>
                                                <h3><i class="ri-check-fill"></i></h3>
                                                <span>Air Conditioning</span>
                                            </li> -->
                                            <li>
                                                <?php
                                                if (isset($car_parking)) {
                                                    if ($car_parking == 1) {
                                                        echo "<h3><i class='ri-check-fill'></i></h3>";
                                                    } else {
                                                        echo "<h3><i class='ri-close-fill'></i></h3>";
                                                    }
                                                }
                                                ?>
                                                <span>Gym</span>
                                            </li>
                                            <li>
                                                <?php
                                                if (isset($gym)) {
                                                    if ($gym == 1) {
                                                        echo "<h3><i class='ri-check-fill'></i></h3>";
                                                    } else {
                                                        echo "<h3><i class='ri-close-fill'></i></h3>";
                                                    }
                                                }
                                                ?>
                                                <span>Alarm</span>
                                            </li>
                                            <li>
                                                <?php
                                                if (isset($window_covering)) {
                                                    if ($window_covering == 1) {
                                                        echo "<h3><i class='ri-check-fill'></i></h3>";
                                                    } else {
                                                        echo "<h3><i class='ri-close-fill'></i></h3>";
                                                    }
                                                }
                                                ?>
                                                <span>Window Covering</span>
                                            </li>
                                            <li>
                                                <?php
                                                if (isset($free_wifi)) {
                                                    if ($free_wifi == 1) {
                                                        echo "<h3><i class='ri-check-fill'></i></h3>";
                                                    } else {
                                                        echo "<h3><i class='ri-close-fill'></i></h3>";
                                                    }
                                                }
                                                ?>
                                                <span>Free WiFi</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
    <script src="./components/javascript/property.js"></script>
</body>

</html>
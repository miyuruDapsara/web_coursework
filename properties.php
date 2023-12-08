<!DOCTYPE html>
<html lang="en">

<?php
include "./backend/database.php";

$sql1 = "SELECT * FROM `properties` WHERE 1 = 1";
$conditions = array();

foreach ($_GET as $key => $value) {
    if (!empty($value)) {
        switch ($key) {
            case 'keyword':
                $conditions[] = "property_title LIKE '%" . $value . "%'";
                break;
            case 'property_status':
                $conditions[] = "property_status LIKE '%" . $value . "%'";
                break;
            case 'property_type':
                $conditions[] = "property_type LIKE '%" . $value . "%'";
                break;
            case 'area':
                $conditions[] = "property_size LIKE '%" . $value . "%'";
                break;
            case 'location':
                $conditions[] = "property_address LIKE '%" . $value . "%'";
                break;
            case 'bedrooms':
                $conditions[] = "bedrooms = '" . $value . "'";
                break;
            case 'bathrooms':
                $conditions[] = "bathrooms = '" . $value . "'";
                break;
        }
    }
}

if (!empty($conditions)) {
    $sql1 .= " AND " . implode(" AND ", $conditions);
}

$sql1 .= " ORDER BY property_id DESC";

$result = $conn->query($sql1);


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./components/style/nav-1.css">
    <link rel="stylesheet" href="./components/style/nav-2.css">
    <link rel="stylesheet" href="./components/style/footer.css">
    <link rel="stylesheet" href="./components/style/properties.css">
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
            <div class="properties">
                <div class="properties-header">
                    <div class="properties-header-image">
                        <img src="images/footer-background.jpg" alt="">
                    </div>
                    <div class="box">
                        <div class="properties-search">
                            <div class="properties-search-content-1">
                                <div class="properties-search-content">
                                    <select id="property-status">
                                        <option value="">Property Status</option>
                                        <option value="For_sell">For Sale</option>
                                        <option value="For_rent">For Rent</option>
                                    </select>
                                </div>
                                <div class="properties-search-content">
                                    <select id="property-type">
                                        <option value="">Property Type</option>
                                        <option value="Residential">Residential</option>
                                        <option value="Commercial">Commercial</option>
                                        <option value="Land">Land</option>
                                        <option value="Luxury">Luxury</option>
                                    </select>
                                </div>
                            </div>
                            <div class="properties-search-content-2">
                                <div class="properties-search-content">
                                    <select id="area">
                                        <option value="">Area</option>
                                        <option value="1500">1500</option>
                                        <option value="1200">1200</option>
                                        <option value="900">900</option>
                                        <option value="600">600</option>
                                        <option value="300">300</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="properties-search-content">
                                    <select id="locations">
                                        <option value="">Locations</option>
                                        <option value="colombo">Colombo</option>
                                        <option value="kandy">Kandy</option>
                                        <option value="galle">Galle</option>
                                        <option value="jaffna">Jaffna</option>
                                        <option value="matara">Matara</option>
                                        <option value="negombo">Negombo</option>
                                        <option value="kurunegala">Kurunegala</option>
                                        <option value="anuradhapura">Anuradhapura</option>
                                        <option value="polonnaruwa">Polonnaruwa</option>
                                        <option value="trincomalee">Trincomalee</option>
                                        <option value="batticaloa">Batticaloa</option>
                                        <option value="ratnapura">Ratnapura</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="properties-search" style="margin-top: 20px;">
                            <div class="properties-search-content-1">
                                <div class="properties-search-content">
                                    <select id="bedrooms">
                                        <option value="">Bedrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                                <div class="properties-search-content">
                                    <select id="bathrooms">
                                        <option value="">Bathrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="properties-search-content-2">
                                <button id="searchButton">Search <i class="ri-search-line"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="properties-contnet">
                    <div class="box">
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
                            </a> -->

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
    <script src="./components/javascript/properties.js"></script>
</body>

</html>
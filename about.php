<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./components/style/nav-1.css">
    <link rel="stylesheet" href="./components/style/nav-2.css">
    <link rel="stylesheet" href="./components/style/footer.css">
    <link rel="stylesheet" href="./components/style/header.css">
    <link rel="stylesheet" href="./components//style/about.css">

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
                        <h1>About</h1>
                        <div class="header-url">
                            <ul>
                                <li>
                                    <a href="">Home</a>
                                </li>
                                <li>/</li>
                                <li>
                                    <a href="">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="story">
                <div class="box">
                    <h1>Our Story</h1>
                    <p>
                        Welcome to [Your Real Estate Agency], where passion
                        for properties meets exceptional service. Founded in [Year],
                        we've been dedicated to transforming the real estate experience
                        for our clients across [Location/City/Region]. Our journey began
                        with a simple yet profound mission: to redefine the standards of
                        professionalism and integrity in the real estate industry.
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="mission-and-vision">
                    <div class="mission">
                        <h1>Our Mission</h1>
                        <p>
                            At [Your Real Estate Agency], our mission
                            is to empower individuals and families to find their dream homes,
                            investment properties, or rental spaces while delivering unmatched
                            customer service. We believe in building lasting relationships based
                            on trust, transparency, and personalized attention to our clients' unique needs.
                        </p>
                    </div>
                    <div class="vision">
                        <h1>Our Vision</h1>
                        <p>
                            At [Your Real Estate Agency], our vision extends beyond buying,
                            selling, or renting properties. We envision a world where every individual's aspirations of
                            finding their perfect home or investment opportunity are not just realized but celebrated.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="get-in-touch">
                    <h1>Get in Touch</h1>
                    <p>
                        We are eager to assist you in your real estate endeavors. 
                        Contact us today to discuss how we can help you achieve your property goals. 
                        Whether buying, selling, or renting, [Your Real Estate Agency] is here to guide 
                        you every step of the way.
<br><br>
                        <span>
                            Thank you for considering [Your Real Estate Agency] as your trusted partner in real estate
                        </span>
                    </p>
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
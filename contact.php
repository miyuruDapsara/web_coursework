<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./components/style/nav-1.css">
    <link rel="stylesheet" href="./components/style/nav-2.css">
    <link rel="stylesheet" href="./components/style/footer.css">
    <link rel="stylesheet" href="./components/style/contact.css">
    <link rel="stylesheet" href="./components/style/header.css">

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
                        <h1>Contact</h1>
                        <div class="header-url">
                            <ul>
                                <li>
                                    <a href="">Home</a>
                                </li>
                                <li>/</li>
                                <li>
                                    <a href="">Contact</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="contact">
                    <form action="./backend/contact.php" method="post" class="contact-content-1">
                        <h1>Contact Us</h1>
                        <div class="input-group-1">
                            <div class="input-group-content-1">
                                <h2>Your name</h2>
                                <input type="text" name="name">
                            </div>
                            <div class="input-group-content-2">
                                <h2>Your email</h2>
                                <input type="text" name="email">
                            </div>
                        </div>
                        <div class="input-group-2">
                            <h2>Subject</h2>
                            <input type="text" name="subject">
                        </div>
                        <div class="input-group-2">
                            <h2>Your message</h2>
                            <textarea name="message"></textarea>
                        </div>
                        <div class="contact-content-1-button">
                            <button type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                    <div class="contact-content-2">
                        <h1>Open Hours</h1>
                        <div class="open-hours">
                            <div class="open-hours-content-1">
                                <ul>
                                    <li>Monday - Friday</li>
                                    <li>Saturday</li>
                                    <li>Sunday</li>
                                </ul>
                            </div>
                            <div class="open-hours-content-2">
                                <ul>
                                    <li>09 AM - 19 PM</li>
                                    <li>09 AM - 14 PM</li>
                                    <li>Closed</li>
                                </ul>
                            </div>
                        </div>
                        <h1 style="margin-top: 20px;">Info Location</h1>
                        <div class="location-info">
                            <!-- <ul>
                                <li>
                                    <p><span>2/14 Majestic City 10 <br> Station Road, 04 <br> Colombo</span></p>
                                </li>
                            </ul> -->
                            <div class="location-content">
                                <div class="location-icon">
                                    <i class="ri-home-4-fill"></i>
                                </div>
                                <p>
                                    2/14 Majestic City 10 <br> Station Road, 04 <br> Colombo
                                </p>
                            </div>
                            <div class="location-content">
                                <div class="location-icon">
                                    <i class="ri-phone-fill"></i>
                                </div>
                                <p>
                                    011 2200 022
                                </p>
                            </div>
                            <div class="location-content">
                                <div class="location-icon">
                                    <i class="ri-mail-fill"></i>
                                </div>
                                <p>
                                    example@gmail.com
                                </p>
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
</body>

</html>
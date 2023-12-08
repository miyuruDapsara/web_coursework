-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 02:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(50) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `writer` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `writer_image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `description`, `writer`, `date`, `image_url`, `writer_image_url`) VALUES
(1, 'Unlocking Real Estate Insights: Your Ultimate Guide to Property Investment and Market Trends', 'Welcome to our comprehensive real estate blog, your ultimate resource for navigating the ever-evolving world of property investment, market trends, and homeownership. Whether you\'re a seasoned investor or a first-time buyer, our blog is dedicated to providing valuable insights, expert advice, and the latest industry updates.\r\n<br><br>\r\nExplore a diverse range of topics tailored to your real estate needs. Discover investment strategies, market analyses, home buying tips, effective selling techniques, and the impact of technology on the industry. Gain insights into legal considerations, tax implications, and regulations affecting real estate transactions.\r\n<br><br>\r\nStay informed with in-depth articles, industry expert interviews, and community spotlights that highlight different neighborhoods and their unique features, catering to both homebuyers and investors.\r\n<br><br>\r\nOur commitment is to empower you with the knowledge and resources necessary to make informed decisions in the dynamic real estate landscape. With regular updates and engaging content, our blog aims to be your trusted companion throughout your real estate journey.\r\n<br><br>\r\nJoin us as we delve into the world of real estate, providing you with the tools and insights to unlock its vast potential for your investment and homeownership aspirations.', 'Miyuru', 'Descember 08, 2023', './images/blog/b1.jpg', './images/profile/p1.jpg'),
(2, 'Insights & Trends: Your Definitive Real Estate Resource for Investing and Ownership', 'Welcome to our comprehensive real estate blog, designed to be your ultimate guide in navigating the intricate realm of property investment, market fluctuations, and the nuances of homeownership. Whether you\'re a novice exploring the market or an experienced investor, our blog strives to furnish you with invaluable insights, expert opinions, and up-to-date industry trends.\r\n<br><br>\r\nDive into an array of topics tailored to cater to your real estate endeavors. Explore diverse investment strategies, astute market analyses, and essential tips on buying, selling, and maximizing property value. Stay ahead with technology updates revolutionizing property transactions and gain an understanding of legalities, taxes, and regulations that impact real estate dealings.\r\n<br><br>\r\nEngage with comprehensive articles, illuminating expert interviews, and spotlights on communities, offering an in-depth look at neighborhood features and lifestyle amenities, empowering both potential homebuyers and seasoned investors.\r\n<br><br>\r\nOur mission is to equip you with the knowledge and tools to navigate the dynamic real estate landscape confidently. With our blog, we aim to be your trusted companion, guiding you toward informed decisions and unlocking the vast potential within the real estate domain.\r\n<br><br>\r\nJoin us on this journey as we uncover the insights and trends shaping the realm of real estate investment and ownership.', 'Miyuru', 'Descember 09, 2023', './images/blog/b2.jpg', './images/profile/p1.jpg'),
(3, 'Real Estate Explorers: Your Compass to Investment Success and Property Insights', 'Welcome to our dynamic real estate blog, your compass in the diverse world of property investment, market dynamics, and homeownership. Tailored for both seasoned investors and first-time buyers, our blog is a treasure trove of insights, offering expert advice, and the latest industry updates.\n<br><br>\nEmbark on a journey through an array of topics that cater to your real estate interests. Uncover diverse investment strategies, delve into meticulous market analyses, and uncover practical tips for buying, selling, and optimizing property value. Stay abreast of technological advancements shaping the industry and gain insights into the legal intricacies, tax implications, and regulatory landscapes influencing real estate transactions.\n<br><br>\nEngage with enriching articles, exclusive interviews with industry leaders, and spotlights on communities, providing a detailed peek into neighborhoods, amenities, and lifestyle offerings, beneficial for prospective homebuyers and strategic investors alike.\n<br><br>\nOur commitment is to empower you with the knowledge and resources required to navigate the ever-evolving real estate landscape confidently. Let our blog be your trusted companion, guiding you towards informed decisions and unlocking the vast potential within the real estate sphere.\n<br><br>\nJoin us as we explore the depths of real estate, uncovering insights crucial to your investment success and property pursuits.', 'Miyuru', 'Descember 05, 2023', './images/blog/b3.jpg', './images/profile/p1.jpg'),
(4, 'Real Estate Navigator: Your Comprehensive Guide to Property Investment and Market Trends', 'Welcome aboard our real estate blog, your ultimate guidebook to the intricate world of property investment, market trends, and the art of homeownership. Crafted to benefit both seasoned investors and newcomers, our blog is a repository of invaluable insights, expert guidance, and the latest industry updates.\r\n<br><br>\r\nExplore an array of topics tailored to meet your real estate aspirations. Uncover diverse investment strategies, navigate through detailed market analyses, and glean essential tips for making informed decisions in property acquisition, sale, and enhancement. Stay attuned to technological innovations transforming the industry while gaining a deeper understanding of legal frameworks, taxes, and regulations influencing real estate transactions.\r\n<br><br>\r\nEngage with enriching articles, exclusive interviews featuring industry mavens, and spotlights on vibrant communities, offering detailed insights into neighborhood characteristics, amenities, and lifestyles, appealing to prospective buyers and astute investors.\r\n<br><br>\r\nOur commitment is to equip you with the knowledge and tools required to navigate the dynamic real estate landscape confidently. Let our blog serve as your trusted companion, guiding you toward intelligent decisions and unlocking the immense potential within the real estate domain.\r\n<br><br>\r\nJoin us on this expedition as we navigate the seas of real estate, uncovering vital insights crucial for your successful property investments and homeownership journey.', 'Miyuru', 'Descember 09, 2023', './images/blog/b4.jpg', './images/profile/p1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Tharindu', 'Kulasinghe', 'Schedule Your Exclusive Property Demonstration!', 'Dear [Client\'s Name],\r\n\r\nI hope this message finds you well. At [Real Estate Company Name], we\'re thrilled about the opportunity to assist you in finding your dream property!\r\n\r\nBased on your preferences and our extensive market research, we have identified a selection of properties that align with your requirements. To provide you with an exclusive firsthand experience, we\'d like to invite you to a personalized property demonstration at your earliest convenience.\r\n\r\nOur team has meticulously curated a list of properties that showcase the finest features and amenities you\'re seeking. Whether it\'s the stunning panoramic views, spacious interiors, or the ideal location you desire, we\'re confident we have options that will exceed your expectations.\r\n\r\nPlease let us know a suitable date and time for you to view these properties firsthand. Our dedicated team will ensure that your demonstration is informative, comprehensive, and tailored to your specific needs.\r\n\r\nDon\'t miss this opportunity to explore the homes that could be your future sanctuary. Feel free to reach out to schedule your personalized property tour or if you have any questions.\r\n\r\nWe look forward to assisting you in finding the perfect property that fulfills your aspirations.\r\n\r\nBest regards,\r\n\r\n[Your Name]\r\n[Real Estate Company Name]\r\n[Contact Information]');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(50) NOT NULL,
  `property_title` varchar(255) NOT NULL,
  `property_address` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `property_size` varchar(50) NOT NULL,
  `bedrooms` int(50) NOT NULL,
  `bathrooms` int(50) NOT NULL,
  `garage` int(50) NOT NULL,
  `garage_size` varchar(200) NOT NULL,
  `year_built` varchar(50) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `property_status` varchar(50) NOT NULL,
  `location_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `property_title`, `property_address`, `description`, `price`, `property_size`, `bedrooms`, `bathrooms`, `garage`, `garage_size`, `year_built`, `property_type`, `property_status`, `location_url`) VALUES
(1, 'Luxury Family Home', '103 2nd Cross Street, 11, Colombo', 'Evans Tower very high demand corner junior one bedroom plus a large balcony boasting full open NYC views. You need to see the views to believe them. Mint condition with new hardwood floors. Lots of closets plus washer and dryer.\r\n<br><br>\r\nFully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.\r\n<br><br>\r\nFully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.', '400000', '1466 Sq Ft', 4, 2, 1, '458 SqFt', '2019-01-09', 'Full Family Home', 'For_rent', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d990.0453887772634!2d79.93794726925493!3d6.987883707450128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1701982142839!5m2!1sen!2slk'),
(2, 'Family Home For Sale', 'NO. 6/4, CHARLEMONT ROAD, Colombo', 'This charming 3-bedroom villa is nestled in a tranquil oasis, where modern elegance meets natural beauty. Situated on a lush property, this villa offers a serene retreat for those seeking relaxation and comfort.\r\n<br><br>\r\nAdditionally, the villa is conveniently located near various amenities and attractions. Whether you wish to explore the local beaches, indulge in shopping and dining experiences, or immerse yourself in the cultural offerings of the area.\r\n<br><br>\r\n10 Mins to Galle Highway interchange.\r\n15 Mins to Galle Fort.', '125960604.00', '1466 Sq Ft', 4, 2, 1, '146 Sq Ft', '2015-10-20', 'Full Family Home', 'For_rent', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15845.466662027351!2d79.908075!3d6.8465732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zLA!5e0!3m2!1sen!2slk!4v1701983127401!5m2!1sen!2slk'),
(3, 'Rekawa Lagoon Villa and Land for Sale', 'Bodhi Mawatha, Tangalle', 'This is a unique piece of prime real estate located at the edge of the Rekawa lagoon, affording breathtaking views of the lagoon and beyond. 142 perches of land are up for grabs exclusively as a whole or separately, as 30 perches of land with villa or 112 perches of land suitable for development.\r\n<br><br>\r\nThe whole property has private access to the lagoon as it provides three separate entrances; one entrance through the 30 perches land and two entrances through the 112 perches land. The property also comes with a termite treatment certificate for 10 years.\r\n\r\nThis property is the epitome of tranquility as it commands a location away from the hustle and bustle of the day-to- day. There are no schools, Buddhist temples, or loud parties nearby, and is a haven for bird and nature lovers who would like to immerse themselves in the peacefulness of their surroundings.\r\n<br><br>\r\nLand One\r\n<br><br>\r\nThe extent of this land is 30 perches and contains a villa with two to three parking spaces. There is a small garden area in the front and the back of the villa.\r\n<br><br>\r\nThe villa sits facing North and is completely walled on its North and West boundaries; partially walled on its East boundary, and the Rekawa lagoon sits to the South.\r\n<br><br>\r\nThe 345.29 square meter villa is host to three ensuite bedrooms that may accommodate up to six persons comfortably. All bathroom fittings are of the highest quality and are fitted with hot & cold water installations. The ground floor features an additional guest bathroom and one large bedroom along with a spacious living area and fully equipped kitchen. The bedroom provides a lovely garden view whilst the living area allows for comfortable seating, and an SLT Broadband landline giving access to PEO TV channels. The villa also has a good internet connection.\r\n<br><br>\r\nThe generous kitchen is fitted with a dishwasher, fridge with freezer, stovetop, oven, and washing machine; all of which are of a European brand. One end of the kitchen features a bar area that opens up to face the covered deck off the door leading to the garden and lagoon behind the villa. This is the perfect spot for a meal or some evening drinks. The deck offers an outdoor dining table and a ceiling fan for additional ventilation.\r\n<br><br>\r\nThe first floor features the master bedroom with a walk-in wardrobe and a second bedroom. Both consist of balconies that open up to the amazing view of the lagoon. All the bedrooms and the living room come equipped with ceiling fans and there is wiring in place for air-conditioning units, should you wish to install one; although the gentle cool breeze of the lagoon provides a soothing ambiance throughout the villa.\r\n<br><br>\r\nThrough the first floor can be accessed the roof top terrace that holds a water storage tank and a covered seating area with panoramic views of the surroundings.\r\n<br><br>\r\nIncluded in the sale of this land are approved building plans (stamped by the local authority) along with a drawing of a planned swimming pool. A lagoon boat, a municipal water connection, and 3-phase electricity are also available on this 30 perches.\r\n<br><br>\r\nThe villa will be sold furnished.\r\n<br><br>\r\nLand Two\r\n<br><br>\r\nThis land sits adjacent to land one and has coconut palms, a cashew tree, a wood apple tree, and mango trees. Also available is a temporary hut suitable for storage.\r\n<br><br>\r\nThere are also two separate access points (entrances) to this land that is independent of the entrance to land one. Therefore, land two is perfectly located with private access to the lagoon and has a high potential for development projects such as a boutique hotel (this land sits on a strip of land consisting of boutique hotels), villa, restaurant, pool club, water sports center or even as a lagoon side yoga center.\r\n<br><br>\r\n3 phase electricity is available on this land and when facing the North is partially walled on its Northern &Western boundaries, marked with a concrete post and barbed wire on the Eastern boundary and the lagoon sits to the South.\r\n<br><br>\r\nProximity\r\n<br><br>\r\nThe nearest town for grocery shopping, pharmacy, banks, hospital, and petrol station is Netolpitiya. Grocery shops, restaurants, and pharmacy are at a 2.2 km distance from the property.\r\n<br><br>\r\nThe nearest swimmable beach is 3.7 km away, only 9 minutes by road.\r\n<br><br>\r\nRekawa turtle watch is 3.7 km away and just 9 minutes by road. You can observe species of sea turtles such as loggerheads, hawksbill, olive ridley, and leatherbacks coming to lay their eggs.\r\n<br><br>\r\nRanna petrol station is 6.4 km from the property.\r\n<br><br>\r\nTangalle – banks, hospitals, and petrol stations are 8.7 km from the property.', '129232308.00', '1300 Sq Ft', 6, 3, 1, '300 Sq Ft', '2020-05-15', 'Full Family Home', 'For_sell', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11222.656462006944!2d80.78319055998185!3d6.02104262500629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae14afd19b00141%3A0x4045d305f7526bba!2sTangalle!5e0!3m2!1sen!2slk!4v1701983319349!5m2!1sen'),
(4, 'The house features four generously sized bedrooms', '1 Anderson Road, 05, Colombo', 'The house features four generously sized bedrooms, each designed with comfort and privacy in mind. The master suite is a retreat within itself, offering a peaceful sanctuary complete with a luxurious en-suite bathroom and a walk-in closet. The remaining bedrooms offer ample space for family members or guests, featuring cozy beds and elegant furnishings.\r\n<br><br>\r\nStep outside into the sprawling garden, and you’ll be greeted by a sight of natural beauty. The mature trees that dot the landscape provide shade and serenity, creating a tranquil oasis where you can unwind and relax. A shimmering pool takes center stage, inviting you to take a refreshing dip on hot summer days or lounge poolside with a good book.\r\n<br><br>\r\n10 Mins to Galle Highway interchange.\r\n15 Mins to Galle Fort.', '227383428.00', '1200 Sq Ft', 4, 1, 1, '250 Sq Ft', '2021-01-24', 'Full Family Home', 'For_sell', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15845.466662027351!2d79.908075!3d6.8465732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zLA!5e0!3m2!1sen!2slk!4v1701983705632!5m2!1sen!2slk'),
(5, 'This property has a magnificent beach frontage', '67-69 Dam Street, 12, Colombo', 'With just 2 Km to the township of Ambalangoda, this property has a magnificent beach frontage. This is a commercial property with an extent of 3,500 sqft, consisting of an upper floor, 05 bedrooms with attached baths, and a wedding hall. This property was constructed in 2010.\r\n<br><br>\r\nWith just 2 Km to the township of Ambalangoda, this property has a magnificent beach frontage. This is a commercial property with an extent of 3,500 sqft, consisting of an upper floor, 05 bedrooms with attached baths, and a wedding hall. This property was constructed in 2010.\r\n<br><br>\r\nWith just 2 Km to the township of Ambalangoda, this property has a magnificent beach frontage. This is a commercial property with an extent of 3,500 sqft, consisting of an upper floor, 05 bedrooms with attached baths, and a wedding hall. This property was constructed in 2010.', '4000000', '1466 Sq Ft', 8, 5, 0, '0', '2015-04-27', 'Full Family Home', 'For_sell', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15845.466662027351!2d79.908075!3d6.8465732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zLA!5e0!3m2!1sen!2slk!4v1701984471444!5m2!1sen!2slk');

-- --------------------------------------------------------

--
-- Table structure for table `properties_features`
--

CREATE TABLE `properties_features` (
  `features_id` int(50) NOT NULL,
  `property_id` int(50) NOT NULL,
  `air_conditioning` int(50) NOT NULL,
  `swiming_pool` int(50) NOT NULL,
  `central_heating` int(50) NOT NULL,
  `spa` int(50) NOT NULL,
  `pets_allow` int(50) NOT NULL,
  `car_parking` int(50) NOT NULL,
  `gym` int(50) NOT NULL,
  `alarm` int(50) NOT NULL,
  `window_covering` int(50) NOT NULL,
  `free_wifi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties_features`
--

INSERT INTO `properties_features` (`features_id`, `property_id`, `air_conditioning`, `swiming_pool`, `central_heating`, `spa`, `pets_allow`, `car_parking`, `gym`, `alarm`, `window_covering`, `free_wifi`) VALUES
(1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0),
(2, 2, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0),
(3, 3, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1),
(4, 4, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0),
(5, 5, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `properties_image`
--

CREATE TABLE `properties_image` (
  `properties_image_id` int(50) NOT NULL,
  `property_id` int(50) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties_image`
--

INSERT INTO `properties_image` (`properties_image_id`, `property_id`, `image_url`) VALUES
(1, 1, './images/property/p1-1.jpg'),
(2, 1, './images/property/p1-2.jpg'),
(3, 1, './images/property/p1-3.jpg'),
(4, 1, './images/property/p1-4.jpg'),
(5, 1, './images/property/p1-5.jpg'),
(6, 1, './images/property/p1-6.jpg'),
(7, 1, './images/property/p1-7.jpg'),
(8, 1, './images/property/p1-8.jpg'),
(9, 2, './images/property/p2-1.jpg'),
(10, 2, './images/property/p2-2.jpg'),
(11, 2, './images/property/p2-3.jpg'),
(12, 2, './images/property/p2-4.jpeg'),
(13, 2, './images/property/p2-5.jpeg'),
(14, 3, './images/property/p3-1.jpeg'),
(15, 3, './images/property/p3-2.jpeg'),
(16, 3, './images/property/p3-3.jpeg'),
(17, 3, './images/property/p3-4.jpeg'),
(18, 3, './images/property/p3-5.jpeg'),
(19, 4, './images/property/p4-1.jpg'),
(20, 4, './images/property/p4-2.jpg'),
(21, 4, './images/property/p4-3.jpg'),
(22, 4, './images/property/p4-4.jpg'),
(23, 4, './images/property/p4-5.jpg'),
(24, 4, './images/property/p4-6.jpg'),
(25, 4, './images/property/p4-7.jpg'),
(26, 4, './images/property/p4-8.jpg'),
(27, 4, './images/property/p4-9.jpg'),
(28, 4, './images/property/p4-10.jpg'),
(29, 5, './images/property/p5-1.jpg'),
(30, 5, './images/property/p5-2.jpg'),
(31, 5, './images/property/p5-3.jpg'),
(32, 5, './images/property/p5-4.jpg'),
(33, 5, './images/property/p5-5.jpg'),
(34, 5, './images/property/p5-6.jpg'),
(35, 5, './images/property/p5-7.jpg'),
(36, 5, './images/property/p5-8.jpg'),
(37, 5, './images/property/p5-9.jpg'),
(38, 5, './images/property/p5-10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property_floor_plan`
--

CREATE TABLE `property_floor_plan` (
  `property_floor_plan_id` int(50) NOT NULL,
  `property_id` int(50) NOT NULL,
  `property_floor_type` varchar(50) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_floor_plan`
--

INSERT INTO `property_floor_plan` (`property_floor_plan_id`, `property_id`, `property_floor_type`, `image_url`, `area`) VALUES
(1, 1, 'First Floor', './images/floor-plan/first-floor.jpg', '460 Sq Ft'),
(2, 2, 'First Floor', './images/floor-plan/first-floor.jpg', '460 Sq Ft'),
(3, 3, 'First Floor', './images/floor-plan/first-floor.jpg', '460 Sq Ft'),
(4, 4, 'First Floor', './images/floor-plan/first-floor.jpg', '460 Sq Ft'),
(5, 5, 'First Floor', './images/floor-plan/first-floor.jpg', '460 Sq Ft'),
(6, 1, 'Second Floor', './images/floor-plan/second-floor.jpg', '460 Sq Ft'),
(7, 2, 'Second Floor', './images/floor-plan/second-floor.jpg', '460 Sq Ft'),
(8, 3, 'Second Floor', './images/floor-plan/second-floor.jpg', '460 Sq Ft'),
(9, 4, 'Second Floor', './images/floor-plan/second-floor.jpg', '460 Sq Ft'),
(10, 5, 'Second Floor', './images/floor-plan/second-floor.jpg', '460 Sq Ft'),
(11, 1, 'Garage', './images/floor-plan/garage.jpg', '460 Sq Ft'),
(12, 2, 'Garage', './images/floor-plan/garage.jpg', '460 Sq Ft'),
(13, 3, 'Garage', './images/floor-plan/garage.jpg', '460 Sq Ft'),
(14, 4, 'Garage', './images/floor-plan/garage.jpg', '460 Sq Ft'),
(15, 5, 'Garage', './images/floor-plan/garage.jpg', '460 Sq Ft');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `newsletter_id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`newsletter_id`, `email`) VALUES
(1, 'test@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `properties_features`
--
ALTER TABLE `properties_features`
  ADD PRIMARY KEY (`features_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `properties_image`
--
ALTER TABLE `properties_image`
  ADD PRIMARY KEY (`properties_image_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `property_floor_plan`
--
ALTER TABLE `property_floor_plan`
  ADD PRIMARY KEY (`property_floor_plan_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties_features`
--
ALTER TABLE `properties_features`
  MODIFY `features_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties_image`
--
ALTER TABLE `properties_image`
  MODIFY `properties_image_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `property_floor_plan`
--
ALTER TABLE `property_floor_plan`
  MODIFY `property_floor_plan_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `newsletter_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properties_features`
--
ALTER TABLE `properties_features`
  ADD CONSTRAINT `properties_features_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`);

--
-- Constraints for table `properties_image`
--
ALTER TABLE `properties_image`
  ADD CONSTRAINT `properties_image_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`);

--
-- Constraints for table `property_floor_plan`
--
ALTER TABLE `property_floor_plan`
  ADD CONSTRAINT `property_floor_plan_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`property_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

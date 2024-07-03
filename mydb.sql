-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2024 at 01:32 PM
-- Server version: 8.0.36
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `pk_category_id` int NOT NULL,
  `category_name` varchar(45) NOT NULL,
  `category_requirements` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`pk_category_id`, `category_name`, `category_requirements`) VALUES
(1, 'Natural Attractions', 'National parks,\r\nBeaches,\r\nWaterfalls,\r\nMountains,\r\nCaves,\r\nForests'),
(2, 'Historical Sites', 'Ancient ruins,\r\nCastles,\r\nMuseums,\r\nArchaeological sites,\r\nMonuments,\r\nHeritage villages'),
(3, 'Cultural Experiences', 'Ethnic neighborhoods,\r\nLocal markets,\r\nTraditional festivals,\r\nPerforming arts venues,\r\nReligious sites and temples,\r\nCulinary tours and food experiences,'),
(4, 'Urban Destinations', 'Skyscrapers and cityscapes,\r\nArchitectural landmarks,\r\nShopping districts,\r\nStreet art and murals,\r\nDining and nightlife hubs,\r\nHistorical city centers'),
(5, 'Adventure and Outdoor Activities', 'Hiking trails,\r\nScuba diving and snorkeling spots,\r\nZip-lining courses,\r\nSafari and wildlife tours,\r\nRafting and kayaking rivers,\r\nSki resorts'),
(6, 'Relaxation and Wellness Retreats', 'Spas and wellness centers,\r\nHot springs,\r\nYoga and meditation retreats,\r\nBeach resorts,\r\nEco-friendly lodges,\r\nWellness retreats in natural settings'),
(7, 'Family-Friendly Attractions', 'Amusement parks,\r\nZoos and aquariums,\r\nWater parks,\r\nInteractive museums,\r\nFamily-friendly beaches,\r\nAnimal sanctuaries'),
(8, 'Special Interest Locations', 'Film and TV sets,\r\nLiterary landmarks,\r\nSports stadiums and arenas,\r\nScience centers and observatories,\r\nEco-tourism destinations,\r\nVolunteer and community projects');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `pk_city_id` int NOT NULL,
  `city_name` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `currency` varchar(45) DEFAULT NULL,
  `gdp` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `latitude` varchar(45) NOT NULL,
  `longitude` varchar(45) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`pk_city_id`, `city_name`, `currency`, `gdp`, `country`, `latitude`, `longitude`, `description`) VALUES
(100, 'Durban', 'South African Rand', '0.5% in 2023', 'South Africa', '29.8587', '31.0218', '\r\nDurban, located on the east coast of South Africa, is a vibrant and culturally rich city renowned for its golden beaches, warm subtropical climate, and diverse population. As the country\'s third-largest city, Durban offers a unique blend of African, Indian, and colonial influences, reflected in its cuisine, architecture, and traditions. The bustling markets, such as the Victoria Street Market, offer a sensory feast of spices, textiles, and local crafts. Durban is also a hub of outdoor activities, from surfing and swimming to exploring the lush coastal landscapes and nearby game reserves. With a lively nightlife scene, thriving arts community, and iconic landmarks like the Moses Mabhida Stadium and uShaka Marine World, Durban is a captivating destination that showcases the dynamic spirit of South Africa.\r\n\r\n\r\n\r\n\r\n'),
(200, 'Leeds', 'British Pounds ', '1% in 2023', 'United Kingdom', '53.801277', '-1.548567', 'Leeds, situated in the heart of West Yorkshire, United Kingdom, is a vibrant city renowned for its rich industrial heritage, thriving cultural scene, and diverse population. Boasting a captivating blend of historic architecture and modern developments, Leeds offers something for everyone. The city\'s impressive Victorian arcades, such as the historic Kirkgate Market, provide a unique shopping experience, while its dynamic restaurant and bar scene cater to all tastes. Leeds is also a cultural hub, home to world-class museums, galleries, and theaters, including the Royal Armouries Museum and the Leeds Playhouse. With its picturesque parks, including Roundhay Park and Hyde Park, as well as its proximity to the stunning Yorkshire Dales, Leeds offers ample opportunities for outdoor recreation. Whether exploring its historic streets, enjoying its lively nightlife, or immersing oneself in its cultural offerings, Leeds is a city that captivates visitors with its unique charm and character.');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `pk_photo_id` int NOT NULL,
  `pictures` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `cities_pk_city_id` int NOT NULL,
  `places_pk_place_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`pk_photo_id`, `pictures`, `cities_pk_city_id`, `places_pk_place_id`) VALUES
(1001, 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Durban_TownHall.jpg', 100, 11),
(1004, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/d8/56/54/landscape-gardens.jpg?w=1200&h=1200&s=1', 100, 14),
(1008, 'https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/27/6f/09.jpg', 100, 18),
(1009, 'https://image.arrivalguides.com/x/19/cd549ce93051165d39960de04a75dbb0.jpg', 100, 19),
(1010, 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Gateway_Theatre_of_Shopping_exterior.jpg/1280px-Gateway_Theatre_of_Shopping_exterior.jpg', 100, 20),
(1011, 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Tsogo_Sun_Suncoast_Exterior_v4.jpg/1280px-Tsogo_Sun_Suncoast_Exterior_v4.jpg', 100, 21),
(1000, 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/The_Tetley_4_August_2018_1.jpg/1280px-The_Tetley_4_August_2018_1.jpg', 200, 10),
(1002, 'https://upload.wikimedia.org/wikipedia/commons/6/6b/Leeds-city-museum.jpg', 200, 12),
(1003, 'https://royalarmouries.org/sites/default/files/styles/12_6_media_large/public/2023-07/Royal%20Armouries%20Museum-Leeds-adjusted.jpg?h=87e359d5&itok=sQiSQaYn', 200, 13),
(1005, 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Kirkstall_Abbey_in_the_late_afternoon.jpg/1280px-Kirkstall_Abbey_in_the_late_afternoon.jpg', 200, 15),
(1006, 'https://www.thetimes.co.uk/imageserver/image/%2Fmethode%2Fsundaytimes%2Fprod%2Fweb%2Fbin%2F7117eeea-6204-11ea-b021-fae459863cfa.jpg?crop=1600%2C900%2C0%2C0&resize=1200', 200, 16),
(1007, 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Leeds_Playhouse._Photography_by_Anthony_Robling_%2810%29.jpg/1280px-Leeds_Playhouse._Photography_by_Anthony_Robling_%2810%29.jpg', 200, 17);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `pk_place_id` int NOT NULL,
  `place_name` varchar(45) NOT NULL,
  `place_description` varchar(2000) NOT NULL,
  `lat` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `lng` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `wiki_link` varchar(500) NOT NULL,
  `prices` varchar(45) DEFAULT NULL,
  `cities_pk_city_id` int NOT NULL,
  `Address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`pk_place_id`, `place_name`, `place_description`, `lat`, `lng`, `wiki_link`, `prices`, `cities_pk_city_id`, `Address`) VALUES
(10, 'The Tetley', 'The Tetley, nestled in the heart of Leeds, UK, is a former brewery turned contemporary art gallery and social space. Once a symbol of the city\'s industrial heritage, this historic red-brick building now hosts a vibrant array of exhibitions, events, and activities. From cutting-edge art installations to a cozy café and bar, The Tetley offers visitors a unique blend of culture, history, and community in one dynamic setting.', '53.7920907', '-1.5397463', 'https://en.wikipedia.org/wiki/The_Tetley,_Leeds', '£5', 200, 'The Tetley, Hunslet Rd, Leeds LS10 1JQ'),
(11, 'The Durban Natural Science Museum', 'The Durban Natural Science Museum, located in Durban, South Africa, offers visitors a captivating journey through the region\'s natural history and biodiversity. Established in 1887, it is one of the oldest museums in the country, boasting an extensive collection of exhibits ranging from fossils and minerals to taxidermy displays of local wildlife. One of its most renowned attractions is the preserved body of a great white shark named \"Snappy,\" which provides a fascinating insight into the marine life of the region. With its educational programs, interactive displays, and emphasis on conservation, the museum serves as both a cultural institution and a hub for scientific discovery, inviting visitors to explore the wonders of the natural world.\r\n\r\n\r\n\r\n\r\n', '-29.8587136', '31.0266866', 'https://en.wikipedia.org/wiki/National_Museum_of_Natural_Science', 'Free', 100, '1, City Hall, 234 Anton Lembede St, Durban Central, Durban, 4000, South Africa'),
(12, 'Leeds City Museum', 'Leeds City Museum is a vibrant cultural hub located in the heart of Leeds, West Yorkshire, England. Housed in a magnificent historic building, the museum offers visitors an immersive journey through the city\'s rich history, diverse culture, and natural wonders.\r\n\r\nInside, you\'ll discover captivating exhibits spanning a wide range of topics, including archaeology, natural history, and local heritage. From ancient artifacts to interactive displays, the museum brings Leeds\' past to life, allowing visitors to explore the stories of its people and landscapes.\r\n\r\nOne of the museum\'s most iconic attractions is the famous \"Leeds Tiger,\" a majestic Bengal tiger specimen that has become a beloved symbol of the city. Additionally, the museum features a wealth of other fascinating exhibits, from taxidermy and fossils to geological specimens and cultural artifacts.\r\n\r\nWith engaging activities for all ages and interests, Leeds City Museum offers a memorable and educational experience for families, history enthusiasts, and curious minds alike. Whether you\'re uncovering ancient treasures or marveling at the wonders of the natural world, a visit to Leeds City Museum promises to inspire and delight.', '53.80115199999999', '-1.5481071', 'https://en.wikipedia.org/wiki/Leeds_City_Museum', 'Free', 200, 'Millennium Square, Leeds LS2 8BH\r\n'),
(13, 'Royal Armouries Museum', 'The Royal Armouries Museum in Leeds is a fascinating destination that offers visitors a captivating journey through the history of arms and armor. Here\'s a brief description:\r\n\r\nThe Royal Armouries Museum in Leeds is one of the UK\'s premier museums dedicated to the study and display of arms and armor. Located in a stunning modern building at Leeds Dock, the museum boasts an impressive collection that spans centuries and continents.\r\n\r\nVisitors to the museum can explore a vast array of exhibits showcasing armor worn by knights, warriors, and soldiers throughout history. From medieval suits of armor to samurai swords and firearms, the museum offers a comprehensive look at the evolution of weaponry and warfare.\r\n\r\nOne of the highlights of the museum is its immersive displays, which allow visitors to experience the sights and sounds of historical battles and tournaments. Interactive exhibits and multimedia presentations bring the stories of past warriors to life, offering a unique and engaging museum experience.\r\n\r\nIn addition to its extensive collection of artifacts, the Royal Armouries Museum hosts special events, demonstrations, and educational programs for visitors of all ages. Whether you\'re a history enthusiast, a military buff, or simply curious about the world of arms and armor, the Royal Armouries Museum in Leeds is a must-visit destination.\r\n\r\n\r\n\r\n\r\n', '53.7917894', '-1.5322334', 'https://en.wikipedia.org/wiki/Royal_Armouries', 'Free', 200, ' Armouries Dr, Leeds LS10 1LT'),
(14, 'Durban Botanic Gardens', 'The Durban Botanic Gardens, established in 1849, is Africa\'s oldest surviving botanical garden and a cherished green oasis in the heart of Durban, South Africa. Spread over 15 hectares, the gardens showcase an impressive collection of indigenous and exotic plants, including rare cycads, palms, orchids, and ferns.\r\n\r\nVisitors to the Durban Botanic Gardens can wander along winding pathways shaded by towering trees, discover tranquil ponds inhabited by colorful water lilies, and relax on well-manicured lawns surrounded by vibrant flower beds. The garden\'s diverse plant life attracts a variety of bird species, making it a haven for birdwatchers.\r\n\r\nIn addition to its botanical treasures, the Durban Botanic Gardens offers educational programs, guided tours, and special events throughout the year, catering to visitors of all ages. Whether you\'re seeking a peaceful retreat, a leisurely stroll, or a deeper understanding of South Africa\'s rich plant heritage, the Durban Botanic Gardens provides a captivating experience for nature lovers and garden enthusiasts alike.', '-29.848252', '31.008291', 'https://en.wikipedia.org/wiki/Durban_Botanic_Gardens', 'Free', 100, '9A John Zikhali Rd, Berea, Durban, 4001, South Africa'),
(15, 'First Direct Arena', 'The Leeds Arena (also known as the First Direct Arena for sponsorship reasons) is an entertainment-focused indoor arena located in the Arena Quarter of Leeds, West Yorkshire, England. It is the first in the United Kingdom to have a fan-shaped orientation. The arena officially opened on 4 September 2013, with Sir Elton John, playing to an audience of 12,000. Bruce Springsteen had, however, held the first concert on 24 July 2013, with an audience of 13,000. The arena\'s opening season in 2013 later included acts including Kaiser Chiefs, Rod Stewart, Status Quo and Depeche Mode..\r\n\r\n\r\n\r\n\r\n', '53.803056', '-1.542222', 'https://en.wikipedia.org/wiki/Leeds_Arena', 'Subject to change.', 200, ' Arena Way, Leeds LS2 8BY'),
(16, 'Victoria Leeds shopping', 'Victoria Leeds is a shopping district and leisure area in central Leeds, comprising the 1990 Victoria Quarter, an arcaded complex of restored 19th century and contemporary shopping arcades, and the 2016 Victoria Gate development. Notable for its role in the regeneration of Leeds\' city centre, and a programme of restoration and reuse which included commissiong the largest work of stained glass work in Europe,[1] designed by artist Brian Clarke,[2] to cover the newly-pedestrianised Queen Victoria Street, the 1990 scheme created a covered retail district of linked arcades. In 2016 ,the Victoria Quarter was merged with the newly built Victoria Gate complex to form the largest premium retail and leisure venue in Northern England. The district includes a casino and major stores such as Harvey Nichols and John Lewis and Partners.', '53.798056', '-1.538056', 'https://en.wikipedia.org/wiki/Victoria_Leeds', 'Free', 200, '44, Victoria Gate, Vicar Ln, Leeds LS2 7AU'),
(17, 'Leeds Playhouse', 'Leeds Playhouse is a renowned theatre company and venue located in Leeds, West Yorkshire, England. Established in 1970, it has a rich history of producing and presenting a diverse range of theatrical performances, from classic plays to contemporary works, as well as original productions.\r\n\r\nOriginally known as the West Yorkshire Playhouse, the theatre underwent a major redevelopment and rebranding in 2019, becoming Leeds Playhouse. The revamped venue features two performance spaces: the Quarry Theatre and the Courtyard Theatre, providing audiences with intimate and immersive theatrical experiences.\r\n\r\nLeeds Playhouse is committed to engaging with the local community through its outreach programs, educational initiatives, and participation projects. It strives to make theatre accessible to people of all ages and backgrounds, offering workshops, classes, and opportunities for aspiring artists to develop their skills and creativity.\r\n\r\nWith its dedication to artistic excellence, inclusivity, and cultural vibrancy, Leeds Playhouse continues to be a vital hub for theatre enthusiasts and a driving force in the cultural landscape of Leeds and beyond.', '53.7981911', '-1.53507', 'https://en.wikipedia.org/wiki/Leeds_Playhouse', '£5', 200, 'Playhouse Square, Quarry Hill, Leeds LS2 7UP'),
(18, 'Golden Mile', 'The Golden Mile in Durban, South Africa, is a picturesque stretch of coastline renowned for its golden sandy beaches and vibrant atmosphere. Stretching approximately 6 kilometers (about 4 miles) along the Indian Ocean, the Golden Mile is a hub of activity and leisure for both locals and visitors alike.\r\n\r\nThe promenade that runs parallel to the beaches is perfect for a leisurely stroll or a brisk jog, offering stunning views of the ocean and the city skyline. Along the way, you\'ll encounter numerous attractions, including cafes, restaurants, ice cream vendors, and beachfront bars where you can relax and soak up the sun.\r\n\r\nThe Golden Mile is not only a popular spot for sunbathing and swimming but also for various water sports such as surfing, paddleboarding, and kite flying. Lifeguards patrol the beaches, ensuring the safety of swimmers and surfers.\r\n\r\nThroughout the year, the Golden Mile hosts a variety of events and festivals, ranging from beach volleyball tournaments to music concerts and cultural celebrations. It\'s a lively and dynamic area that reflects the multicultural essence of Durban, with families picnicking, friends playing beach games, and tourists taking in the sights and sounds of this iconic coastline.\r\n\r\nWhether you\'re looking for a place to unwind and enjoy the natural beauty of the ocean or seeking excitement and entertainment, the Golden Mile in Durban offers something for everyone, making it a must-visit destination in South Africa.', '-29.8565', '31.0405', 'https://en.wikipedia.org/wiki/Golden_Mile,_Durban', 'Free', 100, 'Beach Walk, Durban Central, Durban, 4001, South Africa'),
(19, 'The Old Fort', 'The Old Fort is a fort built in Durban, South Africa by Captain Thomas Charlton Smith\'s troops in 1842 as part of a visibility campaign by the British Empire to prevent Boers from establishing a republic in Natal. The facility was equipped with an arsenal and barracks in 1858, and troops were stationed there until the end of the century.', '-29.8516', ' 31.0254', 'https://en.wikipedia.org/wiki/Old_Fort_(Durban)', 'Free', 100, '208 KE Masinga Rd, Stamford Hill, Durban, 4001, South Africa'),
(20, 'Sea Animal Encounters Island', 'uShaka Marine World is a 16-hectare (40-acre) theme park that opened on 30 April 2004 in Durban, KwaZulu-Natal, South Africa. It has a total capacity of 4.6 million gallons containing 10,000 animal species. Designed by American firm Creative Kingdom Inc. Shaka Marine World opened on 30 April 2004 after 3 years of development. In 2005, the park was awarded for "Outstanding Achievement in thematic creative design" by the Themed Entertainment Association.', '-29.867443', '31.045915', 'https://en.wikipedia.org/wiki/UShaka_Marine_World', '£6.57', 100, '1 King Shaka Ave, Point, Durban, 4001, South Africa'),
(21, 'Suncoast Casino, Hotels and Entertainment', 'Suncoast Casino, Hotels, and Entertainment is a premier destination situated along Durban\'s vibrant Golden Mile in South Africa. Boasting a stunning beachfront location, Suncoast offers a diverse range of entertainment options, luxurious accommodations, and exciting gaming experiences.\r\n\r\nThe centerpiece of Suncoast is its world-class casino, featuring a wide array of slot machines, table games, and poker rooms. Whether you\'re a seasoned gambler or a casual player, the casino offers something for everyone, with thrilling games and opportunities to win big.\r\n\r\nIn addition to gaming, Suncoast offers a wealth of entertainment options. Visitors can catch the latest blockbuster films at the Cinecentre cinema complex or enjoy live performances ranging from comedy shows to musical concerts at the Suncoast Globe.\r\n\r\nFor those seeking relaxation and luxury, Suncoast boasts two hotels: the Suncoast Towers and the SunSquare Suncoast. Both hotels offer stylish accommodations, modern amenities, and stunning views of the Indian Ocean, providing a perfect retreat after a day of gaming and entertainment.\r\n\r\nSuncoast is also home to an array of restaurants and bars, serving up a diverse selection of cuisines and beverages to satisfy every palate. From fine dining establishments to casual eateries and trendy cocktail lounges, there\'s something to suit every taste and occasion.\r\n\r\nWith its unbeatable beachfront location, luxurious accommodations, exciting gaming options, and lively entertainment offerings, Suncoast Casino, Hotels, and Entertainment is a must-visit destination for travelers looking to experience the best that Durban has to offer.', '-29.849168', '31.038168', 'https://en.wikipedia.org/wiki/Suncoast_Casino_and_Entertainment_World', 'Free', 100, 'Suncoast Boulevard, O R Tambo Parade, Durban, 4056, South Africa');

-- --------------------------------------------------------

--
-- Table structure for table `places_has_categories`
--

CREATE TABLE `places_has_categories` (
  `places_pk_place_id` int NOT NULL,
  `categories_pk_category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `places_has_categories`
--

INSERT INTO `places_has_categories` (`places_pk_place_id`, `categories_pk_category_id`) VALUES
(14, 1),
(16, 1),
(11, 2),
(12, 2),
(13, 2),
(15, 2),
(10, 3),
(17, 3),
(20, 4),
(19, 5),
(18, 6),
(21, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`pk_category_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`pk_city_id`),
  ADD UNIQUE KEY `idcities_UNIQUE` (`pk_city_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`cities_pk_city_id`,`places_pk_place_id`,`pk_photo_id`),
  ADD KEY `fk_photos_cities1_idx` (`cities_pk_city_id`),
  ADD KEY `fk_photos_places1_idx` (`places_pk_place_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`pk_place_id`,`cities_pk_city_id`),
  ADD KEY `fk_places_cities1_idx` (`cities_pk_city_id`);

--
-- Indexes for table `places_has_categories`
--
ALTER TABLE `places_has_categories`
  ADD PRIMARY KEY (`places_pk_place_id`,`categories_pk_category_id`),
  ADD KEY `fk_places_has_categories_categories1_idx` (`categories_pk_category_id`),
  ADD KEY `fk_places_has_categories_places1_idx` (`places_pk_place_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `fk_photos_cities1` FOREIGN KEY (`cities_pk_city_id`) REFERENCES `cities` (`pk_city_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_photos_places1` FOREIGN KEY (`places_pk_place_id`) REFERENCES `places` (`pk_place_id`);

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `fk_places_cities1` FOREIGN KEY (`cities_pk_city_id`) REFERENCES `cities` (`pk_city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `places_has_categories`
--
ALTER TABLE `places_has_categories`
  ADD CONSTRAINT `fk_places_has_categories_categories1` FOREIGN KEY (`categories_pk_category_id`) REFERENCES `categories` (`pk_category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_places_has_categories_places1` FOREIGN KEY (`places_pk_place_id`) REFERENCES `places` (`pk_place_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

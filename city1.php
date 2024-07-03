<?php require_once "config.php";?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leeds</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
<header>
        <h1>Leeds</h1>
    </header>
    

    <?php
    //retrieve data below
    //get city name
    $stmt = $conn->prepare("SELECT city_name FROM cities WHERE pk_city_id = '200'");
    $stmt->execute();
    $city1 = implode("" , $stmt->fetch(PDO::FETCH_ASSOC));

    //get city description
    $stmt = $conn->prepare("SELECT description FROM cities WHERE pk_city_id = '200'");
    $stmt->execute();
    $description = implode("" , $stmt->fetch(PDO::FETCH_ASSOC));


    //get POI for city 1, (name latitude, longitude)
    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '200' LIMIT 1");
    $stmt->execute();
    $city1_place1 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city1_place1_id = $city1_place1["pk_place_id"];
    $city1_place1_name = $city1_place1["place_name"];
    $latitude_city1_place1 = $city1_place1['lat'];
    $longitude_city1_place1 = $city1_place1['lng'];

    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '200' LIMIT 1 OFFSET 1");
    $stmt->execute();
    $city1_place2 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city1_place2_id = $city1_place2["pk_place_id"];
    $city1_place2_name = $city1_place2["place_name"];
    $latitude_city1_place2 = $city1_place2['lat'];
    $longitude_city1_place2 = $city1_place2['lng'];

    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '200' LIMIT 1 OFFSET 2");
    $stmt->execute();
    $city1_place3 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city1_place3_id = $city1_place3["pk_place_id"];
    $city1_place3_name = $city1_place3["place_name"];
    $latitude_city1_place3 = $city1_place3['lat'];
    $longitude_city1_place3 = $city1_place3['lng'];

    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '200' LIMIT 1 OFFSET 3");
    $stmt->execute();
    $city1_place4 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city1_place4_id = $city1_place4["pk_place_id"];
    $city1_place4_name = $city1_place4["place_name"];
    $latitude_city1_place4 = $city1_place4['lat'];
    $longitude_city1_place4 = $city1_place4['lng'];

    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '200' LIMIT 1 OFFSET 4");
    $stmt->execute();
    $city1_place5 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city1_place5_id = $city1_place5["pk_place_id"];
    $city1_place5_name = $city1_place5["place_name"];
    $latitude_city1_place5 = $city1_place5['lat'];
    $longitude_city1_place5 = $city1_place5['lng'];

    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '200' LIMIT 1 OFFSET 5");
    $stmt->execute();
    $city1_place6 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city1_place6_id = $city1_place6["pk_place_id"];
    $city1_place6_name = $city1_place6["place_name"];
    $latitude_city1_place6 = $city1_place6['lat'];
    $longitude_city1_place6 = $city1_place6['lng'];
    ?> 






   <div class="container">
        <a href="city2.php" class="link">Go to Durban</a>
        <h1>Description</h1>
        <section>
            <p><?php echo $description ?></p>
        </section>
    </header>
    <h1>Map</h1>
    <!--maps-->
    <div id="map-container">
        <div id="map1" class="map"></div>
    </div>



    <script>
        function initMap() {
            //map1
            var map1 = new google.maps.Map(document.getElementById('map1'), {
                center: {lat: 53.8008, lng: -1.548567},
                zoom: 14,
                disableDefaultUI: true,
                gestureHandling: 'none',
                styles: [
                    {
                        featureType: 'poi',
                        elementType: 'labels',
                        stylers: [{ visibility: 'off' }]
                    }
                ]
            });

            //markers city1
            var markers = [
                { position: {lat: <?php echo $latitude_city1_place1; ?>, lng: <?php echo $longitude_city1_place1; ?>}, title: "<?php echo $city1_place1_name ;?>", placeId: "<?php echo $city1_place1_id; ?>" },
                { position: {lat: <?php echo $latitude_city1_place2; ?>, lng: <?php echo $longitude_city1_place2; ?>}, title: "<?php echo $city1_place2_name ;?>", placeId: "<?php echo $city1_place2_id; ?>" },
                { position: {lat: <?php echo $latitude_city1_place3; ?>, lng: <?php echo $longitude_city1_place3; ?>}, title: "<?php echo $city1_place3_name ;?>", placeId: "<?php echo $city1_place3_id; ?>" },
                { position: {lat: <?php echo $latitude_city1_place4; ?>, lng: <?php echo $longitude_city1_place4; ?>}, title: "<?php echo $city1_place4_name ;?>", placeId: "<?php echo $city1_place4_id; ?>" },
                { position: {lat: <?php echo $latitude_city1_place5; ?>, lng: <?php echo $longitude_city1_place5; ?>}, title: "<?php echo $city1_place5_name ;?>", placeId: "<?php echo $city1_place5_id; ?>" },
                { position: {lat: <?php echo $latitude_city1_place6; ?>, lng: <?php echo $longitude_city1_place6; ?>}, title: "<?php echo $city1_place6_name ;?>", placeId: "<?php echo $city1_place6_id; ?>" }
            ];

            // Loop through markers array to add markers and event listeners
            markers.forEach(function(markerData) {
                var marker = new google.maps.Marker({
                    position: markerData.position,
                    map: map1,
                    title: markerData.title,
                    placeId: markerData.placeId
                });

                // Add click event listener to the marker
                marker.addListener('click', function() {
                    window.location.href = 'info.php?id=' + markerData.placeId;
                });
            });
        }
    </script>


    <script src="<?= $map_api?>" async defer></script>

    <br>
    
    <?php

    //$city1 = "Leeds";
    $city1CountryCode = "UK";

    $city1URL = "https://api.openweathermap.org/data/2.5/weather?q={$city1},{$city1CountryCode}&mode=xml&appid={$weather_api}";

    $city1XML = file_get_contents($city1URL);

    $city1Data = simplexml_load_string($city1XML);

    if ($city1Data === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
    }
    //  else{
    //     print_r($city1Data);
    // }
    ?>

<h1>Weather</h1>
        <section>
    <div class="table-container1">
    <table class="table1">
        <tr>
            <th colspan="2" ><?php echo $city1Data->city['name'];  ?></th>
        </tr>
        <tr>
            <td>Temperature</td>
            <td><?php echo number_format(($city1Data->temperature['value'] - 273.15), 1) . '°C'; ?></td>

        </tr>
        
        <tr>
            <td>Wind</td>
            <td><?php echo $city1Data->wind->speed['value'] . 'm/s';  ?></td>
        </tr>
        
        <tr>
            <td>Humidity</td>
            <td><?php echo $city1Data->humidity['value'] . '%';  ?></td>
        </tr>
        
        <tr>
            <td>Pressure</td>
            <td><?php echo $city1Data->pressure['value'] . 'hPa';  ?></td>
        </tr>
        
        <tr>
            <td>Sunrise</td>
            <td><?php echo $city1Data->city->sun['rise'];  ?></td>
        </tr>
        
        <tr>
            <td>Sunset</td>
            <td><?php echo $city1Data->city->sun['set'];  ?></td>
        </tr>
    </table>
    </section>
    <br>
    </div>


    <?php
    $city1 = "Leeds";
    $city1CountryCode = "UK";

    $city1URL = "http://api.openweathermap.org/data/2.5/forecast?q={$city1},{$city1CountryCode}&mode=xml&appid={$weather_api}";

    $city1XML = file_get_contents($city1URL);

    $city1Data = simplexml_load_string($city1XML);

    if ($city1Data === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
    }
        // else{
        //     print_r($city1Data);
        // }
    ?>
 <h1>Forecast</h1>
        <section>
    <div class="table-container2">
    <table class="table2">
        <tr>
            <th><?php echo 'Time';  ?></th>
            <th>Temperature</th>
        </tr>
        <?php $count1 = 0; ?>
        <?php foreach ($city1Data->forecast->time as $time): ?>
            <?php if ($count1 % 4 == 0):?>
                <tr>
                    <td>Temperature at <?php echo $time['from']; ?></td>
                    <td><?php echo number_format(($time->temperature['value'] - 273.15), 1) . '°C'; ?></td>
                </tr>
            <?php endif; ?>
            <?php $count1++; ?>
        <?php endforeach; ?>
    </table>
     </section>
    </div>
    <div class="images">
        <img style="height: 175px" src= "leeds1.jpeg">
        <img style="height: 175px" src="leeds2.jpeg">
        <img style="height: 175px" src="leeds3.jpeg">
        <img style="height: 175px" src="leeds4.jpeg">
    </div>
            </br>
    <h1>News</h1>
    <section class ="rss">
    <?php
    // Function to fetch and parse the RSS feed
    function parse_rss_feed($url) {
        // Fetch RSS feed
        $rss = simplexml_load_file($url);

        // Check if the RSS feed is valid
        if ($rss === false) {
            return false;
        }

        // Initialize an array to store parsed items
        $parsed_items = array();

        // Loop through each item in the RSS feed
        foreach ($rss->channel->item as $item) {
            // Extract relevant information from each item
            $title = (string) $item->title;
            $link = (string) $item->link;
            $description = (string) $item->description;
            $pubDate = (string) $item->pubDate;
            $author = (string) $item->author;

            // Add the extracted information to the parsed items array
            $parsed_items[] = array(
                'title' => $title,
                'link' => $link,
                'description' => $description,
                'pubDate' => $pubDate,
                'author' => $author
                // Add more fields if needed
            );
        }

        // Return the array of parsed items
        return $parsed_items;
    }



    // Parse the RSS feed
    $parsed_feed = parse_rss_feed($rss_feed_url);

    // Check if parsing was successful
    if ($parsed_feed !== false) {
        // Output the parsed items with navigation
        echo '<div id="rss-feed">';
        echo '<div class="rss-items">';
        for ($i = 0; $i < min(3, count($parsed_feed)); $i++) {
            echo '<div class="rss-item">';
            echo '<h2>' . $parsed_feed[$i]['title'] . '</h2>';
            echo '<p>' . $parsed_feed[$i]['description'] . '</p>';
            echo '<p>Published on: ' . $parsed_feed[$i]['pubDate'] . '</p>';
            echo '<p>Author: ' . $parsed_feed[$i]['author'] . '</p>';
            echo '<a href="' . $parsed_feed[$i]['link'] . '">Read more</a>';
            echo '</div>';
        }
        echo '</div>';
        if (count($parsed_feed) > 3) {
            echo '<button onclick="prevRSSItems()">Previous</button>';
            echo '<button onclick="nextRSSItems()">Next</button>';
        }
        echo '</div>';
    } else {
        // Handle the case where parsing failed
        echo 'Failed to parse the RSS feed.';
    }
    ?>
    </section src="<?= $map_api?>" async defer>
    </div>
    <script>
    var currentRSSIndex = 0;
    var rssItems = <?php echo json_encode($parsed_feed); ?>;

    function showRSSItems(startIndex) {
        var end = Math.min(startIndex + 2, rssItems.length - 1);
        var rssContainer = document.querySelector('.rss-items');
        rssContainer.innerHTML = '';
        for (var i = startIndex; i <= end; i++) {
            var item = rssItems[i];
            var rssItem = '<div class="rss-item">';
            rssItem += '<h2>' + item.title + '</h2>';
            rssItem += '<p>' + item.description + '</p>';
            rssItem += '<p>Published on: ' + item.pubDate + '</p>';
            rssItem += '<p>Author: ' + item.author + '</p>';
            rssItem += '<a href="' + item.link + '">Read more</a>';
            rssItem += '</div>';
            rssContainer.innerHTML += rssItem;
        }
        currentRSSIndex = startIndex;
    }

    function prevRSSItems() {
        if (currentRSSIndex > 0) {
            showRSSItems(currentRSSIndex - 3);
        }
    }

    function nextRSSItems() {
        if (currentRSSIndex + 3 < rssItems.length) {
            showRSSItems(currentRSSIndex + 3);
        }
    }

    // Initially show the first set of items
    showRSSItems(0);
    </script>


</body>
</html>
<?php require_once "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Durban</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
   <link rel="stylesheet" href="styles.css">
    
</style>
</head>
<body>
<header>
        <h1>Durban</h1>
    </header>



    <?php
   
    //retrieve data below
    //get city name
    $stmt = $conn->prepare("SELECT city_name FROM cities WHERE pk_city_id = '100'");
    $stmt->execute();
    $city2 = implode("" , $stmt->fetch(PDO::FETCH_ASSOC));

    //get description
    $stmt = $conn->prepare("SELECT description FROM cities WHERE pk_city_id = '100'");
    $stmt->execute();
    $description2 = implode("" , $stmt->fetch(PDO::FETCH_ASSOC));

    //get POI for city 1
    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '100' LIMIT 1");
    $stmt->execute();
    $city2_place1 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city2_place1_id = $city2_place1["pk_place_id"];
    $city2_place1_name = $city2_place1["place_name"];
    $latitude_city2_place1 = $city2_place1['lat'];
    $longitude_city2_place1 = $city2_place1['lng'];

    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '100' LIMIT 1 OFFSET 1");
    $stmt->execute();
    $city2_place2 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city2_place2_id = $city2_place2["pk_place_id"];
    $city2_place2_name = $city2_place2["place_name"];
    $latitude_city2_place2 = $city2_place2['lat'];
    $longitude_city2_place2 = $city2_place2['lng'];

    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '100' LIMIT 1 OFFSET 2");
    $stmt->execute();
    $city2_place3 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city2_place3_id = $city2_place3["pk_place_id"];
    $city2_place3_name = $city2_place3["place_name"];
    $latitude_city2_place3 = $city2_place3['lat'];
    $longitude_city2_place3 = $city2_place3['lng'];

    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '100' LIMIT 1 OFFSET 3");
    $stmt->execute();
    $city2_place4 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city2_place4_id = $city2_place4["pk_place_id"];
    $city2_place4_name = $city2_place4["place_name"];
    $latitude_city2_place4 = $city2_place4['lat'];
    $longitude_city2_place4 = $city2_place4['lng'];

    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '100' LIMIT 1 OFFSET 4");
    $stmt->execute();
    $city2_place5 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city2_place5_id = $city2_place5["pk_place_id"];
    $city2_place5_name = $city2_place5["place_name"];
    $latitude_city2_place5 = $city2_place5['lat'];
    $longitude_city2_place5 = $city2_place5['lng'];

    $stmt = $conn->prepare("SELECT pk_place_id, place_name, lat, lng  FROM places WHERE cities_pk_city_id = '100' LIMIT 1 OFFSET 5");
    $stmt->execute();
    $city2_place6 =$stmt->fetch(PDO::FETCH_ASSOC);
    $city2_place6_id = $city2_place6["pk_place_id"];
    $city2_place6_name = $city2_place6["place_name"];
    $latitude_city2_place6 = $city2_place6['lat'];
    $longitude_city2_place6 = $city2_place6['lng'];
    ?> 






<div class="container">
        <a href="city1.php" class="link">Go to Leeds</a>
        <h1>Description</h1>
        <section>
            <p><?php echo $description2 ?></p>
        </section>

</header>
    <h1>Map</h1>


    <!--maps-->
    <div id="map-container">
        <div id="map2" class="map"></div>
    </div>



    <script>
        function initMap() {
            //map2
            var map2 = new google.maps.Map(document.getElementById('map2'), {
                center: {lat: -29.8587, lng: 31.0218},
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

            //markers city2
            var markers = [
                { position: {lat: <?php echo $latitude_city2_place1; ?>, lng: <?php echo $longitude_city2_place1; ?>}, title: "<?php echo $city2_place1_name ;?>", placeId: "<?php echo $city2_place1_id; ?>" },
                { position: {lat: <?php echo $latitude_city2_place2; ?>, lng: <?php echo $longitude_city2_place2; ?>}, title: "<?php echo $city2_place2_name ;?>", placeId: "<?php echo $city2_place2_id; ?>" },
                { position: {lat: <?php echo $latitude_city2_place3; ?>, lng: <?php echo $longitude_city2_place3; ?>}, title: "<?php echo $city2_place3_name ;?>", placeId: "<?php echo $city2_place3_id; ?>" },
                { position: {lat: <?php echo $latitude_city2_place4; ?>, lng: <?php echo $longitude_city2_place4; ?>}, title: "<?php echo $city2_place4_name ;?>", placeId: "<?php echo $city2_place4_id; ?>" },
                { position: {lat: <?php echo $latitude_city2_place5; ?>, lng: <?php echo $longitude_city2_place5; ?>}, title: "<?php echo $city2_place5_name ;?>", placeId: "<?php echo $city2_place5_id; ?>" },
                { position: {lat: <?php echo $latitude_city2_place6; ?>, lng: <?php echo $longitude_city2_place6; ?>}, title: "<?php echo $city2_place6_name ;?>", placeId: "<?php echo $city2_place6_id; ?>" }
            ];

            // Loop through markers array to add markers and event listeners
            markers.forEach(function(markerData) {
                var marker = new google.maps.Marker({
                    position: markerData.position,
                    map: map2,
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
 
    //$city2 = "Durban";
    $city2CountryCode = "ZA";

    $city2URL = "https://api.openweathermap.org/data/2.5/weather?q={$city2},{$city2CountryCode}&mode=xml&appid={$weather_api}";

    $city2XML = file_get_contents($city2URL);

    $city2Data = simplexml_load_string($city2XML);

    if ($city2Data === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
    }
    //  else{
    //     print_r($city2Data);
    // }
    ?>
<h1>Weather</h1>
<section>
    <div class="table-container1">
        <table class="table1">
            <tr>
                <th colspan="2" ><?php echo $city2Data->city['name'];  ?></th>
            </tr>
            <tr>
                <td>Temperature</td>
                <td><?php echo number_format(($city2Data->temperature['value'] - 273.15), 1) . '°C'; ?></td>

            </tr>
            
            <tr>
                <td>Wind</td>
                <td><?php echo $city2Data->wind->speed['value'] . 'm/s';  ?></td>
            </tr>
            
            <tr>
                <td>Humidity</td>
                <td><?php echo $city2Data->humidity['value'] . '%';  ?></td>
            </tr>
            
            <tr>
                <td>Pressure</td>
                <td><?php echo $city2Data->pressure['value'] . 'hPa';  ?></td>
            </tr>
            
            <tr>
                <td>Sunrise</td>
                <td><?php echo $city2Data->city->sun['rise'];  ?></td>
            </tr>
            
            <tr>
                <td>Sunset</td>
                <td><?php echo $city2Data->city->sun['set'];  ?></td>
            </tr>
        </table>
    </section>
    </div>

    <?php
    $city2 = "Durban";
    $city2CountryCode = "ZA";

    $city2URL = "http://api.openweathermap.org/data/2.5/forecast?q={$city2},{$city2CountryCode}&mode=xml&appid={$weather_api}";

    $city2XML = file_get_contents($city2URL);

    $city2Data = simplexml_load_string($city2XML);

    if ($city2Data === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
    }
        // else{
        //     print_r($city2Data);
        // }
    ?>
    
    <h1>Forecast</h1>
    <section>
    <div class="table-container2">
    <table class="table2">
        <tr>
            <th><?php echo $city2Data->location->name;  ?></th>
            <th>Temperature</th>
        </tr>
        <?php $count2 = 0; ?>
        <?php foreach ($city2Data->forecast->time as $time): ?>
            <?php if ($count2 % 4 == 0): // Display every 12 hours ?>
                <tr>
                    <td>Temperature at <?php echo $time['from']; ?></td>
                    <td><?php echo number_format(($time->temperature['value'] - 273.15), 1) . '°C'; ?></td>
                </tr>
            <?php endif; ?>
            <?php $count2++; ?>
        <?php endforeach; ?>
    </table>
            </section>
    </div>
    <div class="images">
    <img style="height: 175px" src= "data:image/jpeg;base64,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">
    <img style="height: 175px" src= "data:image/jpeg;base64,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">
    <img style="height: 175px" src= "data:image/jpeg;base64,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">
    <img style="height: 175px" src= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGQi3McwJbMaESfh0c_t9h_GtpWjAiBMjG-A&usqp=CAU">
            </div>
    <h1>News</h1>
    <section class ="rss">

    
    <?php


    // Fetch RSS feed
    $xml = file_get_contents($rss_feed_url);

    // Parse XML
    if ($xml) {
        $rss = simplexml_load_string($xml);

        if ($rss) {
            $items = $rss->channel->item;

            if ($items) {
                foreach ($items as $item) {
                    // Extract relevant information
                    $title = $item->title;
                    $description = $item->description;
                    $pubDate = $item->pubDate;
                    $link = $item->link;
                    
                    // Check if the title or description contains "Durban"
                    //if (stripos($title, 'Durban') !== false || stripos($description, 'Durban') !== false) {
                        // Process or display the data
                        echo "<h2>$title</h2>";
                        echo "<p>$description</p>";
                        echo "<p>Published on: $pubDate</p>";
                        echo "<p><a href='$link' target='_blank'>Read more</a></p>";
                        echo "<hr>";
                    //}
                }
            } else {
                echo "No items found in the RSS feed.";
            }
        } else {
            echo "Failed to parse the RSS feed.";
        }
    } else {
        echo "Failed to fetch the RSS feed.";
    }

    ?>
    </section>



</body>
</html>
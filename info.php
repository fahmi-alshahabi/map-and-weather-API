<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        header {
            padding: 20px;
            margin: 20px;
            color: black;
            background-color: pink;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h3, h1 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 0;
        }
        ul {
            padding: 0;
            list-style-type: none;
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        p {
            line-height: 1.6;
            text-align: center;
        }
        a {
            color: #ff0080;
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            background-color: pink;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s ease;
        }
        /* Hover effect */
        a:hover {
            background-color: grey;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Include the database connection file
        require_once "config.php";



// Check if 'id' is set in $_GET
if(isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = intval($_GET['id']);

    //get stuff from places
    $stmt = $conn->prepare("SELECT * FROM places WHERE pk_place_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //get image
    $stmt = $conn->prepare("SELECT * FROM photos WHERE places_pk_place_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //get categories
    $stmt_categories = $conn->prepare("SELECT categories.category_name FROM categories INNER JOIN places_has_categories ON categories.pk_category_id = places_has_categories.categories_pk_category_id WHERE places_has_categories.places_pk_place_id = :id");
    $stmt_categories->bindParam(':id', $id);
    $stmt_categories->execute();
    $categories = $stmt_categories->fetchAll(PDO::FETCH_COLUMN);


    // Check if result is not false
    if($result !== false) {
        // Display the retrieved information
        $place_name = $result['place_name'];
        $description = $result['place_description'];
        $link = $result['wiki_link'];
        $address = $result['Address'];
        $image_link = $image['pictures'];

        // Display other relevant information as needed
        echo "<h1>$place_name</h1>";
        echo "<h2>Category</h2>";
        echo "<ul>";
        foreach ($categories as $category) {
            echo "<li>$category</li>";
        }
        echo "</ul>";
        echo "<h3>Image</h3>";
        echo "<img src=\"$image_link\" height=\"600\" width=\"auto\">";
        echo "<h3>Description</h3>";
        echo "<header><p>$description</p></header>";
        echo "<h3>External info</h3>";
        echo "<a href=\"$link\"class=\"link\">wiki link</a>";
        echo "<br>";
        echo "Address: $address";
    } else {
        echo "Place not found!";
    }
} else {
    echo "ID not provided!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .review-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .name {
            font-size: 24px;
            color: blueviolet;
            margin-bottom: 5px;
        }

        .rating {
            font-size: 18px;
            color: gold;
            margin-left: 5px;
        }

        .review-heading {
            font-size: 20px;
            margin-top: 10px;
            color: #333;
        }

        .review-text {
            font-size: 16px;
            color: #555;
            margin-top: 5px;
        }

        hr {
            margin: 15px 0;
            border: none;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="review-container">
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'hotel');
        $sql = "SELECT * FROM review;";
        $res = mysqli_query($con, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo '<div class="review">';
                echo '<div class="name">' . $row["0"] . '</div>';
                echo '<div class="rating">Rating: ' . $row["1"] . '</div>';
                echo '<div class="review-heading">Food Review:</div>';
                echo '<div class="review-text">' . $row["2"] . '</div>';
                echo '<div class="review-heading">Website Interface Review:</div>';
                echo '<div class="review-text">' . $row["3"] . '</div>';
                echo '<hr>';
                echo '</div>';
            }
        }
        mysqli_close($con);
        ?>
    </div>
</body>
</html>

<?php
require 'database.php';
session_start();

// Fetch complaints from the database
$sql = "SELECT * FROM complaint";
$result = mysqli_query($conn, $sql);
$complaints = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;

        }

        .complaints-heading {
            text-align: center;
            margin-bottom: 30px;
            color: #333333;
            font-size: 28px;
            font-weight: bold;
        }


        .complaints {
            list-style-type: none;
            padding: 0;
        }

        .complaints li {
            background-color: #ffffff;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .complaints li h2 {
            color: #333333;
            margin: 0 0 10px;
            font-size: 24px;
            font-weight: bold;
        }

        .complaints li p {
            color: #666666;
            margin: 0;
            line-height: 1.5;
        }

        .complaints li small {
            color: #999999;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="complaints-heading">Complaints</h1>
        <ul class="complaints">
            <?php foreach ($complaints as $complaint): ?>
                <li>
                    <h2>
                        Titile :
                        <?php echo $complaint['heading']; ?>
                    </h2>
                    <p>
                        Information :
                        <?php echo $complaint['discription']; ?>
                    </p>
                    <p>
                        <span style="color:teal;"> Date :</span>
                        <?php echo $complaint['query added']; ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>
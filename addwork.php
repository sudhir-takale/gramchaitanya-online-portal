<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $headline = $_POST['headline'];
    $description = $_POST['description'];
    $typework = $_POST['type'];

    $query = "INSERT INTO $typework (name,description) VALUES ('$headline','$description')";

    if (mysqli_query($conn, $query)) {
        echo "<script >  window.alert('Successfully Added!')</script>";
        header("Location:work.php");
    } else {
        echo "error" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>gram | work done</title>
    <link rel="stylesheet" href="work.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            margin-bottom: 3%;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .form-input {
            margin-bottom: 20px;
        }

        .form-input label {
            font-weight: 500;
        }

        .form-input input[type="text"],
        .form-input textarea,
        .form-input select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            background-color: #f8f9fa;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-input input[type="text"]:focus,
        .form-input textarea:focus,
        .form-input select:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-submit {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 mx-auto">
                <form action="" method="post" class="form-container">
                    <div class="form-header">
                        Add New Work
                    </div>
                    <div class="form-input">
                        <label for="headline">Enter Headline</label>
                        <input type="text" class="form-control" id="headline" name="headline"
                            placeholder="Enter headline" required>
                    </div>
                    <div class="form-input">
                        <label for="description">Enter Work Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-input">
                        <label for="type">Select Type of Work</label>
                        <select class="form-select" name="type" id="type" aria-label="Default select example">
                            <option selected>Select type of work</option>
                            <option value="ongoing">Ongoing</option>
                            <option value="completed">Completed</option>
                            <option value="approved">Approved</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mt-4 w-25 mb-4"
                            style="margin-right: 10px; margin-left: 10px;">Submit</button>
                        <button type="reset" class="btn btn-primary mt-4 w-25 mb-4"
                            style="margin-right: 10px; margin-left: 10px;">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>

</html>
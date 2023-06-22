<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Scheme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    label {
        margin-bottom: 8px;
    }

    input {
        margin-bottom: 8px;
        height: 44px
    }
</style>

<body>
    <div class="container mt-5 w-100">

        <div class="row">
            <div class="col-md-6 offset-md-3"
                style="border:2px solid #ccc; border-radius:19px; box-shadow:1px 1px 11px black">
                <h4 class="text-center mt-3 ">Add Scheme</h4>
                <form action="process_schemes.php" method="POST">
                    <div class="form-group">
                        <label for="schemeName">Scheme Name</label>
                        <input type="text" class="form-control" id="schemeName" placeholder="Enter scheme name"
                            name="scheme_name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="decription"
                            placeholder="Enter scheme description" required></textarea>
                    </div>


                    <div class="form-group">
                        <label for="startDate">Start Date</label>
                        <input type="date" class="form-control" id="startDate" name="start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="endDate">End Date</label>
                        <input type="date" class="form-control" id="endDate" name="end_date" required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mt-4 w-25 mb-4"
                            style="margin-right: 10px; margin-left: 10px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
       ></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.4/dist/umd/popper.min.js"
        ></script>
   
</body>

</html>
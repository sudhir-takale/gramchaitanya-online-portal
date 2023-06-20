<!DOCTYPE html>
<html>

<head>
    <title>User Information</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }

        .update-form {
            display: none;
        }

        .edit-button {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".edit-button").click(function () {
                $(this).closest("tr").find(".info").hide();
                $(this).closest("tr").find(".update-form").show();
            });
        });
    </script>
</head>

<body>
    <h1>User Information</h1>
    <?php include 'fetch_user_info.php'; ?>
</body>

</html>
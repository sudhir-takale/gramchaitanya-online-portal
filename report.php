<!DOCTYPE html>
<html>

<head>
    <title>Reports</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    h1,
    h2 {
        text-align: center;
    }

    .report-list ul {
        list-style-type: none;
        padding: 0;
        margin-bottom: 20px;
    }

    .report-list li {
        margin-bottom: 10px;
    }

    .generate-report-form {
        margin-top: 20px;
        text-align: center;
    }

    .generate-report-form input,
    .generate-report-form button {
        display: block;
        margin-bottom: 10px;
    }

    .generate-report-form button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .generate-report-form button:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <div class="container">
        <h1>Reports</h1>

        <!-- Report List -->
        <div class="report-list">
            <ul>
                <?php include 'report_list.php'; ?>
            </ul>
        </div>

        <!-- Generate Report Form -->
        <div class="generate-report-form">
            <h2>Generate Report</h2>
            <form method="post" action="generate_report.php">
                <input type="text" name="report_name" placeholder="Report Name" required>
                <button type="submit">Generate Report</button>
            </form>
        </div>
    </div>
</body>

</html>
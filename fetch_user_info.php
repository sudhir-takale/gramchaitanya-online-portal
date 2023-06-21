<?php
include_once 'database.php';
// Fetch user information from the database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

// Display user information in a table
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Action</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td class='info'>" . $row["name"] . "</td>";
        echo "<td class='info'>" . $row["email"] . "</td>";
        echo "<td class='info'>" . $row["phone"] . "</td>";
        echo "<td>";
        echo "<span class='edit-button'>Edit</span>";
        echo "<form class='update-form' action='update_user_info.php' method='POST'>";
        echo "<input type='hidden' name='user_id' value='" . $row["id"] . "' />";
        echo "<input type='text' name='name' value='" . $row["name"] . "' />";
        echo "<input type='text' name='email' value='" . $row["email"] . "' />";
        echo "<input type='text' name='phone' value='" . $row["phone"] . "' />";
        echo "<input type='submit' value='Update' />";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No user information found.";
}

mysqli_close($conn);
?>
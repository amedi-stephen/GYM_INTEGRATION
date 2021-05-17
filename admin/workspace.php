<?php
include "../includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css" />
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css" />   -->
    <title>Admin</title>
</head>

<body>
    <nav>
        <h2>Admin</h2>
    </nav>
    <h1>Gyms using the app</h1>

    <table>
    <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Paid Status</th>
    </tr>
    <?php
        $sql = "SELECT * FROM gyms";
        $result = $DBconnection->query($sql) or die("Error " . $DBconnection->error);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row['gym_name']."</td>
                <td>".$row['town']."</td>
                <td>Paid monthly</td>
            </tr>";
        }
        ?>
    </table>
    <ul class="list-group bg-dark">
        
        
    </ul>
</body>

</html>
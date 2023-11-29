<?php

@include '../config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login.php');
}
// Code voor het weergeven van gebruikersinformatie in een tabel
$sql = "SELECT id, name, email, user_type FROM user_form";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Nunito.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>

<body id="page-top">
    <div id="wrapper">

        <?php include_once('partials/navbar.php'); ?>



        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Dashboard</h3>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th> <!-- kolom voor id -->
                            <th>naam</th> <!-- kolom voor namen -->
                            <th>Email</th> <!-- kolom voor emails -->
                            <th>rank</th> <!-- kolom voor user/admin -->
                            <th>Actie</th> <!-- kolom voor actieknoppen -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Gegevens weergeven in de tabel
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>"  . $row["user_type"] . "</td>";

                                // Hier voegen we de knoppen toe aan de tabelrijen
                                echo "<td><button class='btn btn-success'>Accepteer</button> <button class='btn btn-danger'>Verwijder</button> <button class='btn btn-info'>Details</button></td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>Geen gebruikers gevonden</td></tr>";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>




        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Table-With-Search-search-table.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
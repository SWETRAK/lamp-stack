<?php
    $servername = "mysql";
    $username = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD'); // hasło do bazy danych
    $dbname = getenv('MYSQL_DATABASE');

    // Połączenie z bazą danych
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Sprawdzenie połączenia
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connection with database established succesfully";

    // Zamknięcie połączenia
    $conn->close();
    ?>
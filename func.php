<?php 

$conn = mysqli_connect("localhost","root","","voting");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function voting($_post) {
    global $conn;
    $jumlah = htmlspecialchars($_post['jumlah']);
    mysqli_query($conn, "INSERT INTO voting (jumlah) VALUES ('$jumlah')");

    return mysqli_affected_rows($conn);
    
}



?>
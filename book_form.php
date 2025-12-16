<?php
$connection = mysqli_connect("localhost:3307", "root", "", "book_db");

if (!$connection) {
    die("DB Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form
        (name, email, phone, address, location, guests, arrivals, leaving)
        VALUES
        ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

    if (!mysqli_query($connection, $request)) {
        die("Insert failed: " . mysqli_error($connection));
    }

    header("Location: book.php");
    exit;

} else {
    echo "Something went wrong, please try again!";
}
?>

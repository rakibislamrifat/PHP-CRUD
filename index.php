<?php

// include the db_connection.php file
include 'db_connection.php';

// include the form.php file
include 'form.php';
include 'update.php';
include 'delete.php';


// isset function for submit button then data post method
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];


    // all file in associative array
    $file=["firstname"=>"$firstname", "lastname"=>"$lastname", "email"=>"$email"];

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('$file[firstname]', '$file[lastname]', '$file[email]')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   
}


// submit button for update the data from the form into the table

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];

    $file=["firstname"=>"$firstname", "lastname"=>"$lastname", "email"=>"$email"];

    $sql="INSERT INTO MyGuests(firstname, lastname, email)
    VALUES('$file[firstname]', '$file[lastname]', '$file[email]')";

    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



// update the data from the form into the table
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $updateFile=["id"=>"$id", "firstname"=>"$firstname", "lastname"=>"$lastname", "email"=>"$email"];

    // Update query
    $sql = "UPDATE MyGuests SET firstname='$updateFile[firstname]', lastname='$updateFile[lastname]', email='$updateFile[email]' WHERE id=$updateFile[id]";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}


// Delete the data from the tabl
if(isset($_POST['delete'])){
    $id=$_POST['id'];

    $sql="DELETE FROM MyGuests WHERE id=$id";

    if(mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . mysqli_error($conn);
    }
}










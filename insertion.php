
<?php

    $conn = mysqli_connect("localhost", "root", "", "opensource");
                if (!$conn){
                    die("Connection Failed: ".mysqli_connect_error);
                }else{
                    echo 'Connected Succesfully';
                }


 $title = $_POST['title'];
 $pages = $_POST['pages'];
 $author = $_POST['author'];
 $year= $_POST['year'];



    $query2 = "INSERT INTO books (title,pages,author,publicationyear) VALUES ('$title', '$pages', '$author', 
    '$year')";



    $result = $conn -> query($query2);

     header("Location: Addbook.php"); 

?>





<?php




 $title = $_POST['title'];
 $pages = $_POST['pages'];
 $author = $_POST['author'];
 $year= $_POST['year'];



    $query2 = "INSERT INTO userinfo (f_name,l_name,c_number,address,bdate,city,Region,state,zip) VALUES ('$title', '$pages', '$author', 
    '$year')";



    $result = $conn -> query($query2);

     header("Location: displaytable2.php"); 

?>




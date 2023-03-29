<?php include('server/conadmin.php');
 
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$sql = "INSERT INTO ebook(firstname, lastname, email, tel)
VALUES('$firstname','$lastname','$email','$tel')"; 
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con);
    if($result){
    echo "<script type='text/javascript'>";
    //echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
   //echo "window.location = 'type.php'; ";
    echo "window.location.href = 'https://player.flipsnack.com?hash=QzY4RkY4RUVGQjUreGs4NDk1a3Z4bg==';";
    echo "</script>";
    }
    //else{
    echo "<script type='text/javascript'>";
    echo "alert('ข้อมูลผิดพลาด');";
    echo "window.location = 'type.php'; ";
    echo "</script>";
//}
?>

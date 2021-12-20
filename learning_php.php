<?php
//students is a associative array which contains three elements amit, rahul and chandan. 
//amit, rahul, chandan also an associative array which contains their marks as physics, maths, chemistry.
$students = array(
     "amit" => array(
          "physics"=>88,
          "maths"=>78,
          "chemistry"=>95
     ),
     "rahul" => array(
          "physics"=>88,
          "maths"=>78,
          "chemistry"=>95
     ),
     "chandan" => array(
          "physics"=>78,
          "maths"=>98,
          "chemistry"=>74
     )
);

foreach($students as $student_name=>$subjects){//took array $students which we have $student_name  as index and $subjects as a valued subjects array/list
     foreach($subjects as $subject=>$mark){//took array $subjects which have $subject as index and $marks as value  
          echo $student_name .'has '.  $mark. 'in '. $subjects. "\n";
     };
};

?>

<?php
//To fetch data
//step 1: mysqli_connect() then catch error
//step 2: sql query
//step 3: mysqli_query() then cathc error

$hostname= "localhost";
$username="root";
$db_password= "";
$db_name = "test";
$conn = mysqli_connect($hostname, $username, $db_password, $db_name);
if(!$conn){
     echo "connection failed ". mysqli_connect_error();
     exit;
}

$name = $_POST['name_in_the_form'];
$email = $_POST['email_in_form'];
$pass = $_POST['pass_in_form'];
$sql = "INSERT INTO users(username, email, password) VALUES ('$name', '$email', '$pass')";

$result = mysqli_query($conn, $sql);
if(!$result){
     echo "error: ". mysqli_error($conn);
     exit;
}

echo "registration successful";

mysqli_close($conn);

?>

<?php
//To fetch data from db
//step 1: mysqli_connect() then catch error
//step 2: sql query
//step 3: mysqli_query() then cathc error
session_start();//to start session

$hostname= "localhost";
$username="root";
$db_password= "";
$db_name = "test";
$conn = mysqli_connect($hostname, $username, $db_password, $db_name);
if(!$conn){
     echo "connection failed ". mysqli_connect_error();
     exit;
}

$user = $_POST['name_inthe_form'];
$email = $_POST['email_inthe_form'];
$sql = "SELECT * FROM users WHERE email = '$email' AND username='$user'";

$result = mysqli_query($conn, $sql);
if($result){
     setcookie("user_id", $row['email'], time()+3600);
     setcookie("user_name", $row['username'], time()+3600);
     $_SESSION["user_id"]=$row['email'];
     $_SESSION["user_name"]=$row['username'];//stored our data in session
     echo $row['name'] ."<br/>";
}

mysqli_close($conn);

?>

<?php
echo "helo";
if(true){
     echo "true";
     ?>
     <a href="learning_php.php">go to</a>
     <?
}else{
     echo "false";
}

?>
 

<?php
session_start();
if(isset($_SESSION['user_id'])){
     $user_id = $_SESSION['user_id'];
     $user_name = $_SESSION['user_name'];
}

echo "Hello ". $user_name;
?>

<?php
//To destroy session

session_start();//we have to first start the session 
session_destroy();//then destroy it
//otherwise it will throw error
?>
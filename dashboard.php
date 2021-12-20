<?php session_start();
include "./db/db_connect.php";
if (!isset($_SESSION['user_id'])) {
  header("location: index.php");
  die();
}
$user_id = $_SESSION['user_id'];
$user_info = " SELECT * FROM users WHERE id = '$user_id' ";

$result = mysqli_query($conn, $user_info);

if(!$result){
  echo "erorr: ". mysqli_error($conn);
}

$row  = mysqli_fetch_assoc($result);
$_SESSION['email'] = $row['email'];
$_SESSION['phone'] = $row['phone'];
$_SESSION['college_name'] = $row['college_name'];
$_SESSION['gender'] = $row['gender'];

$sql_2 = "SELECT * 
            FROM interested_users_properties iup
            INNER JOIN properties p ON iup.property_id = p.id
            WHERE iup.user_id = $user_id";
$result_2 = mysqli_query($conn, $sql_2);
if (!$result_2) {
    echo "Something went wrong!";
    return;
}
$interested_properties = mysqli_fetch_all($result_2, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php include "./components/head_links.php" ?>
  <link href="css/dashboard.css" rel="stylesheet" />
  <link href="css/property_list.css" rel="stylesheet" />
  <title> Your dashboard </title>
</head>

<body>
  <?php include "./components/header.php" ?>
  <div id="loading"></div>
  <div class="user_info">
    <div class="user_box mx-auto">
      <div>
        <h1 class="user_heading">My Profile</h1>
      </div>
      <div class="d-flex" >
        <div class="user_icon"><img src="./img/profile.png" /></div>
        <div class="user_details">
          <ul>
            <li>
              <h3><?php echo $_SESSION['name'] ?></h3>
            </li>
            <li>
              <p><?php echo $_SESSION['email']?></p>
            </li>
            <li>
              <p><?php echo $_SESSION['college_name']?></p>
            </li>
            <li>
              <p><?php echo $_SESSION['phone'] ?></p>
            </li>
            <li>
              <p><?php echo $_SESSION['gender'] ?></p>
            </li>
          </ul>
        </div>
        <div class="user_edit">
          <a href="#">Edit</a>
        </div>
      </div>

    </div>
  </div>
  <?php
    if (count($interested_properties) > 0) {
    ?>
        <div class="my-interested-properties">
            <div class="page-container">
                <h1>My Interested Properties</h1>

                <?php
                foreach ($interested_properties as $property) {
                    $property_images = glob("img/properties/" . $property['id'] . "/*");
                ?>
                    <div class="property-card property-id-<?= $property['id'] ?> row">
                        <div class="image-container col-md-4">
                            <img src="<?= $property_images[0] ?>" />
                        </div>
                        <div class="content-container col-md-8">
                            <div class="row no-gutters justify-content-between">
                                <?php
                                $total_rating = ($property['rating_clean'] + $property['rating_food'] + $property['rating_safety']) / 3;
                                $total_rating = round($total_rating, 1);
                                ?>
                                <div class="star-container" title="<?= $total_rating ?>">
                                    <?php
                                    $rating = $total_rating;
                                    for ($i = 0; $i < 5; $i++) {
                                        if ($rating >= $i + 0.8) {
                                    ?>
                                            <i class="fas fa-star"></i>
                                        <?php
                                        } elseif ($rating >= $i + 0.3) {
                                        ?>
                                            <i class="fas fa-star-half-alt"></i>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="far fa-star"></i>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="interested-container">
                                    <i class="is-interested-image fas fa-heart" property_id="<?= $property['id'] ?>"></i>
                                </div>
                            </div>
                            <div class="detail-container">
                                <div class="property-name"><?= $property['name'] ?></div>
                                <div class="property-address"><?= $property['address'] ?></div>
                                <div class="property-gender">
                                    <?php
                                    if ($property['gender'] == "male") {
                                    ?>
                                        <img src="img/male.png">
                                    <?php
                                    } elseif ($property['gender'] == "female") {
                                    ?>
                                        <img src="img/female.png">
                                    <?php
                                    } else {
                                    ?>
                                        <img src="img/unisex.png">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="rent-container col-6">
                                    <div class="rent">₹ <?= number_format($property['rent']) ?>/-</div>
                                    <div class="rent-unit">per month</div>
                                </div>
                                <div class="button-container col-6">
                                    <a href="property_detail.php?property_id=<?= $property['id'] ?>" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
  <?php
    }else{
  ?>
  <div class="container text-center">
    <h2>Currently you have no interested property!</h2>
    <p ><a href="index.php">browse some PG</a></p>
  </div>
  <?php
    }
  ?>
  <?php include "./components/footer.php" ?>
</body>

</html>
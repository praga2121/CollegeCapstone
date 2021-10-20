<?php
require '../config.php';

include '../support elements/admin-nav.php';

if (isset($_POST['added'])) {
    $collegename = $_POST["collegename"];
    $college_description = $_POST["college_description"];


  if (!empty($collegename) && !empty($overall) && !empty($performance) && !empty($facilities) && !empty($price) && !empty($academic)) {
    $query = "INSERT INTO colleges (name, overall, teachingperformance, facilities, price, academicreputation, college_description) VALUES ('$collegename', '$overall', '$performance', '$facilities', '$price', '$academic', '$college_description')";
    if (@mysqli_query($conn, $query)) {
      echo '<!DOCUMENT html>';
      echo '<html>';
      echo '<head>';
      echo '<title>Success | Admin Panel</title>';
      echo '<link rel="stylesheet" href="../resources/style-admin.css">';
      echo '<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">';
      echo '</head>';
      echo '<body>';
      echo '<div class="main-container">';
      echo '<h1>Database Updated Successfully</h1>';
      echo '<a href = "listing.php">Back to college listings</a>';
      echo '</div>';
      echo '</body>';
      echo '</html>';
    } else {
      print mysqli_error($conn);
    }
  }
} else {
  echo '<!DOCUMENT html>';
  echo '<html>';
  echo '<head>';
  echo '<title>Add College | Admin Panel</title>';
  echo '<link rel="stylesheet" href="../../css/style-admin.css">';
  echo '<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">';
  echo '</head>';
  echo '<body>';
  echo '<div class="main-container">';
  echo '<h1 align="center">New College</h1>';
  echo '<div class="form-center">';
  echo '<form action = "admin.php" method="POST">';
  echo '<label for="collegename">College Name: </label>';
  echo '<input type="text" name="collegename" id="collegename"/>';
  echo '<br/>';
  echo '<br/>';
  echo '<textarea rows="4" cols="50" name="college_description" id="college_description" form="edit-form" placeholder="Description"></textarea>';
  echo '<br/>';
  echo '<br/>';
  echo '<br/>';
  echo '<input class="edit-button" type="submit" name="submit" value="Add college"/>';
  echo '<input type=\'hidden\' name=\'added\' value=\'true\'/>';
  echo '</div>';
  echo '</form>';
  echo '</div>';
  echo '</body>';
  echo '</html>';
}

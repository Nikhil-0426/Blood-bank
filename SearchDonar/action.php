<?php
  require_once 'config.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = "SELECT `Blood_Grp` FROM donar_registration WHERE `Blood_Grp`='$inpText';";
    $stmt = mysqli_query($db, $sql);
    $stmt-> execute(['Blood_Grp' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['Blood_Grp'] . '</a>';
        echo
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }

?>
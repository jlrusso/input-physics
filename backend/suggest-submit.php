<?php 
if(isset($_POST['submit'])){
  include_once "dbconn.php";
  $content = mysqli_real_escape_string($conn, $_POST["topic"]);
  date_default_timezone_set("America/Los_Angeles");
  $suggDate = date("d-m-Y", time()) . " "  . date("h:i:s a");
  $insert = "INSERT INTO suggestions (chosen_topic, suggestion_date) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $insert)){
    header("Location: ../input-physics/home/index.php?stmt-error");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "ss", $content, $suggDate);
    mysqli_stmt_execute($stmt);
    header("Location: ../input-physics/home/index.php?suggestion-sent");
    exit();
  }
}
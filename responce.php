<?php
date_default_timezone_set('Asia/Tokyo');
$date_ = date("Y/m/d");
$time_ = date("H:i:s");
$data = array(
  "status" => "",
  "date" => $date_,
  "time" => $time_
);
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $data["status"] = "Success";
}
echo json_encode($data);

?>
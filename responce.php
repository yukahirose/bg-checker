<?php
date_default_timezone_set('Asia/Tokyo');
$time_ = date("Y/m/d H:i:s");
$data = array(
  "status" => "",
  "time" => $time_
);
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $data["status"] = "Success";
}
echo json_encode($data);

?>
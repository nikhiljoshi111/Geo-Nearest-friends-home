<?php
$Address = "C/7, Om Parshwanath CHSL, Saibaba Nagar, Borivali (West), mumbai, india";
$Address = urlencode($Address);
  $request_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$Address."&sensor=true";
    $data = @file_get_contents($request_url);
$data_op = json_decode($data);
print_r($data_op->results);

/*  $xml = simplexml_load_file($request_url) or die("url not loading");
 $status = $xml->status;
  if ($data_op->status=="OK") {
      $Lat = $xml->result->geometry->location->lat;
      $Lon = $xml->result->geometry->location->lng;
      echo $LatLng = "$Lat,$Lon";
  }*/
?>

<?php
  header("Content-type: application/json; charset=utf-8");
  $result = array();
  try {
    $input_data = json_decode(trim(file_get_contents('php://input')), true);
    if (!$input_data) throw new Exception('invalid input');
    
    $FID = $input_data['FID'];
    $Id = $input_data['Id'];
    $Name = $input_data['Name'];
    $zone = $input_data['zone'];
    $owner = $input_data['owner'];
    $resp_pers = $input_data['resp_pers'];
    $height = $input_data['height'];
    $floor = $input_data['floor'];
    $area_sqm = $input_data['area_sqm'];
    $bldg_m = $input_data['bldg_m'];
    $td_model = $input_data['3d_model'];
    $lat = $input_data['lat'];
    $long = $input_data['long'];
    $attach = $input_data['attach'];

    $i = 0;
    $newdata = [];
    $filepath = "resources/csv/building_table.csv";
    $readfile = file_get_contents($filepath);
    $filecontent = explode("\n", $readfile);
    $newfilecontent = '';
    foreach($filecontent as $line)
    {
      $data = explode(",", $line);
      if($newfilecontent != '') $newfilecontent .= "\n";
      if ($data[0] == $FID) {
        $newdata_line = array(
          $FID,
          $Id, 
          $Name,
          $zone,
          $owner,
          $resp_pers,
          $height,
          $floor,
          $area_sqm,
          $bldg_m,
          $td_model,
          $lat,
          $long,
          $attach
        );
        $newfilecontent .= implode(",", $newdata_line);
        array_push($newdata, $newdata_line);
      }
      else {
        $newfilecontent .= $line;
        array_push($newdata, $data);
      }
    }
    
    file_put_contents($filepath, $newfilecontent);
    $result = array(
      'status' => 'success'
    );
  } catch (Exception $e) {
    $result = array(
      'status' => 'failed',
      'detail' => $e->getMessage()
    );
  }
  echo json_encode($result, true);
?>
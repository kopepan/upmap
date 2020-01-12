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
    $sci_name = $input_data['sci_name'];
    $Specie = $input_data['Specie'];
    $spec_code = $input_data['spec_code'];
    $thai_name = $input_data['thai_name'];
    $local_name = $input_data['local_name'];
    $dbh_cm = $input_data['dbh_cm'];
    $height_m = $input_data['height_m'];
    $crow_cov_s = $input_data['crow_cov_s'];
    $td = $input_data['3d'];
    $date_surve = $input_data['date_surve'];
    $status = $input_data['status'];
    $lat = $input_data['lat'];
    $long = $input_data['long'];
    $detail = $input_data['detail'];
    $attach = $input_data['attach'];

    $i = 0;
    $newdata = [];
    $filepath = "resources/csv/tree_table.csv";
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
          $sci_name,
          $Specie,
          $spec_code,
          $thai_name,
          $local_name,
          $dbh_cm,
          $height_m,
          $crow_cov_s,
          $td,
          $date_surve,
          $status,
          $lat,
          $long,
          $detail,
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
    $result = $newdata;
    
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
<?php
  header("Content-type: application/json; charset=utf-8");
  $result = array();
  try {
    $input_data = json_decode(trim(file_get_contents('php://input')), true);
    if (!$input_data) throw new Exception('invalid input');
    
    $FID = $input_data['FID'];

    $i = 0;
    $newdata = [];
    $filepath = "resources/csv/building_table.csv";
    $readfile = file_get_contents($filepath);
    $filecontent = explode("\n", $readfile);
    $newfilecontent = '';
    foreach($filecontent as $line)
    {
      $data = explode(",", $line);
      if ($data[0] == $FID) {
      }
      else {
        if($newfilecontent != '') $newfilecontent .= "\n";
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
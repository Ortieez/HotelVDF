<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

if (isset($_REQUEST['mode'])) {
  if ($_REQUEST['mode'] == 'upload') {
    try {
      $password = $_REQUEST['password'];
      if (isset($_POST['password']) || empty($_POST['password'])) {
        if ($password == "8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab4abba918") {
          $data = file_get_contents('php://input');
          $file = fopen('DB.csv', 'w');
          fwrite($file, $data);
          fclose($file);
          echo json_encode(array('success' => 'File uploaded successfully', 'code' => 200));
        } else {
          echo json_encode(array('error' => 'Password is incorrect', 'code' => 400));
        }
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
} else {
  $csv = array_map('str_getcsv', file('DB.csv'));

  $content = [];
  $headers = array_shift($csv);

  for ($i = 0; $i < count($csv); $i++) {
    $content[$i] = array_combine($headers, $csv[$i]);
  }

  $content = array_merge_recursive($content[0], $content[1], $content[2], $content[3], $content[4], $content[5]);

  $FILTERED = array_map(function ($sub_array) {
    return array_filter($sub_array, function ($value) {
      return $value !== "";
    });
  }, $content);

  header('Content-Type: application/json');
  echo json_encode($FILTERED);
}

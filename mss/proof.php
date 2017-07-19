<?php
  $dbh = OCILogon( "SED", "SED", "//192.168.105.89:1527/ROP" );
  if ($dbh == NULL) {
    print "DB Connection Error!!";
  } else {
    $sql = "SELECT table_name FROM all_tables";
    $stmt = OCIParse($dbh, $sql);
    if (!$stmt) {
      print "DB Search Error!!";
    } else {
      OCIExecute($stmt);
      $rows = OCIFetchstatement($stmt, $results);
      if ($rows > 0) {
        for ($i = 0; $i < $rows; $i++) {
          print $results["TABLE_NAME"][$i] . "<br>";
        }
      }   
    }
    OCIFreeStatement($stmt);
    OCILogoff($dbh);
  }
?>

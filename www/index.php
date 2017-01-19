<?php

echo "<p>php/mysql connection test:</p>";

# Fill our vars and run on cli
# $ php -f db-connect-test.php
$dbname = 'project';
$dbuser = 'project';
$dbpass = 'project';
$dbhost = 'mysql';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($connect, $dbname) or die("Could not open the db '$dbname'");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($connect, $test_query);
$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

echo '<p>';

if (!$tblCnt) {
  echo "There are no tables";
} else {
  echo "There are $tblCnt tables";
}

echo " in the $dbname database.</p>";

# PHP details
phpinfo();

?>

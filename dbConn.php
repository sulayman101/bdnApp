$servername = "MYSQL5038.site4now.net";
$username = "a799ac_xallye";
$password = "Xalliye@123";

$dbName = "db_a799ac_xallye";
//*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if (!$conn) {
  echo "Connection failed: ";
}

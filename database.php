<? include "database.php"



class database {
	

	public $servername = "localhost";
	public $username = "username";
	public $password = "password";


	$conn= new mysqli($servername, $username , $password);

	if ($conn->connect_error) {

	die("connection failed:" $conn->connect_error)
	}
}

?>
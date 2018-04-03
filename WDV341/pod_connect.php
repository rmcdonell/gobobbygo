Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Explore
 @rmcdonell
Sign out
0
0 0 rmcdonell/wdv341
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Insights
wdv341/unit12/connect.php
6deb7a5  28 days ago
 justin pod prepared statement
     
40 lines (36 sloc)  1.04 KB
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "wdv341";
		try {
    		$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    		// set the PDO error mode to exception
    		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		echo "Connected successfully"; 
			
			    // prepare sql and bind parameters
    		$stmt = $conn->prepare("INSERT INTO wdv341_event (event_name) 
    		VALUES (:event_name)");
    		$stmt->bindParam(':event_name', $event_name);
    		//$stmt->bindParam(':event_description', $event_description);
    		//$stmt->bindParam(':event_presenter', $event_presenter);
    		// insert a row
    		$event_name = "PHP Day";
    		//$event_description = "A day to remember ";
    		//$email = "john@example.com";
    		$stmt->execute();
    		}
			catch(PDOException $e)
    		{
    		echo "Connection failed: " . $e->getMessage();
    		}
?>
</body>
</html>
© 2018 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
About
Press h to open a hovercard with more details.
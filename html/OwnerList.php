<?php
	require_once "dbDetails.php";		

	$conn=mysqli_connect(HOST,USER,PASS);		

	if(mysqli_connect_errno($conn))
	{
		echo "Fail to connect to MYSQL: " . msqli_connect_error();
	}
	mysqli_set_charset($conn,"utf8");	
	//디비 선택
	mysqli_select_db($conn, DB);

	//echo "connection success";

	$query = "SELECT ownerImagepath, ownerName, ownerAddress, ownerId FROM Owner WHERE ownerState = 1 ORDER BY ownerName";
	
	//echo $query;
	
	$res = mysqli_query($conn, $query);	
	
	$rows = array();
	$result = array();

	while($row = mysqli_fetch_array($res))
	{
		$rows["imagepath"] = $row[0];
		$rows["name"] = $row[1];
		$rows["address"] = $row[2];
		$rows["id"] = $row[3];
		array_push($result, $rows);
	}
	echo json_encode(array("results"=>$result));
	
	mysqli_close($conn);	

?>
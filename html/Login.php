<?php
	require_once "dbDetails.php";

	$conn = mysqli_connect(HOST, USER, PASS);

	if(mysqli_connect_errno())
	{
		echo "접속 실패";
	}
	mysqli_set_charset($conn, "utf8");
	mysqli_select_db($conn, DB);
	
	//$userid = $_post['userid'];
	$query = "select * from custom";
	//연결된 데이터베이스에 위에서 작성한 쿼리를 전송하고
	//그 결과값을 res변수에 저장
	$res = mysqli_query($conn, $query);
	
	//Json Array 형식으로 가공하기 위하여 배열 선언
	$rows = array();
	$result = array();

	while($row = mysqli_fetch_array($res))
	{
		$rows["id"] = $row[0];
		$rows["pass"] = $row[1];
		$rows["desc"] = $row[2];
		$rows["etc"] = $row[3];
		//$rows에 들어간 데이터들을 $result배열에 ADD
		array_push($result, $rows);
	}
	//JSON Encode를 활용하여 result 배열 인코딩
	echo json_encode(array("results"=>$result));

	mysqli_close($conn);
?>
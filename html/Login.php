<?php
	require_once "dbDetails.php";

	$conn = mysqli_connect(HOST, USER, PASS);

	if(mysqli_connect_errno())
	{
		echo "���� ����";
	}
	mysqli_set_charset($conn, "utf8");
	mysqli_select_db($conn, DB);
	
	//$userid = $_post['userid'];
	$query = "select * from custom";
	//����� �����ͺ��̽��� ������ �ۼ��� ������ �����ϰ�
	//�� ������� res������ ����
	$res = mysqli_query($conn, $query);
	
	//Json Array �������� �����ϱ� ���Ͽ� �迭 ����
	$rows = array();
	$result = array();

	while($row = mysqli_fetch_array($res))
	{
		$rows["id"] = $row[0];
		$rows["pass"] = $row[1];
		$rows["desc"] = $row[2];
		$rows["etc"] = $row[3];
		//$rows�� �� �����͵��� $result�迭�� ADD
		array_push($result, $rows);
	}
	//JSON Encode�� Ȱ���Ͽ� result �迭 ���ڵ�
	echo json_encode(array("results"=>$result));

	mysqli_close($conn);
?>
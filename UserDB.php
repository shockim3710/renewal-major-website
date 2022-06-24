<?php
$conn = mysqli_connect(
  'localhost',
  'cse',
  'cse2021',
  'cseWeb');
  $conn->set_charset("utf8");
?>

<table>
<th>이름　　</th> 
<th>성별　</th> 
<th>　휴대폰 번호　　</th> 
<th>　　　　이메일　　　　</th> 
<th>패스워드</th>

 <?php
$sql = "SELECT * FROM myMember";
$result = mysqli_query($conn, $sql);
?> 

<?php
 while($row = mysqli_fetch_array($result)) { ?> 
     <tr> 
      
     <td><?php echo $row["user_name"]; ?></th> 
     <td><?php echo $row["user_sex"]; ?></th>
    <td><?php echo $row["user_phone"]; ?></th> 
    <td><?php echo $row["user_email"]; ?></th> 
    <td><?php echo $row["user_pw"]; ?></th>
    </tr> 
    
    <?php 
    } ?>
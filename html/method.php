<?php 
    $conn = mysqli_connect('localhost', 'cse','cse2021', 'cseWeb');
    $conn->set_charset("utf8");
    $u_name = $_POST['u_name'];
    $sex = $_POST['sex'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pw = $_POST['pw'];

    $result = mysqli_query($conn, "INSERT INTO myMember(u_name, sex, tel, email, pw)
                  VALUES('".$u_name."','".$sex."','".$tel."','".$email."','".$pw."')") or die ("디비연결실패.");
    echo '<h1>회원가입이 완료되었습니다.</h1>';
    echo '　　　　　<a href="select.php"><button type="button">회원정보 조회</button></a>';
?>

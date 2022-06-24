<?php
    
    $server = 'localhost';
    $dbuser = 'cse';
    $dbpw = 'cse2021';
    $dbName = 'cseWeb';
   

    
    $u_name = $_POST['u_name'];
    $sex = $_POST['sex'];
    $tel = $_POST['tel'];
    $pw  = $_POST['pw'];
    $email = $_POST['email'];
    
    $conn = new mysqli($server, $dbuser, $dbpw, $dbName);
    $conn->set_charset("utf8");
    $conn -> query("update myMember
                            set u_name = '".$u_name."',
                                sex = '".$sex."',
                                tel = '".$tel."',
                                pw = '".$pw."'
                                where email = '".$email."'");
        echo '<script> alert("정보가 수정되었습니다.");</script>';
    $conn ->close();
    echo '성공';
?>

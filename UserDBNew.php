<?php 
    $user_name = $_POST['user_name'];
    $user_sex = $_POST['user_sex'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];
    $user_pw = $_POST['user_pw'];

    $server = "localhost";
    $db_user = "cse";
    $db_pw = "cse2021";
    $db_name = "cseWeb";
   
    $conn = new mysqli($server, $db_user, $db_pw, $db_name);
    $conn->set_charset("utf8");
    $conn -> query("update myMember
                        set user_name = '".$user_name."',
                            user_sex = '".$user_sex."',
                            user_phone = '".$user_phone."',
                            user_pw = '".$user_pw."'
                        where user_email = '".$user_email."'");
    $conn->close();
    echo '회원정보가 수정되었습니다.<br />';
    echo '<a href="UserDB.php"><button type="button">회원정보 조회</button></a>';
    echo '　<a href="UserDBChange.php"><button type="button">회원정보 수정</button></a>';
?>
<?php include "db.php";

if($_POST['user_pw'] != $_POST['password1']){
      echo '<script>alert("비밀번호가 맞지 않습니다."); history.back(); </script>';
}
else{
      $user_name = $_POST['user_name']; 
      $user_sex = $_POST['user_sex']; 
      $user_phone = $_POST['user_phone']; 
      $user_email = $_POST['user_email']; 
      $user_pw = $_POST['user_pw'];

      $result = mysqli_query($conn, "INSERT INTO myMember(user_name, user_sex, user_phone, user_email, user_pw)
                  VALUES('".$user_name."','".$user_sex."','".$user_phone."','".$user_email."','".$user_pw."')") or die ("이미 가입된 이메일 입니다.");
      echo '<h1>회원가입이 완료되었습니다.</h1>';
      echo '　　　　　<a href="UserDB.php"><button type="button">회원정보 조회</button></a>';
      echo '　　<a href="UserDBChange.php"><button type="button">회원정보 수정</button></a>';
} ?>
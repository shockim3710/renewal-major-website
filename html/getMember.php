<?php
    $email = $_GET['email'];
    $pw = $_GET['pw'];
    
    $server = 'localhost';
    $dbuser = 'cse';
    $dbpw = 'cse2021';
    $dbName = 'cseWeb';

    $conn = new mysqli($server, $dbuser, $dbpw, $dbName);
    $conn->set_charset("utf8"); 
    
    $sql = "SELECT * FROM myMember WHERE email = '".$email."'";
    $result = $conn->query($sql);
    
    if ($row = $result->fetch_assoc()){
            echo '<div>';
            echo '<ul>';
            echo '  <li>이름 <input type="text" name="u_name" value="'.$row['u_name'].'"></li>';
            echo '  <li>성별 <input type="radio" name="sex" value="남자">남자
                            <input type="radio" name="sex" value="여자">여자</li>';
            echo '  <li>휴대폰번호 <input type="text" name="tel" value="'.$row['tel'].'"></li>';
            echo '  <li>비밀번호 <input type="text" name="pw" value="'.$row['pw'].'"></li>';
    }
    else{
        echo '해당 이메일의 회원정보가 없다.';
    }
    $result -> close();
    $conn -> close();
?>

<!doctype html>
    <tag>
        <script>
        var radioVal = '<?= $row['sex'] ?>'
        $.fn.radioSelect = function(val) {
        this.each(function() {
            var $this = $(this);
            if($this.val() == val)
                $this.attr('checked', true);
            });
            return this;
        };
        $(":radio[name='sex']").radioSelect(radioVal);
        </script>
    </tag>
</html>
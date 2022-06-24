<?php
    $user_email = $_GET['user_email'];

    $server = "localhost";
    $db_user = "cse";
    $db_pw = "cse2021";
    $db_name = "cseWeb";

    $conn = new mysqli($server, $db_user, $db_pw, $db_name);
     $conn->set_charset("utf8");

    $sql = "SELECT * FROM myMember WHERE user_email = '".$user_email."'";
    $result = $conn->query($sql);

        if($row = $result -> fetch_assoc()){
            echo '<pre>';
            echo '<div>';
            echo ' 이름               <input type="text" name="user_name" value="'.$row['user_name'].'" required><br />';
            echo ' 성별               <input type="radio" name="user_sex" value="남자" required>남자　<input type="radio" name="user_sex" value="여자" required>여자<br />';
            echo ' 휴대폰번호         <input type="text" name="user_phone" value="'.$row['user_phone'].'" pattern="^\d{3}-\d{4}-\d{4}$" required><br />';
            echo ' 패스워드(6-8 글자) <input type="password" name="user_pw" value="'.$row['user_pw'].'" minlength="6" maxlength="8" required><br />';
            echo '</div>';
            echo '</pre>';
            echo '　　　　　　　　<input type="submit" value="수정하기">';
        }
        else{
            echo '해당 이메일의 회원정보가 없습니다.';
        }

        $result -> close();
        $conn -> close();
    ?>

<!doctype html>
    <tag>
        <script>
        var radioVal = '<?= $row['user_sex'] ?>'
        $.fn.radioSelect = function(val) {
        this.each(function() {
            var $this = $(this);
            if($this.val() == val)
                $this.attr('checked', true);
            });
            return this;
        };
        $(":radio[name='user_sex']").radioSelect(radioVal);
        </script>
    </tag>
</html>
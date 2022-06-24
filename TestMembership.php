<!DOCTYPE html>
<head>
    <script>

        function phone_num(phone_type) {
            var phone_input = document.getElementById('msg');
            var phone_type = document.getElementById('user_phone');
            var phone_verification = /^\d{3}-\d{4}-\d{4}$/;

            if (phone_type.value.match(phone_verification)){
            phone_input.innerHTML = "";
            }
            else{
            phone_input.innerHTML = " 000-0000-0000 형태의 전화번호를 입력하세요.";
            }
        }

        function emailF() {
            var email_input = document.getElementById('msg1'); 
            var email_type = document.getElementById('user_email');
            var email_verification = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/;

            if (email_type.value.match(email_verification)){
            email_input.innerHTML = "";
            }
            else{
            email_input.innerHTML = " abc@def.com 형태의 이메일을 입력하세요.";
            }
        }

        function checkPassword() {
            var min = 6; 
            var max = 8;
            var checkPassword_input = document.getElementById('msg2');
            var checkPassword_type = document.getElementById('user_pw').value; 

            if (checkPassword_type.length >= min && checkPassword_type.length <= max){
            checkPassword_input.innerHTML = "";
            }
            else {
            checkPassword_input.innerHTML = " 비밀번호를 6글자 이상 8글자 이하로 입력하세요.";
            }
        }

        function matchPassword(){ 
            var matchPassword_input = document.getElementById('msg3');  
            var matchPassword_type1 = document.getElementById('user_pw').value;
            var matchPassword_type2 = document.getElementById('password1').value;

            if (matchPassword_type1 == matchPassword_type2){
            matchPassword_input.innerHTML = "";
            }
            else {
            matchPassword_input.innerHTML = " 비밀번호가 일치하지 않습니다.";
            }
        }

    </script>
</head>

<body>
    <form method="POST" action="connectDB.php">
        <h1>회원 신청서 </h1>
        <pre>
이름               <input type="text" name="user_name" size="20" required><br />
성별               <input type="radio" name="user_sex" value="남자" required>남자　<input type="radio" name="user_sex" value="여자" required>여자<br />
휴대폰 번호        <input type="text" id="user_phone" name="user_phone" pattern="^\d{3}-\d{4}-\d{4}$"  onkeyup="phone_num()" required><em id="msg"> </em><br/>
이메일             <input type="text" id="user_email" name="user_email" pattern="^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$"onkeyup="emailF()" required><em id="msg1"> </em><br />
패스워드(6-8 글자) <input type="password" id="user_pw" name="user_pw" minlength="6" maxlength="8" onkeyup="checkPassword()" required><em id="msg2"> </em><br />
패스워드 검증      <input type="password" id="password1" name="password1" minlength="6" maxlength="8" onkeyup="matchPassword()"><em id="msg3"> </em><br />
                   <input type="submit" value="제출"><br />
        </pre>
    </form>
</body>
</html>
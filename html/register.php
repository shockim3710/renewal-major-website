<!DOCTYPE html>

<head>

    <script>

        function F_email()
        {
            var e_status = document.getElementById('msg1'); 
            var e_elem = document.getElementById('email');
            var e_exp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/;
             if (e_elem.value.match(exp))            
                e_status.innerHTML="";
            else
                e_status.innerHTML = "올바른 이메일을 입력하시오!";
        }

         function F_tel(t_elem) {
                var t_status = document.getElementById('msg');
                var t_elem = document.getElementById('tel');
                var t_exp = /^\d{3}-\d{4}-\d{4}$/;
                if (t_elem.value.match(t_exp))
                    t_status.innerHTML = "";
                else
                    t_status.innerHTML = "000-0000-0000 형태의 전화번호로 정확히 입력하세요.";
            }

        function checkPassword()
        {
            var cp_min = 6; 
            var cp_max = 8;
            var cp_status = document.getElementById('msg2');
            var cp_elem = document.getElementById('pw').value; 
             if (cp_elem.length >= cp_min && cp_elem.length <= cp_max)
                cp_status.innerHTML= "좋아요!";
            else
                cp_status.innerHTML = "비밀번호 다시 입력!";
        }

        function matchPassword()
        { 
            var mp_status = document.getElementById('msg3');  
            var mp_elem1 = document.getElementById('pw').value;
            var mp_elem2 = document.getElementById('pw1').value; 

            if (mp_elem1 == mp_elem2)
                mp_status.innerHTML= "일치!";
           else
                mp_status.innerHTML = "비밀번호가 맞지 않습니다!";
        }
    </script>
</head>
<body>
    <form method="POST" action="method.php"> 
        <h1>회원 가입란 </h1>
        <pre>

이름               <input type="text" name="u_name" size="20" required><br />
성별               <input type="radio" name="sex" value="남자" required>남자　<input type="radio" name="sex" value="여자" required>여자<br />
휴대폰 번호        <input type="text" id="tel" name="tel" pattern="^\d{3}-\d{4}-\d{4}$"  onkeyup="F_tel()" required><em id="msg"> </em><br/>
이메일             <input type="text" id="email" name="email" pattern="^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$"onkeyup="F_email()" required><em id="msg1"> </em><br />
패스워드(6-8 글자) <input type="password" id="pw" name="pw" minlength="6" maxlength="8" onkeyup="checkPassword()" required><em id="msg2"> </em><br />
패스워드 검증      <input type="password" id="pw1" name="pw1" minlength="6" maxlength="8" onkeyup="matchPassword()"><em id="msg3"> </em><br />
                   <input type="submit" value="제출"><br />             
                    
</pre>
    </form>
</body>
</html>

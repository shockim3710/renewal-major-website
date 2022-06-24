<form method="POST" action="method.php",action="select.php">
<h1>회원 가입란 </h1> 
이름*               <input type="text" id="name" name="name" size="20" ><br />

성별*               <input type="radio" name="sex" value="g1">남자<input type="radio" name="sex" value="g2">여자<br />

휴대폰 번호Phone*   <input type="text" id="tel" name="tel"onkeyup="tel()"><em id="msg"> </em><br/>

이메일*             <input type="text" id="email" name="email" onkeyup="email()"><em id="msg1"> </em><br />

패스워드(6-8 글자)* <input type="password" id="pw" name="pw" onkeyup="checkPassword()"><em id="msg2"> </em><br />

패스워드 검증       <input type="password" id="pw1" onkeyup="matchPassword()"><em id="msg3"> </em><br /> &nbsp;
                    
                    <button type="submit">제출</button>                

                    <button type="button">필드 조회하러 가기</button> &nbsp;


</form>

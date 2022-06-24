<!doctype html>
<html>
    <head>
        <meta charset='utf-8' />
        <meta http-equiv="X-UA_Compatible" content="IE=edge">
        <title>회원정보 수정</title>
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function getMember(){
                $.ajax( {
                    url:"getMember.php",
                    data: { "user_email" : $('#user_email').val() },
                    success: function(result){
                        var divPrint = document.getElementById('printarea');
                        divPrint.innerHTML = result;
                        $('#printarea').html(result);
                    },
                    error: function(){
                        alert('회원정보 수정이 되지 않았습니다.');
                    }
                } );
            }
        </script>
    </head>
    <body>
        <form action="UserDBNew.php" method="POST">
        수정할 회원정보의 이메일을 입력하세요.<br/>
        <input type="email" name="user_email" id="user_email">
        <input type="button" value="회원정보 가져오기" onclick="getMember();">
            <div id="printarea"></div>
        </form>
    </body>
</html>
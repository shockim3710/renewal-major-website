<!doctype html>
<html lang="ko">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA_Compatible" content="IE=edge">
        <title>정보수정</title>
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function getMember(){
                $.ajax( {
                    url:"getMember.php",
                    data: { "email" : $('#email').val() },
                    success: function(result){
                        var divPrint = document.getElementById('printarea');
                        divPrint.innerHTML = result;
                        $('#printarea').html(result);
                    },
                    error: function(){
                        alert('실패');
                    }
                } );
            }
        </script>
    </head>
    <body>
            <form method="POST" action="updateProc.php">
            이메일<input type="text" name="email" id="email"><br/>
            <input type="button" value="가져오기" onclick="getMember();">
            <div id="printarea"></div>
            <input type="submit" value="수정">
        </form>
    </body>
</html>
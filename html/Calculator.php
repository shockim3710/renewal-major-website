<!DOCTYPE html>
<html>
<head>
    <title>20173193 강경빈 계산기</title>
 
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            padding: 20px 40px;
            text-align: center;
        }
        input {
            text-align: right;
            border: none;
        }
        input:focus {
            outline: none;
        }
    </style>
    
</head>
<body>
<div style="float:left;">
    <table border="1">
        <tr>
            <td colspan="4">
                <input type="text" id="display">
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <input type="text" id="result">
            </td>
        </tr>
        <tr>
            <td colspan="3" onclick="reset()">AC</td>
            <td onclick="del()">del</td>
     
        </tr>
        <tr>
            <td onclick="add('(')">(</td>
            <td onclick="add(')')">)</td>
            <td onclick="add('/')">/</td>
            <td onclick="add('%')">%</td>
        </tr>
        <tr>
            <td onclick="add(7)">7</td>
            <td onclick="add(8)">8</td>
            <td onclick="add(9)">9</td>
            <td onclick="add('*')">*</td>
        </tr>
        <tr>
            <td onclick="add(4)">4</td>
            <td onclick="add(5)">5</td>
            <td onclick="add(6)">6</td>
            <td onclick="add('-')">-</td>
        </tr>
        <tr>
            <td onclick="add(1)">1</td>
            <td onclick="add(2)">2</td>
            <td onclick="add(3)">3</td>
            <td onclick="add('+')">+</td>
        </tr>
        <tr>
            <td colspan="2" onclick="add(0)">0</td>
            <td onclick="add('.')">.</td>
            <td onclick="calculate()">=</td>
        </tr>
    </table>
    </div>
    <div>
    <ol style="list-style-type:none"id='history'></ol>  <!--동적 리스트 생성-->
    </div>
    <script>
        function add(char) {
            var display = document.getElementById('display'); // 식을 입력할 input 태그를 불러옴
                                                              // display.value는 input 태그 안에 들어 있는 값을 의미
            display.value = display.value + char;
                                                              // display.value += char; 로 쓸 있음.
                                                              // input 태그의 값 뒤에 char 문자를 추가해 주는 역할
        }
        function calculate() {
            var display = document.getElementById('display');
            var result = eval(display.value);                 // 식을 계산하고 result 변수에 저장.
            document.getElementById('result').value = result;
            
            const history = display.value + " = " + result;
                const li = document.createElement("li");
                li.setAttribute('id',history);
                const historyText = document.createTextNode(history);
                li.appendChild(historyText);
                document.getElementById('history').prepend(li);

                var element = document.getElementById('history');
                var eleCount = element.childElementCount;

                if(eleCount>10) {
                    element.removeChild(element.childNodes[10]);
                }
        }
        function reset() {
            document.getElementById('display').value = "";
            document.getElementById('result').value = "";
        }
        function del()
        {   
            var display = document.getElementById('display');
            display.value = display.value.substring(0, display.value.length-1);
 
        }

    </script>
</body>
</html>

<script>
    var numberClicked = false; // 전역 변수로 numberClicked를 설정
    function add (char) {
        if(numberClicked == false) { // 만약 이전에 연산자를 입력 했는데,
            if(isNaN(char) == true) { // 입력 받은 값이 또 다시 연산자면,
                // 아무것도 하지 않는다.
            } else { // 연산자가 아니라면!
                document.getElementById('display').value += char; // 식 뒤에 값을 추가한다.
            }
        } else { // 만약에 이전에 숫자를 입력 했으면,
            document.getElementById('display').value += char; // 식 뒤에 값을 추가한다.
        }
 
 
        // 다음 입력을 위해 이번 입력에 숫자가 눌렸는지 연산자가 눌렸는지 설정한다.
        if(isNaN(char) == true) { // "만약 숫자가 아닌게 참이라면" = "연산자를 눌렀다면"
            numberClicked = false; // numberClicked를 false로 설정한다.
        } else {
            numberClicked = true; // numberClicked를 true로 설정한다.
        }
    }
    function calculate() {
        ...
    }
    function reset() {
        ...
    }
    function del()
    {
        ...
 
    }
</script>

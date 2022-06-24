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
            <td colspan="3">AC</td>
            <td>/</td>
        </tr>
        <tr>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>*</td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>+</td>
        </tr>
        <tr>
            <td colspan="2">0</td>
            <td>.</td>
            <td>=</td>
        </tr>
    </table>
</body>
</html>

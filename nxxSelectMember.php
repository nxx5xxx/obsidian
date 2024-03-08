<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="euc-kr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nxxInserMemberProcedure.php" method="post" name="nxx_form">
        <textarea style="width:100%;text-align:left;min-height:600px" placeholder="해당하는 db명을 ,로 구분하기 예시: a288,a292" name="nxx_db" required></textarea>
        <input type="text" placeholder="고유번호(문자가능)" name="year" style="width:10%" required/>
        <input type="text" placeholder="총학년(숫자만)" name="grade" style="width:10%" required/>
        <input type="text" placeholder="총반(숫자만)" name="class" style="width:10%" required/>
        <input type="text" placeholder="총번호(숫자만)" name="numb" style="width:10%" required/>
        <span style="color:red">* 예시 24 1 5 35 입력 시 24010101부터 24010535까지 만들어지도록함</span><br><br>
        <input type="submit" value="전송" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="리셋"/>
    </form>
    <script>
        function nxx_submit(){

        }
    </script>
</body>
</html>
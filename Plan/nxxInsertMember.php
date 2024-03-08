<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="euc-kr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    #nxx_chk1:checked{

    }
</style>
</head>
<body>
    <form action="nxxInserMemberProcedure.php" method="post" name="nxx_form">
        <textarea style="width:100%;text-align:left;min-height:600px" placeholder="해당하는 db명을 ,로 구분하기 예시: a288,a292" name="nxx_db" required></textarea>
        <input type="radio" name="nxx_radio" id="nxx_chk1" value="1"> <span style="color:red">* 고유번호+학년+반+번호 (24010101 , a010101) 등</span><br>
        <input type="radio" name="nxx_radio" id="nxx_chk2" value="3"> <span style="color:red">* 고유번호+학생 수 (a24001~a24500) 등 </span><br>
        <input type="radio" name="nxx_radio" id="nxx_chk3" value="2"> <span style="color:red" checked>* 두방식 다</span><br>
        <div id="nxx_yn">
        <input type="text" placeholder="고유번호(문자가능)" name="year" style="width:10%" required/>
        <input type="text" placeholder="총학년(숫자만)" name="grade" style="width:10%" required/>
        <input type="text" placeholder="총반(숫자만)" name="class" style="width:10%" required/>
        <input type="text" placeholder="총번호(숫자만)" name="numb" style="width:10%" required/>
        <span style="color:red">* 예시 24 1 5 35 입력 시 24010101부터 24010535까지 만들어지도록함</span><br><br>
        </div>
        <div id="nxx_ygcn">
        <input type="text" placeholder="고유번호(문자가능)" name="year" style="width:10%" required/>
        <input type="text" placeholder="총학년(숫자만)" name="grade" style="width:10%" required/>
        <input type="text" placeholder="총반(숫자만)" name="class" style="width:10%" required/>
        <input type="text" placeholder="총번호(숫자만)" name="numb" style="width:10%" required/>
        <span style="color:red">* 예시 24 1 5 35 입력 시 24010101부터 24010535까지 만들어지도록함</span><br><br>
        </div>
        <input type="submit" value="전송" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="리셋"/>
    </form>
    <script>
        //온체인지 넣고 하기
    </script>
</body>
</html>
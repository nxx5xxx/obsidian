<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="euc-kr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nxxInserMemberProcedure.php" method="post" name="nxx_form">
        <textarea style="width:100%;text-align:left;min-height:600px" placeholder="�ش��ϴ� db���� ,�� �����ϱ� ����: a288,a292" name="nxx_db" required></textarea>
        <input type="text" placeholder="������ȣ(���ڰ���)" name="year" style="width:10%" required/>
        <input type="text" placeholder="���г�(���ڸ�)" name="grade" style="width:10%" required/>
        <input type="text" placeholder="�ѹ�(���ڸ�)" name="class" style="width:10%" required/>
        <input type="text" placeholder="�ѹ�ȣ(���ڸ�)" name="numb" style="width:10%" required/>
        <span style="color:red">* ���� 24 1 5 35 �Է� �� 24010101���� 24010535���� �������������</span><br><br>
        <input type="submit" value="����" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="����"/>
    </form>
    <script>
        function nxx_submit(){

        }
    </script>
</body>
</html>
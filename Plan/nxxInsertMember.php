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
    ���� ����7�������� �۵��մϴ�
    <?php $dateYear = substr(date("Y"),2); echo $dateYear; ?>
    <form action="nxxInserMemberProcedure.php" method="post" name="nxx_form">
        <textarea style="width:100%;text-align:left;min-height:600px" placeholder="�ش��ϴ� db���� ,�� �����ϱ� ����: a288,a292" name="nxx_db" required></textarea>
        <input type="radio" name="nxx_radio" id="nxx_chk1" value="1"> <span style="color:red">* ������ȣ+�г�+��+��ȣ (24010101 , a010101) ��</span><br>
        <input type="radio" name="nxx_radio" id="nxx_chk2" value="3"> <span style="color:red">* ������ȣ+�л� �� (a24001~a24500) �� </span><br>
        <input type="radio" name="nxx_radio" id="nxx_chk3" value="2" checked> <span style="color:red">* �ι�� ��</span><br>
        <div id="nxx_yn">
        <input type="text" placeholder="������ȣ(���ڰ���)" name="year" style="width:10%" value="<?php echo $dateYear; ?>" required/>
        <input type="text" placeholder="���г�(���ڸ�)" name="grade" style="width:10%" required/>
        <input type="text" placeholder="�ѹ�(���ڸ�)" name="class" style="width:10%" required/>
        <input type="text" placeholder="�ѹ�ȣ(���ڸ�)" name="numb" style="width:10%" required/>
        <span style="color:red">* ���� 24 1 5 35 �Է� �� 24010101���� 24010535���� �������������</span><br><br>
        </div>
        <div id="nxx_ygcn">
        <input type="text" placeholder="������ȣ(���ڰ���)" name="goyu" style="width:10%" value="<?php echo "a".$dateYear; ?>" required/>
        <input type="text" placeholder="�ѹ�ȣ(���ڸ�)" name="numb2" style="width:10%" required/>
        <span style="color:red">* ���� a24 500 �Է� �� a24001���� a24500���� ����������� ��</span><br><br>
        </div>
        <input type="submit" value="����" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="����"/>
    </form>
    <script>
        //��ü���� �ְ� �ϱ�
        var nxx_radios = document.querySelectorAll('input[type=radio][name="nxx_radio"]');
        nxx_radios.forEach(radio => radio.addEventListener('change', () => {
                console.log(radio.value);
                if(radio.value == 1){
                    document.getElementById('nxx_yn').style.display = "";
                    document.getElementsByName('goyu')[0].removeAttribute("required");
                    document.getElementsByName('numb2')[0].removeAttribute("required");


                    document.getElementById('nxx_ygcn').style.display = "none";
                    document.getElementsByName('year')[0].setAttribute("required","true");
                    document.getElementsByName('grade')[0].setAttribute("required","true");
                    document.getElementsByName('class')[0].setAttribute("required","true");
                    document.getElementsByName('numb')[0].setAttribute("required","true");
                }else if(radio.value == 3){
                    document.getElementById('nxx_ygcn').style.display = "";
                    document.getElementsByName('year')[0].removeAttribute("required");
                    document.getElementsByName('grade')[0].removeAttribute("required");
                    document.getElementsByName('class')[0].removeAttribute("required");
                    document.getElementsByName('numb')[0].removeAttribute("required");

                    document.getElementById('nxx_yn').style.display = "none";
                    document.getElementsByName('goyu')[0].setAttribute("required","true");
                    document.getElementsByName('numb2')[0].setAttribute("required","true");
                }else if(radio.value ==2){
                    document.getElementById('nxx_ygcn').style.display = "";
                    document.getElementsByName('year')[0].setAttribute("required","true");
                    document.getElementsByName('grade')[0].setAttribute("required","true");
                    document.getElementsByName('class')[0].setAttribute("required","true");
                    document.getElementsByName('numb')[0].setAttribute("required","true");

                    document.getElementById('nxx_yn').style.display = "";
                    document.getElementsByName('goyu')[0].setAttribute("required","true");
                    document.getElementsByName('numb2')[0].setAttribute("required","true");
                }
            }
        ));
    </script>
</body>
</html>
<?
// $sc_id = "mySQL ���̵��Է�";
// $sc_pw = "��й�ȣ�Է�";
// $sc_db = "aa574";

// $mysql_host = "db IP�Է�";
// $user_arr[] = $mysql_user = "$sc_id";
// $password_arr[] = $mysql_password = "$sc_pw";
// $db_arr[] = $mysql_db = "$sc_id";
// �̰��� ���ص� ������� 


$g4_path = ".."; // common.php �� ��� ���
include_once("$g4_path/common.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="euc-kr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<? if($_SERVER["REQUEST_METHOD"] == "POST"){?>
<?php
$sql = "select * from aa574.g4_member where 1 $search";
$result = sql_query($sql);
?>
                <!-- ���̺� ���� -->
                <table class="service_list" cellpadding="0" cellspacing="0">
                        <thead>
                                <tr>
                                        <th>��ȣ</th>
                                        <th>�����Ȳ</th>
                                        <th>����</th>
                                        <th>������</th>
                                </tr>
                        </thead>
                <!-- //���̺� ���� -->
                        <!-- ���̺� ���� -->
                        <tbody>
        <? for($i=0;$row=sql_fetch_array($result);$i++){?>
        <!-- CS ����� ����Ʈ ������ ���̺�� -->
                        <tr class="clk_evt <?=$cls?>" idx="<?=$row[mb_no]?>">
                                        <td>&nbsp;<?=$row[mb_id]?>&nbsp;</td>
                                        <td>&nbsp;<?=$row[mb_name]?>&nbsp;</td>
                                        <td>&nbsp;<?=$row[mb_nick]?>&nbsp;</td>
                                        <td><?=$row[mb_email]?></td>
                        </tr>
                                <input type="hidden" id="name_idx_<?=$row[mb_no]?>" value="<?=$row[mb_no]?>">
                                <input type="hidden" id="url_idx_<?=$row[mb_no]?>" value="<?=$row[mb_no]?>">
<?}?>
                        </tbody>
                </table>

<?} ?>
</body>
</html>
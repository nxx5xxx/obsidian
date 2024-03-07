<?
// $sc_id = "mySQL 아이디입력";
// $sc_pw = "비밀번호입력";
// $sc_db = "aa574";

// $mysql_host = "db IP입력";
// $user_arr[] = $mysql_user = "$sc_id";
// $password_arr[] = $mysql_password = "$sc_pw";
// $db_arr[] = $mysql_db = "$sc_id";
// 이것을 안해도 상관없음 


$g4_path = ".."; // common.php 의 상대 경로
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
                <!-- 테이블 제목 -->
                <table class="service_list" cellpadding="0" cellspacing="0">
                        <thead>
                                <tr>
                                        <th>번호</th>
                                        <th>진행상황</th>
                                        <th>서버</th>
                                        <th>계정명</th>
                                </tr>
                        </thead>
                <!-- //테이블 제목 -->
                        <!-- 테이블 내용 -->
                        <tbody>
        <? for($i=0;$row=sql_fetch_array($result);$i++){?>
        <!-- CS 북토비 리스트 데이터 테이블셋 -->
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
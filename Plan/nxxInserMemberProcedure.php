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
<? if($_SERVER["REQUEST_METHOD"] == "POST"){
	//�ؽ�Ʈ����� �޾ƿ�
	$nxx_db = $_POST["nxx_db"];
	//,�������� ������ �迭����
	$nxx_dbList = explode(',',$nxx_db);

	$year = $_POST["year"];
	$grade = $_POST["grade"];
	$class = $_POST["class"];
	$numb = $_POST["numb"];

	$goyu = $_POST["goyu"];
	$numb2 = $_POST["numb2"];

	$nxx_sw = $_POST["nxx_radio"];
	echo $nxx_sw."<h1>�������</h1>";
        foreach($nxx_dbList as $data){
			echo "<span style='color:red;font-size:24px;'>".$data."</span><br>";
			$nxx_sql = "select * from ".$data.".g4_member";
			$nxx_result = sql_query($nxx_sql);
			//for($i = 0;$row=sql_fetch_array($nxx_result);$i++){}
			
			//�տ� 0 �߰��ϱ�����
			//rs.executeó�� ������ ���������� ó���Ǹ� +�ϱ�����
			//����
			$nxx_cnt1 = 0;
			$nxx_cnt2 = 0;
			//����
			$nxx_cnt_false1 = 0;
			$nxx_cnt_false2 = 0;
			if($nxx_sw<=2){
				echo "������ȣ�г�ݹ�ȣ<br>";
					for($i = 1;$i<=$grade;$i++){
						if(strlen($i)<2){
							$i = "0".$i;
						}
						for($j = 1;$j<=$class;$j++){
							if(strlen($j)<2){
								$j = "0".$j;
							}
							for($l = 1;$l<=$numb;$l++){
								if(strlen($l)<2){
									$l = "0".$l;
								}
								$nxx_gcn = sql_query("insert into {$data}.g4_member(mb_id,mb_name,mb_nick,mb_password,mb_datetime,mb_level,mb_1) values('{$year}{$i}{$j}{$l}','{$year}{$i}{$j}{$l}','{$year}{$i}{$j}{$l}','19225735263cd3c5',now(),3,1)",false);
								if($nxx_gcn){
									$nxx_cnt1++;
								}else{
									echo "{$year}{$i}{$j}{$l} �����߻�<br>";
									$nxx_cnt_false1++;
								}
							}
						}
					}
				echo "�г�ݹ�ȣ<br> ���� : {$nxx_cnt1}<br> ���� : {$nxx_cnt_false1}<br>";	
			}
			if($nxx_sw>=2){
				echo "������ȣ�л����<br>";
					for($i = 1;$i<=$numb2;$i++){
						if(strlen($i)<2){
							$i = "00".$i;
						}else if(strlen($i)<3){
							$i = "0".$i;
						}
							$nxx_gn = sql_query("insert into {$data}.g4_member(mb_id,mb_name,mb_nick,mb_password,mb_datetime,mb_level,mb_1) values('{$goyu}{$i}','{$goyu}{$i}','{$goyu}{$i}','19225735263cd3c5',now(),3,1)",false);
							if($nxx_gn){
								$nxx_cnt2++;
							}else{
								echo "{$goyu}{$i} �����߻�<br>";
								$nxx_cnt_false2++;
							}
					}
				echo "����+�л���<br> ���� : {$nxx_cnt2}<br> ���� : {$nxx_cnt_false2}<br>";
			}
			
			
			echo "<hr>";
        }
?>

<hr>
 <!-- 
        �ڹ��� split���� �Լ�
        explode (���ڿ� ���ұ��� , ���ҽ�ų ���ڿ������� , �ɼ� ����� ���Ұ��� ����)
        ���� : explod('-',$example)
  -->

<?} ?>
</body>
</html>
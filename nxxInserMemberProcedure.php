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
	echo $nxx_sw."���� �׽�Ʈ";
        foreach($nxx_dbList as $data){
			echo "<span style='color:red;font-size:24px;'>".$data."</span><br>";
			$nxx_sql = "select * from ".$data.".g4_member";
			$nxx_result = sql_query($nxx_sql);
			//for($i = 0;$row=sql_fetch_array($nxx_result);$i++){}
			echo "<hr>";
			//�տ� 0 �߰��ϱ�����
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
								echo "{$year}{$i}{$j}{$l}<br>";
							}
						}
					}
			}if($nxx_sw!=1 && $nxx_sw>=2){
				echo "������ȣ�л�����";
					for($i = 1;$i<=$numb2;$i++){
						if(strlen($i)<2){
							$i = "00".$i;
						}else if(strlen($i)<3){
							$i = "0".$i;
						}
							echo "{$goyu}{$i}<br>";
					}
			}
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
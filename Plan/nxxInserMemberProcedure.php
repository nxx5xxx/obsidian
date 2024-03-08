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
<? if($_SERVER["REQUEST_METHOD"] == "POST"){
	//텍스트에어리어 받아옴
	$nxx_db = $_POST["nxx_db"];
	//,기준으로 나눠서 배열생성
	$nxx_dbList = explode(',',$nxx_db);

	$year = $_POST["year"];
	$grade = $_POST["grade"];
	$class = $_POST["class"];
	$numb = $_POST["numb"];
	$nxx_sw = $_POST["chk_btn"];
	echo $nxx_sw[0]."체크박스1";
	echo $nxx_sw[1]."체크박스2";
        foreach($nxx_dbList as $data){
			echo "<span style='color:red;font-size:24px;'>".$data."</span><br>";
			$nxx_sql = "select * from ".$data.".g4_member";
			$nxx_result = sql_query($nxx_sql);
			//for($i = 0;$row=sql_fetch_array($nxx_result);$i++){}
			echo "<hr>";
			//앞에 0 추가하기위함

			// for($i = 1;$i<=$grade;$i++){
			// 	if(strlen($i)<2){
			// 		$i = "0".$i;
			// 	}
			// 	for($j = 1;$j<=$class;$j++){
			// 		if(strlen($j)<2){
			// 			$j = "0".$j;
			// 		}
			// 		for($l = 1;$l<=$numb;$l++){
			// 			if(strlen($l)<2){
			// 				$l = "0".$l;
			// 			}
			// 			echo "{$year}{$i}{$j}{$l}<br>";
			// 		}
			// 	}
			// }
        }
?>

<hr>
 <!-- 
        자바의 split같은 함수
        explode (문자열 분할기준 , 분할시킬 문자열변수명 , 옵션 없어도됨 분할개수 지정)
        예시 : explod('-',$example)
  -->

<?} ?>
</body>
</html>
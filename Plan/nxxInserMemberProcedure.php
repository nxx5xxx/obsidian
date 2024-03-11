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

	$goyu = $_POST["goyu"];
	$numb2 = $_POST["numb2"];

	$nxx_sw = $_POST["nxx_radio"];
	echo $nxx_sw."<h1>결과보고</h1>";
        foreach($nxx_dbList as $data){
			echo "<span style='color:red;font-size:24px;'>".$data."</span><br>";
			$nxx_sql = "select * from ".$data.".g4_member";
			$nxx_result = sql_query($nxx_sql);
			//for($i = 0;$row=sql_fetch_array($nxx_result);$i++){}
			
			//앞에 0 추가하기위함
			//rs.execute처럼 쿼리가 성공적으로 처리되면 +하기위함
			//성공
			$nxx_cnt1 = 0;
			$nxx_cnt2 = 0;
			//실패
			$nxx_cnt_false1 = 0;
			$nxx_cnt_false2 = 0;
			if($nxx_sw<=2){
				echo "고유번호학년반번호<br>";
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
									echo "{$year}{$i}{$j}{$l} 오류발생<br>";
									$nxx_cnt_false1++;
								}
							}
						}
					}
				echo "학년반번호<br> 성공 : {$nxx_cnt1}<br> 실패 : {$nxx_cnt_false1}<br>";	
			}
			if($nxx_sw>=2){
				echo "고유번호학생명수<br>";
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
								echo "{$goyu}{$i} 오류발생<br>";
								$nxx_cnt_false2++;
							}
					}
				echo "고유+학생수<br> 성공 : {$nxx_cnt2}<br> 실패 : {$nxx_cnt_false2}<br>";
			}
			
			
			echo "<hr>";
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
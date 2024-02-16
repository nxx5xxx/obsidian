2 테이블 구조
컬럼	자료형	설명
wr_id	int(11)	글/댓글 기본 키
wr_num	int(11)	글/댓글 순서, 음수로 정렬
wr_reply	varchar(10)	답글 정렬 키, 총 10단계의 답글이 가능
wr_parent	int(11)	원글 wr_id
wr_is_comment	tinyint(4)	원글(0) 댓글(1)
wr_comment	int(11)	원글인 경우 댓글수, 댓글인 경우는 순서
wr_comment_reply	varchar(5)	댓글 정렬 키, 총 5단계의 댓글이 가능
ca_name	varchar(255)	글 분류 board_table.bo_category_list
wr_option	set('html1','html2','secret','mail')	글 종류 설정, 현재는 비밀글 설정에 사용
wr_subject	varchar(255)	글 제목
wr_content	text	글 내용
wr_link1	text	링크 1
wr_link2	text	링크 2
wr_link1_hit	int(11)	링크 1 클릭 수
wr_link2_hit	int(11)	링크 2 클릭 수
wr_trackback	varchar(255)	트랙백 주소
wr_hit	int(11)	글 조회수
wr_good	int(11)	추천 수
wr_nogood	int(11)	비추천 수
mb_id	varchar(255)	회원 아이디
wr_password	varchar(255)	암호. 회원 암호와 다를 수 있음
wr_name	varchar(255)	글작성자 이름, 설정에 따라서 회원이름 또는 회원별명
wr_email	varchar(255)	글작성자 이메일
wr_homepage	varchar(255)	글작성자 홈페이지
wr_datetime	datetime	글작성 시간
wr_last	varchar(19)	최근 댓글 작성 시간, datetime 포멧
wr_ip	varchar(255)	글작성자 IP
wr_1	varchar(255)	확장필드 1
…	…	…
wr_10	varchar(255)	확장필드 10

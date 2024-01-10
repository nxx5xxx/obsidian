MYSQL 4.0버전 기준으로 정말 많은 삽질을 하였다
일단 user만드는 명령어도 좀 다르다  
insert into user (host,user,password) values('허용할ip','유저명','패스워드') 이런식으로 만들어줘야하고  
만듦과 동시에 권한을 부여하려면  
grant all privileges on \*.* to 사용자명@'%' identified by '비밀번호' with grant option;  
```
여기서 \*.\*에는 접속 가능케할 db를 제한해줄 수 있다
DB명.\* 이러하게말이다  
```
이런식으로 부여하면된다 (작은따옴표 들어갈곳에만 표기했으니 주의 %는 모든ip에서 접근이 가능하도록 한것)
FLUSH PRIVILEGES; 까지 입력한다

netstat -tlnp 을 치면 해당 서버에 열려있는 ip를 확인할 수 있다  
0.0.0.0:3306이 나오면 열려잇는것  
127.0.0.1은 로컬호스트에만 열려있는것  


---

여러번의 접속 실패로인해 호스트 차단을 당했다면
터미널로 접속하여  **flush hosts;** 를 입력하면  
에러카운트가 초기화된다
# 스키마(database)와유저
OracleSQL에서 새로운 스키마를 만들어 사용할 때
```
create user 'name' identified by 'password';
```
와 같이 생성한다
이는 계정과 스키마를 같이 생성하게되며
오라클에서는 계정을 생성하면 그 계정 이름과 같은 스키마(데이터 저장공간=databse)가 자동으로 생성된다. - 여기까진 논리적 소유권을 주는것
그 후
```
grant connect,dba, reource to 'name';
```
으로 접속권한, db접속권한, 리소스접속권한 등을 주게되면 물리적 저장공간도 열리게된다
단, 실제 운영하는 환경에서는 dba를 일반계정에 부여하지않고
```
grant connect, resource to 'name';
alter user 'name' QUOTA 500M ON users;
또는
alter user 'name' QUOTA UNLIMITED ON users;
```
와 같이 저장공간을 할당해준다

MYSQL에서 다른점은 DB와 계정이 분리가 되어있어
스키마생성 명렁과 계정생성 명령이 나뉘어 있다. (스키마명 != DB명)
DB를 생성할 때는
```
create database 'dbname';
```
을 한다
사용은
```
use 'dbname';
```

그리고 계정을 생성할 때 는
```
CREATE USER 'name'@'ip' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON 'dbname'.* TO 'name'@'ip';
FLUSH PRIVILEGES;
```
와 같이 적용하게 된다
여기서 조금 더 추가하자면
```
CREATE USER 'name'@'%' IDENTIFIED BY 'password';
```
과 같이 적으면 외부 어디서나 접속이 가능하고
```
CREATE USER 'name'@'localhost' IDENTIFIED BY 'password';
```
로 하면 로컬호스트로만 접속이 가능하며
```
CREATE USER 'name'@'110.1.5.%' IDENTIFIED BY 'password';
```
로 하면 
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
으로 연결권한, 
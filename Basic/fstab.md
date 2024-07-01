### 재부팅시자동마운트
지금까지 fdisk -l 에 출력되는 Device 의 이름으로 마운트를 하였는데  
오늘 처음으로 서버 재부팅 하였을때 디바이스의 순서가 바뀌었다  
일단 수동으로 마운트를 해준 후 왜 이런일이 벌어졌나 찾아보니  
디스크 장치이름은 하드웨어 검색 순서에 따라 변동될 수 있다. 라는 결론을 도출  
고정적인게 뭐가있을까 더 찾아보던 중 UUID (Universally Unique Identifier)을 활용하여 마운트설정을 할 수 있다는걸 알았다  
fstab에서 /dev/sdb1 으로 되어있는 부분은 디스크의 UUID를 적으면되는데  
예를들어  
/dev/sdb1       /ext/exam             ext4    defaults        0       2  
이런식으로 되어 있다면  
UUID=568f4165-f073-4626-~~       /ext/exam             ext4    defaults        0       2  
이렇게 바꿔주면 된다

UUID는 blkid를 치면 나온다  

#### UUID
UUID는 파일시스템 생성시 할당되며 그 이후 변경되지않는다

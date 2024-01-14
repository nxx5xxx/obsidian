### 직접 DNS관리를 할때 사용되는 설정법이다
> 까먹을까봐 여기에 적어놓는다

---

https://blog.naver.com/wowpotato/10131913770
이 블로그를 참조하면 알기쉽고 MX 레코드는 다른곳에 잘 있지않아 여기에 따로적는다

---

$TTL    86400  
@       IN      SOA     dns.yongbok.net. ruo91.yongbok.net. (

                                  2009111614  ; Serial  
                                  604800        ; Refresh  
                                  86400         ; Retry  
                                  2419200      ; Expire  
                                  86400 )      ; Minimum

@        IN      NS    dns.yongbok.net.  
@        IN      NS    dns2.yongbok.net.  
;  
         MX    10    mail.yongbok.net.  
         MX    20    mail2.yongbok.net.  
         MX    30    mail3.yongbok.net.  
         MX    40    mail4.yongbok.net.  
         MX    50    mail5.yongbok.net.  
;  
               A              124.51.213.64  
www       A             124.51.213.64  
ftp           A             124.51.213.64  
ruo91       A             124.51.213.64  
;  
; CNAME  
www2     IN    CNAME    www  
nate.yongbok.net.    IN    CNAME    [www.nate.com.](http://www.nate.com./)

---

이런식으로 작성되어야한다
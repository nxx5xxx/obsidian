### 의미
> Class로부터 생성된 객체

### 생성방법
> 객체를 생성하기 위해서는 new 라는 생성연산자(생성자) 가 필요하다.
> new 연산자 뒤에는 생성자 호출 코드가 오는데 클래스명() 을 생성자 호출코드라 한다.  
> ex ) new 클래스명();  
> new 연산자는 객체를 생성 시킨후 **객체의 주소**를 리턴하게 된다.

|스택영역| |
|---|---|
|변수명|heap 객체의주소 : 528xxx|

|heap영역| |
|---|----|
|528xxx| 객체|


#### 예시
> Example ex1 = new Example();  
> Example ex2 = new Example();  


|스택영역| |
|---|---|
|ex1|ex1의 heap 주소|
|ex2|ex2의 heap 주소|

|heap영역| |
|---|----|
|ex1의 heap 주소| Example객체|
|ex2의 heap 주소| Example객체|

> 이와 같이 new 연산자를 사용하여 Instance를 생성할 때 마다  
> 새로운 객체를 생성하여 참조하게 된다  
> new 연산자를 이용하지 않고 할 시 같은 heap영역의 주소를 참조하는 객체가 생성된다.

#### 예시2 - new 연산자 없이 대입연산자로 대입 했을 경우
> Example ex1 = new Example();  
> Example ex2 = ex1;


|스택영역| |
|---|---|
|ex1|ex1의 heap 주소|
|ex2|ex1의 heap 주소|

|heap영역| |
|---|----|
|ex1의 heap 주소| Example객체|


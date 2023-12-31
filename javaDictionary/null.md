### 특징
> Reference Type 의 변수는 힙영역의 주소를 아직 저장하지 않았다는 의미로  
> null 값을 가질 수 있다.  
> null 값또한 초기값으로 사용될 수 있기 때문에 stack영역에는 생성이된다.


#### 예시
>String a = "자바";
>String b = null;


|스택영역| |
|---|---|
|a|0xeee5|
|b|null|

|heap영역| |
|---|---|
|0xeee5|"자바"|

> 예시를 보면 a는 초기화가 되며 스택영역에 heap영역의 주소가 저장되지만  
> null 에는 주소가 null로 비어있어 heap영역에 참조할 주소가 없다.

#Exception
#### NullPointerException
> 위의 예시와 같은 경우 b에 대한 길이 b.length()를 입력하면  
> 참조할 주소가 없어 NullPointerException 이라는 예외가 발생한다.  
> 즉, 변수의 스택영역에 참조하는 주소값이 null 인경우 ( == 변수가 null 인상태)  
> 객체의 데이터나 메소드를 사용하려 할 때 예외가 발생하는 것이다.


#### 참고사항
> String a = "자바"; 를 예를 들어 null로 바꿧을 때 heap영역이 어떻게 동작하는지 참고사항을 기술하겠다.


|스택영역| |
|---|---|
|a|0xeee5|

|heap영역| |
|---|---|
|0xeee5|"자바"|

> a에 "자바" 라는 값을 대입하여 초기화 한 후  
> a = null ;  
> 다시 대입 하였을때 

|스택영역| |
|---|---|
|a|null|

|heap영역| |
|---|---|
|0xeee5|"자바"|

> 해당 heap영역의 "자바" 의 주소를 참조하는 stack이 없기 때문에  
> 자바는 이러한 객체를 쓰레기 객체(사용하지 않는 객체)로 취급하고  
> GC(Garbage Collector)에 의해 자동으로 제거하게 된다.  

#GarbageCollector

#### 참고사항2
> 여기서 a = null; 을 한 후 다시  
> a = "자바" 를 하게 된다면 원래 있던 heap영역에 이어져 사용할 것 같지만  
> heap 영역에 새로운 객체를 생성하게 된다 아래를 참고하자


|스택영역| |
|---|---|
|a|0xeee6|

|heap영역| |
|---|---|
|0xeee5|"자바"|
|0xeee6|"자바"|

#### 참고사항3
> 0xeee5라고 써있는 "자바" 를 쓰레기 객체로 취급하지 않는 경우는 아래의 예와 같다  
> String a = "자바";  
> String b = a;  
> a = null;  
>또는  
>String a = "자바";  
>String b = "자바";  
>a = null;  


|스택영역| |
|---|---|
|a|null|
|b|0xeee6|

|heap영역| |
|---|---|
|0xeee5|"자바"|
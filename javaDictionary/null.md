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

#### NullPointerException
> 위의 예시와 같은 경우 b에 대한 길이 b.length()를 입력하면  
> 참조할 주소가 없어 NullPointerException 이라는 예외가 발생한다.  
> 즉, 변수의 스택영역에 참조하는 주소값이 null 인경우 ( == 변수가 null 인상태)  
> 객체의 데이터나 메소드를 사용하려 할 때 예외가 발생하는 것이다.

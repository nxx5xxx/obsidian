#ReferenceType #String
### 특징
> 굳이 String을 설명해야 하나 싶기도 하지만 그래도 기술.  
> String의 특징으로는 문자열 데이터 값이 동일하다면 String 객체를 공유하도록 되어있다  
> 이는 [[타입#Premitive Type - 원시타입,기본타입|기본타입]] 의 성질이지만 String은 [[타입#Reference Type - 참조타입|참조타입]] 이면서도 기본 타입처럼 사용되는 특이케이스다.
> String은 데이터가 같다면 항상 객체를 공유하는가? 라고 한다면 아니라고 대답할 수 있다  
> 그 이유인 즉슨 new 연산자로 직접 String 객체를 생성하고 대입할 수 있기 때문이다.  
> 아래의 참고를 보자.

#### 참고1
> String a = "아 취업하고싶다";  
> String b = "아 취업하고싶다";  


|스택영역| |
|---|---|
|a|0xeee5|
|b|0xeee5|

|heap영역| |
|---|---|
|0xeee5|"아 취업하고싶다"|

> 이렇게 동일한 Heap영역에 있는 String 객체의 주소를 stack 영역에서 참조한다.

#### 참고2 - new 연산자 이용
> String a = new String("격렬하게 일하고 싶다");  
> String b = new String("격렬하게 일하고 싶다");  

|스택영역| |
|---|---|
|a|0xeee9|
|b|0xeee1|

|heap영역| |
|---|---|
|0xeee9|"격렬하게 일하고 싶다"|
|0xeee1|"격렬하게 일하고 싶다"|
> 이런 식으로 객체를 생성하고 대입할 수 있다.    
> 여기서 new 연산자는 새로운 객체를 만드는 연산자로 [[생성자|객체 생성 연산자]] 라고 한다

### 비교 연산자
#### 특징
> [[비교 연산자]] 에 기술한 비교 연산자의 특징을 보면  
![[비교 연산자#특징]]
>라고 기술해 놓았는데 이걸 토대로 보면 String은 결국 Reference Type이므로  
>비교 연산자인 == 를 쓰게되면 오브젝트의 주소를 비교하게 된다.   
>아래의 예시를 보자  

> String a = "자바";  
> String b = new String("자바");  
> String c = "자바";

|스택영역| |
|---|---|
|a|0xeee9|
|b|0xeee1|
|c|0xeee9|

|heap영역| |
|---|---|
|0xeee9|"자바"|
|0xeee1|"자바"|

> Stack영역과 Heap영역에는 각각 이렇게 메모리가 사용이 될 것이고  
> a와 c 변수는 같은 String 객체의 주소를 참조하게 될 것이고 b는 새로운 객체를 생성하게 되어  
> a == b 의 결과를 출력 해 보면  false  
> a == c 의 결과를 출력 해 보면 true가 나올것 이다.


#### 자주 사용되는 메소드
> 객체 주소에 상관없이 내부 값 비교 [[equals|a.equals(b)]]  
> 문자열에서 해당 문자만 추출하는 [[charAt|a.charAt(b)]]  
> 문자열의 길이를 반환하는 [[length|length()]]  
> 문자열을 다른 문자열로 교체하는 [[replace|a.replace(String older,String new)]]  
> 문자열을 잘라내 갖고오는 [[substring|substring()]]  
> 문자열의 위치를 알 수 있는 [[indexOf|a.indexOf(String b)]]  
> 문자열의 포함 여부를 알 수 있는 [[contains|a.contains(String b)]]  
> 문자열을 문자열 기준으로 분리하여 배열에 저장하는 [[split|a.split(String b)]]  
> [[정규표현식]]을 이용하여 포함 여부를 알 수 있는 [[matches|a.matches(String regex)]]
> 등 이 주로 사용된다.
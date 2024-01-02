### 의미
> 객체타입 확인을 할때 사용하는 연산자이다  
> 실제로 어떤 객체가 매개값으로 제공되었는지, 변수가 참조하는 객체의 타입을 을 확인할때 등에 사용할 수 있다.  


### 사용법
> boolean a = 대상객체 instanceof 비교할타입;  
> 왼쪽의 객체가 오른쪽 타입이랑 같은 타입으면 true를 반환한다. 

#### 예시
> public void method(Parent parent){  
> 	if(parent instanceof Child){  
> 		Child child = (Child) parent;  
> 	}  
> }  

#### 예시2 - 자바12버전 이상에서 가능하다
> if(parent instanceof Child child){  
> 	//instanceof연산의 결과가 true일경우 우측 타입 변수를 사용할 수 있기때문에 강제타입변환이 필요없다
> } 
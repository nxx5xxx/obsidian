#Getter #Setter
### 사용이유
>객체의 필드를 마음대로 수정할 경우 객체의 [[무결성]]이 깨질 수 있다  
>이러한 문제점을 방지하기 위해 직접적인 필드의 접근을 막고  
>메소드를 통해 해당 데이터를 검증 하여 필드에 접근하는 것을 선호한다  

#### 예시
> Number number = new Number();  
> number.plus = -100;  
> 위 와 같은 객체가 있을 때 plus의 필드 값은 음수가 들어가면 안된다 라고 가정 할 경우.  
> 위처럼 데이터를 대입시키면 plus의 데이터에는 음수값이 들어가진다 이것을 메소드로  
> public void setPlus(int numb){  
> if(numb<0){  
> 		 this.plus = numb\*-1;  
> 		 return ; (return은 메소드를 종료하라는 의미)
> 	}else{  
> 		this.plus = numb;  
> 	}  
> }  
> 이렇게 만들 경우 항상 양수의 값 만을 유지하게 된다.  

#### 주의사항
> 무결성을 유지할 필드를 private로 설정하여 외부에 노출을 막아야한다.  

### 명명규칙
> 필드 :  
> private 타입 필드명;  
> Getter :  
> 접근 제한자 : 
> public 타입 get필드명(){  
> return 필드명;  
> }  
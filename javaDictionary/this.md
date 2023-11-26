### 의미
> 현재 클래스의 필드(데이터) 를 의미한다

#### 예시
> int numb1;  
	String str1;  
	public ConstructorTest1() {}  
	public ConstructorTest1(int number) {  
		numb1 = number;  
	}  
	public ConstructorTest1(String string) {  
		str1 = string;  
	}  
	public ConstructorTest1(String str1,int number) {  
		this.numb1 = number;  
		this.str1 = str1;  
	}  
	public ConstructorTest1(int number, String str1) {  
		this.numb1 = number;  
		this.str1 = str1;  
	}  
> 에서 this.numb1과 this.str1은 멤버필드에 선언한것을 의미한다.
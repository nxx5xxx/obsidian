#조건문 
### 특징
>  switch(변수){} 의 구조로 이루어 지며  
>  switch 안에 들어간 변수가 일치하는 case문에 있는 코드들을 실행시킨다  
>  해당 코드들은 break;가 나오기 전까지 실행되며 break;가 빠져있다면  
>  case에 해당되더라도 break; 가 나올때까지 진행된다.
>  switch문의 [[매개변수]]로는 정수타입(byte, short, char, int, long)과 문자열 타입 변수를 사용할 수 있다.

#### 사용법
> switch(변수){  
> 	case 값1 :   
> 		값1 에 해당 될 경우 코드 실행  
> 	 break;  
> 	case 값2 :  
> 		값2 에 해당 될 경우 코드 실행  
> 	 break;  
> 	 default :   
> 		 값 1,2 둘다 해당되지 않을경우 코드 실행  
> }  


#### 예시
> String str = "양념치킨"  
> switch(str){  
> 	case "양념치킨" :  
> 		System.out.println("양념치킨 굳");
> 	 break;
> 	case "후라이드 치킨" :
> 		System.out.println("후라이드치킨 굳");
> 	 break;
> 	 default : 
> 		 System.out.println("오늘은 치킨이 아니구나");
> }
> 출력값 :   
> "양념치킨 굳"

#### 사용법2
> switch 문은 break를 넣지않거나 Expressions(표현식)를 사용하여 여러개의 케이스를 묶을 수 있다.

#### 예시2 - break제거
> 대소문자의 구분이 없이 확인하기
> char chr = 'B'  
> switch(chr){  
> 	case 'A' :  
> 	case 'a' :  
> 		System.out.println("알파벳 에잉");
> 	 break;
> 	case 'B' :  
> 	case 'b' :  
> 		System.out.println("알파벳 빙");
> 	 break;
> 	 default : 
> 		 System.out.println("모른다.");
> }

#### 예시3 - Expressions
> 대소문자의 구분이 없이 확인하기
> char chr = 'B'  
> switch(chr){  
> 	case 'A','a' ->{System.out.println("알파벳 에잉");}
> 	case 'B','b' ->{System.out.println("알파벳 빙");}
> 	 default ->{ System.out.println("모른다.");}
> }
> 


#print
### 콘솔로 변수값을 출력하기
#### print문
> print문에는 3가지가 있다.  
> printf, print, println  

### print , println
> print와 println은 기본적으로 사용법이 같다.  
> System.out.print([[리터럴|리터럴(=값 그자체)]] 또는 변수) ,  
> System.out.println([[리터럴|리터럴(=값 그자체)]] 또는 변수)  
> 이렇게 사용할 수 있다.  
> 두 개의 차이점은 ln이 붙은 것은 해당 출력문이 끝나면 자동으로 개행(줄바꿈)을 해주고  
> 붙지 않은것은 줄바꿈을 하지 않는다.

### print 예시
> String str = "예시문장"  
> System.out.print(str+1);  
> System.out.print(str+2);  
> 출력 :  
> 예시문장1예시문장2

### println 예시
>String str = "예시문장"  
>System.out.println(str+1);  
>System.out.println(str+1);  
>출력 :  
>예시문장1  
>예시문장2

### printf
> printf문은 다른 print문과는 다르다 String.format과 같이 형식을 지정할 수 있는데  
> System.out.printf(" [[형식문자열]]", [[리터럴]] 또는 변수, [[리터럴]] 또는 변수....) ;  
> 이러한 형태를 가진다

### printf 예시
> float floatValue = 123.56789;
> int intValue = 123;
> String str = "호랑나비";
> System.out.printf("실수 : %f  \\n 실수자리수 : %.3f \\n", floatValue,floatValue ) ;  
> System.out.printf("정수 : %d  \\n 정수 빈칸삽입 : %5d \\n", intValue,intValue ) ;  
> System.out.printf("문자열 : %s  \\n 문자열 빈칸삽입 : %-5s \\n", str,str ) ;  
> 출력 :  
> 실수 : 123.56789  
> 실수자리수 : 123.567  
> 정수 : 123  
> 정수 빈칸삽입 :      123  
> 문자열 : 호랑나비  
> 문자열 빈칸삽입 : 호랑나비     (5칸 공백이 우측으로 들어가 있다)  

이처럼 printf문은 형식문자열과 같이 쓰이게 되는데 형식문자열에 대한 설명은  
![[형식문자열]] 아래에서 확인 할 수 있다
#scanner
### 키보드 입력 1 
>키보드로 입력된 데이터를 읽는 방법이다  
>사용되는 Class로는 java.util.Scanner를 사용한다.

### 사용법
> Scanner 변수명 = new Scanner(System.in);  
> 으로 Scanner 객체를 생성해 준 후  
> String str = Scanner변수명.nextLine();  
> 이런식 으로 사용한다

### 예시
> Scanner sc = new Scanner(System.in);  
> String str = sc.nextLine();

#### 참고사항
> Scanner의 이용가능한 메소드로는  
> nextLine() - String값 반환  
> nextInt() - int값 반환  
> next
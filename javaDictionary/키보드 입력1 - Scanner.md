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
> next() - String값 반환
> nextLine() - String값 반환  
> nextInt() - 정수값 반환  
> nextDouble() - 실수값 반환  
> nextBoolean() - 2bit 반환  
> 등 8가지 프리미티브 타입과 String(Line) 으로 구성된다  
> 여기서 next와 nextLine()의 차이는 next는 띄어쓰기 전 까지 읽어들이고  
> nextLine()은 띄어쓰기를 포함하여 줄바꿈(엔터) 가 나오기 전 까지 읽어들인다

#### 참고사항2
> Scanner객체를 다 사용후에는 .close() 메소드로 닫아줘야한다.  
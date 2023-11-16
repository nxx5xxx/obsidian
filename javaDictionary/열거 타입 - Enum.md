### 특징
> 한정된 값 (상수) 을 갖는 타입을 열거 타입 이라고 한다  
> (Enumeration type)  
> 예를 들어 파이 의 값은 3.141592..... 로 정해져 있는 상수이고  
> 요일 또한 월, 화, 수, 목, 금, 토, 일 로 정해져 있으며  
> 로그인 상태 같은경우를 처리 할때도  
> 로그인 중,  로그아웃 이런식 으로 처리 할 수 있는 것 이다.  
> Enum타입은 클래스처럼 첫글자를 대문자로 작성해 만들며  
> 저장되는 파일의 이름은 Sample.java 의 형태로 저장된다  
> 열거형 타입의 상수명(변수명) 은 대문자로 하는것이 관례이며  
> 대문자로 작성하여 [[언어표기법#카멜 케이스 (Camel Case)|카멜케이스]]가 불가능해 [[언어표기법#스네이크 케이스 (Snake Case)|스네이크 케이스]]를 쓰는것이 관례이다.

#### 사용방법
> 클래스를 만들듯이 New를 눌러 class가 아닌 enum을 눌러 Enum 타입으로 생성할 수 있고  
> 아니면 이미 생성된 클래스의 public class ~~~ 부분의 class를 enum으로 바꿔 저장해 주어도 된다.

#### 예시
> public enum LoginStatus{  
> LOGIN,  
> LOGOUT  
> }  

##### 열거 타입을 사용하는 예시
> public class EnumTest{  
>  public static void main(String\[] args){  
> 	 LoginStatus status = LoginStatus.LOGIN;  
>  }  
> }


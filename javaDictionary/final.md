
## final 필드
### 특징
> final 필드는 값을 변경할 수 없는 상수를 쓸때 final 을 사용한다
> final에 초기값을 설정할 수 있는 방법은 필드 선언 시에 초기값을 대입하거나  
> 생성자로 해당 객체를 만들때 초기값을 매개변수에 넣어 만드는 방법 두가지가 있다

#### 예시
> final String name = "강아지";  
> 이렇게 이미 final로 선언해 버렸다면  
> name = "고양이";  
> 이러한 대입이 불가능하다  

#### 예시2(Class이름이 Example이라 할때)
> final String name;  
> final String age;  
> public Example(String name, String age){   
>  this.name = name;  
>  this.age = age;  
> }

### 실사용 예시
> 그래서 final은 보통 클래스에 static과 함께 사용한다  
> static의 위치는 앞으로 또는 뒤로 올 수 있다  
> 예를들어 final static 타입 상수명 = 초기값;  
> 또는 static final 타입 상수명 = 초기값;  
> 으로 가능한것

#### 실사용 예시2
> static finale double PI = 3.141592;  
> 이런식으로 하면 다른 클래스에서 PI를 사용할때 생성자로 호출하지 않고 바로 접근이 가능하다  

### 명명규칙
> 상수명은 대문자로 하며 카멜 케이스로는 작성이 불가능하므로 각 단어 사이에 \_를 넣어 표현해준다  
> 예 : final String STREAM_DECK;

---

## final 클래스

### 특징
> 클래스를 선언할 때 앞에 final 키워드를 붙이면 상속할 수 없는 클래스로 만들어진다  
> 즉 자식클래스를 만들 수 없는 고자 클래스가 탄생한다.  

#### 정보
> 대표적인 예가 String 클래스이다 String 클래스를 살펴보면  
> public final class String {\~\~~}  이런식으로 선언되어 있다.  
> 그래서 public class Test extends String{\~~} 등의 상속이 불가능하다  

---

## final 메소드

### 특징
> final 메소드는 재정의를 할수 없는 메소드가 된다  
> final만 들어가면 뭔가 넣고 빼고 수정하기 등이 안된다 생각하면 된다  
> 즉 부모클래스 메소드에 final 키워드를 붙인다면  
> 상속받은 자식클래스에서 해당 메소드를 오버라이딩 할 수 없다는 말

#### 사용법
>public final 리턴타입 메소드명(매개변수, ~){~}
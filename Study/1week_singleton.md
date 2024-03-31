특징

> 애플리케이션 전체에서 단 한 개의 객체를 생성하여 공유해 사용하는 특징이 있다.  
> 스프링 빈 어노테이션또한 싱글톤처럼 관리되는게 아닐까 라는 생각이 들게되었다

주의사항

> 생성자를 private로 접근을 제한하여 외부에서 new 연산자로 또다시 생성자를 호출할 수 없도록 막아줘야 한다.  

예시

> public class Singleton{  
> private static Singleton singleton = new Singleton();  
> private Singleton(){}  
> public static Singleton getInstance(){  
> return singleton;  
> }  
> }

설명

> 자신의 타입으로 미리 객체를 생성하여 초기화 한다.  
> 그리고 private 접근 제한자를 붙여 외부에서 데이터 값을 변경하지 못하게 한다.  
> getInstance()라는 메소드로 해당 객체의 정적 필드값을 반환한다.  
> 즉, 외부에서 객체를 얻는 유일한 방법은 getInstance() 메소드를 호출하는 것.  
> 이것을 표로 예시를 들어본다면  

> Singleton a1 = Singleton.getInstance();  
> Singleton b1 = Singleton.getInstance();  

스택영역

> a1 _힙주소1 b1_ 힙주소1

힙영역

> 힙주소1 ___ 싱글톤 객체

> 이것은 == 로 비교해봐도 같은 주소임을 알 수 있다
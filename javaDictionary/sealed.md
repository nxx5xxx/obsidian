#봉인된클래스
### 의미
> final 클래스를 제외한 모든 클래스는 부모 클래스가 될 수 있는데  
> 무분별한 자식클래스 생성을 방지하기위해 자바15부터 봉인된 클래스가 만들어졌다

### 사용법
>public sealed class 클래스명 permits 상속가능하게 할 클래스들(=자식클래스들){ }
>public sealed class A permits B, C{~}

> sealed 로 만든 부모를 상속받은 자식 클래스는
> public final class B extends A {}  
> 
> public non-sealed class C extends A {}
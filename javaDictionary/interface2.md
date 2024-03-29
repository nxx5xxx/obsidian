### 다형성
> 인터페이스 또한 다형성을 구현하는 주 된 기술로 사용된다.  
> 현업에서는 상속보다는 인터페이스를 통한 다형성의 구현이 더 많다.  
> 다시 한번 의미를 설명하자면 다형성이란 다향한 형태의 성질이 나올 수 있는것.  
> 즉, 사용 방법은 동일하지만 다양한 결과가 나오는 성질을 뜻한다.
> 예를 들어 구현객체 B와 구현객체 C 둘중 어느객체가 인터페이스에 대입되었느냐에 따라  
> 객체 A의 메소드르 호출 결과가 달라질 수 있는것 등을 의미한다.

>그리고 상속의 다형성과 마찬가지로 인터페이스 역시 다형성을 구현하기 위해 재정의와 자동타입 변환 기능을 이용한다.

#### 프로세스
> 인터페이스의 추상메소드 > 구현클래스에서 재정의 > 재정의한 내용은 구현클래스마다 다름  
> 구현 객체는 인터페이스 타입으로 자동 타입변환 > 인터페이스 메소드 호출 시 구현 객체의 재정의된 메소드가 호출되어 다양한 실행 결과를 얻을 수 있다.

---
### 필드의 다형성
> 이것이 자바다의 책을 기준으로 설명하겠다.  
> 예를 들어 자동차를 설계할 때 필드 타입으로 타이어 인터페이스를 선언하면 필드값으로 한국 타이어 또는 금호 타이어 객체를 대입할 수 있다. 이는 자동타입 변환 때문이다.  


```
public class Car{
	Tire tire = new HankookTire();
	Tire tire2 = new KumhoTire();
}
```
> Car 객체를 생성한 후 다른 구현 객체를 대입할 수도 있다. 이것이 타이어 교체에 해당된다.

```
Car myCar = new Car();
myCar.tire1 = new KumhoTire();
```

> tire1과 tire2 필드에 어떤 타이어 구현 객체가 대입 되어도 Car 객체는 타이어 인터페이스에 선언된 메소드만 사용하므로 전혀 문제가 되지 않는다.

---

### 매개변수의 다형성
> 일반적으로 메소드를 호출 시 매개변수 타입을 부모 타입으로 선언하면 호출 할 때 자동타입 변환에 의해 자식객체로 대입할 수 있다.  비슷한 원리로 인터페이스로 매개변수 타입을 선언하면 여러 구현 객체를 대입 할 수 있다

#### 예시
```
public interface Fruit {
	void juicy();
}
```
>구현체 로는 Apple 와 Grape가 있다하고
```
public class Test{
	public void taste(Fruit f){ 
		f.juicy();
	}
}
```
> 이런식으로 인터페이스를 매개변수로 선언 하면
```
Test test = new Test();
Apple apple = new Apple();
test.taste(apple);

test.taste(new Grape());
```
> 가 가능해지는 것이다

#### 예시 설명
> 즉 taste라는 객체를 호출 할 때 구현객체(Apple,Grape)에 따라 오버라이딩 된것이  
> 다르므로 실행 내용이 달라지는데 이것을 매개변수의 다형성이라 한다.

---

### 객체 타입 확인
> 상속받은 객체 타입을 확인하기위해 사용한 instanceof 연산자와 거의 동일하다  
> 아래의 예시를 보자

#### 예시
```
public void method(Fruit f){
	System.out.println(f instanceof Apple);
}
```
> 이 예시는 해당 메소드 매개변수인 Fruit에 대입된 구현객체의 타입이 Apple일 경우 True를 반환한다.  

#### 참고사항
> 자바 12버전 이상부터는 instanceof 의 결과가 true일 경우 강제 타입변환을 하지않고도 우측 타입 변수를 사용 할 수 있다.

##### 예시
> 아래의 Apple apple = (Apple) f; 를 안해줘도 된다는 말이시다.
```
public void method(Fruit f){
	if(f instanceof Apple){
		Apple apple = (Apple) f;
	};
}
```

---

### 봉인된 인터페이스
> 자바 15버전부터 사용 할 수 있으며  
> 자식 인터페이스 생성을 방지하기 위해 사용 할 수 있다.

#### 예시
> 인터페이스A의 자식 인터페이스는 인터페이스B 만 가능하고 그 외에는  
> 자식 인터페이스가 될 수 없도록 한다면  다음과 같이 선언할 수 있다.
```
public sealed interface InterfaceA permits InterfaceB{

}
```
> 여기서 주목해야 할 부분은 **sealed** 와 **permits** 이다

#### 주의사항과 예시2
> 위에서 InterfaceB는 InterfaceA가 봉인(sealed) 되었기 때문에 InterfaceB는 봉인된 특성을 물려받는다  
> 그러한 특성때문에 non-sealed나 sealed를 택해야 하는데 sealed를 할경우에는 그냥 냅둬도 되지만 봉인을 해제하여 다른 인터페이스가 InterfaceB를 상속 받고 싶을 경우엔 non-sealed로 봉인을 해제해줘야한다.

```
public non-sealed interface InterfaceB extends InterfaceA {}

```
> 여기서 뒤쪽에 InterfaceA는 오타가 아니다  
> 예시 1에서 인터페이스A는 인터페이스B만 상속 가능토록 봉인한것이고  
> 예시 2 에서는 인터페이스B를 선언하며 인터페이스A를 상속받아와  
> 봉인해체하여 다른 인터페이스도 인터페이스B를 상속받을수 있게 끔 한 것이다


```
public interface InterfaceC extends InterfaceB {...}
```
> 이것이 가능케 된 것.


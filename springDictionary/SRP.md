#SOLID 
### 단일 책임 원칙
Single Responsibility Principle

- 한 클래스는 하나의 책임만 가져야 한다.
- 하나의 책임이라는 것은 모호하다
	- 클 수 있고, 작을 수 있다
	- 문맥과 상황에 따라 다르다.
- 설계가 잘 된 중요한 기준은 변경이다. 변경이 있을 때 파급 효과가 적으면 단일 책임 원칙을 잘 따른것
- 예) UI 변경, 객체의 생성과 사용을 분리

> UI를 변경하면 SQL을 다 바꾸거나 하면 설계가 잘되지 않은 것  
> 그래서 이것을 적절히 잘 조절하는것이 객체지향 설계의 묘미
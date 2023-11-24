##### 내생각
> JPA를 할때 들었던지라 Object Relationship management 이런 느낌이겠거니 생각  
### 의미
> Object Relational Mapping 즉 객체 관계 맵핑 ( 객체와 관계를 연결해준다 는 의미 )   
> 여기서 말하는 Object 는 자바상의 객체를 말하고 Relational 관계는 관계형 데이터 베이스를 의미한다 

### 사용의의
> Object와 RDB의 불일치를 해결하기 위해 Object를 이용하여 간접적으로 데이터 베이스를 다루게 하기 위함.  

#### 장점
1. 객체를 만들어 사용하기에 재사용성, 유지보수가 뛰어나다.
2. ERD 의존도를 낮출 수 있다. 

#### 단점
1. ORM으로만 완벽히 서비스를 구현하기 어려움
2. 프로젝트가 커질 수록 사용하기가 복잡하다
### 예시
> JPA/Hibernate  
> EJB 엔티티빈  


### JPA
> JPA는 Java Persistence API 
> 자바 진영에서 ORM(Object-Relational Mapping) 기술 표준으로 사용되는 인터페이스의 모음이다  
> 뜻풀이  2.  
> Hibernate, Spring JPA, EcliplseLink 등 과 같은 구현체가 있고 이것의 표준 인터페이스가 JPA

>  EJB Entity 라는 기술또한 너무 안좋아 개빙킹 이라는 개발자가 Hibernate라는 오픈소스를 만들게 된다 이 기술을 가지고 만든 자바 표준인 JPA를 만들게 된다 JPA라는 표준 기술은 인터페이스만 있고 구현체는 따로 만들어야함
https://docs.oracle.com/cd/E19798-01/821-1841/gjddd/index.html
를 참고하여 기술하였다.

즉시평가구문과 지연평구문을 지원한다.
EL(Expression Language)는 값 표현식과 메서드표현식 두가지 종류의 표현식을 정의한다
값 표현식은 값을 반환하거나 설정할 수 있다.
메서드 표현식은 호출 가능하며 반환 가능한 메서드를 참조한다.

## 값 표현
값 표현식은 rvalue 표현식과 lvalue 표현식 두가지로 분류된다.
**rvalue 표현식**은 **데이터 읽기**만 가능하며 **lvalue 표현식**은 **데이터를 읽고 쓰기** 둘다 가능하다
즉시 평가되는 모든 표현식은 ${} 구분자를 사용하며 항상 rvalue 표현식이다.
지연 평가될 수 있는 표현식은 #{} 구분자를 사용하며 rvalue 및 lvalue 표현식 모두로 작동 가능하다.

원문의 설명이 좀 햇갈리는거 같아 개인적인 견해로 풀어 해석하자면
### 원문
>${customer.name}
#{customer.name}
The former uses immediate evaluation syntax, whereas the latter uses deferred evaluation syntax. The first expression accesses the name property, gets its value, adds the value to the response, and gets rendered on the page. The same can happen with the second expression. However, the tag handler can defer the evaluation of this expression to a later time in the page lifecycle, if the technology using this tag allows.

${}는 예를들어 index.jsp 페이지를 실행 시 바로 반영하여
${customer.name} 을 실행 페이지에 그대로 고정하는 의미에서 즉시평가이고,
#{}은 실행 시 보여주기도 하지만 수정도 가능하다
마이페이지 수정하기에서 예를 들어보자면
#{customer.name} 이 예를 들어 김김김 이라 하였을 때
수정페이지에서는 김김김으로 불러왔지만 여기서 끝나지않고
김밈임으로 수정하였을 때 서버로 보내 쓰기까지 하는것이라
나중에 평가된다 하여 지연평가 라 하는것으로 보인다.

### 값표현식을 사용하여 객체 참조
rvlue및 lvalue 두 표현식은 객체의 프로퍼티와 어트리뷰트를 참조할 수 있다
* JavaBeans Components
* Collections (List, Set, Map 등)
* Java SE enumerated types (열거형 상수 데이터)
* Implicit objects (기본지원객체-암묵적 객체라 한다)

### (생략)메서드표현식
**생략**
### (생략)태그 속성 유형정의
**생략**

### EL이 정의하는 리터럴

아래와 같이 5가지 종류의 리터럴이 있다
* Boolean : 부울 true / false
* Integer : 정수
```
${200}
```
* Floating-point : 부동소수점
```
${3.141592}
```
* String : 문자열
```
${"abc"}
```
* Null

### 연산자
EL이 rvalue 표현식에서만 사용 가능한 다음 연산자를 제공한다
* 산술연산 
```
+,-(이진수),/,%,-(단진수)
```
* 논리연산
```
and,&&,or,||,not,!
```
* 관계연산
```
==,eq,!=,ne,<,lt,gt,<=,ge,>=,le
```
* Empty
```
null인지 비어있는지 여부를 판단하는데 사용할 수 있는 접두사 연산
```
* 조건문
```
A ? B : C
```

#### 연산자 우선순위
위에서 높고 아래로 갈수록 낮은순서이다
```
[]
()
-(단항연산자) -> 증감연산자(++,--) , 부호연산자(+A, -B) , 논리부정연산자(!~)
* / % 
+ - (이진수)
< > <= >= lt gt le ge
== != eq ne
&& and
|| or
? :
```

### 예약어
${},#{}식별자로 들어가서는 안되는 단어들
```
and , or , not , eq , ne , lt , gt , le
ge , true , false , null , instanceof , empty , div , mod
```

### 값 표현식을 사용할 수 있는경우
${} 구분자를 사용하는 값 표현식은 아래와 같은 용도로 사용 가능하다.
* 정적 텍스트
* 표현식을 허용할 수 있는 모든 표준 또는 사용자 지정 태그 속성

## 즉시평가구문
페이지가 처음 렌더링 될 때 표현식이 평가되고 결과가 반환되는것을 의미.
(JSP가 실행될 때 즉시 반영된다.)
스코프 탐색 + getter 호출 + 출력 을 한번에 축약한 문법으로 볼 수 있다.
읽기 전용
```
${}
```

### ${}지원하는 기본객체

| 유형             | 객체               | 설명                    | 코드                      |
| -------------- | ---------------- | --------------------- | ----------------------- |
| 연결             | pageContext      | JSP의 pageContext 객체   |                         |
| 스코프            | pageScope        | page보관소의 값 조회         | ${pageScope.객체명}        |
|                | requestScope     | request 보관소의 값 조회     | ${requestScope.객체명}     |
|                | sessionScope     | session 보관소의 값 조회     | ${sessionScope.객체명}     |
|                | applicationScope | application 보관소의 값 조회 | ${applicationScope.객체명} |
| 요청/헤더/쿠키/설정 6개 | param            | 요청 매개변수의 값 조회         | ${param.매개변수명}          |
|                | paramValues      | 요청 매개변수의 값 배열 조회      | ${paramValues.매개변수명}    |
|                | header           | HTTP 헤더의 값 조회         | ${header.헤더명}           |
|                | headersValues    | HTTP 헤더의 값 배열 조회      | ${headerValues.헤더명}     |
|                | cookie           | 쿠키 값 조회               | ${cookie.쿠키명}           |
|                | initParam        | 컨텍                    |                         |
|                |                  |                       |                         |


## 지연평가구문
표현식 언어를 사용하는 기술이 자체 메커니즘을 사용하여 페이지 수명 주기 중 적절한 시점에서 표현식을 평가할수 있음을 의미.
(시스템이 필요로 할 때 즉, 실제 해당 값이 화면에 출력되거나 사용되는 시점에 반영된다.)
JSF(JavaServer Faces) 라이프사이클 시점에 실행됨
표현식 포장 + 지연실행 + getter/setter 양방향 을 축약한 문법으로 볼 수 있다.
* 데이터를 읽고 쓰는데 모두 사용할 수 있는 값 표현식
* 메서드 표현식
```
#{}
```


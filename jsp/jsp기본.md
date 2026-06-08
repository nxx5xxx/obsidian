# JSP란
JavaServerPages의 약자
HTML코드 안에 JAVA코드를 삽입하여 동적웹페이지 가능케해주는 서버사이드 스크립트기술

## 동작
클라이언트가 JSP페이지를 요청하면 WAS가 JSP를 java servlet코드로 변환 후
클라이언트에게 HTML형태로 응답.

## 구성
### 지시자
지시자(Directive)
페이지 전체에 영향을 미치는 요소
```
<%@ %>
```


#### 예시
```
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
```

#### 예시2
```
<%@ page import="java.util.*" %>
<%@ include file = "../header.jsp" %>
```

### 선언자
선언자(Declaration)
JSP 페이지 내에서 사용할 변수나 메소드를 선언하는 요소
해당 변수나 메소드는 스크립트릿에서 사용이 가능하다
```
<%! %>
```

#### 예시
```
<%! int a = 0; %>
```

### 스크립트릿
스크립트릿(Scriptlet)
코드를 실행하고 결과를 출력하는 요소
```
<% %>
```

#### 예시
```
<% 
	int num = 1234;
	out.println
```
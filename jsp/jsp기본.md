# JSP란
JavaServerPages의 약자
HTML코드 안에 JAVA코드를 삽입하여 동적웹페이지 가능케해주는 서버사이드 스크립트기술

## 동작
클라이언트가 JSP페이지를 요청하면 WAS가 JSP를 java servlet코드로 변환 후
클라이언트에게 HTML형태로 응답.

## 구성
### 지시자
페이지 전체에 영향을 미치는 요소
```
<%@ %>
```
태그를 사용하여 작성됨

#### 예시
```
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
```

#### 예시2
```
<@ page import="java.util.*" %>
```

### 
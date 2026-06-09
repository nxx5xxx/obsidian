# JSTL이란
JSP Standard Tag Library 의 약자

## 태그 종류

### core태그

```
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
```
로 선언 후 사용이 가능하다
prefix의 "c" 는 다른것으로도 대체 가능하다 보통 c를 사용한다

#### 지원태그
##### set
변수를 선언하고 값을 할당
```
<c:set var="변수명" value="값" />
<c:set var="num" value="25" />
```

##### remove
변수를 제거
```
<c:remove var="num" />
```

##### if
조건문
```
<c:if test="${num >= 24}">
	num은 24보다 크거나 같습니다
</c:if>
```
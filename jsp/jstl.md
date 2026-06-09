# JSTL이란
JSP Standard Tag Library 의 약자

## 태그 종류

### core태그
https://docs.oracle.com/javaee/1.4/tutorial/doc/
JAVA 1.4공식문서 기준으로 작성

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

###### set2
```
<c:set var="root" value="${pageContext.request.servletContext.contextPath}"/>
```
로 루트지정할 때 많이사용한다

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

##### switch
switch 또는 if/else문 처럼 사용됨
```
<c:choose>
	<c:when num="${num >= 20}"> 20이상 </c:when>
	<c:when num="${num >= 10}"> 10이상 20미만 </c:when>
	<c:otherwise> 10미만 </c:otherwise>
</c:choose>
```

##### forEach
반복문
```
<c:forEach var="i" begin="1" end="10" step="1">
	${i}
</c:forEach>
```

객체 순회시

```
<c:forEach var="item" items="${itemList}">
</c:forEach>
```

###### forEach문2
member에 id pw addr이 있다고 가정시
RequestMapping에서 model.addAttribute로 memberList를 보내서 순회했을 때

```
	<table>
		<thead>
			<tr>
				<td>아이디</td>
				<td>비밀번호</td>
				<td>주소</td>
			</tr>
		</thead>
		<tbody>
			<c:forEach var="member" items="${memberList}">
				<tr>
					<td>${memberList.id}</td>
					<td>${memberList.pw}</td>
					<td>${memberList.addr}</td>
				</tr>
			</c:forEach>
		</tbody>
	</table>
```
이런식으로 사용 가능
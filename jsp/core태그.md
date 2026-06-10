#core태그
### core태그
https://docs.oracle.com/javaee/1.4/tutorial/doc/
JAVA 1.4공식문서 기준으로 작성

```
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
```
로 선언 후 사용이 가능하다
prefix의 "c" 는 다른것으로도 대체 가능하다 보통 c를 사용한다

#### 변수 지원 태그
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

#### 흐름제어 태그
##### if
조건문
```
<c:if test="${num >= 24}">
	num은 24보다 크거나 같습니다
</c:if>
```

##### choose
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

**varStatus**
#varStatus
루프의 상태를 나타내는 속성
```
status.index : 0부터 시작하는 인덱스번호
status.count : 현재 몇번째인지 1부터시작
status.current : 현재 아이템(var 속성의 값과 같음)
status.first : 현재 루프가 첫번째면 true
status.last : 현재 루프가 마지막이면 true
status.begtin : begin 속성을 사용했을경우 그 값이 나옴
status.end : end속성을 사용했을경우 그 값이 나옴
status.step : step속성을 사용했을경우 그 값이 나옴
```
예시
```
<c:forEach var="word" items="${alphabet}" varStatus="status">
	<p>count no : ${status.count} / index : ${status.index} /  current : ${status.current}
</c:forEach>
```
결과
```
count no : 1 / index : 0 / current : A
count no : 2 / index : 1 / current : B
count no : 3 / index : 2 / current : C
```

##### forTokens
String.split() 또는 StringTokenizer와 같은역할을 한다

예시
```
<%-- , 를 기준으로 문자열 분리 --%>
<c:set var="alphabet" value="A,B,C,D,E,F,G" />
<ul>
	<c:forTokens var="word" items="${alphabet}" delims=",">
		<li>${alphabet}</li>
	</c:forTokens>
</ul>
```
결과 
```
A
B
C
D
E
F
G
```

다중구분자 사용시
예시
```
<%-- , 를 기준으로 문자열 분리 --%>
<c:set var="alphabet" value="A,B/C,D/E/F,G" />
<ul>
	<c:forTokens var="word" items="${alphabet}" delims=",/">
		<li>${alphabet}</li>
	</c:forTokens>
</ul>
```
결과
```
A
B
C
D
E
F
G
```

#### URL관리 태그

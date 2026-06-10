#core태그 ^0c9f89
### core태그
https://docs.oracle.com/javaee/1.4/tutorial/doc/
JAVA 1.4공식문서 기준으로 작성

```
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
```

^3b9f25

로 선언 후 사용이 가능하다
prefix의 "c" 는 다른것으로도 대체 가능하다 보통 c를 사용한다

#### 변수 지원 태그
##### set
변수를 선언하고 값을 할당
```
<c:set var="변수명" value="값" />
<c:set var="num" value="25" />
```

##### set2
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

##### forEach문2
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
##### import
다른 외부 자원이나 페이지의 결과를 현재 페이지에 삽입
```
<c:import url="URL주소" [var="변수명"] [scope="영역"] [charEncoding="캐릭터셋"]>
</c:import>
```

현재 위치에 읽어온 내용을 붙여넣을때
```
<c:import url="./header.jsp">
</c:import>
```

읽어온내용을 변수에 저장하여 불러올때
```
<c:import url="./header.jsp" var="header" scope="session" [charEncoding="UTF-8"]>
</c:import>

~~~

${header}
```

jsp:include와 비슷하지만
jsp:include는 같은 웹 애플리케이션 내의 자원만을 포함 가능하지만
c:import는 같은 웹애플리케이션 내의 자원 뿐만 아니라 불러온 url로 부터의 자원까지도 접근이 가능하다

###### scope범위
| 범위          | 저장범위            | 유지시간                     |
| ----------- | --------------- | ------------------------ |
| page        | 현재 페이지 내        | 하나의 페이지가 클라이언트에게 응답할때 까지 |
| request     | 하나의 http요청 처리과정 | 요청이 들어와 응답할때 까지(포워드 포함)  |
| session     | 웹브라우저 하나당       | 세션이 만료되거나 브라우저가 닫힐때 까지   |
| application | 웹 애플리케이션 전체     | 서버가 시작되고 종료될 때 까지        |

##### redirect
reponse.sendRedirect() 메소드처럼 지정한 페이지로 리다이렉트 시켜주는 기능을 제공
```
<c:redirect url="URL주소" [context="컨텍스트경로"]>
	[<c:param name="이름" value="값" />]
</c:redirct>
```

예시
```
<c:redirect url="/jsp/test.jsp" context="exam" />
```
위의 경우 /exam/jsp/test.jsp로 리다이렉트 된다

예시2
```
<c:redirect url="/jsp/test.jsp" context="exam" >
	<c:param name="num" value="1" />
</c:redirct>
```
/exam/jsp/test.jsp?num=1
과 같이 값을 전달하며 리다이렉트된다


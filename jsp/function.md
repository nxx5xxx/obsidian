#function
jstl의 내장함수이며
```
<%@ taglib prefix="fn" uri="http://java.sun.com/jsp/jstl/functions" %>
```
로 선언하여 사용할 수 있다.
EL태그와 함께 사용된다.

https://docs.oracle.com/javaee/1.4/tutorial/doc/JSTL8.html#wp84680
를 참고하여 기술한다

## Collection length
요소(엘리먼트)의 개수를 확인할 때 사용
```
${fn:length(변수명)}
```

예
문자열의 길이
```
<c:set var="str" value="Hello world!!" />
문자열 길이 ${fn:length(str)}

결과값 : 13
```

예2
리스트/배열의 크기
```
itemList가 5개의 리스트를 가진 List인 경우
리스트크기 ${fn:length(itemList)}

결과값 : 5
```

예3
데이터가 있는지 확인할 때 사용
```
<c:if test="${fn:length(itemList) == 0}
	<p>조회된 목록이 없습니다<p>
</c:if>
```

## String manipulation
문자열 조작
문자열의 데이터를 수정, 분리, 결합, 검색, 변환할 수 있다.

### toUpperCase
문자열의 모든 문자를 대문자로 변환
### toLowerCase
문자열의 모든 문자를 소문자로 변환

```
${fn:toUpperCase(변수명)}

${fn:toLowerCase(변수명)}
```

예
```
<c:set var="str1" value="Hello World" />
${fn:toUpperCase(str1)}
HELLO WORLD
```


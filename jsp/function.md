#function

<table>
	<thead>
		<th>영역</th><th>기능</th><th>태그</th><th>접두사</th>
	</theaad>
	<tbody>
		<tr>
			<th rowspan="2">함수</th><td>컬렉션 길이</td><td>length</td><th rowspan="2">fn</th>
		</tr>
		<tr>
			<td>문자열조작</td><td>toUpperCase, toLowerCase,
substring, substringAfter,substringBefore
trim
replace
indexOf, startsWith, endsWith, contains, containsIgnoreCase
split, join
escapeXml</td>
		</tr>
	</tbody>
</table>

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

### substring
인덱스를 지정하여 문자열을 반환한다
```
${fn:substring(반환할변수명,begin,end)}
```
예
```
<c:set var="str" value="Hello" />
${fn:substring(str,1,4)}

결과
ell
```
begin에서 시작해서 end 전까지 반환

### substringAfter
기준이 될 문자열 이후로 반환한다.
```
${fn:substringAfter(변수명,기준이될 문자혹은 문자열)}
```

예
```
<c:set var="str" value="today is goodday" />
${fn:substringAfter(str,"is")}

결과
goodday
```


### substringBefore
인덱스0부터 기준이 될 문자열 앞까지 반환한다
```
${fn:substringBefore(변수명,기준이될 문자 혹은 문자열)}
```

예
```
${fn:substringBefore("today is Goodday","is")}
결과
today 
```

### trim
해당 문자열의 맨 앞과 맨 뒤의 공백을 제거한다
```
${fn:trim(변수명)}
```
예
```
${fn:trim(" 010 ")}
결과
010
```

### replace

```
${fn:replace(변수명,기존문자열,수정문자열)}
```
예
```
${fn:replace("HELLO","LL","M")}
결과
HEMO
```


### indexOf
대상문자열이 처음으로 나오는 인덱스를 반환
```
${fn:indexOf(문자열,대상문자열)}
```
예
```
indexOf : ${fn:indexOf("Oh My Darling","My") }
결과
3
```

### startsWith
문자열이 prefix 접두사(대상문자열)로 시작하면 True를 반환한다
```
${fn:startsWith("문자열","대상문자열")}

```

예
```
${fn:startsWith(" World of Warcraft III","World") }
${fn:startsWith(" World of Warcraft III"," World") }
결과
false
true
```

### endsWith
문자열이 suffix 접미사로 끝나면 True를 반환한다
```
${fn:endsWith("문자열","대상문자열")}
```

예
```
${fn:endsWith(" World of Warcraft III","III ") }
${fn:endsWith(" World of Warcraft III "," III ") }
결과
false
true
```

### contains
대상문자열을 포함하면 true를 반환
```
${fn:contains("문자열","대상문자열")}
```
예
```
${fn:contains("today is goodday","is")}
결과
true
```

### containsIgnoreCase
알파벳의 대소문자는 Letter Case라 한다
대소문자를 무시하고 포함하면 True를 반환한다
```
${fn:containsIgnoreCase("문자열","대상문자열")}
```
예
```
${fn:containsIgnoreCase("Today iS Goodday","is good")}
true
```
### split
문자열을 separator(분리기호)에 따라 나눈 배열로 반환
```
${fn:split("문자열",separator)}
```
예
```
<c:set var="str" value="A,BB,CCC,D" />
<c:forEach var="arr" items="${fn:split(str,',')}" >
	${arr}
</c:forEach>
결과
A BB CCC D
```
### join

### escapeXml


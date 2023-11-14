#### 특징
> replace에는 replace() 와 replaceAll() 그리고 replaceFirst()가 있다  
> 세가지 다 동작 방법이 다르며 사용방법 또한 다르다 아래에 하나씩 기술해 보겠다.  

---
#### replace()
> replace() 에는  replace(oldChar a, newChar b) 방식  
> replace([CharSequence](https://docs.oracle.com/javase/8/docs/api/java/lang/CharSequence.html "interface in java.lang") target,[CharSequence](https://docs.oracle.com/javase/8/docs/api/java/lang/CharSequence.html "interface in java.lang") replacement) 방식이 있다  
> 첫번째 방식은 문자열이 아닌 문자를 지정해 원하는 문자로 바꾼 문자열을 반환하고  
> 두번째 방식에는 CharSequence 라는 인터페이스가 등장하는데 해당 인터페이스는  
> String에서도 사용되는 문자나열 방식의 인터페이스 이다 (문자열 이라고 생각하자)  
> 쉽게 바꿀문자열변수.replace(기존의문자또는 문자열, 바뀐후 문자또는 문자열);  
> 로 사용 할 수 있는것이다.

##### 사용방법
>String str = "Java Java Java";  
>String replaceTest = str.replace("Java", "Molba");  
>System.out.println(replaceTest);  
>결괏값 :  
>Molba Molba Molba

---
#### replaceAll()
> replace(String regex, String replacement)로 기술되어 있는데  
> 이는 구현부에 들어가 코드를 뜯어보면  
> public String replaceAll(String regex, String replacement) {  
> return Pattern.compile(regex).matcher(this).replaceAll(replacement);  
> }  
> 와 같은 형태로 되어있다.  
> 즉, Pattern객체를 사용하고 해당 객체는 한번 사용 후 재사용 되지 않기때문에  
> GC의 대상이 되어 객체 생성비용이 높다(메모리 사용량 상승)  
> 그렇다면 replaceAll은 왜 사용하는가?  
> replaceAll에서는 [[정규표현식]]의 사용이 가능하여 replace에서 하나씩 해야하는 작업을 한꺼번에 해줄 수 있기 때문이다

##### 예시 및 사용방법
>String numb = "Hello 0123456789";  
>와 같은 문자열이 있다 이중 숫자만 공백으로 바꾸고 싶다 했을 때. replace메소드를 사용한다면  
>numb.replace("0", "").replace("1", "").........replace("9", ""); 와 같은 형태가 되어 아주 지저분해진다.  
>그치만 replaceAll의 [[정규표현식]] 을 사용하여 작성하면  
>numb.replaceAll("\[0-9]",""); 과 같이 아주 간단하게 작성이 가능하다.

---

#### replaceFirst
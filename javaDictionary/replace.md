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
> replace(String )
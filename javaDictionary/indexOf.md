#String 
### 특징
> indexOf는 해당 문자열에서 내가 필요로 하는 문자열의 위치를 반환해준다.  
> 내가 찾는 문자열이 **없을 경우 -1** 을 반환한다.  
> indexOf는 가장 앞에서 부터 찾아 그 값 한개를 반환하며  
> lastIndexOf는 뒤에서 부터 해당 값을 찾아 그 위치 한개를 반환한다.

---
#### 사용방법 - indexOf
> a.indexOf(String b);  

##### 예시
> String str = "abababab";  
> System.out.println(str.indexOf("a"));  
> 결괏값 :  
> 0

---
#### 사용방법 - lastIndexOf
> a.lastIndexOf(String b);  

##### 예시
> String str = "abababab";  
> System.out.println(str.lastIndexOf("a"));  
> 결괏값 :  
> 6

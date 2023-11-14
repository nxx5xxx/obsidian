### 특징
> split은 내가 원하는 문자열을 기준으로 나눠 문자열 배열로 반환한다.  
> split은 split(String regex)와 split(String regex, int limit)으로 나뉘는데 여기서 나오는  
> limit은 아래 사용방법에 같이 기술하겠다.  

---

#### 사용방법 - split(String regex)
> a.split(String regex)  
> regex로 써놓은 바와 같이 정규 표현식을 기준으로도 나눌 수 있다

##### 예시
> String str = "도망가-가가각-가가가각-도망가-망가-내게로 부터 멀리";  
> String[] splitStr = str.split("-");  
> System.out.println(Arrays.toString(splitStr));  
> 결괏값 :   
> \[도망가, 가가각, 가가가각, 도망가, 망가, 내게로 부터 멀리]  

##### 예시2
> String str = "도망가-가가각-가가가각-도망가-망가---";  
> String[] splitStr = str.split("-");  
> System.out.println(Arrays.toString(splitStr));  
> 결괏값 :   
> \[도망가, 가가각, 가가가각, 도망가, 망가, , , ]  
> - 를 기준으로 나눳기 때문에 빈곳이 들어찬다 이와 같은 오류를 해결해줄것이  
> int limit의 값이다  

---
#### 사용방법2 - split(String regex, int limit)
> a.split(String regex, int limit)

##### 예시1 - limit \== 0
> String str = "A-B-C-D--E--F----";  
> String[] splitStr = str.split("-",0);  
> System.out.println(Arrays.toString(splitStr));  




 
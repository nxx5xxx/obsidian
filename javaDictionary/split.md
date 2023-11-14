### 특징
> split은 내가 원하는 문자열을 기준으로 나눠 문자열 배열로 반환한다.  
> split은 split(String regex)와 split(String regex, int limit)으로 나뉘는데 여기서 나오는  
> limit은 split으로 나뉠 배열의 최대를 지정해준다

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
> \[도망가, 가가각, 가가가각, 도망가, 망가]  
> -기준으로 나뉘었어도 맨 뒤에가 빈곳이라면 빈곳의 값은 , 로 나누지 않고  
> 없는 값으로 들어찬다 만일 빈 값도 나누고 싶다면 아래의 limit을 참고하자

---
#### 사용방법2 - split(String regex, int limit)
> a.split(String regex, int limit)

##### 예시1 - limit \< 0
> String str = "A-B-C-D-E-F----";  
> String[] splitStr = str.split("-",-1);  
> System.out.println(Arrays.toString(splitStr));  
> 결괏값 :  
> \[A, B, C, D, E, F, , , ,]

##### 예시2 - limit \== 0
> String str = "A-B-C-D-E-F----";  
> String[] splitStr = str.split("-",0);  
> System.out.println(Arrays.toString(splitStr));  
> 결괏값 :  
> \[A, B, C, D, E, F]  
> limit에 0을 주면 일반 split 사용할 때와 같은 값을 얻는다

##### 예시3 - limit \> 0
> String str = "A-B-C-D-E-F----";  
> String[] splitStr = str.split("-",5);  
> System.out.println(Arrays.toString(splitStr));  
> 결괏값 :  
> \[A, B, C, D, E-F----]  
> 해당 결과 처럼 limit에 들어가는 정수는  
> 배열의 최대 길이 값(length)을 결정해 준다



 
### 특징
> split은 내가 원하는 문자열을 기준으로 나눠 문자열 배열로 반환한다.  
> split은 split(String regex)와 split(String regex, int limit)으로 나뉘는데 여기서 나오는  
> limit은 아래 사용방법에 같이 기술하겠다.  

---

#### 사용방법 - split(String regex)
> a.split(String regex)  
> 정규 표현식을 기준으로도 나눐

##### 예시
> String str = "도망가-가가각-가가가각-도망가-망가-내게로 부터 멀리";  
> String[] splitStr = str.split("-");
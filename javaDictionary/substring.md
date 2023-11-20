#String 
### 특징
> substring은 문자의 인덱스 번호를 지정하여 문자를 잘라 낼 수 있다.

#### 사용방법
> a.substring(start index); 또는  
> a.substring(start index,end index); 또는  
> 여기서 주의해야 할 점은 end index 바로 앞까지 잘라낸다는 것이다.

#### 예시
> String str = "0123456789"; // 설명을 쉽게 하기 위해 인덱스번호와 맞췃다.  
> String substringTest1 = str.substring(5);  
> System.out.println(substringTest1);  
> 결괏값 :  
> 56789

#### 예시2
> String str = "0123456789"; // 설명을 쉽게 하기 위해 인덱스번호와 맞췃다.  
> String substringTest2 = str.substring(3,8);  
> System.out.println(substringTest2);  
> 결괏값 :  
> 34567


#조건문
## 특징
> if문은 if , if else , if else if else 세 가지로 나뉜다  
> 사실 안 나눠도 된다  
> 해당 조건문(if) 을 만족하면 if문 내에 있는 코드가 실행된다.  
> 조건문에는 true , false를 산출 해낼 수 있는 연산 식 또는 boolean 변수가 올 수 있다.

#### 사용법1
> if(조건문){ 조건에 만족했을 때 실행 코드 }

#### 사용법2
> if(조건문){ 조건에 만족했을 때 실행 코드 }  
> else{ 조건문에 만족하지 않았을 때 실행코드 }

#### 사용법3
> if(조건문1){ 조건에 만족했을 때 실행 코드 }  
> else if(조건문2){ 조건문1에는 만족하지 않지만 조건문 2에 만족했을 때 실행코드 }  
> else{ 조건문1 , 2 아무것도 만족하지 않았을때 실행코드 }

#### 예시1
> int a = 5;  
> if(a\==5){ System.out.println("a는 5와 같습니다") }

#### 예시2
> int a = 5;  
> if(a\>5){ System.out.println("a는 5보다 큽니다") }  
> else{ System.out.println("a는 5보다 작거나 같습니다") }

#### 예시3
> int a = 5;  
> if(a\>5){ System.out.println("a는 5보다 큽니다") }  
> else if(a\>=0){ System.out.println("a는 5보다 작거나 같고 0보다 크거나 같습니다") }
> else{ System.out.println("a는 0 보다 작습니다")  }
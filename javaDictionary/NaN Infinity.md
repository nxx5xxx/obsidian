### NaN과 Infinity에 대해
> NaN(Not a Number) 와 Infinify(무한대)는 나눗셈 또는 나머지 연산 과정에서 발생한다  
> 좌측 피연산자의 값이 정수이고 우측 피연산자가 0 일경우 예외가 발생하는데(ArithmeticException)  
> 이는 무한대의 값을 정수로 표현할 수 없기 때문에 나오는 예외이다.  
> 하지만 좌측 피연산자가 실수이거나 우측 피연산자가 0.0 또는 0.0f이면  
> 예외가 아닌 Infinity 또는 NaN의 값이 나오게 된다.  

#### 예시
> int x = 5;  
> int y = 0;  
> int result = 5/0; --> 예외발생 

#### 예시2
> 5 / 0.0 --> Infinity  
> 5 % 0.0 --> NaN  

### 피해야 하는 이유
> Infinity와 NaN에는 어떤 값을 연산 하더라도 똑같은 Infinity와 NaN으로 결과가 나온다.  
> 이것으로 인해 모든 연산 결과가 엉망이 될 수 있으므로 해당 구문을 처리해 줘야 한다.

#### 처리법
> Double.isInfinite(변수) 와 Double.isNaN(변수) 을 사용함으로 써 해당 결괏값이  
> Infinity 일 경우 True 와 NaN일 경우 true를 산출하여 구분 할 수 있다.

#### 처리 예시
> int x = 5;  
> double y = 0.0;  
> double z = x / y;
> if( Double.isInfinite() 와 Double.isNaN())
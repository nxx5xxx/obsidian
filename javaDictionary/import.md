### 특징
> 같은 패키지에 있는 클래스는 아무 조건없이 사용할 수 있지만, 다른 패키지에 존재하는 클래스를 사용해야 할 경우 해당 클래스를 import 문을 이용해 어떤 패키지의 클래스를 사용할 지 명시해야 한다.  

### 예시
> import 패키지명.클래스명;  
> import java.util.Arrays;

### 참고
> 똑같은 패키지에서 여러개의 클래스를 사용하려 할 때 \* 을 사용하여 한꺼번에 불러올 수 있다.  
> 예 : import java.util.\*;

#### 주의사항
> import문은 하위의 패키지까지 포함하지 않는다 예를들어  
> com.example.random.Oxx.java 라는 클래스를 사용하려 할때  
> com.example.\* 라고 하면 example에 있는 클래스만 import되고 random 디렉토리에 있는 클래스들은 import 되지 않는다.
> 
### 주의사항2
> 같은 이름의 클래스를 갖고있다면 컴파일에서 에러가 발생한다  
> 이 경우 해당 객체는 명시적으로 패키지명을 써줘야한다

#### 예시
> import com.dog.Food;  
> import com.cat.Food;  
> 이렇게 import하려는 클래스의 이름이 같은경우  
> Food food = new Food(); 인스턴스화 할때 에러가 난다  
> 이것을 해결하기 위해서는
> com.dog.Food food = new com.dog.Food();  
> import를 하지않고 이런식으로 패키지명을 포함한 풀네임으로 해주면 된다.
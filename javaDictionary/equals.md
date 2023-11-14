#연산자

#### equals()
#### 특징
>object에서의 equals가 있고 String에서의 equals가 있는데  
>먼저 **Object에서의 equals는 A와 B의 주소가 같은지**를 비교.  
>**String** 에서의 equals는 A와 B의 주소를 먼저 비교하고 같다면 true 리턴  
>**다르면** 해당 A와 B의 **내부 값**을 비교하여 (bytecode로) 같다면 true를 리턴해준다.


1. 서버와 클라이언트의 기본 이해

![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg)서버와 클라이언트란 무엇인가? 
![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg)웹 서버와 웹 애플리케이션 서버의 차이 
![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg)대표적인 웹 서버 소프트웨어 특징 (예: Apache, Nginx) 
![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg)서버와 클라이언트의 관계 예시

2. 클라우드 서버와 보안

![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg) 클라우드 컴퓨팅의 기본 개념
![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg)대표적인 클라우드 서비스 각 특징 (예: AWS, Azure, Google Cloud)
![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg)서버 보안의 중요성 및 보안 조치
![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg)SSL/TLS 등 보안 프로토콜 특징

3. 최신 서버 기술 트렌드

![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg)컨테이너화와 오케스트레이션 (Docker, Kubernetes) 기본 개념
![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg)서버리스 아키텍처와 그 장점
![✅](https://discord.com/assets/4391ab6a6811cbf8f05b.svg)AI를 활용한 서버 응용 예시

---

### 서버와 클라이언트의 기본이해
#### 서버와 클라이언트란 무엇인가
> 클라이언트는 서버로부터 서비스나 데이터를 요청하는 컴퓨터  
> 서비스 요청자 라고 할 수 있다.

> 서버는 데이터를 포함하거나 네트워크의 다른 컴퓨터에서 액세스하는 기능을 제공하는 컴퓨터  
> 서비스 제공자 라고 할 수 있다.

> 즉, 서버는 클라이언트로부터 요청을 받아(request) 응답을 해준다(response)  
> 서버와 클라이언트는 서로 정보를 제공하고 제공받는 관계이며  
> 서버는 물리적인 하드웨어를 가르키지만 서버 내의 웹서버 소프트웨어 또한 서버라고 불린다  
> 클라이언트는 웹브라우저, 사용자가 사용하는 기기, 사용자 자체를 클라이언트라 부르기도 한다.  

#### 웹서버와 웹 애플리케이션 서버의 차이
> 웹서버는 주로 정적인 데이터를 다루며 WAS(웹애플리케이션 서버) 안에 포함되어있다  
> 웹 애플리케이션 서버는 웹서버와 웹 컨테이너를 포함하고있고 웹 컨테이너에서는 JSP , Servlet같이 동적인 데이터를 처리한다  

#### 대표적인 웹서버 소프트웨어 특징
##### 아파치
> 아파치는 하나의 요청이 들어오면 하나의 프로세스를 생성하여 연결한다  
> 동적데이터 처리도 가능하다  
> 10000개 이상의 요청이 들어왔을경우 대용량 처리에러가 많이 발생한다  


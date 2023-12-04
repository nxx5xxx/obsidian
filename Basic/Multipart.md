### 의미
- 클라이언트와 서버 간에 전송되는 HTTP 요청 또는 응답에서 여러 종류의 데이터를 **동시에** 전송하기 위해 사용하는 방식  
- 일반적으로 파일 업로드와 관련된 데이터를 전송하는데 주로 사용됨
- HTTP 프로토콜은 텍스트 기반의 요청과 응답을 처리한다 그로인해 파일과 같은 이진 데이터를 전송 할때는 이진 데이터를 텍스트 형식으로 인코딩하여 보내게 되는데 이것은 비효율적이며 제한이 있어 이러한 이진 데이터를 인코딩 하지 않고 원본 형식으로 전송할 수 있도록 해주는것이 멀티파트이다
- 멀티 파트 요청은 Content-Type 헤더에 multipart/form-data 값을 가지며 여러개의 파트 로 구성된다. 각 파트는 개별적인 데이터 조각으로 파일이나 텍스트 데이터 등을 포함할 수 있다. 각 파트는 헤더와 본문 으로 구성되어 있으며 헤더에는 파트의 메타 데이터가 포함되어 있고 본문에는 실제 데이터가 포함된다.
- 멀티파트 요청을 처리하기 위해서는 서버 측에서 멀티파트 데이터를 [[파싱]] 하고 해석하는 로직이 필요하다 . 일반적으로 멀티파트 요청을 처리하는 라이브러리나 프레임워크를 사용하여 멀티파트 데이터를 추출하고 처리한다.
- SpringMVC에서는 [[MultipartResolver]]를 사용하여 멀티파트 요청을 처리한다.
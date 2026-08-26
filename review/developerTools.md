#developerTools
평소에 신경 안쓰고 필요한 것 만 선택하긴 했었는데
인텔리제이엔 설명이 써있으니까 해당 설명들을 써놔보겠다

## GraalVM Native Support
GraalVM의 native-image컴파일러를 사용하여 Spring 어플리케이션 네이티브 실행파일로 컴파일 할수 있도록 지원 이라고 써있다
검색해보니 자바코드를 미리 컴파일 하여 JVM 없이도 즉시 실행할 수 있게 만드는 기술
이라 써있다

자세한사항은
https://docs.oracle.com/ko/learn/graalvm-and-containerisation/index.html#introduction
를 참고

## GraphQL DGS Code Generation
스키마파일을 파싱(분석)해서 데이터 타입과 안전한타입의 API를 생성하고 GraphQL API를 조회할수 있도록 한다. 라고 써있으며
넷플릭스의 DGS(Domain Graph Service) 프레임워크와 Code Generation 기능을 사용하면 GraphQL API를 안전하고 빠르게 개발 할 수 있습니다
라고 써있다

## Spring Boot DevTools
애플리케이션 빠른재시작, 라이브리로드, 향상된 개발경험 구성을 제공한다
라고 간략하게 써있으며
코드를 고치고 저장하면 서버를 재시작하지 않아도 자동으로 새로고침 해주는 도구라고 생각하면 된다

## Lombok
반복적으로 재사용되는 코드를 간결하게 나타내도록 도와주는 Java Annotaion 라이브러리 이다
@Getter, @Setter, @ToString, @NoArgsConstructor등으로 줄여준다


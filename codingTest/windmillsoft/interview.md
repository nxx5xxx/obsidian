# 면접 예상질문

1. 쿠키와 세션 차이
- 쿠키
	-  사용자 컴퓨터에 저장됨
	-  이름, 값, 만료일, 경로 정보 의 구성을 가짐
	-  클라이언트에 총 300개의 쿠키를 저장 가능
	-  도메인당 20개의 쿠키 저장 가능
	-  쿠키 한개당 4kb까지 저장 가능

- 세션
	- 웹서버에 접속한 시점부터 웹브라우저를 종료하여 연결을 끝낼때 까지 유지됨
	- 웹서버에 접속해 있는 상태를 하나의 단위로 보고 그것을 세션이라 함
	- 웹서버에 웹컨테이너의 상태를 유지하기 위한 정보를 저장
	- 쉽게 웹 서버에 저장되는 쿠키라고 생각하면 됨
	- 브라우저를 닫거나 서버에서 세션을 invalidate할때 삭제되므로 쿠키보다 보안이 좋음
	- 저장 데이터에 제한이 없다(서버 용량 허용치 내에서)
	- 각 클라이언트에 고유 session Id 를 부여한다
	- Session ID로 클라이언트를 구분해 각요구에 맞는 서비스를 제공

- 장점과 단점
	- 쿠키
	- 속도면에서 더 빠름 (이미 쿠키에 정보가 있기 떄문)
	- 로컬에 저장되기 때문에 변질되거나 스니핑 당할우려로 보안에 취약
	- 세션
	- 속도가 느림(서버에 정보가 있기때문에 처리가 요구됨)
	- 쿠키를 이용하여 sessionID만 저장하고 그것으로 구분해 서버에서 처리하때문에 보안성이 높음
- 캐시
	- 웹페이지 요소를 저장하기 위한 임시저장소
	- 웹페이지를 빠르게 렌더링 할 수 있도록 도와줌
	- 쿠키와 세션을 사용자의 인증을 도와줌 - 혼동하지말것
  
2.  변수에 대해 설명해 보시오
- 변할수 있는 성질을 가진 메모리 공간
- 데이터 값을 저장하기 위한 이름을 갖고있는 공간
- 기본적으로 물리적 메모리 주소를 기억하는 역할을 함
- 변수를 참조할 때에는 메모리 주소를 참조하는 것이 아닌, 해당 주소에 저장된 데이터를 참조
- 즉, 변수는 데이터가 저장된 메모리의 주소와 저장된 데이터 길이, 형태에 관한 정보도 같이 기억해야함
3.  Array에 대해 설명해 보시오
- 배열. 타입 또는 변수명 뒤에 대괄호를 붙여 배열로 선언하며 사이즈 밑 배열의 구조로 초기화 할 수 있다
- 인덱스와 밸류(값) 구조로 되어있다
- 0번째부터 시작이 된다
- 기본적으로 배열의 변수를 출력하면 메모리 주소가 출력이 되며 반복문으로 인덱스를 하나씩 조회하여 출력하거나 Arrays.toString(배열변수명) 메소드를 사용하여 출력할 수 있다

3. API에 대해 설명해 보시오
- Appliacation Programming Interface 의 약자이다
- 인터페이스는 복잡한걸 누구든 사용할 수 있게 편리하게 해주는것 이라고 생각하면 되는데
  즉 운영체제와 응용프로그래밍 사이의 통신에 사용되는 언어나 메시지 형식 같은것
- 쉽게 말하면 응용프로그램언어를 사용하기 쉽게끔 해준것

4.  프로젝트 경험 시 힘들었던 점
5.  우리 회사가 지원자를 채용해야 하는 이유
6.  전공이 다른데 왜 이 분야를 선택하였나
7.  포부
8.  장점 - 5와 귀결
9. 왜 이 회사에 지원하게 되었는지
   - 처음 지원할까 고민하게 된 부분은 코딩테스트 -> 코딩테스트를 보고 사람을 뽑는 회사에 지원을 하고 싶기도 하였고 내가 지금까지 준비해온 것으로 코딩테스트를 볼 실력이 될지에 대한 궁금한점들이 있었음
   - 우대사항에 세일즈포스 CRM 경험자라는 생소한 개발분야가 있어 찾아보니 세일즈포스를 이용하여 APEX라는 언어를 사용해 개발을 하는것으로 보여 더 검색을 하다보니 한국시장엔 많이 알려져 있지 않지만 장래성이 좋아보여 긍정적으로 받아들여졌음
   - 또한 복리후생에 써있는 Music으로 시작하는 하루가 회사 분위기가 서먹하지 않을것 같아 좋아보였습니다
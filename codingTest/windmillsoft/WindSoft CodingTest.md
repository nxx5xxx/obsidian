아직 진행중이라 문제나 답에 대한 정보를 올리는 행위는 안될거같아

어떤식 으로 진행 중 인지만 써보자면

프로그래머스 코딩테스트와 거의 유사하게 진행

문제와 예시가 주어지고 정답을 도출할 수 있게끔 출력해주면 됨

예를들어 정수 n 이 주어질 때 n의 제곱을 출력하시오

System.out.println((int)Math.pow(n,2)); 이런식으로 해도되고

System.out.println(n*n) 이렇게 진행해도 된다

테스트 케이스를 추가 할 수 있으나 프로그래머스 코딩테스트 처럼

답을 적어놓는 칸은 없어서 조금 아쉽다

--

# 코딩테스트 설명

### 2번
>public static void main(String[] args) throws Exception {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        String input = br.readLine();
        String[] str_arr = input.split(" ");
        double result=Double.parseDouble(str_arr[0])*Double.parseDouble(str_arr[1])/2;
        System.out.printf("%.1f",result);
    }

> 기존에 주어지는 BufferedReader는 그대로 사용하였고
> 밑변과 높이가 공백을 사이에 두고 입력되므로
> split() 메소드를 사용하여 해당 글자들을 배열에 저장해주었다
> 그 후 결과값에 맞게 parseDouble()메소드를 사용해주고 (float보다 Double이 정확성이 더 좋은걸로 알고있어서 double로 변환해준것)
> println이 아닌 printf문으로 소수점 1번째 자리까지 출력하도록 해주어 답을 출력해주었다



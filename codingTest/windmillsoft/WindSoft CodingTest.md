아직 진행중이라 문제나 답에 대한 정보를 올리는 행위는 안될거같아

어떤식 으로 진행 중 인지만 써보자면

프로그래머스 코딩테스트와 거의 유사하게 진행

문제와 예시가 주어지고 정답을 도출할 수 있게끔 출력해주면 됨

예를들어 정수 n 이 주어질 때 n의 제곱을 출력하시오

System.out.println((int)Math.pow(n,2)); 이런식으로 해도되고

System.out.println(n*n) 이렇게 진행해도 된다

테스트 케이스를 추가 할 수 있으나 프로그래머스 코딩테스트 처럼

답을 적어놓는 칸은 없어서 조금 아쉽다

----

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


### 3번

>    public static void main(String[] args) throws Exception {  
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));  
        String start = br.readLine();  
        String data = br.readLine();  
        //시작시간 정수 60분단위로  
        int start_int = Integer.parseInt(start.substring(0,2))\*60+Integer.parseInt(start.substring(3,5));  
        /*
        버스5대의 도착시간을 입력  
        사이 공백을 두고 시,분 시는 24시간 (00:00~23:59)  
        첫줄에는 현재시간을 적고 둘째줄은 테스트 데이터 시간  
        현재시간 보다 적은 시간은 제외해야하고 그 외의 값에서만 구해야 제대로된 시간이 구해짐  
        출력하는 단위도 분 이니까 시간을 분으로 바꿔서 하는게 효율적일듯  
        안에있는 배열정수값으로 바꿔 정렬하거나 Arrays.sort쓰거나 priorityqueue로 바꿔 앞에꺼만 뽑아오거나
        */
        //데이터 하나씩 쪼개기  
        String[] data_split = data.split(" ");  
        //우선순위큐에 넣어서 자동정렬  
        PriorityQueue\<Integer> pq = new PriorityQueue<>();  
        for(String tmp : data_split){  
            int tmp_int = Integer.parseInt(tmp.substring(0,2))*60+Integer.parseInt(tmp.substring(3,5));  
            if(tmp_int>=start_int){  
                pq.offer(tmp_int-start_int);  
            }  
        }  
        //가장 먼저오는버스만 출력  
        System.out.println(pq.poll());  
    }  

> 순서가 3번이 맞는지 모르겠으나 중요한건 아니므로 진행  
> 첫줄에는 현재시간을 24시 형태로 넣을 경우 예를들어 15:33으로 들어 온다면  
> 출력 하는 단위가 분으로 정해져 있어 시간을 분으로 미리 바꿔서 비교해 보는것이 좋다
> :를 기준으로 쪼개거나 :뒤에를 넣는 계산을 해도 되지만  
> 어차피 시간2칸 분2칸 고정이므로 substring을 사용  
> 현재시간 \* 60 + 분 보다 작은 것들은 제외하고
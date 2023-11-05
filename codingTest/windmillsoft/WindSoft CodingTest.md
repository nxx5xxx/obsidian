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
> 버스 시간표는 띄어쓰기 기준으로 하나씩 입력되는 것 이므로 split()메소드를 사용하여  
> 시간표를 하나씩 배열에 넣고 해당 배열에서 하나씩 끄집어내어  
> 현재 시간보다 크거나 같을경우 만들어 놓은 우선순위큐에 넣어 오름차순으로 알아서 정렬되도록 하였다  
> 오름차순으로 자동정렬 되므로 가장 앞에 오는 (먼저오는 버스) 한개만 출력하면 정답


### 4번

>    public static void main(String[] args) throws Exception {  
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));  
        String input = br.readLine();  
        /*
            물탱크가 모든 집에 원할하게 공급할 수 있는 위치를 찾아야함  
            n개 가구와 n-1개의 단향으로 수로설치  
            모든수로는 한쪽으로만 이동  
            1개의 개구에서 여러갈래 가능하지만 들어오는구멍은 하나뿐 > 출구여러개 입구한개  
            같은집으로 나갔던 물이 돌수없음  
            물탱크는 한곳만 설치가능  
            첫줄은 가구의 개수  
            둘째줄은 앞은 수로 출구번호 뒤는 수로 입구번호  
            물탱크를 설치한 위치를 찾으시오  
            쉽게 뒤에 나온적 있던애들은 다 제외  
            n이 200,000까지 가니까 List보단 Hash가 빠를것같음  
        */
        int input_int = Integer.parseInt(input);  
        HashMap<String, Boolean> map = new HashMap<>();  
        //substring에 숫자 지정하면 자리수 넘어갈 경우 문제일어남  
        //indexOf랑 같이써야할거같다  
        for(int i=1;i<input_int;i++){  
            String tmp = br.readLine();  
            map.put(tmp.substring(tmp.indexOf(" ")+1),true);  
        }  
        int sw = -1;  
        for(int i=1;i<=input_int;i++){  
            if(!map.containsKey(i+""))sw=i;  
        }  
        System.out.println(sw);  
    }  

> 물은 한쪽으로만 흐르고 맨 앞에 나왔던 집 번호가 뒤에도 나온적이 있다면  
> 다른 집에서 받아온적이 있다는 공통점을 이용하여 접근   
> 즉, 뒤에 나온번호만 다 저장해놓고 그 뒤에 나왔던 번호가 앞에 나왔던 적이 없다면  
> 해당 집 번호는 다른곳에서 받아온 적이 없는 물탱크가 설치 되어있는 집인것  
> 시작번호와 끝번호는 띄어쓰기를 구분하여 받고 줄바꿈을 이용하여 다음 집을 입력하는 것 이므로  
> 반복문을 사용하여 br.readLine을 이용해 한줄 씩 입력받고
> 입력받은 정보를 바로 map에 넣는데 뒤에있는 번호를 이용할것 이므로 뒤에번호만  
> Key값으로 저장하였다 value값은 무엇이 들어오든 상관없으니 boolean값을 넣어줌  
> 첫줄에 나온 가구의 갯수만큼 반복문을 진행시키고 모든 진행이 끝나면  
> 뒤에 나온 값을 저장한 map에 해당 키가 있나 확인 하는 반복을 실행  
> 집이 순서대로 나온다는 가정하에 1번집 부터 집 개수만큼 진행하며 i를 1씩 증가시켜  
> 하나씩 map에 입력한 키가 있나 확인하는 방식  
> 입력한 키가 없을 경우엔 공급을 받은 집이 아니므로 시작 집이라 판단하여 해당집을  
> 출력문으로 출력하도록 하였다

## 5번

>public static void main(String[] args) throws Exception {  
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));  
        String input = br.readLine();  
        /*  
        첫줄 n. 현재금액 , m 거래횟수  
        둘째줄부터 m번만큼 실행  
        deposit : + 입금 , pay : - 결제  
        reservation : -결제 현재금액보다 크다면 대기목록으로  
        대기목록은 순서대로 결제되니까 fifo구조  
        계좌의 현재 잔액이 첫번째 금액보다 커지면 작아질때까지 바로 결제가됨  
        한줄 실행하고 한번 확인하고 또는 deposit(입금)이 발생했을때 reservation을 확인하는게 나을 듯하다  
        \*/  
        //금액  
        int money = Integer.parseInt(input.substring(0,input.indexOf(" ")));  
        //거래횟수  
        int deal = Integer.parseInt(input.substring(input.indexOf(" ")+1));  
        //거래를 담을 배열   
        String\[]\[] arr = new String\[deal]\[2];  
        for(int i=0;i<deal;i++){  
            arr[i]=br.readLine().split(" ");  
        }  
        //reservation  
        Queue\<Integer> rsv = new LinkedList<>();  
        for(int i=0;i<arr.length;i++){  
            int sys_money = Integer.parseInt(arr\[i]\[1]);  
            switch(arr\[i]\[0]){  
                case "deposit":  
                    money+=sys_money;  
                        while(!rsv.isEmpty()){  
                            if(money>=rsv.peek()){money-=rsv.poll();  
                            }else{break;}  
                        }  
                    break;  
                case "pay":  
                    if(money>=sys_money){money-=sys_money;}  
                    break;  
                case "reservation":  
                    rsv.offer(sys_money);  
                        while(!rsv.isEmpty()){  
                            if(money>=rsv.peek()){money-=rsv.poll();  
                            }else{break;}  
                        }  
                    break;  
            }  
        }  
        System.out.println(money);  
    }  

> 설명이 좀 애매했던 테스트
> 현재금액 n 과 거래횟수 m이 주어지니까 m번만큼 반복문을 실행하여야 함  
> m번사이즈와 2칸짜리 배열을 만들어 그 배열에 m번(arr.length)만큼 반복하여  
> 배열\[i]\  에 저장하는 반복문을 만들어 저장하고 (띄어쓰기 기준으로 한줄씩 입력)  
> deposit이나 pay같은 경우에는 그냥 사용하면 되지만  
> reservation 의 경우 reservation에 있는 값을 불러들일 경우 순서가 보장되어야 하고  
> 가장 먼저 넣은값을 불러들일때 가장 먼저 빼야하는 FIFO구조인 linkedlist가 제격이라고 판단  
> pay부분에서 지불할 금액이 모자를 경우 그것도 reservation에 넣어야하나 고민하다  
> 해당 부분에 대한 설명이 부족하다 느껴 금액이 부족할 경우엔 무시하도록 break를 넣어버렸다  
> reservation의 경우 결제가 되더라도 먼저 결제대기중인 금액부터 결제해야 하므로  
> 일단 rsv에 해당하는 값을 집어넣고 rsv에 빈 값이 없을때까지 반복  
> 단, 현재 자금보다 결제 대기 맨 앞에 나오는 값이 더 클경우엔 해당 반복을 종료하고  
> 아닐 경우(결제 대기액이 현재금액보다 작거나 같을경우) LinkedList에서 해당  
> 금액을 빼와 현재 금액에서 차감해준다  
> 이 과정들을 m 번만큼 반복한 후 남은 현재금액을 출력해줌

## 6번

>    public static void main(String[] args) throws Exception {  
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));  
>        String input = br.readLine();  
        /*  
            케이크조각의 개수를 3이상 1000이하  
            n과 k가 입력으로 주어짐 n 은 케이크 조각의 개수  
            항상 처음 조각을 먹고 그후있는 조각부터 k번째만큼의 케잌을 먹는다  
            2번째는 1+k 3번째는 1+k+k 1....+k가 n을 넘어갈 경우엔 n보다 크지않을때까지 n만큼 빼준다  
            케이크조각이 2조각남으면 먹는것을 멈추기  
            먹은 케이크 조각은 뺴주고 나머지 케이크 조각에서 계산해야한다  
            인덱스번호가 있고 순서가 보장되는 List가 하기에 간편해보인다  
        \*/  
        List\<Integer> cake = new ArrayList<>();  
        //n과 k  
        int total = Integer.parseInt(input.substring(0,input.indexOf(" ")));  
        int k = Integer.parseInt(input.substring(input.indexOf(" ")+1));  
        //리스트에에 케이크 넣어주기  
        for(int i=1;i<=total;i++)cake.add(i);  
        //어레이리스트의경우 remove하면 앞으로 당겨지므로 n만큼빼지말고 size만큼 빼줘야함  
        //하나 지워서 한칸 앞으로 당겨지므로 현재인덱스번호 i+k-1을 해줘야함  
            for(int i=0;cake.size()>2;i+=(k-1)){  
                if(i>=cake.size()){  
                    //기존에 -=로 했던거 나머지로 수정 사이즈를 한바퀴 이상 순회할시 에러가 발생  
                    i%=cake.size();  
                }  
                cake.remove(i);  
            }  
        System.out.println(cake.get(0)+" "+cake.get(1));  
    }  

> 케이크조각의 개수 n, k번째 케잌을 먹음 띄어쓰기로 구분
> 항상 처음은 1번째(0번째 인덱스) 케잌을 먹고 그다음부터 k번째 후의 케잌을 먹음  
> 예를들어 8 2 면 1번째 케이크부터 먹고(0번인덱스) 그 후 2칸 뒤인 3번케이크를 먹음  
> 케이크를 먹을때 마다 해당 인덱스를 제외하고 나머지 숫자에서 k번째를 세어야 하는데  
> 배열이나 hashmap을 이용하여 해당 케이크 번호가 있을때만 카운트하여 할 수 도 있으나  
> ArrayList를 사용하여 List특성상 remove()를 할경우 리스트가 당겨지는걸 이용하면  
> 편하게 할수 있겠다는 생각이 듬  
> 그리하여 숫자 n만큼의 각각의 번호를 부여해준 케이크를 생성하고  
> cake 리스트의 크기가 2보다 클때까지만 반복(2조각남으면 멈춰야 하니)하여  
> k번째 만큼 i에서 빼주는데 여기서 주의할점은 remove를 하게 되면 총 인덱스 번호가 1개씩  
> 줄어들게 되어 i에서 -1을 해줘야 한다 이건 remove가 끝나고 해도되고 for문에 넣어도 되어  
> i+=(k-1) 을하게 되었다 그리고 또한 cake의 크기보다 i가 같거나 커지게 될 경우  
> (같거나 인 이유는 size는 인덱스번호보다 1높게 잡히기 때문)  
> i를 size로 나눈 나머지 값으로 다시 변경해줘 한바퀴를 다 돌았을 경우도 생각 해야 한다  
> size가 2보다 작아졌을경우 반복문이 끝나게 되며 남은 2개의 값을 출력하도록 하였다

## 7번
>//중복수열 담을그릇
    static List\<int[]> list = new ArrayList<>();
    //최대 진행 수 k 의 사이즈를 정해줘야함
    static int[] versus;
    public static void main(String[] args) throws Exception {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        String input = br.readLine();
        /*
        내구슬n, 상대구슬m, 최대진행횟수k
        둘중 한명이 모든 구슬을 잃을 수 있는 경우의 수
        중복수열을 만들고 그 값에서 갖고와야 할것같다
        \*/
        // 키보드로 입력받은값 스페이스바 기준으로 나눠서 int타입으로 저장
        String[] str_arr = input.split(" ");
        int[] arr = new int\[3];
        for(int i = 0;i<str_arr.length;i++)arr\[i]=Integer.parseInt(str_arr\[i]);
        int n = arr\[0],m = arr\[1], k = arr\[2];
        //최대 k번의 배열
        versus = new int\[k];
        //경우의수 전체 재귀함수(0,k)
        numberOfCases(0,k);
      //패패무승무 패패승패승 같이 이미 0점 이후의 값들을 해쉬셋으로 합쳐버리자
        // n플레이어(구름이)
        HashSet\<String> n_set = new HashSet<>();
        // m플레이어(상대방)
        HashSet\<String> m_set = new HashSet<>();
            for(int i=0;i<list.size();i++){
                int n_score = n;
                String n_str = "";
                int m_score = m;
                String m_str = "";
                //n의 구슬 모두 잃는경우
                for(int j=0;j<k;j++){
                    n_score+= list.get(i)\[j];
                    n_str += list.get(i)\[j]+"";
                    if(n_score\==0){
                        n_set.add(n_str);
                        break;
                    }
                }
                for(int j=0;j<k;j++){
                    m_score +=list.get(i)\[j];
                    m_str += list.get(i)\[j]+"";
                    if(m_score\==0){
                        m_set.add(m_str);
                        break;
                    }
                }
            }
        System.out.println(n_set.size()+m_set.size());
    }
    //반복문으로 안되니 재귀함수 이용해서 최대횟수에 따른 반복작업하기
    static void numberOfCases(int numb, int arr_size){
        // arr_size = k , numb는 for문에서 index처럼 활용할것
        if(numb\==arr_size){
            int[] tmp = versus.clone();
            list.add(tmp);
            return ;
        }
        // 패-1 무 0 승 1 다시 호출해서 넣기
        for(int i=-1;i<=1;i++){
            versus\[numb] = i;
            numberOfCases(numb+1,arr_size);
        }
    }

> 제일 애매했던 작업  
> 머리속에서 풀이는 됏으나 생각을 옮겨 담는게 어려웠고  
> 시간상 빠르게 제출하고 8번을 진행하였으나 후에 생각해보니  
> heap영역을 너무 많이 잡아먹는다. outOfMemory 에러가 발생했을 것 같다
> clone으로 하지말고 차라리 
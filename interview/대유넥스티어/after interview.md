일단 코딩테스트 망했다
1번문제 진짜 1번만에 풀고
2번문제에서 금단현상와서 문제가 머리에 안들어왔다  
문제 기억나는대로 써보자면
public 머시기  
	Main메소드  
	int sum = 0;
	 for(int i=1;i<1000;i++){  
	 }  
	 System.out.println(sum);
이렇게 주어지고 내가 코드 채워넣는 방식이였다  
제일싫어하는 디버깅방식 비슷...  
해당 문제는  
	public static void main(String[] args) {  
		int sum = 0;  
		for(int i=1;i<1000;i++) {  
			**if(i%3\==0||i%5\==0)sum+=i;**  
		}  
		System.out.println(sum);  
	}  
이렇게 하여 풀었다  
2번문제는  
		int[] numbers = {5,4,2,6,1,3};  
			for(int i=1;i<numbers.length;i++) {  
				}  
			}  
		}  
이렇게 주어진 상황이였는데 for문을 지우고  
		int[] numbers = {5,4,2,6,1,3};  
		int tmp=0;  
		for(int i=0;i<numbers.length-1;i++) {  
			for(int j=i;j<numbers.length;j++) {  
				if(numbers[i]>numbers[j]) {  
				tmp = numbers[j];  
				numbers[j] = numbers[i];  
				numbers[i] = tmp;  
				}  
			}	  
		}  
이렇게 하여 풀었는데 주어진 for문을 활용해서 못푼게 크다  
지문에서는 5번째 되었을때 다시 1번부터 돌면서 확인하는 문제였고  
같은 오름차순이긴 하지만 접근방법이 다르다  
머리에 문제가 안들어와 계속 뺑뺑돌았는데 다시 해보자면  

## 프로세스와 스레드의 정의 
### 프로세스
> 프로세스는 메모리상에 올라가 사용자에 의해 컴퓨터 상 에서 실행 중 인 프로그램을 의미
> 프로세스는 각각 독립된 메모리 영역 (코드, 데이터, 스택, 힙)을 할당받는다.  
> 각 프로세스는 각각의 주소를 할당받으며 실행되고 일반적으로 한 프로세스는 다른 프로세스의 변수나 자료구조에 접근이 불가능하다.
> 다른프로세스의 자원에 접근하기 위해서는 프로세스간의 통신(IPC) 를 사용해서 가능하다.
> 	ex ) 파이프, 파일, 소켓 등을 이용한 통신

### 스레드
> 실제로 CPU 코어에서 실행되는 것은 쓰레드
> 그러므로 프로세스가 CPU 코어에서 실행되기 위해서는 반드시 한 개 이상의 쓰레드를 가져야 한다.
> 단, 윈도우OS 에서는 예외적으로 쓰레드가 없는 프로세스가 존재하며 이 프로세스는 정상적인 동작이 불가능하다.
> 쓰레드는 프로세스 내에서 각각 stack만 할당 받고 code, data heap영역은 공유하여 사용된다.  
> 각각의 쓰레드는 별도의 레지스터와 스택을 갖고있지만 힙 메모리는 서로 읽고 쓸 수 없다.  
> 자원을 공유하기 때문에 다른 한 쓰레드가 프로세스 자원을 변경하면 다른 이웃 쓰레드들로 그 변경 결과를 볼 수 있다.
## 프로세스와 스레드의 주요 차이점 
> 프로세스 끼리는 공유되는 메모리가 없다는점  
> 공유되는 메모리가 없기에 프로세스는 다른 프로세스의 자원을 변경한다고 서로의 변경이 일어나지 않는다는 점  
> 컴퓨터 상에서 실행됨과 CPU 코어에서 실행되는 점 등을 차이점으로 볼 수 있다.

## 멀티프로세싱, 멀티스레딩
### 멀티 프로세스
> 하나의 응용프로그램을 여러개의 프로세스로 구성하여 각 프로세스가 하나의 작업을 처리하도록 하는것.  

### 멀티 쓰레드
> 하나의 응용프로그램을 여러개의 쓰레드로 구성하고 각 쓰레드로 하여금 하나의 작업을 처리하는것.
> 웹 서버는 대표적인 멀티 쓰레드 응용프로그램이다

## 코드 예시 (수정됨)
### 프로세스
> 각 프로세스는 독립적으로 실행됨을 나타냄
```
public class Process1 { 
	public static void main(String[] args) { 
		System.out.println("프로세스1 이 실행중입니다");
	} 
} 
public class Process2 { 
	public static void main(String[] args) { 
		System.out.println("프로세스2가 실행중입니다."); 
	}
}
```

### 쓰레드
```
class MyThread extends Thread { 
	public void run() { 
		for (int i = 1; i <= 5; i++) { 
			System.out.println(Thread.currentThread().getName() + ": " + i); 
			try { 
				Thread.sleep(1000); // 1초 대기 
			} catch (InterruptedException e) {
				System.out.println(e); 
			} 
		} 
	} 
} 
public class Main { 
	public static void main(String[] args) { 
		MyThread thread1 = new MyThread(); 
		MyThread thread2 = new MyThread(); 
		thread1.setName("Thread 1"); 
		thread2.setName("Thread 2"); 
		thread1.start(); 
		thread2.start(); 
	} 
}
```
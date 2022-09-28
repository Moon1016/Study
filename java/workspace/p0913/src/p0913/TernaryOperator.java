package p0913;

public class TernaryOperator {

	public static void main(String[] args) {
		int a = 3, b = 5;
		
		System.out.println((a > b)? (a - b) : (b - a));		// a > b 이면 a - b(앞에것), 아니면 b - a(뒤에것)		
		
		if(a > b) {
			System.out.println("a가 큰 값 " + (a - b));
		}
		else {
			System.out.println("b가 큰 값 " + (b - a));
		}
	}

}
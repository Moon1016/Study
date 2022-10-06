package p0929;
class Scm {
	int a;
	public Scm(int a) {
		this.a = a;
	}
	void prtVariable() {
		System.out.println(a);
	}
	static void prtMessage() {
		System.out.println("화이~~~팅");
	}
}

public class Static02 {
	public static void main(String[] args) {
		Scm.prtMessage();		// 함수에 static이 붙어있다면 클래스명.함수명 으로 실행가능
		Scm scm = new Scm(6);
		System.out.println(scm.a);
	}
}

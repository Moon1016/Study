package p0929;

public class Static01 {
	int a;
	//이 클래스로 만드는 모든 객체가 공유
	static int n = 0;
	//객체가 몇 개 만들어지는지 확인할 수 있는 생성자
	public Static01() {
		n++;
	}
	
	public static void main(String[] args) {
		Static01 sc1 = new Static01();
		Static01 sc2 = new Static01();
		Static01 sc3 = new Static01();
		sc1.a = 1;
		//StaticClass.n = 1;
		//static 필드는 '객체이름.필드' 보다는
		//'클래스이름.필드' 기술하길 권장
		System.out.println(sc1.a + " " + Static01.n);
		sc2.a = 2;
		System.out.println(sc2.a + " " + Static01.n);
		sc3.a = 3;
		System.out.println(sc3.a + " " + Static01.n);
	}
}

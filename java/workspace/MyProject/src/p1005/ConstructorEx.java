package p1005;

class A {
	int a;

	public A() {
		super();
		System.out.println("생성자A");
	}

	public A(int a) {
		super();
		this.a = a;
	}
	
}
class B extends A{
	int b;

	public B() {
		super();
		System.out.println("생성자B");
	}

	public B(int b) {
		super();
		this.b = b;
	}
	
}
class C extends B {
	int c;

	public C() {
		super();
		System.out.println("생성자C");
	}

	public C(int c) {
		super();
		this.c = c;
		System.out.println("c = " + c);
	}
	
}
public class ConstructorEx{
	public static void main(String[] args) {
		C c = new C(5);
	}
}

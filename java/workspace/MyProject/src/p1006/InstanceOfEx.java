package p1006;

class Person {}
class Student extends Person {}
class Researcher extends Person {}
class Professor extends Researcher {}

public class InstanceOfEx {
	static void prtInt(int a) {
		System.out.println(a);
	}
	static void print(Person p) {
		if(p instanceof Person)
			System.out.print("Person ");
		if(p instanceof Student)
			System.out.print("Student ");
		if(p instanceof Researcher)
			System.out.print("Researcher ");
		if(p instanceof Professor)
			System.out.print("Professor ");
		System.out.println();
	}
	public static void main(String[] args) {
//		prtInt(1);
//		-------------------------------------------------------------------------------------------------------
		// prtInt 메소드를 호출하여 a에 1을 할당한 후에 메소드 본체가 실행이 됨, 즉 a = 1ㅣ 실행됨
//		-------------------------------------------------------------------------------------------------------
//		Person p1 = new Person();
//		print(p1);
//		-------------------------------------------------------------------------------------------------------
		// Person p;	Person이라는 클래스를 이용하여 p 라는 객체를 만듬
		// Person p = p1	Person p = new Person();
//		-------------------------------------------------------------------------------------------------------
		System.out.print("new Student() -> \t"); print(new Student());
		// Person p = new Student()
		System.out.print("new Researcher() -> \t"); print(new Researcher());
		System.out.print("new Professor() -> \t"); print(new Professor());
	}
}

package p1005;

class Person {
	String name;
	String id;
	
	public Person() {
	}
	
	public Person(String name) {
		this.name = name;
	}
}
class Student extends Person {
	String department;
	String grade;
	
	public Student() {
	}
	
	public Student(String name) {
		super(name);
	}
}
public class TypeCasting {
	public static void main(String[] args) {
		Person p;
		Student s = new Student("홍길동");
		//이때까지 a = b; 이면 a와 b가 같은 클래스로 만든 객체이여야 했음 하지만 같은 클래스의 참조변수가 아니어도 됨
		//왼쪽이 조상이고 오른쪽이 자손이면 묵시적 형 변환이 이루어짐
		p = s;
		System.out.println(p.name);
		//System.out.println(p.grade);		error
		
		//-------------------------------------------------------------------------------------------------------------(절취선)
		
		//이것도 가능
		Person p1 = new Student("이순신");
		System.out.println(p1.name);
		
		Student s1 = (Student)p1;
		System.out.println(s1.name);
		System.out.println(s1.department);
	}
}

package p0926;

public class HumanEx {

	public static void main(String[] args) {
		Human[] h = new Human[3];
		h[0] = new Human("홍길동",21,183,73);
		h[1] = new Human("이영민",25,186,80);
		h[2] = new Human("이순신",50,174,75);
		
		for(int i = 0; i < h.length; i++) {
			System.out.println(h[i].name);
			System.out.println(h[i].age);
			System.out.println(h[i].height);
			System.out.println(h[i].weight);
			System.out.println();
		}
	}

}

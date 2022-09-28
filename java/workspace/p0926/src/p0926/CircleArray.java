package p0926;

public class CircleArray {
	public static void main(String[] args) {
		Circle[] c = new Circle[10];
		for(int i = 0; i < c.length; i++) {
			c[i]= new Circle(0);
		}
		for(int i = 0; i < c.length; i++) {
			System.out.println(c[i].getArea() + "\t");
		}
	}
}

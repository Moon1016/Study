package p0928;

class Circle{
	int radius;
	
	public Circle() {
		
	}
	
	public Circle(int radius) {
		this.radius = radius;
	}
	
	public double getArea() {
		return 3.14 * radius * radius;
	}
	
}

public class ReferencePassing {
	
	public static void main(String[] args) {
		Circle pizza = new Circle(5);
		increase(pizza);
		
		System.out.println(pizza.radius);
	}
	static void increase(Circle m) {
		m.radius++;
	}
}

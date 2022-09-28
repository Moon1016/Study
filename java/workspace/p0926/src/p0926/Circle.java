package p0926;

public class Circle {
	int radius;
	final double PI = 3.141592;

	public Circle(int radius) {
		super();
		this.radius = radius;
	}
	public double getArea() {
		return PI*radius*radius;
	}
}

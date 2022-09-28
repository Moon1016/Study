package p0926;

public class Myclass {
	double x;
	
	public void setX(int x) { 
		this.x = x; 
	}
	
	public double getX() { 
		return this.x; 
	}

	public Myclass() {
		this(100.0);
		System.out.println("매개변수 없는 생성자");
	}

	public Myclass(double x) {
		this.x = x;
		System.out.println("매개변수 1개 있는 생성자");
	}
}

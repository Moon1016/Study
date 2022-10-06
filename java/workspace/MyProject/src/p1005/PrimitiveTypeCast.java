package p1005;

public class PrimitiveTypeCast {
	public static void main(String[] args) {
		//byte-short-char-int-long-float-double
		//boolean은 다른 타입과 형변환이 안 됨
		//왼쪽이 큼 or 부모 일때 and 오른쪽이 작음 or 자식일때 정상적으로 작동이 됨
		
		//create int type variable
		int num = 10;
		System.out.println("The integer value: " + num);
		
		//convert into double type
		//자동 형변환(casting)
		double data = num;
		System.out.println("The double value: " + data);
		
		
		//create double type variable
		double numd = 10.99;
		System.out.println("The double value: " + numd);
		
		//convert into int type
		//강제 형변환(casting) 명시적
		int datai = (int)numd;
		System.out.println("The integer value: " +datai);
	}
}

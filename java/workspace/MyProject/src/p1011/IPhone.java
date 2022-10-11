package p1011;

class IPhone implements PhoneInterface{
	@Override
	public void sendCall() {
		System.out.println("띠리링띠리링");
	}
	@Override
	public void receiveCall() {
		System.out.println("전화가 왔습니다.");
	}
	
	public void flash() { System.out.println("전화기에 불이 켜졌습니다."); }

}

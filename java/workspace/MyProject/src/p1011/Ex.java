package p1011;

public class Ex {
	public static void main(String[] args) {
		SamsungPhone phone = new SamsungPhone();
		phone.printLogo();
		phone.sendCall();
		phone.receiveCall();
		phone.flash();
		IPhone i = new IPhone();
		i.printLogo();
		i.sendCall();
		i.receiveCall();
		i.flash();
	}
}

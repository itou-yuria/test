package jp.co.internous.action;

public class Test {
	public static void main(String[]args){

		Person jirou =new Person();
		jirou.name="木村次郎";
		jirou.age=18;
		jirou.phoneNumber="0801234-5678";
		jirou.address="東京";




		System.out.println(jirou.name);
		System.out.println(jirou.age);
		System.out.println(jirou.phoneNumber);
		System.out.println(jirou.address);

		jirou.talk();
		jirou.walk();
		jirou.run();


		Person hanako =new Person();
		hanako.name="鈴木花子";
		hanako.age=16;
		hanako.phoneNumber="090-1234-5678";
		hanako.address="東京";





		System.out.println(hanako.name);
		System.out.println(hanako.age);
		System.out.println(hanako.phoneNumber);
		System.out.println(hanako.address);

		hanako.talk();
		hanako.walk();
		hanako.run();



		Robot aibo =new Robot();
		aibo.name="aibo";
		System.out.println(aibo.name);
		aibo.talk();
		aibo.walk();
		aibo.run();


		Robot asimo =new Robot();
		asimo.name="aibo";
		System.out.println(asimo.name);
		asimo.talk();
		asimo.walk();
		asimo.run();



		Robot pepper =new Robot();
		pepper.name="aibo";
		System.out.println(pepper.name);
		pepper.talk();
		pepper.walk();
		pepper.run();











	}

}

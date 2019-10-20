package Katas;


import Katas.FizzBuzz.FizzBuzz;

public class Main {

    public static void main(String[] args) {
	 var  Object = new FizzBuzz();

	 for (int i = 0;i < 20; i++){
	     String text = Object.toFizzBuzz(i);
	     System.out.println(text);
     }

    }
}

package Katas.FizzBuzz;

public class FizzBuzz {

    public String toFizzBuzz(int number){

        var result = "";
        var numberToString = Integer.toString(number);

        if (number == 0) return numberToString;
        
        if (number % 3 == 0) result = "fizz";
        if (number % 5 == 0) result = result + "buzz";

        return result;
    }
}

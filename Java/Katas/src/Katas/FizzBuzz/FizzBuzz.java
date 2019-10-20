package Katas.FizzBuzz;

public class FizzBuzz {

    public String toFizzBuzz(int number){

        var result = "";
        var numberToString = Integer.toString(number);

        if (number == 0) return numberToString;
        
        if (number % 3 == 0) result = "Fizz";
        if (number % 5 == 0) result = result + "Buzz";

        if (result.isEmpty()) return numberToString;
        return result;
    }
}

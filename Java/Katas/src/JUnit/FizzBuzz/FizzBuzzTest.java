package JUnit.FizzBuzz;

import Katas.FizzBuzz.FizzBuzz;
import org.junit.jupiter.api.Test;

import static org.junit.jupiter.api.Assertions.*;


class FizzBuzzTest {

    @Test
    void toFizzBuzz() {
        var Object = new FizzBuzz();
        String first = Object.toFizzBuzz(3);
        String second = Object.toFizzBuzz(5);
        String combined = Object.toFizzBuzz(15);

        assertEquals("Fizz", first);
        assertEquals("Buzz", second);
        assertEquals("FizzBuzz", combined);
    }
}
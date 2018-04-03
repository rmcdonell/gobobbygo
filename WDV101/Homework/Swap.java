import javax.swing.*;

public class Swap
{
   public static void main(String args[]) throws Exception
   {
      // Declare variables.
      String firstNumber;        // String version of first number.
      String secondNumber;       // String version of second number.
      String thirdNumber;        // String version of third number.
      int first = 0;          // First number.
      int second = 0;            // Second number.
      int third = 0;          // Third number.
      int temp;            // Used to swap numbers.
               
      // Get user input.      
      if((firstNumber = JOptionPane.showInputDialog("Enter first number: ")) != null)
      {
         secondNumber = JOptionPane.showInputDialog("Enter second number: ");
         thirdNumber = JOptionPane.showInputDialog("Enter third number: ");
         // Convert Strings to int.
         first = Integer.parseInt(firstNumber);
         second = Integer.parseInt(secondNumber);
         third = Integer.parseInt(thirdNumber);
      }
      
      // Test to see if the first number is greater than the second number.
      if(first > second)
      {
         // Swap.
         temp = second;
         second = first;
         first = temp;
      }
      // Test to see if the second number is greater than the third number.
      if(second > third)
      {
         // Swap.
         temp = third;
         third = second;
         second = temp;
      }
      // Test to see if the first number is greater than the second number again.
      if(first > second)
      {
         // Swap.
         temp = second;
         second = first;
         first = temp;
      }

      // Print values in numerical order. 
      System.out.println("Smallest: " + first);
      System.out.println("Next largest: " + second);
      System.out.println("Largest: " + third); 

      // Exit the program.
      System.exit(0);

   } // End of main() method.
} // End of Swap class.

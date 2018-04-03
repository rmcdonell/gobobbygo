import javax.swing.*;

public class DayCare
{
   public static void main(String args[]) 
   {
      // Declare variables.
      double weeklyRate[][] = {{30.00, 60.00, 88.00, 115.00, 140.00}, 
               {26.00, 52.00, 70.00, 96.00, 120.00},
               {24.00, 46.00, 67.00, 89.00, 110.00},
               {22.00, 40.00, 60.00, 75.00, 88.00},
               {20.00, 35.00, 50.00, 66.00, 84.00}};  
      int numDays;   
      int age;
      String numDaysString;
      String ageString;
      int QUIT = 99;
            
      // This is the work done in the getReady() method
      ageString = JOptionPane.showInputDialog(
                                "Enter the age of the child or 99 to quit: ");
      age = Integer.parseInt(ageString);
      
      while(age != QUIT)
      {  
         // This is the work done in the determineRateCharge() method
         numDaysString = JOptionPane.showInputDialog(
                                "Enter number of days: ");
         numDays = Integer.parseInt(numDaysString);
         if(age >= 4)
               age = 4; 
         System.out.println("Weekly charge is $" + weeklyRate[age][numDays - 1]);
         ageString = JOptionPane.showInputDialog(
                                "Enter the age of the child or 99 to quit: ");
         age = Integer.parseInt(ageString);
      }
      // This is the work done in the finish() method
      System.out.println("End of program");

      System.exit(0);
   } // End of main() method.
} // End of DayCare class.




import javax.swing.*;

public class HouseholdSize
{
   public static void main(String args[]) 
   {
      // Declare variables.
      
      final int SIZE = 300;         // Maximum number of household sizes.
      int householdSizes[] = new int[SIZE];   // Array used to store up to 300 household sizes.
      int x;
      int limit = SIZE;
      int householdSize = 0; 
      String householdSizeString;
      int pairsToCompare;
      boolean switchOccurred;
      int temp;
      double sum = 0; 
      double mean = 0;
      int median = 0;

      // Input household size
      householdSizeString = JOptionPane.showInputDialog("Enter household size or 999 to quit: ");
      householdSize = Integer.parseInt(householdSizeString);
     // This is the work done in the fillArray() method
      x = 0;
      while(x < limit && householdSize != 999)   
      {
         // Place value in array.
         householdSizes[x] = householdSize;
         // Calculate total of household sizes
         sum += householdSizes[x];
         x++;    // Get ready for next input item.
         householdSizeString = JOptionPane.showInputDialog("Enter household size or 999 to quit: ");
         householdSize = Integer.parseInt(householdSizeString); 
      }  // End of input loop.
      
      limit = x; 
      // Find the mean
      mean = sum / limit;
      // This is the work done in the sortArray() method
      x = 0;
      pairsToCompare = limit - 1;   // Number of items to compare.
      switchOccurred = true;  // Set flag to true.
      
      // Outer loop controls number of passes over data.
      while(switchOccurred == true) // Test flag.
      {
         x = 0;
        switchOccurred = false;
         // Inner loop controls number of items to compare.
         while(x < pairsToCompare)
         {
            if(householdSizes[x] > householdSizes[x+1]) // Swap?
            {
               temp = householdSizes[x + 1];
               householdSizes[x+1] = householdSizes[x];
               householdSizes[x] = temp;
               switchOccurred = true;
            }
            x++;   // Get ready for next pair.
         }
         pairsToCompare--;  // Reduce number of pairs
      } 
      
      // This is the work done in the displayArray() method
      System.out.println("Mean household size in Marengo is : " + mean); 
      // Find the median
                median = (limit - 1) / 2;
     System.out.println("Median household size in Marengo is : " + householdSizes[median]); 
      System.exit(0);
   } // End of main() method.
} // End of HouseholdSize class.



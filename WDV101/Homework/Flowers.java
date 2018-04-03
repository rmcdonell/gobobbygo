import java.io.*;  
// Import class for file input. Note the * means you’re importing all classes from the package named “java.io”
public class Flowers       
{
//declaring a class called Flowers that is available after it’s made (public).  Curly braces mark start/end of this class called Flowers.

   public static void main(String args[]) throws Exception 
//see your PAL book about this "throws Exception" (bottom of page 120)
   {
// Declare variables here
//Since you only take one record at a time and output, you only need one variable for each field

      String flower;
      String sunOrShade;  
      
      // Now open the input file.  The file you're using here is called           flowers.dat.  It has one field on each line...
      //So first line is the name of a flower, the next line below it is the word "sun" or "shade", then next line below is the name of another flower and so on.
      //This Java object you're creating reads one character at a time from a data file.  Pretty slow!  You'll improve that with the creation of the next object after it (called “BufferedReader”)
      // the fr is actually a variable you're declaring.  It could be named anything

      FileReader fr = new FileReader("flowers.dat");  
      
      // Again, the basic Java file reader above only reads one character at a time...  
      //that's very inefficient!  There's another object that builds on it and allows you to read one entire LINE at a time.  
      //Below is the creation order for that object.  The statement below declares a variable called br of object type “BufferedReader” and assigns or associates it with the object reader called fr

      BufferedReader br = new BufferedReader(fr);       
   
      // We're now ready to write the while loop that reads records from a data file... which you've already pointed to above (flowers.dat) when you instantiated the FileReader object “fr”
      //Remember, if that file was not in the same folder as this Java file, you must put the full path name in front of the file name in the FileReader command above.  For instance...
      // ("C:/Larry the Lobster's Java Folder/flowers.dat")

      while((flower = br.readLine()) != null) 

//This loop question doubles as your first input from the file
      //it basically states that while (read a line from the file) is not equal to null (or nothing was there)then enter the loop body.  The body simply does a second input or "read the next line from the file"...
      //Then output the statement:  flower + "is grown in the " + sunOrShade
      {
           sunOrShade = br.readLine();
          System.out.println(flower + " is grown in the " + sunOrShade);
      }
          
      br.close();    //this closes the file
      System.exit(0);
   } // End of main() method.

} // End of Flowers class. 






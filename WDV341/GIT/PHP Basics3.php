
<!doctype html>
<html>    
<head>
        
    <!-- WDV341 PHP
        Robert McDonell
         1/25/2018
    -->
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Basics</title> 
    
        
        
</head>
    
<body>
    <h1>PHP Basics</h1>    
    <h2>Robert McDonell</h2>
	
	50<br>	100<br>	50 + 100 = 150<br>    
    <!-- Confused on how the assignment wants us to create and display the array (Use PHP array function? Javascript array function?); going to provide a couple options. 
    -->
    
    <!-- Option 1. -->
    <p>myArray values are: PHP HTML Javascript</p>    
    
    <!-- Option 2. -->
    PHP<br>HTML<br>Javascript<br>    
    
    <!-- Option 3. -->
    <p>PHP<br>HTML<br>Javascript<br></p>
    
    
    <!-- Option 4. -->
    <script>
        var jsArray = ['PHP', 'HTML', 'Javascript'];        for (i=0; i<jsArray.length; i++)
			{
				var arrayElement = jsArray[i]
                document.write(arrayElement+'<br>');
			}    </script>
    
  
    
    
</body>
    
</html>
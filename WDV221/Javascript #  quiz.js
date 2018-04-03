

<!doctype html>
<html>
<head>
<!-- Jake Baxter
	Exam 2
	11/13/2017
	-->

<meta charset="utf-8">
<title>WDV221 Intro Javascript</title>

<style>

	section#buttons p {
		text-indent:30px;	
	}

	form#highLowForm {
		width:500px;
		margin-left:30px;	
	}

	form#accumulateNumberForm {
		width:500px;
		margin-left:30px;			
	}

</style>

<script>

	

	 var displayNumTotal="0";//Used with exercise 7. 
	
	//Use with Exercise 3.
	var classes = ["WDV101 Intro HTML and CSS","WDV131 Intro Photoshop","WDV150 E-Commerce","WDV221 Intro Javascript","WDV151 Intro Web Design"];


	//Use with Exercise 5.
	function displayColor(inColor)
	{
		alert("You selected the color " + inColor);	
	}



	//Use with Exercise 6.
	var numberToGuess = 4;

	function highLowGame()
	{
		var inValue = parseInt( document.getElementById("inputGuess").value );	//get value from the form
		
		if (inValue == numberToGuess)
		{
			document.getElementById("highLowResult").innerHTML = "Congratulations!  That is the number.";	
		}
		else
		{
			if(inValue<numberToGuess)
				{
					document.getElementById("highLowResult").innerHTML = "Your number is too low";
				}
			else if (inValue>numberToGuess)
				{
					document.getElementById("highLowResult").innerHTML = "Your number is too high";
				}
		}
	}
	
	function resetHighLowGame()
	{
		document.getElementById("highLowForm").reset();
		document.getElementById("highLowResult").innerHTML = "";	
	}
	
	
	function addNumbers() 
	{
		var inNum = document.getElementById("inputNumber").value;
		
		var parseInNum = parseFloat(inNum);
		
		displayNumTotal = parseFloat(displayNumTotal);
		
		displayNumTotal += parseInNum;
		
		document.getElementById("outNumTotal").innerHTML=displayNumTotal;
		
	}
	
	function resetCurrentValue()
	{
	
		displayNumTotal=0.00;
		document.getElementById("outNumTotal").innerHTML=displayNumTotal;
	}
	

	
</script>
</head>

<body>
	<h1>WDV221 Intro Javascript</h1>
	<h2>Lab Exam #2</h2>
    <h2>Includes Math Operators, If Statements, Loops and Arrays    </h2>
    <h3>Instructions:</h3>
	
    
    <p>1. Write a run time For Loop that will display 1-5. Each number should be within a &lt;p&gt;.</p>
    <script>
		function exerciseOne(){
			
			for (i=1;i<6;i++)
				{
					document.write("<p>"+i+"</p>");
				}
		}
		
		exerciseOne();
	</script>
    
    <p>2. Write a run time While Loop that will display 2-10. Each number should be within a &lt;p&gt;.</p>
    <script>
	
		function exerciseTwo()
		{
			i="2";
			while(i<11)
			{
				document.write("<p>"+i+"</p>")
				i++;
			}
		}
	
	exerciseTwo();
	</script>
    
    <p>3. Fix the following loop. It should display 5 items. </p>
    <script>
		for(k=0; k<classes.length; k++)
		{
			document.write("<p>" + classes[k] + "</p>");	
		}
	</script>
    
    
    
    <p>4. Change the following loop to include the line number on each output.</p>
    <script>
		var lineNumber=0;
		while(lineNumber < 5)
		{
			document.write("<p>Line number "+lineNumber+"</p>");
			lineNumber++;	
		}
	</script>
    
    
    
    <p>5. Fix the last button to work like the others.</p>
    
    	<section id="buttons">
			<p><input type="button" name="button4" id="button4" value="Display Blue" onClick="displayColor('Blue')"></p>
			<p><input type="button" name="button4" id="button4" value="Display Green" onClick="displayColor('Green')"></p>
			<p><input type="button" name="button4" id="button4" value="Display Red" onClick="displayColor('Red')"></p>
        </section>
	
    
    
    <p>6. Finish the function for the High-Low game. </p>
    <form name="highLowForm" id="highLowForm" method="post" action="">
    <fieldset>
    	<legend>High Low Game</legend>
    	<p>
        	<label>Input a number from 1-10
          		<input type="text" name="inputGuess" id="inputGuess">
        	</label>
       </p>
      <p>Result!<span id="highLowResult"></span></p>
      <p>
        <input type="button" name="makeGuess" id="makeGuess" value="Make a Guess">
        <input type="button" name="resetHighLowGame" id="resetHighLowGame" value="Reset">
      </p>
	  <script>
			document.getElementById("makeGuess").addEventListener("click",highLowGame);	//assign click event to form button	
			document.getElementById("resetHighLowGame").addEventListener("click",resetHighLowGame);	
      </script>
    </fieldset>
    </form>
    
    
    
    <p>7. Create a function that will use the following form to add numbers and display a cumulative total. </p>
	<div>
    	<form id="accumulateNumberForm" method="post" action="#">
        <fieldset>
          <legend>Accumulate Numbers</legend>
       	  <label>Enter a number
        	  <input type="text" name="inputNumber" id="inputNumber">
      	  </label>
          <p>Current Value:<span id="outNumTotal"></span> </p>          
          <p>
   			<input type="button" name="button2" id="button2" value="Submit" onclick="addNumbers()">
   			<input type="button" name="button3" id="button3" value="Reset" onclick="resetCurrentValue()">
    	  </p>

        </fieldset>          
		</form>    

    </div>
	

    <h3>Extra Credit Problems:</h3>
    
    <p>X1. Use the array classes[] and Javascript to complete the following drop down box. </p>
    <p>
      <label>Select Your Class
        <select name="selectClass" id="selectClassName">
		<option>Please select a class</option>
		<script>
			for(i=0;i<classes.length;i++)
		{
			document.write("<option>"+classes[i]+"</option>");
		}
		</script>
        </select>
      </label>
    </p>
	
    <p>X2. Modify the High Low game to use a random number between 1-10.</p>
	
    <p>X3. Modify resetHighLowGame( ) to use a new random number.</p>
    
</body>
</html>

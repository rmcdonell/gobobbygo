<!doctype html>
<html>
<head>
	<meta charset="utf-8">
<title>Untitled Document</title>
	
	<script>
	/*Create a function that will accept a date input and format it into mm/dd/yyyy format.*/
		
	 function dateformat($date)

{

echo date_format($date,"mm/dd/yyyy");

?>

/*Create a function that will accept a date input and format it into dd/mm/yyyy format to use when working with international dates.*/
		<?php function dateformat($date)

{

echo date_format($date,"dd/mm/yyyy");

?>

		
/*Create a function that will accept a string input.  It will do the following things to the string: */
		function StringLenth($str){

echo strlen($str);

}
/*Display the number of characters in the string */
		function Trim($str)

{

$str = ltrim($str);

$str = rtrim($str);

echo $str;

}
/*Trim any leading or trailing whitespace */
		nction Lower$str)

{

echo strtolower($str);

}
		/*
Display the string as all lowercase characters */
		function CheckString($str){

if ($str contains 'dmacc')

echo $str

}

if ($str contains 'DMACC')

echo $str

}
/*
Will display whether or not the string contains "DMACC" either upper or lowercase */
		
function numberformat($str)

{

number_format($str, 2, '.', ',');

}
 /*Create a function that will accept a number and display it as a formatted number.   Use 1234567890 for your testing. */
		function usformat($str){

setlocale(LC_MONETARY, 'en_US');

echo money_format('%i', $str);

}
/*Create a function that will accept a number and display it as US currency.  Use 123456 for your testing.--> */

	
	</script>
</head>

<body>
	<form action="#" method="get">
        <p>
            <label for="userDate">Enter a date: </label>
            <input type="text" name="userDate" id="userDate" value="" placeholder="yyyy/mm/dd">
        </p>

        <p>Formatted Date:
            03/07/2018
            <br> Formatted Date (international):

            07/03/2018        </p>

        <p>
            <label for="userString">Enter a comment: </label>
            <input type="text" name="userString" id="userString" placeholder="I go to school at ...">
        </p>

        <p>
            Your comment contains 0 characters<br>Your comment was: <br>This comment contains DMACC? False        </p>

        <p>
            <label for="userNumber1">Enter a number: </label>
            <input type="text" name="userNumber1" id="userNumber1" value="1234567890">
        </p>

        <p>
            Your number is: 0        </p>
        
        <p>
            <label for="userNumber2">Enter a number: </label>
            <input type="text" name="userNumber2" id="userNumber2" value="123456">
        </p>
        
        <p>
            Your number as USD currency is: $0.00        </p>

        <input type="submit" value="Submit">

    </form>


</body>
</html>

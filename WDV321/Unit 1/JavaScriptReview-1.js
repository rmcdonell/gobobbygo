// JavaScript Document
<!DOCTYPE html>
<html>
<body>

<p>Click the button to display the date as a string.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var d = new Date();
    var n = d.toDateString();
    document.getElementById("demo").innerHTML = n;
}
</script>

</body>
</html>

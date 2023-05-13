<link rel="stylesheet" href="./styles/forms.css" type="text/css">   
<?php
  if(!isset($_COOKIE[$cookie_name])) {
    echo "<span>Cookie named '" . $cookie_name . "' is not set!</span>";
  } else {
    echo "<span>Cookie '" . $cookie_name . "' is set!</span><br>";
    echo "<span>Value is: " . $_COOKIE[$cookie_name]."</span>";
  }
?>
<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

    <?php if(isset($_SESSION['user'])) {
            ?>
            <script>
            document.getElementById('username').value ='<?php echo $_SESSION["user"];?>';
            document.getElementById('username').style.color="green";
            document.getElementById('username').style.background="lightgreen";
            document.getElementById('email').value ='<?php echo $_SESSION["mail"];?>';
            document.getElementById('email').style.color="green";
            document.getElementById('email').style.background="lightgreen";
            </script><?php
    }
    include("process/message.php");
?>

<?php
	$time = date('r');
	echo "data: The server time is: {$time}\n\n";
	flush();
?>
	<h1>Getting server updates</h1>
	<div id="result"></div>
	<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("process/demo_sse.php");
			source.onmessage = function(event) {
				document.getElementById("result").innerHTML += event.data + "<br>";
			};
		} else
			document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
	</script>
<script type="text/javascript" src="process/contact.js"></script>
<a href="mailto:kovacsgergo@mmovies.nhely.hu">Send E-Mail</a> <br>

<link rel="stylesheet" href="./styles/forms.css" type="text/css">   
<div class="boxes justify-content-center">
<div class="justify-content-center d-flex flex-row">
<div class="conbox">
  <span class="cborderLine">
  <form action="process/process.php" id="form" method="post">
<h2>Contact</h2>
    <div class="inputBox"><input type="text" id="email" placeholder="E-Mail" name="email" onkeydown="check();"  onkeyup="check();"><span id="e_mail">E-Mail</span><i></i></div>
    <div class="inputBox"><textarea name="textarea" id="textarea" placeholder="Message" cols="30" rows="10" onkeydown="check();" onkeyup="check();"></textarea><span id="text"></span></div>
    <input type="submit" id="submit" value="Submit"><br>
  </form>
  </span>
</div></div>
<br>

<div class="justify-content-center d-flex flex-row">
<div class="ebox">
  <span class="eborderLine">
  <form action="process/sendmail.php" method="post">
  <h2>E-Mail</h2>
    <div class="inputBox"><input type="email" name="email" required><span>E-Mail</span><i></i></div>
    <div class="inputBox"><input type="text" name="subject" required><span>Subject</span><i></i></div>
    <div class="inputBox"><textarea name="message" cols="30" rows="10" required></textarea><span></span></div>
    <input type="submit" value="Submit"><br>
  </form>
  </span>
</div></div>
</div>

<p>Click the button to get your coordinates.</p>
<button onclick="getLocation()">Try It</button>
<p id="demo"></p>
<script>	
  var x = document.getElementById("demo");
    function getLocation()  {
      if (navigator.geolocation)
        navigator.geolocation.getCurrentPosition(showPosition);
      else 
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
      function showPosition(position)  {
        x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;	
        var newContent = '<iframe src = "https://maps.google.com/maps?q='+position.coords.latitude+','+position.coords.longitude+'&hl=es;z=14&amp;output=embed" width="600" height="450"></iframe>';
        var contentHolder = document.getElementById('content-holder');
        contentHolder.innerHTML = newContent;
      }
</script>
<p id="content-holder">Google maps: Waiting for GPS coordinates ...</p>
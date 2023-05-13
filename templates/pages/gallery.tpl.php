<?php include('includes/galleryupload.php'); include('process/galleryprocess.php');?>


<?php
    arsort($upload);
    foreach($upload as $file =>$date){
    ?>
      <div class="gallery">
          <img src="<?php echo $FOLDERU.$file ?>" class="w-50 h-50 shadow-1-strong rounded">
      </div>
    <?php }
  ?>

<?php
    arsort($images);
    foreach($images as $file =>$date){
    ?>
      <div class="gallery">
          <img src="<?php echo $FOLDER.$file ?>" class="w-50 h-50 shadow-1-strong rounded">
      </div>
    <?php }
  ?>

<script type="text/javascript">
    window.onload=function(){
      var canvas = document.getElementById("mycanvas");
      var ctx = canvas.getContext("2d");
      ctx.font = "90px Comic Sans MS";
      ctx.fillStyle = "white";
      ctx.textAlign = "center";
      ctx.textBaseline = 'middle';
      ctx.fillText("Marvel", canvas.width/2, canvas.height/2);
     }
</script>


<style>
		#div1, #div2 {display:inline-block;width:320px; height:130px; margin:10px;padding:10px;border:1px solid #aaaaaa;}
	</style>
<script>
		function allowDrop(ev) {
			ev.preventDefault();
		}

		function drag(ev) {
			ev.dataTransfer.setData("text", ev.target.id);
		}

		function drop(ev) {
			ev.preventDefault();
			var data = ev.dataTransfer.getData("text");
			ev.target.appendChild(document.getElementById(data));
		}
</script>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
  <canvas id="mycanvas" draggable="true" ondragstart="drag(event)" id="drag1" width="300" height="105" style="background-color:red;"></canvas>
</div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<form action="process/upload.php" method="post" enctype="multipart/form-data">
<label>Photo send me</label>
<input type="file" name="first" required>
<input type="submit" name="send" value="Send">
</form> 
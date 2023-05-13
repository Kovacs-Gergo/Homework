<p>Count numbers: <output id="result"></output></p>
	<button onclick="startWorker()">Start Worker</button>
	<button onclick="stopWorker()">Stop Worker</button>
<script>
  var w;
		function startWorker() {
			if (typeof(Worker) !== "undefined") {
				if (typeof(w) == "undefined")
					w = new Worker("process/counter.js");
				w.onmessage = function(event) {
					document.getElementById("result").innerHTML = event.data;
          document.getElementById("result").style.color="green";
				};
			} else
				document.getElementById("result").innerHTML = "Sorry! No Web Worker support.";
		}
		function stopWorker() {
			w.terminate();
			w = undefined;
      document.getElementById("result").innerHTML="Stopped!";
      document.getElementById("result").style.color="red";
		}

	</script>

<script src="process/client.js"></script>
<link rel="stylesheet" href="./styles/forms.css" type="text/css">
<div class="inputBox"><input type="text" id="txt" onkeyup="showHint(this.value)"><span>Character</span><i></i></div>
<p>Suggestion: <span id="txtHint"></span></p>
<script>
  function change(obj){
    var t = $(obj).text();
    if(t.includes(" ")){
    var y = t.indexOf(String.fromCharCode(32));
    var x = t.substr(0,y);
    document.getElementById(x).setAttribute("class", "bg");
    }else{
    var x = t.substr(0,t.length);
    document.getElementById(x).setAttribute("class", "bg");
    }
  }
</script>

<table border="1" align="center">
  <tr>
    <th>Characters</th>
    <th>Actors</th>
    <th>MCU Movies</th>
  </tr>
  <tr id="Ajak">
    <td>Ajak</td>
    <td>Salma Hayek</td>
    <td>Eternals</td>
  </tr>
  <tr id="Bruce">
    <td>Bruce Banner</td>
    <td>Edward Norton, Mark Ruffalo</td>
    <td>The Incredible Hulk, The Avengers, Avengers: Age of Ultron, Thor: Ragnarok, Avengers: Infinity War, Avengers: Endgame, Shang-Chi and the Legend of the Ten Rings</td>
  </tr>
  <tr id="James">
    <td>James 'Bucky' Barnes</td>
    <td>Sebastian Stan</td>
    <td>Captain America: The First Avenger, Captain America: Civil War, Black Panther, Avengers: Infinity War, Avengers: Endgame</td>
  </tr>
  <tr id="Clint">
    <td>Clint Barton</td>
    <td>Jeremy Renner</td>
    <td>Thor, The Avengers, Avengers: Age of Ultron, Ant-Man, Captain America: Civil War, Avengers: Endgame, Black Widow</td>
  </tr>
  <tr id="Quentin">
    <td>Quentin Beck</td>
    <td>Jake Gyllenhaal</td>
    <td>Spider-Man: Far From Home</td>
  </tr>
  <tr id="Peggy">
    <td>Peggy Carter</td>
    <td>Hayley Atwell</td>
    <td>Captain America: The First Avenger, Captain America: The Winter Soldier, Avengers: Age of Ultron, Ant-Man, Avengers: Endgame, Doctor Strange in the Multiverse of Madness</td>
  </tr>
  <tr id="Shang-Chi">
    <td>Shang-Chi</td>
    <td>Simu Liu</td>
    <td>Shang-Chi and the Legend of the Ten Rings</td>
  </tr>
  <tr id="Yelena">
    <td>Yelena Belova</td>
    <td>Florence Pugh</td>
    <td>Black Widow</td>
  </tr>
  <tr id="Sharon">
    <td>Sharon Carter</td>
    <td>Emily VanCamp</td>
    <td>Captain America: The Winter Soldier, Captain America: Civil War</td>
  </tr>
  <tr id="Emil">
    <td>Emil Blonsky 'Abomination'</td>
    <td>Tim Roth</td>
    <td>The Incredible Hulk, Shang-Chi and the Legend of the Ten Rings</td>
  </tr>
  <tr id="Phil">
    <td>Phil Coulson</td>
    <td>Clark Gregg</td>
    <td>Iron Man, Iron Man 2, Thor, The Avengers, Captain Marvel</td>
  </tr>
  <tr id="Carol">
    <td>Carol Danvers 'Captain Marvel'</td>
    <td>Brie Larson</td>
    <td>Captain Marvel, Avengers: Endgame, Shang-Chi and the Legend of the Ten Rings, The Marvels</td>
  </tr>
  <tr id="Drax">
    <td>Drax the Destrayer</td>
    <td>Dave Bautista</td>
    <td>Guardians of the Galaxy, Guardians of the Galaxy Vol. 2, Avengers: Infinity War, Avengers: Endgame, Thor: Love and Thunder, Guardians of the Galaxy Vol 3</td>
  </tr>
  <tr id="Druig">
    <td>Druig</td>
    <td>Barry Keoghan</td>
    <td>Eternals</td>
  </tr>
  <tr id="Hope">
    <td>Hope van Dyne 'Wasp'</td>
    <td>Evangeline Lilly</td>
    <td>Ant-Man, Ant-Man and the Wasp, Avengers: Endgame, Ant-Man and the Wasp: Quantumania</td>
  </tr>
  <tr id="Ikaris">
    <td>Ikaris</td>
    <td>Richard Madden</td>
    <td>Eternals</td>
  </tr>
  <tr id="Jane">
    <td>Jane Foster</td>
    <td>Natalie Portman</td>
    <td>Thor, Thor: The Dark World,	Avengers: Endgame, Thor: Love and Thunder</td>
  </tr>
  <tr id="Nick">
    <td>Nick Fury</td>
    <td>Samuel L. Jackson</td>
    <td>Iron Man, Iron Man 2, Thor, Captain America: The First Avenger, The Avengers, Captain America: The Winter Soldier, Avengers: Age of Ultron, Avengers: Infinity War, Captain Marvel, Avengers: Endgame, Spider-Man: Far From Home</td>
  </tr>
  <tr id="Gamora">
    <td>Gamora</td>
    <td>Zoe Saldana</td>
    <td>Guardians of the Galaxy, Guardians of the Galaxy Vol. 2, Avengers: Infinity War, Avengers: Endgame, Guardians of the Galaxy Vol 3</td>
  </tr>  
  <tr id="Gilgamesh">
    <td>Gilgamesh</td>
    <td>Don Lee</td>
    <td>Eternals</td>
  </tr>
  <tr id="Groot">
    <td>Groot</td>
    <td>Vin Diesel</td>
    <td>Guardians of the Galaxy, Guardians of the Galaxy Vol. 2, Avengers: Infinity War, Avengers: Endgame, Thor: Love and Thunder, Guardians of the Galaxy Vol. 3</td>
  </tr>  
  <tr id="Heimdall">
    <td>Heimdall</td>
    <td>Idris Elba</td>
    <td>Thor, Thor: The Dark World, Avengers: Age of Ultron, Thor: Ragnarok, Avengers: Infinity War, Thor: Love and Thunder</td>
  </tr>  
  <tr id="Maria">
    <td>Maria Hill</td>
    <td>Cobie Smulders</td>
    <td>The Avengers, Captain America: The Winter Soldier, Avengers: Age of Ultron, Avengers: Infinity War, Avengers: Endgame, Spider-Man: Far From Home</td>
  </tr>  
  <tr id="Harold">
    <td>Harold 'Happy' Hogan</td>
    <td>Jon Favreau</td>
    <td>Iron Man, Iron Man 2, The Avengers, Iron Man 3, Avengers: Age of Ultron, Spider-Man: Homecoming, Avengers: Infinity War, Avengers: Endgame, Spider-Man: Far from Home, Spider-Man: No Way Home</td>
  </tr>
  <tr id="Katy">
    <td>Katy</td>
    <td>Awkwafina</td>
    <td>Shang-Chi and the Legend of the Ten Rings</td>
  </tr>
  <tr id="Scott">
    <td>Scott Lang</td>
    <td>Paul Rudd</td>
    <td>Ant-Man, Captain America: Civil War, Ant-Man and the Wasp, Avengers: Endgame, Ant-Man and the Wasp: Quantumania</td>
  </tr>  
  <tr id="Darcy">
    <td>Darcy Lewis</td>
    <td>Kat Dennings</td>
    <td>Thor, Thor: The Dark World, Thor: Love and Thunder</td>
  </tr>
  <tr id="Loki">
    <td>Loki</td>
    <td>Tom Hiddleston</td>
    <td>Thor, The Avengers, Thor: The Dark World, Thor: Ragnarok, Avengers: Infinity War, Avengers: Endgame, Ant-Man and the Wasp: Quantumania</td>
  </tr>
  <tr id="Mantis">
    <td>Mantis</td>
    <td>Pom Klementieff</td>
    <td>Guardians of the Galaxy Vol. 2, Avengers: Infinity War, 	Avengers: Endgame, 	Thor: Love and Thunder, Guardians of the Galaxy Vol 3.</td>
  </tr>
  <tr id="Wanda">
    <td>Wanda Maximoff</td>
    <td>Elizabeth Olsen</td>
    <td>Captain America: The Winter Soldier, Avengers: Age of Ultron, Captain America: Civil War, Avengers: Infinity War, Avengers: Endgame, Doctor Strange in the Multiverse of Madness</td>
  </tr>
  <tr id="Karl">
    <td>Karl Mordo</td>
    <td>Chiwetel Ejiofor</td>
    <td>Doctor Strange, Doctor Strange in the Multiverse of Madness</td>
  </tr>
  <tr id="Killmonger">
    <td>Killmonger</td>
    <td>Michael B. Jordan</td>
    <td>Black Panther, Black Panther: Wakanda Forever</td>
  </tr>
  <tr id="Kingo">
    <td>Kingo</td>
    <td>Kumail Nanjiani</td>
    <td>Eternals</td>
  </tr>
  <tr id="Makkari">
    <td>Makkari</td>
    <td>Lauren Ridloff</td>
    <td>Eternals</td>
  </tr>
  <tr id="Melina">
    <td>Melina</td>
    <td>Rachel Weisz</td>
    <td>Black Widow</td>
  </tr>
  <tr id="Odin">
    <td>Odin</td>
    <td>Sir Anthony Hopkins</td>
    <td>Thor, Thor: The Dark World, Thor: Ragnarok</td>
  </tr>  
  <tr id="Nebula">
    <td>Nebula</td>
    <td>Karen Gillian</td>
    <td>Guardians of the Galaxy, Guardians of the Galaxy Vol. 2, Avengers: Infinity War, Avengers: Endgame, Thor: Love and Thunder, Guardians of the Galaxy Vol. 3</td>
  </tr>    
  <tr id="Okoye">
    <td>Okoye</td>
    <td>Danai Gurira</td>
    <td>Black Panther, Avengers: Infinity War, Avengers: Endgame, Black Panther: Wakanda Forever</td>
  </tr>
  <tr id="Christine">
    <td>Christine Palmer</td>
    <td>Rachel McAdams</td>
    <td>Doctor Strange, Doctor Strange in the Multiverse of Madness</td>
  </tr> 
  <tr id="May">
    <td>May Parker</td>
    <td>Marisa Tomei</td>
    <td>Captain America: Civil War, Spider-Man: Homecoming, Avengers: Endgame, Spider-Man: Far From Home, Spider-Man: No Way Home</td>
  </tr>
  <tr id="Spider-Man">
    <td>Spider-Man Peter Parker</td>
    <td>Tom Holland</td>
    <td>Captain America: Civil War, Spider-Man: Homecoming, Avengers: Infinity War, Avengers: Endgame, Spider-Man: Far From Home, Spider-Man: No Way Home</td>
  </tr>
  <tr id="Phastos">
    <td>Phastos</td>
    <td>Bryan Tyree Henry</td>
    <td>Eternals</td>
  </tr>
  <tr id="Pepper">
    <td>Virginia 'Pepper' Potts</td>
    <td>Gwyneth Paltrow</td>
    <td>Iron Man, Iron Man 2, The Avengers, Iron Man 3, Spider-Man: Homecoming, Avengers: Infinity War, Avengers: Endgame</td>
  </tr>  
  <tr id="Hank">
    <td>Hank Pym</td>
    <td>Michael Douglas</td>
    <td>Ant-Man, Ant-Man and the Wasp, Avengers: Endgame, Ant-Man and the Wasp: Quantumania</td>
  </tr>  
  <tr id="Peter">
    <td>Peter Quill</td>
    <td>Chris Pratt</td>
    <td>Guardians of the Galaxy, Guardians of the Galaxy Vol. 2, Avengers: Infinity War, Avengers: Endgame, Thor: Love and Thunder, Guardians of the Galaxy Vol. 3</td>
  </tr>
  <tr id="Monica">
    <td>Monica Rambeau</td>
    <td>Teyonah Parris</td>
    <td>The Marvels</td>
  </tr>
  <tr id="Ramonda">
    <td>Ramonda</td>
    <td>Angela Bassett</td>
    <td>Black Panther, Avengers: Endgame, Black Panther: Wakanda Forever</td>
  </tr>
  <tr id="Red">
    <td>Red Guardian</td>
    <td>David Harbour</td>
    <td>Black Widow</td>
  </tr>
  <tr id="Rocket">
    <td>Rocket</td>
    <td>Bradley Cooper</td>
    <td>Guardians of the Galaxy, Guardians of the Galaxy Vol. 2, Avengers: Infinity War, Avengers: Endgame, Thor: Love and Thunder, Guardians of the Galaxy Vol. 3</td>
  </tr> 
  <tr id="Rhodey">
    <td>'Rhodey' James Rhodes</td>
    <td>Terrence Howard, Don Cheadle</td>
    <td>Iron Man, Iron Man 2, Iron Man 3, Avengers: Age of Ultron, Captain America: Civil War, Avengers: Infinity War, Captain Marvel, Avengers: Endgame, </td>
  </tr>
  <tr id="Sersi">
    <td>Sersi</td>
    <td>Gemma Chan</td>
    <td>Eternals</td>
  </tr>
  <tr id="Steve">
    <td>Steve Rogers</td>
    <td>Chris Evans</td>
    <td>Captain America: The First Avenger, The Avengers, Thor: The Dark World, Captain America: The Winter Soldier, Avengers: Age of Ultron, Ant-Man, Captain America: Civil War, Spider-man: Homecoming, Avengers: Infinity War, Captain Marvel, Avengers: Endgame</td>
  </tr>  
  <tr id="Natasha">
    <td>Natasha Romanoff</td>
    <td>Scarlett Johansson</td>
    <td>Iron Man 2, The Avengers, Captain America: The Winter Soldier, Avengers: Age of Ultron, Captain America: Civil War, Thor: Ragnarok, Avengers: Infinity War, Captain Marvel, Avengers: Endgame, Black Widow</td>
  </tr>  
  <tr id="Everett">
    <td>Everett K. Ross</td>
    <td>Martin Freeman</td>
    <td>Captain America: Civil War, Black Panther, Black Panther: Wakanda Forever</td>
  </tr>  
  <tr id="Thaddeus">
    <td>Thaddeus 'Thunderbolt' Ross</td>
    <td>William Hurt, Harrison Ford</td>
    <td>The Incredible Hulk, Captain America: Civil War, Avengers: Infinity War, Avengers: Endgame, Black Widow</td>
  </tr>  
  <tr id="Erik">
    <td>Erik Selvig</td>
    <td>Stellan Skarsgard</td>
    <td>Thor, The Avengers, Thor: The Dark World, Avengers: Age of Ultron, Thor: Love and Thunder</td>
  </tr>  
  <tr id="Shuri">
    <td>Shuri</td>
    <td>Letitia Wright</td>
    <td>Black Panther, Avengers: Infinity War, Avengers: Endgame, Black Panther: Wakanda Forever</td>
  </tr>
  <tr id="Sprite">
    <td>Sprite</td>
    <td>Lia McHugh</td>
    <td>Eternals</td>
  </tr>
  <tr id="Trevor">
    <td>Trevor Slattery</td>
    <td>Ben Kingsley</td>
    <td>Iron Man 3, Shang-Chi and the legend of the Ten Rings</td>
  </tr>
  <tr id="Howard">
    <td>Howard Stark</td>
    <td>Dominic Cooper, John Slattery</td>
    <td>Iron Man 2, Captain America: The First Avenger, Ant-Man, Captain America: Civil War, 	Avengers: Endgame</td>
  </tr>
  <tr id="Tony">
    <td>Tony Stark</td>
    <td>Robert Downey Jr.</td>
    <td>Iron Man, The Incredible Hulk, Iron Man 2, The Avengers, Iron Man 3, Avengers: Age of Ultron, Captain America: Civil War, Spider-Man: Homecoming, Avengers: Infinity War, Avengers: Endgame</td>
  </tr>  
  <tr id="Dr.">
    <td>Dr. Stephen Strange</td>
    <td>Benedict Cumberbatch</td>
    <td>Doctor Strange, Thor: Ragnarok, Avengers: Infinity War, Avengers: Endgame, Spider-Man: No Way Home, Doctor Strange in the Multiverse of Madness</td>
  </tr>  
  <tr id="Talos">
    <td>Talos</td>
    <td>Ben Mendelsohn</td>
    <td>Captain Marvel, Spider-Mam: Far From Home</td>
  </tr>
  <tr id="T'">
    <td>T' Challa</td>
    <td>Chadwick Boseman</td>
    <td>Captain America: Civil War, Black Panther, Avengers: Infinity War, Avengers: Endgame, Black Panther: Wakanda Forever</td>
  </tr> 
  <tr id="Thena">
    <td>Thena</td>
    <td>Angelina Jolie</td>
    <td>Eternals</td>
  </tr>
  <tr id="Thor">
    <td>Thor</td>
    <td>Chris Hemsworth</td>
    <td>Thor, The Avengers, Thor: The Dark World, Avengers: Age of Ultron, Doctor Strange, Thor: Ragnarok, Avengers: Infinity War, 	Avengers: Endgame, Thor: Love and Thunder</td>
  </tr>
  <tr id="Xu Xialing">
    <td>Xu Xialing</td>
    <td>Meng'er Zang</td>
    <td>Shang-Chi and the Legend of the Ten Rings</td>
  </tr>
  <tr id="Valkyrie">
    <td>Valkyrie</td>
    <td>Tessa Thompson</td>
    <td>Thor: Ragnarok, Avengers: Endgame, Thor: Love and Thunder</td>
  </tr>   
  <tr id="Vision">
    <td>Vision J.A.R.V.I.S</td>
    <td>Paul Bettany</td>
    <td>Iron Man, Iron Man 2, The Avengers,	Iron Man 3, Avengers: Age of Ultron, Captain America: Civil War, Avengers: Infinity War</td>
  </tr>  
  <tr id="Sam">
    <td>Sam Wilson</td>
    <td>Anthony Mackie</td>
    <td>Captain America: The Winter Soldier, Avengers: Age of Ultron, Ant-Man, Captain America: Civil War, Avengers: Infinity War, Avengers: Endgame</td>
  </tr>
  <tr id="Wenwu">
    <td>Wenwu</td>
    <td>Tony Leung Chiuwai</td>
    <td>Shang-Chi and the Legend of the Ten Rings</td>
  </tr>
  <tr id="Wong">
    <td>Wong</td>
    <td>Benedict Wong</td>
    <td>Doctor Strange, Avengers: Infinity War, Avengers: Endgame, Shang-Chi and the Legend of the Ten Rings, Spider-Man: No Way Home, Doctor Strange in the Multiverse of Madness</td>
  </tr> 
  <tr id="Jimmy">
    <td>Jimmy Woo</td>
    <td>Randall Park</td>
    <td>Ant-Man and the Wasp, Ant-Man and the Wasp: Quantumania</td>
  </tr> 
</table>

<script type="text/javascript">
		if( sessionStorage.hits )
		   sessionStorage.hits = Number(sessionStorage.hits) +1;
		else
		   sessionStorage.hits = 1;
		document.writeln("Session Hits :" + sessionStorage.hits);
    
		if( localStorage.hits )
			localStorage.hits = Number(localStorage.hits) +1;
		else
			localStorage.hits = 1;
		document.writeln("Local Hits: " + localStorage.hits);
	</script>

<p>Refresh the page to increase number of hits. <br>
Close the window and open it again and check the result.</p>


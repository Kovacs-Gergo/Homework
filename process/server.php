<?php
$a = Array("Ajak","Bruce Banner","James 'Bucky' Barnes","Clint Barton 'Hawkeye/Ronin'","Quentin Beck","Peggy Carter","Shang-Chi","Tony Leung Chiuwai",
           "Yelena Belova","Sharon Carter","Emil Blonsky 'Abomination'","Phil Coulson","Carol Danvers","Drax the Destroyer","Druig",
           "Hope van Dyne","Ikaris","Jane Foster","Nick Fury","Gamora","Gilgamesh","Groot","Heimdall","Maria Hill","Harold 'Happy' Hogan","Katy",
           "Scott Lang","Darcy Lewis","Loki","Mantis","Wanda Maximoff","Karl Mordo","Killmonger","Kingo","Makkari","Melina","Odin","Nebula",
           "Okoye","Christine Palmer","May Parker","Spider-Man Peter Parker","Phastos","Virginia 'Pepper' Potts","Hank Pym","Peter Quill",
           "Monica Rambeau","Ramonda","Red Guardian","Rocket","Rhodey James Rhodes","Sersi","Steve Rogers","Natasha Romanoff",
           "Everett K. Ross","Thaddeus Ross","Erik Selvig","Shuri","Sprite","Trevor Slattery","Howard Stark",
           "Tony Stark","Dr. Stephen Strange","Talos","T' Challa","Thena","Thor","Xu Xialing","Valkyrie","Vision J.A.R.V.I.S",
           "Sam Wilson","Wenwu","Wong","Jimmy Woo");

$q=$_POST["q"];
if(strlen($q)>0){
    $hint="";
    for($i=0; $i<count($a); $i++)
        if(stristr($a[$i],$q))
            if($hint=="") $hint='<a class="livesearch" onclick="change(this);" href=#'.$a[$i].'>'.$a[$i].'</a>';
            else $hint = $hint.", ".'<a class="livesearch" onclick="change(this);" href=#'.$a[$i].'>'.$a[$i].'</a>'; 
}
if($hint == "") $response="no suggestion";
else $response=$hint;
echo $response;
?>

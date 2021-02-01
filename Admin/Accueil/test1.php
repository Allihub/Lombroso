<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel ="stylesheet" type="text/css" href="tick.css">
	<title>Test1</title>
</head>
<body>
	<h1>
		Voici le test 1 <br>
		<span class="sous_titre">Insérer les consignes ici</span>
		<div class="chronometre">
		  <div class="tim">
		  	<span >0 h</span> :
		  	<span >0 min</span> :
		  	<span >0 s</span> :
		  	<span >0 ms</span>

		  </div>
		  <button id="start" onclick="start()">Start</button>
		  <button id="stop" onclick="stop()" >Stop</button>
		  <button id="reset" onclick="reset()" >Reset</button>
		  <button id="suivant" onclick="suivant()" >Suivant</button>
		</div>
		<!-- //Source : www.exelib.net -->
		<!-- <input type="submit" name="start" placeholder="commencer"> -->
		<script type="text/javascript">
		  /*la fonction getElementByTagName renvoie une liste des éléments portant le nom de balise donné ici "span".*/
		  var sp = document.getElementsByTagName("span");
		  var btn_start=document.getElementById("start");
		  var btn_stop=document.getElementById("stop");
		  var t;
		  var ms=0,s=0,mn=0,h=0;
		   
		   /*La fonction "start" démarre un appel répétitive de la fonction update_chrono par une cadence de 100 milliseconde en utilisant setInterval et désactive le bouton "start" */

		  function start(){
		   t =setInterval(update_chrono,100);
		   btn_start.disabled=true;
		  
		  }
		  /*La fonction update_chrono incrémente le nombre de millisecondes par 1 <==> 1*cadence = 100 */
		  function update_chrono(){
		    ms+=1;
		    /*si ms=10 <==> ms*cadence = 1000ms <==> 1s alors on incrémente le nombre de secondes*/
		       if(ms==10){
		        ms=1;
		        s+=1;
		       }
		       /*on teste si s=60 pour incrémenter le nombre de minute*/
		       if(s==60){
		        s=0;
		        mn+=1;
		       }
		       if(mn==60){
		        mn=0;
		        h+=1;
		       }
		       /*afficher les nouvelle valeurs*/
		       sp[0].innerHTML=h+" h";
		       sp[1].innerHTML=mn+" min";
		       sp[2].innerHTML=s+" s";
		       sp[3].innerHTML=ms+" ms";

		  }
		  
			/*on arrête le "timer" par clearInterval ,on réactive le bouton start */
			function stop(){
		    clearInterval(t);
		    btn_start.disabled=false;
				
			}
		  /*dans cette fonction on arrête le "timer" ,on réactive le bouton "start" et on initialise les variables à zéro */
		  function reset(){
		   clearInterval(t);
		    btn_start.disabled=false;
		    ms=0,s=0,mn=0,h=0;
		    /*on accède aux différents span par leurs indice*/
		    sp[0].innerHTML=h+" h";
		    sp[1].innerHTML=mn+" min";
		    sp[2].innerHTML=s+" s";
		    sp[3].innerHTML=ms+" ms";
		      }
		   function suivant(){
		   	document.location.href="test2.php"
		   }
		</script>
		<!-- //Source : www.exelib.net -->
	</h1>
</body>
</html>
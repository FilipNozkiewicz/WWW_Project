var bb = ["bb1"  ,"bb2" , "bb3" , "bb4" , "bb5" , "bb6" , "bb7" ,
 "bb8" , "bb9"   ];
var el_num;
var circle = false;
var sound = new Audio('sounds/win.mp3');

function put(element){
	if(circle == false){
	document.getElementById(element).style.backgroundImage = "url('icons/cross.png')";
	el_num = parseInt(element.slice(-1));
	el_num -= 1;
	bb[el_num] = "circle";
	circle = true;
	check();
	}
	else{
	el_num = parseInt(element.slice(-1));
	el_num -= 1;
	bb[el_num] = "cross";
	document.getElementById(element).style.backgroundImage = "url('icons/circle.png')";
	circle = false;
	check();
	}
}
function check(){
	if((bb[0].localeCompare(bb[1]) == 0)
	 && (bb[0].localeCompare(bb[2]) == 0)) {
		
		sound.play();
		document.getElementById('b1').style.backgroundColor = "green";
		document.getElementById('b2').style.backgroundColor = "green";
		document.getElementById('b3').style.backgroundColor = "green";
	}
	if((bb[3].localeCompare(bb[4]) == 0)
	 && (bb[3].localeCompare(bb[5]) == 0)) {
		
	sound.play();
	document.getElementById('b4').style.backgroundColor = "green";
		document.getElementById('b5').style.backgroundColor = "green";
		document.getElementById('b6').style.backgroundColor = "green";
	}
	if((bb[6].localeCompare(bb[7]) == 0)
	 && (bb[6].localeCompare(bb[8]) == 0)) {
		
	sound.play();
	document.getElementById('b7').style.backgroundColor = "green";
		document.getElementById('b8').style.backgroundColor = "green";
		document.getElementById('b9').style.backgroundColor = "green";
	}
	if((bb[0].localeCompare(bb[3]) == 0)
	 && (bb[0].localeCompare(bb[6]) == 0)) {
		sound.play();
	document.getElementById('b1').style.backgroundColor = "green";
		document.getElementById('b4').style.backgroundColor = "green";
		document.getElementById('b7').style.backgroundColor = "green";
	}
	if((bb[1].localeCompare(bb[4]) == 0)
	 && (bb[1].localeCompare(bb[7]) == 0)) {
		sound.play();
	document.getElementById('b2').style.backgroundColor = "green";
		document.getElementById('b5').style.backgroundColor = "green";
		document.getElementById('b8').style.backgroundColor = "green";
	}
	if((bb[2].localeCompare(bb[5]) == 0)
	 && (bb[2].localeCompare(bb[8]) == 0)) {
		sound.play();
	document.getElementById('b3').style.backgroundColor = "green";
		document.getElementById('b6').style.backgroundColor = "green";
		document.getElementById('b9').style.backgroundColor = "green";
	}
	if((bb[0].localeCompare(bb[4]) == 0)
	 && (bb[0].localeCompare(bb[8]) == 0)) {
		sound.play();
	document.getElementById('b1').style.backgroundColor = "green";
		document.getElementById('b5').style.backgroundColor = "green";
		document.getElementById('b9').style.backgroundColor = "green";
	}
	if((bb[6].localeCompare(bb[4]) == 0)
	 && (bb[6].localeCompare(bb[2]) == 0)) {
		sound.play();
	document.getElementById('b7').style.backgroundColor = "green";
		document.getElementById('b5').style.backgroundColor = "green";
		document.getElementById('b3').style.backgroundColor = "green";
	}

}

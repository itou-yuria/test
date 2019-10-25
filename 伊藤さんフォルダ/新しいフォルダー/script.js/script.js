
for(var i=1;i<=5;i++){
	document.write("★");
}

document.write("<br>");
document.write("<br>");

for(var star1=1; star1<=2;star1++){
	for(var star2=1;star2<=3;star2++){
		document.write("★");
	}
	document.write("<br>");
}

document.write("<br>");



for(var star1=1; star1<=2;star1++){
	for(var star2=1;star2<=5;star2++){
		document.write("☆");
	}
	document.write("<br>");
}

document.write("<br>");



for(var star1=1; star1<=4;star1++){
	for(var star2=1;star2<=5;star2++){
		document.write("★");
	}
	document.write("<br>");
}

document.write("<br>");

for(var star1=1; star1<=4;star1++){
	for(var star2=1;star2<=3;star2++){
		document.write("★");
	}
	document.write("<br>");
}


document.write("<br>");


for(var no1=0; no1<3;no1++){
	for(var no2 =1;no2<=3;no2++){
		if(no2%  2==0){
			document.write("☆");}
	    else{
			 document.write("★");}
	}
	document.write("<br>");
}


document.write("<br>");


for(var no1=0; no1<4;no1++){
	for(var no2 =0;no2<=4;no2++){
		if(no2%  2==0){
			document.write("★");}
	    else{
			 document.write("☆");}
	}
	document.write("<br>");
}

document.write("<br>");




for(var star1=1; star1<=5;star1++){
	for(var star2=1;star2<=star1;star2++){
		
		
		document.write("★");
	}
	document.write("<br>");
}

document.write("<br>");
document.write("<br>");



function total(hannkei,ensilyu=3.14){
	return(hannkei*hannkei*ensilyu);
	
}

document.write(total(5)+"<be>");
document.write("<br>");
document.write(total(7)+"<be>");
document.write("<br>");
document.write(total(10)+"<be>");



document.write("<br>");
document.write("<br>");



function goukei(otona,kodomo){
	return (500*otona+200*kodomo)+"円です。";
}
document.write(goukei(2,4)+"<be>");
document.write("<br>");
document.write(goukei(1,5)+"<be>");
document.write("<br>");
document.write(goukei(3,7)+"<be>");



























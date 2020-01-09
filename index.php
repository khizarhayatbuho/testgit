<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>learn Js</title>
<script>

// simple comment and how to draw new line in js
document.write('hello Worldd');
document.write("<br>");
document.write('<b>I am New To learn Javascript</b></br></br>');
// how to create variable in js 
var asad= "asi ty malanga sano Jag Dy Way Ran Day";

document.write(asad);
// difference between varand Let varible 
//we can declare Var variable more time but we cant declare same let variable more then one time


//constant variable
document.write('<br>');
const sam="constant variable";
document.write(sam);
document.write('<br>');
document.write('Addition');
document.write('<br><br>');
 	var w=12;
	var x=2;
	var y=w  + x;
	document.write(y);
	// subtraction 
	document.write('<br>');
document.write('subtraction');
document.write('<br><br>');
var d=10;
var f =5;

var g=d-f;
document.write(g);
document.write('<br><br>');
// division of varia ble 
var a=10;
var b=5;
var c=a/b;
document.write(c);
document.write('<br><br>');
// Multiplication of variable
var r=10;
var t=10;
var u=r*t;
document.write(u);
document.write('<br><br>');
// moduler of variable
var m=11;
var n=3
var v=m%n;
document.write(v);
// how to use console
var h=50;
console.log(h);
// arithmatic operator comparison 
var val1=10;
 var val2=8;
 console.log(val1==val2);
 // if condition 
 document.write('<br><br>');
 var num1=10;
 var num2=12;
 if( num1> num2)
 {
	 document.write("hi i am greater");
 }
 else  {
	 document.write('No and never i am less from  '+ num1);
	 
 }
  document.write('<br><br>');
  // if else if statment 
  var percentage =120;
  if(percentage >= 80 && percentage<= 100)
  {
	  document.write(" 1st division");
  } 
  else if(percentage >=50 && percentage< 80)
  {
	  document.write(" 2nd devision ");
  }
   else if(percentage >= 33 && percentage< 50)
  {
	  document.write("3rd division");
  }
  else 
  {
	  document.write("Please Enter Valid Percentage");
  }

// ternary Operator 
 document.write('<br><br>');
 var ter=15;
 var ter1;
 (ter >20)? z="true": z="false";
 document.write(z);
// stitch statment 
 document.write('<br><br>');
 var day=3;
 	switch(day){
		
	case(0):
	document.write("today is sunday");
	break;
	case(1):
	document.write("today is monday");
	break;
	case(2):
	document.write("today is Thuesday");
	break;
	case(3):
	document.write("today is wednesday");
	break;
	case(4):
	document.write("today is thersday");
	break;
	
	}
	// Alert box 
 document.write('<br><br>');
 var th=4;
 var fh=5;
 if(th > fh) {
	 //alert(" th is greater");
 }
 else {
	// alert(" fh is greater ")
 }
 // confirm  box 
 //var er=confirm("Do You Want to Delete ");
 //alert(er);
 // promp box
  document.write('<br><br>');
 //var percentage =prompt("Please Enter Your Percentage");
  if(percentage >= 80 && percentage<= 100)
  {
	  document.write(" 1st division");
  } 
  else if(percentage >=50 && percentage< 80)
  {
	  document.write(" 2nd devision ");
  }
   else if(percentage >= 33 && percentage< 50)
  {
	  document.write("3rd division");
  }
  else 
  {
	  document.write("Please Enter Valid Percentage");
  }
  // function box
  document.write('<br><br>');
  function helloworld()
  {
	  document.write("hello everybody");
  }
  helloworld();
  document.write('<br><br>');
  helloworld();
  // function with parameter 
  document.write('<br><br>');
  function fullname(firstname,lastname)
  {
	  var a= firstname + " - " + lastname;
	  return a;
  }
  var fn=fullname("khizar","hayat");
  document.write(fn);
  
  // function with parameter calculate percentage 
   document.write('<br><br>');
   function totalnumber(math,engl,cs)
   {
	   var totlmarks = math+engl+cs;
	   return totlmarks;
   }
   
    
   
 function percentage(tt)
 {
	 var totalpercentage= tt/300 *100;
	 document.write(totalpercentage);
 }
 var subt= totalnumber(80,76,39);
    percentage(subt);
	
	// print the number 
   document.write('<br><br>');
   for( var a=1; a<=5; a++)
   {
	   for (var b=1; b<=a; b++)
	   {
		   document.write(b);
		  
	   }
	   document.write("<br>");
   }
</script>
<script>
for( var a=1; a<=5; a++)
   {
	   for (var b=1; b<=a; b++)
	   {
		   document.write(b);
		   
	   }
	   document.write("<br>");
   }
   document.write('<br><br>');
   document.write('<br><br>');
   
   for( var a=5; a>=1; a--)
   {
	   for( var b=a; b>=1;b--)
	   {
		   document.write(b);
	   }
	   document.write("<br>");
   }
   for( var a=5; a>=1; a--)
   {
	   for (var b=1; b<=a; b++)
	   {
		   document.write(a);
	   }
	   document.write("<br>");
   }
  
</script>
</head>

<body>
</body>
</html>
var counter=0;
var images=[];
var time=3000;

images[0]="JAVASCRIPT.png";
images[1]="CSS.png";
images[2]="HTML.png";
function changingImage() {
  document.slideshow.src=images[counter];
    if (counter<images.length -1)
        { counter++  }
    else{counter=0;}

    setTimeout("changingImage()",time);
      
  
  
}


 
function getGreeting(){
  var date=new Date();
  var hours=date.getHours();
  var greeting;
  
  if (hours>=0 && hours<12) {  greeting="Good morning";
    
  }

  else if(hours>=12 && hours<18){   greeting="Good afternoon";

  }

  else{greeting="Good evening";

  }
return greeting;
}
function displayGreeting(){
    var greeting = getGreeting();
    document.getElementById("greeting").textContent=greeting;
}

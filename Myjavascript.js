var counter=0;
var images=[];
var time=3000;

images[0]="JAVASCRIPT";
images[1]="CSS.png";
images[2]="HTML.png";
function changingImage() {
  document.slideshow.src=images[counter];
    if (counter<images.length -1)
        { counter++  }
    else{counter=0;}

    setTimeout("changingImage()",time);
      
  
  
}window.onload=changingImage;


 

  var currentime=new Date();
  var currentHour=currentime.getHours();
  var greeting;
  if (currentHour<12) {  greeting="Good morning";
    
  }

  else if(currentHour<18){   greeting="Good afternoon";

  }

  else{   "Good evening";

  }

  var greetingElement=document.getElementById(".greeting");
  greetingElement.textcontent=greeting;

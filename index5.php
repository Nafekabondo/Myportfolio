<!DOCTYPE html>
<html>
    <head>
<title>alinafe first page</title>
<style>body{
background-color: gold;
}
    header{
        background-color: black;
        color: white;

}
.portfolio{
    background-color: aquamarine;
#nafe{background-color: blue;}
}

</style>
<script type="text/Javascript" src="myscript.js"></script>
    </head>
    <body onload="displayGreeting(), changingImage()">
<?php
$servername="localhost";
$username="root";
$password="";
$database="my_project";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="select projectNumber,projectName from `project`";
$result= mysqli_query($conn,$sql);
?>
        <h1 id="greeting"></h1>
    <header>
<h1>Alinafe KABONDO</h1>
<nav>
    <ul>
        <li>home</li>
        <li>service</li>
         <li>About</li>
    </ul>
</nav>
    </header>
    <main>
    <section id="intro">
        <h3>introduction</h3>
        <p>my name is alinafe Kabondo.born on 31 May 2001.<br> I'M studying bancheler ofeducation i information and communication technology LEVE 2.</br>  As past two years i have been studing ICT,i found it so interesting that i decided to cod a progect based on more about ict.<br>This web page will demostrate more about my project.</p>
        <img src="hunger.jpg" height="200px" width="300px">
        
    </section>
    <section class="portfolio">
        <div> <h1>Miss Kabondo's project</h1><br>
<img name = "slideshow" height="300px" width="200px">
</div>
    </section>
<SECTION >
    <H2>My skills</H2>
        <OL>
            <LI>develooping web page</LI>
            <li>coding in c programing</li>
        </OL> 
        <a href="skills.html"/>skills</a><br>
        <a href="project skills.html"/>projects</a><br>
        <a href="contact.html"/>contacts</a>
        


</SECTION>
<section style="background-color: bisque ">
    <h1 style="color: blue;">contact form</h1>
    <form action="http://www.example.com/review.php" method="get">
            
        <p align="left">Name:
        <input type="text" name="Student Name" size="20" maxlength="40"/></p>
        
        <p align="left">Phone number:
        <input type="text"name="Phone number"</p>
        <p align="left">Password
        <input type="password"name="password"/></p>
        <p align="left">Email:
        <input type="email"name="Email"</p></p>
        <p><u style="color:rgb(0, 132, 255)">Gender</u>:<br/>
        <input type="radio"name="Gender"value="Female"required="required"/>female
        <input type="radio"name="Gender"value="male"/>male</p>

        <input type="submit"value="submit"/>
        
    </form>
</section>
</main>
<footer class="nafe"><Fieldset>
<div > CONTACT</div>
<img src="WHATSAPP.png."height="40",width="20">watsapp number: 0880999915
<img src="EMAIL.png"height="40",width="10">EMAIL: kabondo01alinafe@gmail.com

    <ul>
        
        <li><a href="http://www.mzuni.ac.mw">mzuni</a></li>
        <li><a href="http://w3schools.com">w3schools</a></li>
    </ul>
</div></Fieldset>
</footer>

    </body>
</html>
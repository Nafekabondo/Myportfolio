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
$query=mysqli_query($conn,"select*from user");
while($row=mysqli_fetch_array($query)){
echo $row["Firstname"]."\t".$row["Surname"]."\t".$row["Username"]."\t".$row["Password"]."\t".$row["Email"]."\t".$row['Gender']."<br>";
}

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
        <a href="skills.html">skills</a><br>
        <a href="project skills.html">projects</a><br>
        <a href="contact.html">contacts</a>
        


</SECTION>
<section style="background-color: bisque ">
<form action="shaa.php" method="POST" >
		<h3><b>Registration form</b></h3>
		<label for="Firstname">Firstname</label>
	    <input type="text" name="Firstname"><br><br>

         <label for="Surname">Surname</label>
	     <input type="text" name="Surname" ><br><br>

	     <label for="Username">UserName</label>
	     <input type="text" name="Username" >

	    <p>Gender:</p>
	    <input type="radio" name="Gender" value="Male"><label>Male</label>
	    <input type="radio" name="Gender" value="Female"><label>Female</label>
	    <input type="radio" name="Gender" value="Other"><label>Other</label></p>

	    <label for="password">Password</label>
	    <input type="password" name="password"><br><br>
	    <label>Email</label>
	    <input type="email" name="Email"><br><br>

		<button>Submit</button>
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
<!DOCTYPE html>
<html>
<head>
    <title>my skills</title>
</head>
<style>
    ol{color:blueviolet}
</style>
<body style="background-color: aquamarine;">
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="my_project";
    $conn=mysqli_connect($servername,$username,$password,$database);
    $query=mysqli_query($conn,"select*from skills_1");
    while($row=mysqli_fetch_array($query)){
    echo $row["name"]."\t".$row["year"]."<br>";
    }
    ?>
    <h2>my skills</h2>
    <ol>
        <li>Developing web page</li>
        <li>Coding in programming in c</li>
    </ol>
    <h1>tools used in my object</h1>
    <ul>
        <li>html language</li>>
        <li>java script language</li>
        <li>pyrhon</il>
    </ul>
    <h3>techinologies used</h3>
    <ul> 
       < li>computer servers</li>
       <li>computrs</li>
       <li>smartphones</li>
    </ul>
    <footer class="nafe"><Fieldset>
        <div > CONTACT</div>
        <img src="WHATSAPP.png."height="40",width="20">watsapp number: 0880999915
        <img src="EMAIL.png"height="40",width="20">EMAIL: kabondo01alinafe@gmail.com
        
            <ul>
                
                <li><a href="http://www.mzuni.ac.mw">mzuni</a></li>
                <li><a href="http://w3schools.com">w3schools</a></li>
            </ul>
        </div></Fieldset>
        </footer>


    </body>
    </html>
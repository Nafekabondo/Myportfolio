<!DOCTYPE html>
<html>
<head>
    <title>descriptions of my projects</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="my_project";
    $conn=mysqli_connect($servername,$username,$password,$database);
    $query=mysqli_query($conn,"select*from project");
    while($row=mysqli_fetch_array($query)){
    echo $row["projectNumber"]."\t".$row["projectName"]."<br>";
    }
    ?>
    <h1>My progects</h1>
    <img src ="HTML.png"
    <p style="color: brown;">working with html</p>
    <p>Invoves the structure of the web page</p>
<img src="CSS.png">
    <p style="color:yellow">working with css</p>
    <p>Meals with the presentation of the web page</p>
    <img src="JAVASCRIPT">
    <p style="color: aquamarine;">working with java script</p>
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
</html>>
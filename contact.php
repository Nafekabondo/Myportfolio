

<!DOCTYPE html>
<html>
<head>
    <title>my projects</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="my_project";
    $conn=mysqli_connect($servername,$username,$password,$database);
    $query=mysqli_query($conn,"select*from contact");
    while($row=mysqli_fetch_array($query)){
        echo $row["name"]."\t".$row["phoneNumber"]."\t".$row["password"]."\t".$row["email"]."<br>";
    
    }
    ?>
    <h1 style="color: rgb(116, 199, 199);">contact</h1>
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
    <footer class="nafe"><Fieldset> 
 <div > CONTACT</div>
<img src="WHATSAPP.png."height="50",width="20">watsapp number: 0880999915
<img src="EMAIL.png"height="40",width="10">EMAIL: kabondo01alinafe@gmail.com

    <ul>
        
        <li><a href="http://www.mzuni.ac.mw">mzuni</a></li>
        <li><a href="http://w3schools.com">w3schools</a></li>
    </ul>
</div></Fieldset>
</footer>

</body>
</html>

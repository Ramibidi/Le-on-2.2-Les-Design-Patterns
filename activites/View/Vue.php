
<h1>Mon premier site PHP</h1>
            <div style="background-color : #E6E6FA ;clear:both;height: 20px">
            <ul style="display:flex; justify-content : space-evenly;">
                <li><a href="index.php" style="color: black"><strong>Home</strong></a></li>
                
                
				
               
            </ul>
        </div>
<html>

<head>
    <meta charset="UTF-8" />
    <title>
        <titre="blog">
    </title>
</head>

<body>
    <header style="text-align:center;">
        <h1>Mon Blog</h1>
        <p>Bienvenue </p>
    </header>
    <div style="text-align:center;margin-top:40px">
        <p>
            Ce formulaire permet de poster un article
        </p>
        <form action="index.php" method="post">
            <label> Ecrire l'article:</label>
            <input type="text" name="post" />
            </br></br>
            
            <input type="submit" value="Publier" name="submit" />

        </form>
    </div>
    <br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>




<?php
include ('footer.php');
?>
</body>
</html>


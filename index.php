<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>SKLEP</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div id="content">
            
            <header class="autohide">
                <div class="logo">
                    LOGO
                </div>
                <div class="searchspace">
                    <div class="vertcenter">
                      <img src="img/search.png" class="icon">
                       <input type="text">
                    </div>
                </div>
                <nav>
                
                </nav>
                <div class="koszyk">
                    <div class="vertcenter"><img src="img/shopping.png" class="icon"></div>
                </div>
            </header>
        
            <main>
                <div class="banner">
                    <h1>Tutaj będą zachęcające promocje</h1>
                </div>
                <div class="productslider">
                   <div class="slidercontent">
                   <?php 
                   $conn= mysqli_connect("localhost:3306","root", "", "myshop");
                   $sql = "SELECT nazwa,price,thumbnail FROM produkty;";
                   $result = mysqli_query($conn,$sql);
                   while($row = mysqli_fetch_array($result)) {
                   echo '
                    <div class="productcard">
                    <img src="img/'.$row[2].'" class="productimage">
                    <div class="cardtext">
                        <p class="cardprice">'.$row[1].'$</p>
                        <p class="carddesc">'.$row[0].'</p>
                    </div></div>
                    ';}
                   mysqli_close($conn);
                   ?>
                </div></div>
                <div class="productslider">
                    <div class="slidercontent">
                        
                    </div>
                </div>
            </main>
            <footer>
                STOPKA
            </footer>
        </div>
    </body>
    <script src="script.js"></script>
    
</html>
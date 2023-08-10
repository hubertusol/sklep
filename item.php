<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>SKLEP</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
        <div id="content">
            
            <header class="autohide">
                <div class="logo">
                    <a href="index.php">LOGO</a>
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
                <?php
                    if (isset($_GET['product'])) {
                        $productID = $_GET['product'];
                        $conn= mysqli_connect("localhost:3306","root", "", "myshop");
                        $sql = "SELECT nazwa,price,thumbnail,price_old,special_offer,opis,kategoria FROM produkty WHERE product_url = '$productID';";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result);
                        echo '
                            <p class="breadcrumbs"><a href="index.php" class="highlight">LOGO sklep</a> > '.$row['kategoria'].' > '.$row['nazwa'].'</p>
                                <div class="shoppage">
                                    <div class="shopproduct">
                                    <h1 class="shopname">'.$row['nazwa'].'</h1>
                                    <img src="img/'.$row['thumbnail'].'" class="shopimage">
                                    
                                    </div>
                                    <div class="shopinfo">
                                    <p class="reviews"> &#9733;&#9733;&#9733;&#9733;&#9733;</p>
                                    <h2 class="shopname">'.$row['nazwa'].'</h2>
                                        <p class="shopprice">'.$row['price'].'$</p>';
                                        if ($row['special_offer']==1) {
                                        echo '<p class="shopdiscount">'.$row['price_old'].'$</p>';
                                        }
                                        else {
                                        echo '<br>';
                                        }
                                        echo '
                                        <div class="shopbuttons">
                                        <button class="shoppurchase">Kup teraz</button></br></br>
                                        <button class="shoppurchase">Dodaj do koszyka</button> 
                                        </div>
                                    </div>
                                </div>
                ';}
            ?>
            </main>
            <footer>
                STOPKA
            </footer>
        </div>
    </body>
    
    <script src="script.js"></script>
    
</html>
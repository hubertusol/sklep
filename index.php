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
                <a href="index.php">LOGO</a>
            </div>
            <div class="searchspace">
                <div class="vertcenter">
                    <a href="mesh.php?category=elektronika"><img src="img/search.png" class="icon"></a>
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
                <h1>Tutaj będą zachęcające promocje.</h1>
            </div>
            <div class="productslider">
                <div class="slidercontent">
                    <?php 
                   $conn= mysqli_connect("localhost:3306","root", "", "myshop");
                   $sql = "SELECT nazwa,price,thumbnail,price_old,special_offer,product_url FROM produkty  WHERE kategoria = 'elektronika';";
                   $result = mysqli_query($conn,$sql);
                   $i=0;
                   while($row = mysqli_fetch_array($result)) {
                   echo '
                    <div class="productcard" onmouseover="lightUp(this)" onmouseout="lightDown(this)">
                    <a href="item.php?product='.$row['product_url'].'">
                        <img src="img/'.$row['thumbnail'].'" class="productimage">
                        <div class="cardtext">
                            <p class="cardprice">'.$row['price'].'$</p>';
                            if($row['special_offer']==1) {
                                $discounted = round(100-($row['price']/$row['price_old'])*100);
                                echo '<p class="oldprice"><s>'.$row['price_old'].'</s>$ -'.$discounted.'%</p>';
                            }
                            else {echo'<br>';}
                            echo '<p class="carddesc">'.$row['nazwa'].'</p>
                        </div>
                        </a>
                    </div>
                    ';
                $i++;
                if ($i>4) {break;}
                }
                    
                   ?>
                </div>
            </div>
            <div class="productslider">
                <div class="slidercontent">
                    <?php
                    $sql = "SELECT nazwa,price,thumbnail,price_old,special_offer,product_url FROM produkty WHERE kategoria = 'Odzież';";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result)) {               
                    echo '
                     <div class="productcard" onmouseover="lightUp(this)" onmouseout="lightDown(this)">
                     <a href="item.php?product='.$row['product_url'].'">
                         <img src="img/'.$row['thumbnail'].'" class="productimage">
                         <div class="cardtext">
                             <p class="cardprice">'.$row['price'].'$</p>';
                             if($row['special_offer']==1) {
                                 $discounted = round(100-($row['price']/$row['price_old'])*100);
                                 echo '<p class="oldprice"><s>'.$row['price_old'].'</s>$ -'.$discounted.'%</p>';
                             }
                             else {echo'<br>';}
                             echo '<p class="carddesc">'.$row['nazwa'].'</p>
                         </div>
                         </a>
                     </div>
                     ';}



                    mysqli_close($conn);
                    ?>

                </div>
            </div>
        </main>
        <footer>
            STOPKA
        </footer>
    </div>
</body>
<script>
function lightUp(x) {
    x.style.color = "rgba(57,118,212,1)";
}

function lightDown(x) {
    x.style.color = "black";
}
</script>
<script src="script.js"></script>

</html>
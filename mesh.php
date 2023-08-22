<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>SKLEP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="meshstyle.css">
    <?php
                    if (isset($_GET['category'])) {
                        $categoryID = $_GET['category'];
                        $conn= mysqli_connect("localhost:3306","root", "", "myshop");
                        $sql = "SELECT nazwa,price,thumbnail,price_old,special_offer,product_url FROM produkty WHERE kategoria = '$categoryID';";
                        $result = mysqli_query($conn,$sql);
                        
                }
                
            ?>
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
        <?php echo '<p class="breadcrumbs"><a href="index.php" class="highlight">LOGO sklep</a> > '.$categoryID.'</p>'; ?>
        <div class="display">
            <div class="filters">
                fdff
            </div>
        <table style="width: 80%;">
        <?php
        
        $i=0;
        echo '<tr>';
        while($row = mysqli_fetch_array($result)) {
            echo '
            <td class="productcard" onmouseover="lightUp(this)" onmouseout="lightDown(this)">
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
            </td>';
            $i++;
            if ($i>=5) {break;}
        }
        echo '</tr>';
        echo '<tr>';
        while($row = mysqli_fetch_array($result)) {
            echo '
            <td class="productcard" onmouseover="lightUp(this)" onmouseout="lightDown(this)">
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
            </td>';
            $i++;
            if ($i>=5) {break;}
        }
        echo '</tr>';
        ?>
        </table>
        </div>
                
            
        </main>
        <footer>
            STOPKA
        </footer>
    </div>
</body>

<script src="script.js"></script>

</html>
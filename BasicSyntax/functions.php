<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <title>Functions Tutorial</title>
</head>
<body>
    <?php
        function priceCalculator($arr){
            $vat = 0.15;
            $sum = 0;
            foreach($arr as $category=>$price){
                $sum = $sum+$price;
            }
            $sum = $sum + ($sum*$vat);
            return $sum;
        }
        //$vat = 0.15;
        $products = array("Shirt"=>"210","Trousers"=>"400","Jacket"=>"2100");
        $products += array("Scarf"=>"50");
        
        echo '<table border="1" style="border-collapse:collapse;">';
        echo '<thead><tr><th>Product</th><th>Price</th></tr></thead><tbody>';
        
        foreach($products as $product=>$price){
            echo "<tr><td>$product</td><td>$price</td></tr>";
        }
        $total = priceCalculator($products);
        echo "<tr><td><strong>VAT</strong></td><td>15%</td></tr>";
        echo "<tr><td><strong>Total</strong></td><td>$total</td></tr>";
        echo "</tbody></table>";
    ?>
</body>
</html>
<?php 
 $submit = filter_input(INPUT_POST, 'submit');
 $penize = filter_input(INPUT_POST, 'penize');
 $switch = filter_input(INPUT_POST, 'converter');
 define('EUR_CZK', 27);
 define('USD_CZK', 23);
 define('GBP_CZK', 30);
 $amount = $penize;
 
 ?>
<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Penežní converter </title>
</head>

<body>

<?php

switch ($switch) {
    case 'czkdoeuro':
        $convertedamount = $amount / EUR_CZK;
        $currencyfrom = 'eur';
        $currencyto = 'czk';
        break;
    
    case 'eurodoczk':
        $convertedamount = $amount * EUR_CZK;
        $currencyfrom = 'czk';
        $currencyto = 'eur';
        break;

    case 'czkdousd':
        $convertedamount = $amount / USD_CZK;
        $currencyfrom = 'czk';
        $currencyto = 'usd';
        break;
        
    case 'usddoczk':
        $convertedamount = $amount * USD_CZK;
        $currencyfrom = 'usd';
        $currencyto = 'czk';
        break;

    case 'czkdogp':
        $convertedamount = $amount / GBP_CZK;
        $currencyfrom = 'czk';
        $currencyto = 'usd';
        break;
            
    case 'gpdoczk':
        $convertedamount = $amount * GBP_CZK;
        $currencyfrom = 'gpd';
        $currencyto = 'czk';
        break;
        
}
?>

<?php

if(isset($submit)) { ?>

 <p> Vaše peníze <?= $amount ?> <?= $currencyfrom ?> na částku <?= $convertedamount ?> <?= $currencyto ?> </p>

<?php } else { ?>

<form action="index.php" method="post">

<p> Kolik penež <input type="text" name="penize"> </p>
 <p> Czk do Eur <input type="radio" value="czkdoeuro" name="converter"> </p>
 <p> Euro do czk <input type="radio" value="eurodoczk" name="converter"> </p>
 <p> Czk do USD <input type="radio" value="czkdousd" name="converter"> </p>
 <p> USD do Czk  <input type="radio" value="usddoczk" name="converter"> </p>
 <p> GP do Czk <input type="radio" value="czkdogp" name="converter"> </p>
 <p> Czk do GP  <input type="radio" value="gpdoczk" name="converter"> </p>


 <input type="submit" name="submit" value="Odeslat">

</form>
<?php  }  ?>
</form>
</body>
</html>
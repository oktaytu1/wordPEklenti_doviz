<?php
/*
Plugin Name: eklenti
Description: açıklama
Version: 0.1
Author: Oktay
*/

add_action("admin_menu","eklentim");

function eklentim(){
    add_menu_page("eklenti başlığı","eklenti adı","manage_options","eklenti linki","eklenti_icerigi");
}



function eklenti_icerigi(){
    

    //veri tabanını çekiyor
    $kur = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");
    
    foreach ($kur -> Currency as $cur) {
        if ($cur["Kod"] == "USD") {//abd doları
            $usd1=$cur["Kod"];
            $usd2 = $cur -> Unit;
            $usd3= $cur -> Isim;
            $usd4  = $cur -> ForexBuying;
            $usd5 = $cur -> ForexSelling;
            $usd6= $cur -> BanknoteBuying;
            $usd7= $cur -> BanknoteSelling;
        }
    
        if ($cur["Kod"] == "AUD") {//avustralya
            $aud1=$cur["Kod"];
            $aud2 = $cur -> Unit;
            $aud3= $cur -> Isim;
            $aud4  = $cur -> ForexBuying;
            $aud5 = $cur -> ForexSelling;
            $aud6= $cur -> BanknoteBuying;
            $aud7= $cur -> BanknoteSelling;
        }
    
        if ($cur["Kod"] == "DKK") {//danimarka
            $dkk1=$cur["Kod"];
            $dkk2 = $cur -> Unit;
            $dkk3= $cur -> Isim;
            $dkk4  = $cur -> ForexBuying;
            $dkk5 = $cur -> ForexSelling;
            $dkk6= $cur -> BanknoteBuying;
            $dkk7= $cur -> BanknoteSelling;
        }
    
        if ($cur["Kod"] == "EUR") {//euro
            $eur1=$cur["Kod"];
            $eur2 = $cur -> Unit;
            $eur3= $cur -> Isim;
            $eur4  = $cur -> ForexBuying;
            $eur5 = $cur -> ForexSelling;
            $eur6= $cur -> BanknoteBuying;
            $eur7= $cur -> BanknoteSelling;
        }
    
        if ($cur["Kod"] == "GBP") {//ingiliz
            $gbp1=$cur["Kod"];
            $gbp2 = $cur -> Unit;
            $gbp3= $cur -> Isim;
            $gbp4  = $cur -> ForexBuying;
            $gbp5 = $cur -> ForexSelling;
            $gbp6= $cur -> BanknoteBuying;
            $gbp7= $cur -> BanknoteSelling;
        }
        
        if ($cur["Kod"] == "CHF") {//isviçre
            $chf1=$cur["Kod"];
            $chf2 = $cur -> Unit;
            $chf3= $cur -> Isim;
            $chf4  = $cur -> ForexBuying;
            $chf5 = $cur -> ForexSelling;
            $chf6= $cur -> BanknoteBuying;
            $chf7= $cur -> BanknoteSelling;
        }
        
        if ($cur["Kod"] == "SEK") {//isveç
            $sek1=$cur["Kod"];
            $sek2 = $cur -> Unit;
            $sek3= $cur -> Isim;
            $sek4  = $cur -> ForexBuying;
            $sek5 = $cur -> ForexSelling;
            $sek6= $cur -> BanknoteBuying;
            $sek7= $cur -> BanknoteSelling;
        }
        
        if ($cur["Kod"] == "CAD") {//KANADA 
            $cad1=$cur["Kod"];
            $cad2 = $cur -> Unit;
            $cad3= $cur -> Isim;
            $cad4  = $cur -> ForexBuying;
            $cad5 = $cur -> ForexSelling;
            $cad6= $cur -> BanknoteBuying;
            $cad7= $cur -> BanknoteSelling;
        }
        
        if ($cur["Kod"] == "KWD") {//KUVEYT 
            $kwd1=$cur["Kod"];
            $kwd2 = $cur -> Unit;
            $kwd3= $cur -> Isim;
            $kwd4  = $cur -> ForexBuying;
            $kwd5 = $cur -> ForexSelling;
            $kwd6= $cur -> BanknoteBuying;
            $kwd7= $cur -> BanknoteSelling;
        }
        
        if ($cur["Kod"] == "NOK") {//NORVEÇ
            $nok1=$cur["Kod"];
            $nok2 = $cur -> Unit;
            $nok3= $cur -> Isim;
            $nok4  = $cur -> ForexBuying;
            $nok5 = $cur -> ForexSelling;
            $nok6= $cur -> BanknoteBuying;
            $nok7= $cur -> BanknoteSelling;
        }
        
        if ($cur["Kod"] == "SAR") {//SUUDİ ARABİSTAN 
            $sar1=$cur["Kod"];
            $sar2 = $cur -> Unit;
            $sar3= $cur -> Isim;
            $sar4  = $cur -> ForexBuying;
            $sar5 = $cur -> ForexSelling;
            $sar6= $cur -> BanknoteBuying;
            $sar7= $cur -> BanknoteSelling;
        }
        
        if ($cur["Kod"] == "JPY") {//JAPONYA
            $jpy1=$cur["Kod"];
            $jpy2 = $cur -> Unit;
            $jpy3= $cur -> Isim;
            $jpy4  = $cur -> ForexBuying;
            $jpy5 = $cur -> ForexSelling;
            $jpy6= $cur -> BanknoteBuying;
            $jpy7= $cur -> BanknoteSelling;
        }
        //...
    }
    
    $carpan="";
    $adi="";
    $kurSonuc=0;
    $TRYSonuc=0;
    
    if(isset($_POST["btn_usd"]))
    {
    $carpan=$usd4;
    $adi=$usd3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_aud"]))
    {
    $carpan=$aud4;
    $adi=$aud3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_dkk"]))
    {
    $carpan=$dkk4;
    $adi=$dkk3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_eur"]))
    {
    $carpan=$eur4;
    $adi=$eur3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_gbp"]))
    {
    $carpan=$gbp4;
    $adi=$gbp3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_chf"]))
    {
    $carpan=$chf4;
    $adi=$chf3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_sek"]))
    {
    $carpan=$sek4;
    $adi=$sek3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_cad"]))
    {
    $carpan=$cad4;
    $adi=$cad3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_kwd"]))
    {
    $carpan=$kwd4;
    $adi=$kwd3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_nok"]))
    {
    $carpan=$nok4;
    $adi=$nok3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_sar"]))
    {
    $carpan=$sar4;
    $adi=$sar3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    else if(isset($_POST["btn_jpy"]))
    {
    $carpan=$jpy4;
    $adi=$jpy3;
    $TRYSonuc=$_POST["txt_try"]/$carpan;
    $kurSonuc=$_POST["txt_kur"]*$carpan;
    }
    
    ?>
    <!doctype html>
    <html lang="tr">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anlık Kur</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      </head>
      <body class="bg-dark">
    
    <form action="doviz2.php" method="POST">
    
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">	Döviz Kodu		<br>	Currency Code	  	</th>
          <th scope="col">	Birim			    <br>	Unit				      </th>
          <th scope="col">	Döviz Cinsi		<br>	Currency			     </th>
          <th scope="col">	Döviz Alış		<br>	Forex Buying	  	</th>
          <th scope="col">	Döviz Satış		<br>	Forex Selling		  </th>
          <th scope="col">	Efektif Alış	<br>	Banknote Buying		</th>
          <th scope="col">	Efektif Satış	<br>	Banknote Selling	</th>
          <th scope="col">	Hesapla		    </th>
        </tr>
      </thead>
      <tbody>
    
        <tr><!-- abd dolar -->
          <td>	<?php echo $usd1; ?>	</th>
          <td>	<?php echo $usd2; ?>	</td>
          <td>	<?php echo $usd3; ?>	</td>
          <td>	<?php echo $usd4; ?>	</td>
          <td>	<?php echo $usd5; ?>	</td>
          <td>	<?php echo $usd6; ?>	</td>
          <td>	<?php echo $usd7; ?>	</td>
          <td>	<button type="submit" name="btn_usd" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
        
        <tr><!-- avustralya -->
          <td>	<?php echo $aud1; ?>	</th>
          <td>	<?php echo $aud2; ?>	</td>
          <td>	<?php echo $aud3; ?>	</td>
          <td>	<?php echo $aud4; ?>	</td>
          <td>	<?php echo $aud5; ?>	</td>
          <td>	<?php echo $aud6; ?>	</td>
          <td>	<?php echo $aud7; ?>	</td>
          <td>	<button type="submit" name="btn_aud" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
        
        <tr><!-- danimarka -->
          <td>	<?php echo $dkk1; ?>	</th>
          <td>	<?php echo $dkk2; ?>	</td>
          <td>	<?php echo $dkk3; ?>	</td>
          <td>	<?php echo $dkk4; ?>	</td>
          <td>	<?php echo $dkk5; ?>	</td>
          <td>	<?php echo $dkk6; ?>	</td>
          <td>	<?php echo $dkk7; ?>	</td>
          <td>	<button type="submit" name="btn_dkk" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
        
        <tr><!-- euro -->
          <td>	<?php echo $eur1; ?>	</th>
          <td>	<?php echo $eur2; ?>	</td>
          <td>	<?php echo $eur3; ?>	</td>
          <td>	<?php echo $eur4; ?>	</td>
          <td>	<?php echo $eur5; ?>	</td>
          <td>	<?php echo $eur6; ?>	</td>
          <td>	<?php echo $eur7; ?>	</td>
          <td>	<button type="submit" name="btn_eur" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
        
        <tr><!-- ingiliz -->
          <td>	<?php echo $gbp1; ?>	</th>
          <td>	<?php echo $gbp2; ?>	</td>
          <td>	<?php echo $gbp3; ?>	</td>
          <td>	<?php echo $gbp4; ?>	</td>
          <td>	<?php echo $gbp5; ?>	</td>
          <td>	<?php echo $gbp6; ?>	</td>
          <td>	<?php echo $gbp7; ?>	</td>
          <td>	<button type="submit" name="btn_gbp" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
        
        <tr><!-- isviçre -->
          <td>	<?php echo $chf1; ?>	</th>
          <td>	<?php echo $chf2; ?>	</td>
          <td>	<?php echo $chf3; ?>	</td>
          <td>	<?php echo $chf4; ?>	</td>
          <td>	<?php echo $chf5; ?>	</td>
          <td>	<?php echo $chf6; ?>	</td>
          <td>	<?php echo $chf7; ?>	</td>
          <td>	<button type="submit" name="btn_chf" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
    
        <tr><!-- isveç -->
          <td>	<?php echo $sek1; ?>	</th>
          <td>	<?php echo $sek2; ?>	</td>
          <td>	<?php echo $sek3; ?>	</td>
          <td>	<?php echo $sek4; ?>	</td>
          <td>	<?php echo $sek5; ?>	</td>
          <td>	<?php echo $sek6; ?>	</td>
          <td>	<?php echo $sek7; ?>	</td>
          <td>	<button type="submit" name="btn_sek" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
    
        <tr><!-- kanada -->
          <td>	<?php echo $cad1; ?>	</th>
          <td>	<?php echo $cad2; ?>	</td>
          <td>	<?php echo $cad3; ?>	</td>
          <td>	<?php echo $cad4; ?>	</td>
          <td>	<?php echo $cad5; ?>	</td>
          <td>	<?php echo $cad6; ?>	</td>
          <td>	<?php echo $cad7; ?>	</td>
          <td>	<button type="submit" name="btn_cad" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
        
        <tr><!-- kuveyt -->
          <td>	<?php echo $kwd1; ?>	</th>
          <td>	<?php echo $kwd2; ?>	</td>
          <td>	<?php echo $kwd3; ?>	</td>
          <td>	<?php echo $kwd4; ?>	</td>
          <td>	<?php echo $kwd5; ?>	</td>
          <td>	<?php echo $kwd6; ?>	</td>
          <td>	<?php echo $kwd7; ?>	</td>
          <td>	<button type="submit" name="btn_kwd" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
    
        <tr><!-- norveç -->
          <td>	<?php echo $nok1; ?>	</th>
          <td>	<?php echo $nok2; ?>	</td>
          <td>	<?php echo $nok3; ?>	</td>
          <td>	<?php echo $nok4; ?>	</td>
          <td>	<?php echo $nok5; ?>	</td>
          <td>	<?php echo $nok6; ?>	</td>
          <td>	<?php echo $nok7; ?>	</td>
          <td>	<button type="submit" name="btn_nok" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
        
        <tr><!-- suudi arabistan -->
          <td>	<?php echo $sar1; ?>	</th>
          <td>	<?php echo $sar2; ?>	</td>
          <td>	<?php echo $sar3; ?>	</td>
          <td>	<?php echo $sar4; ?>	</td>
          <td>	<?php echo $sar5; ?>	</td>
          <td>	<?php echo $sar6; ?>	</td>
          <td>	<?php echo $sar7; ?>	</td>
          <td>	<button type="submit" name="btn_sar" class="btn btn-primary">Hesapla</button>	</td>
        </tr>
        
        <tr><!-- japonya -->
          <td>	<?php echo $jpy1; ?>	</th>
          <td>	<?php echo $jpy2; ?>	</td>
          <td>	<?php echo $jpy3; ?>	</td>
          <td>	<?php echo $jpy4; ?>	</td>
          <td>	<?php echo $jpy5; ?>	</td>
          <td>	<?php echo $jpy6; ?>	</td>
          <td>	<?php echo $jpy7; ?>	</td>
          <td>	<button type="submit" name="btn_jpy" class="btn btn-primary"> Hesapla </button>	</td>
        </tr>
        
      </tbody>
    </table>
    
    <!-- hesaplama tablosu -->
    <table class="table table-striped table-dark">
    <tr>
      <td>  TL girin:  </td>
      <td>  <input type="text" placeholder="TRY:" name="txt_try">   </td>
      <td>  <label>   <?php echo  $TRYSonuc." ".$adi; ?>   </label> </td>
    </tr>
    <tr>
      <td>  Kur'u girin:   </td>
      <td>  <input type="text" placeholder="KUR:" name="txt_kur">         </td>
      <td>  <label>   <?php echo  $kurSonuc." TÜRK LİRASI"; ?>   </label> </td>
    </tr>
    </table>
    <!-- hesaplama tablosu -->
    
    </form>
    
    </body>
    </html>





<?php

}

?>
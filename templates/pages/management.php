<div>
<div class="information__header">
  <div class="information__box">
    <div class="information__title">Wspólnicy: </div>
    <div class="information__data"><?php 
    if(!empty($data['odpis']['dane']['dzial1']['wspolnicySpzoo'])){
         $partners = $data['odpis']['dane']['dzial1']['wspolnicySpzoo'];
         foreach($partners as $partner) {
            ?>
            <h3 class="title__partners">Wspólnik:</h3>
            <?php
             $flag=0;
             if(!empty($partner['nazwisko']['nazwiskoICzlon'])){
             $flag++;
             echo "Nawisko: ".$partner['nazwisko']['nazwiskoICzlon'];
             echo "<br/>";
             echo "Imie: ".$partner['imiona']['imie'];
             echo "<br/>";
             echo "Numer Pesel: ".$partner['identyfikator']['pesel'];
             echo "<br/>";
             echo "Posiadane Udziały: ".$partner['posiadaneUdzialy'];
             echo "<div class='break'></div>";
            }
            if(!empty($partner['nazwa'])){
                $flag++;
                echo "Nazwa: ".$partner['nazwa'];
                echo "<br/>";
                echo "Identyfikator: ".$partner['identyfikator']['regon'];
                echo "<br/>";
                echo "Numer KRS: ".$partner['krs']['krs'];
                echo "<br/>";
                echo "Posiadane Udziały: ".$partner['posiadaneUdzialy'];
                echo "<div class='break'></div>";
            }
         }
    } else {
        echo 'Nie sa zarejstrowani inni wspólnicy';

    }
    ?> </div>
  </div>
</div>
</div>
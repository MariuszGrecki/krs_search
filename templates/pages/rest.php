<div class="information__header">
<div class="information__box">
    <div class="information__title">Adres Poczty Elektronicznej:</div>
    <div class="information__data"><?php echo $data['odpis']['dane']['dzial1']['siedzibaIAdres']['adresPocztyElektronicznej']??'Podmiot nie posiada zarejestrowanego adresu poczty elektronicznej'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Adres Strony Internetowej:</div>
    <?php $website = $data['odpis']['dane']['dzial1']['siedzibaIAdres']['adresStronyInternetowej'] ?? null ?>
    <?php if ($website) : ?>
    <div class="information__data"><?php echo "<a target='_blank' href=".$website.">".$website."</a>"?></div>
    <?php else : ?>
    <div class="information__data">Podmiot nie posiada zarejestrownaje strony internetowej</div>
    <?php endif; ?>
  </div>
  <div class="information__box">
    <?php if(!empty($data['odpis']['dane']['dzial3']['przedmiotDzialalnosci']['przedmiotPrzewazajacejDzialalnosci'])){
    echo '<div class="information__title">Przedmiot Przeważający Działalności: </div>';
    echo '<div class="information__data">';
         $mainActivity = $data['odpis']['dane']['dzial3']['przedmiotDzialalnosci']['przedmiotPrzewazajacejDzialalnosci'];
             echo "Opis: ".$mainActivity[0]['opis'];
             echo "<br/>";
             echo "Kod: ".$mainActivity[0]['kodDzial'].".".$mainActivity[0]['kodKlasa'].".".$mainActivity[0]['kodPodklasa'];
             echo "<br/>";
    } 
    if(!empty($data['odpis']['dane']['dzial3']['celDzialaniaOrganizacji'])){
        echo '<div class="information__title">Cel Działania Organizacji: </div>';
        echo '<div class="information__data">';
                $mainActivity = $data['odpis']['dane']['dzial3']['celDzialaniaOrganizacji']['celDzialania'];
                    echo $mainActivity;
           } 
        
    ?>
     </div>
  </div>

  <div class="information__box">
    <div class="information__title">Przedmiot Pozostałej Działalności: </div>
    <div class="information__data"><?php 
    if(!empty($data['odpis']['dane']['dzial3']['przedmiotDzialalnosci']['przedmiotPozostalejDzialalnosci'])){
         $activities = $data['odpis']['dane']['dzial3']['przedmiotDzialalnosci']['przedmiotPozostalejDzialalnosci'];
         foreach($activities as $activity) {
            echo "Opis: ".$activity['opis'];
            echo "<br/>";
            echo "Kod: ".$activity['kodDzial'].".".(!empty($activity['kodKlasa'])?$activity['kodKlasa']:'').".".(!empty($activity['kodPodklasa'])?$activity['kodPodklasa']:'');
            echo "<br/>";
         }
    } else {
        echo 'Podmiot nie posiada zarejestrowanego "przedmiotu pozostałej działalności"';
    }
    ?> </div>
  </div>



</div>
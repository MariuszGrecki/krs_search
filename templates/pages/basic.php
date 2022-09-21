<div class="information__header">
  <div class="information__box">
    <div class="information__title">Numer KRS:</div>
    <div class="information__data"><?php echo $data['odpis']['naglowekA']['numerKRS']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Numer REGON:</div>
    <div class="information__data"><?php echo $data['odpis']['dane']['dzial1']['danePodmiotu']['identyfikatory']['regon']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Numer NIP:</div>
    <div class="information__data"><?php echo $data['odpis']['dane']['dzial1']['danePodmiotu']['identyfikatory']['nip']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Kapital zakładowy:</div>
    <div class="information__data"><?php echo $data['odpis']['dane']['dzial1']['kapital']['wysokoscKapitaluZakladowego']['wartosc']??'Nie udało się pobrać wartości'?> PLN</div>
  </div>
  <div class="information__box">
    <div class="information__title">Status:</div>
    <div class="information__data"><?php if($data['odpis']['naglowekA']['stanPozycji']==1){
                                                echo 'Aktywny';} else {echo 'Nieaktywny';} ?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Forma prawna:</div>
    <div class="information__data"><?php echo $data['odpis']['dane']['dzial1']['danePodmiotu']['formaPrawna']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Adres:</div>
    <div class="information__data"><?php 
                                    echo $data['odpis']['dane']['dzial1']['siedzibaIAdres']['adres']['ulica']??'';
                                    echo  " ".$data['odpis']['dane']['dzial1']['siedzibaIAdres']['adres']['nrDomu']??'';
                                    echo  " ".$data['odpis']['dane']['dzial1']['siedzibaIAdres']['adres']['kodPocztowy']??'';
                                    echo  " ".$data['odpis']['dane']['dzial1']['siedzibaIAdres']['adres']['miejscowosc']??'';?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Województwo:</div>
    <div class="information__data"><?php echo $data['odpis']['dane']['dzial1']['siedzibaIAdres']['siedziba']['wojewodztwo']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Powiat:</div>
    <div class="information__data"><?php echo $data['odpis']['dane']['dzial1']['siedzibaIAdres']['siedziba']['powiat']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Gmina:</div>
    <div class="information__data"><?php echo $data['odpis']['dane']['dzial1']['siedzibaIAdres']['siedziba']['gmina']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Data rejestracji:</div>
    <div class="information__data"><?php echo $data['odpis']['naglowekA']['dataRejestracjiWKRS']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Ostatnia zmiana w KRS:</div>
    <div class="information__data"><?php echo $data['odpis']['naglowekA']['dataOstatniegoWpisu']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Sąd:</div>
    <div class="information__data"><?php echo $data['odpis']['naglowekA']['oznaczenieSaduDokonujacegoOstatniegoWpisu']??'Nie udało się pobrać wartości'?></div>
  </div>
  <div class="information__box">
    <div class="information__title">Sygnatura:</div>
    <div class="information__data"><?php echo $data['odpis']['naglowekA']['sygnaturaAktSprawyDotyczacejOstatniegoWpisu']??'Nie udało się pobrać wartości'?></div>
  </div>
</div>
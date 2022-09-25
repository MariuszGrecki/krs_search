<div class="alert__box">
<?php if ($data['Error']=='Client Does Not Exists') : ?>
<div class="alert alert-danger wrong__krsNumber" role="alert">
Wyszukiwany podmiot nie został znaleziony
</div>
<?php elseif($data['Error']=='Server Error') : ?>
<div class="alert alert-danger wrong_krsType" role="alert">
Wewnętrzny błąd serwera - błąd po stronie serwera KRS
</div>
<?php else : ?>
<div class="alert alert-danger wrong_krsType" role="alert">
Wystąpiły chwilowe problemy, prosimy spróbuj pózniej
</div>
<?php endif; ?>
</div>
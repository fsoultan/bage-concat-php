<div class="container">   
    <form action = "<?=BASEURL;?>/home/submit" method="post" class="row g-3 mt-3">
      <div class="col-auto">
        <label for="labelJumlah" class="visually-hidden">Bilangan</label>
        <input type="text" readonly class="form-control-plaintext" name="labelJumlah" value="Masukkan Bilangan">
      </div>
      <div class="col-auto">
        <label for="inputJumlah" class="visually-hidden">Jumlah</label>
        <input type="number" class="form-control" name="inputJumlah" placeholder="Bilangan">
        <input type="hidden" class="form-control" name="labelPengulangan" value="<?php echo $data['pengulangan']?>">
        <input type="hidden" class="form-control" name="labelHasil" value="<?php echo implode(',',$data['hasil']); ?>">
        <input type="hidden" class="form-control" name="labelBageConcat" value="<?php echo $data['bageConcat']; ?>">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3" <?php if(($data['pengulangan'] < 1) || ($data['bageConcat'] === 5) ){echo 'disabled';}?>>Kirim</button>
      </div>
      <div class="row-auto"></div>
      <div class="col-auto">
        <input type="text" readonly class="form-control-plaintext" name="labelJumlah" value="Sisa Pengulangan : <?php echo $data['pengulangan']; ?>">
      </div>
      <div class="col-auto">
        <input type="text" readonly class="form-control-plaintext" name="labelJumlahBageConcat" value="Jumlah Bage Concat : <?php echo $data['bageConcat']; ?>">
      </div>
    </form>
</div>
<ul class="list-group">
    <?php foreach ($data['hasil'] as $hsl) : ?>
        <li class="list-group-item"><?php echo $hsl;?></li>
    <?php endforeach;?>
</ul>
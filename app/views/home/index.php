<div class="container">   
    <form action = "<?=BASEURL;?>/home/program" method="post" class="row g-3 mt-3">
      <div class="col-auto">
        <label for="labelJumlah" class="visually-hidden">Jumlah</label>
        <input type="text" readonly class="form-control-plaintext" name="labelJumlah" value="Jumlah Pengulangan">
      </div>
      <div class="col-auto">
        <label for="inputJumlah" class="visually-hidden">Jumlah</label>
        <input type="number" min="1" value="1" class="form-control" name="inputJumlah" placeholder="Jumlah">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Kirim</button>
      </div>
    </form>
</div>
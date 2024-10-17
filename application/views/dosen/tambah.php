<div class="container">
    <div class="row mt-5">
        <div class="col-md-5">
        <div class="mt-3">
			<div class="md-8">
				<div class="card">
            <div class="card-header">
             From Tambah Data Dosen
            
            <div class="card-body"> 
                <form action="" method="post">
            </div>
            <div class="form-grub">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip">
                <small class="form-text text-danger"><?= form_error('nip')?></small>
            </div>
            <div class="form-grub">
                <label for="namadosen">NAMA DOSEN</label>
                <input type="text" class="form-control" id="namadosen" name="namadosen">
                <small class="form-text text-danger"><?= form_error('namadosen')?></small>
            </div>
            
            <a href="<?= base_url(); ?>dosen" class="btn btn-secondary">Close</a>
            <button type="submit" name="tambah" class="btn btn-primary float-end">Tambah</button>
            </form>
            </div>
			</div>
        </div>
    </div>
    </form>
</div>
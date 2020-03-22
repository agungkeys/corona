<!-- App Capsule -->
<div id="appCapsule" class='main'>
  <div class="section full mt-1 mb-2">
    <div class="section-title">Form Pelaporan</div>
    <div class="wide-block pb-1 pt-2">
      <form>
        <div class="form-group boxed">
          <div class="input-wrapper">
            <label class="label" for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda">
            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
          </div>
        </div>
        <div class="form-group boxed">
          <div class="input-wrapper">
            <label class="label" for="umur">Umur</label>
            <input type="number" class="form-control" id="umur" placeholder="Masukkan Umur Anda">
            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
          </div>
        </div>
        <div class="form-group boxed">
          <div class="input-wrapper">
            <label class="label" for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" placeholder="Masukkan Pekerjaan Anda">
            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
          </div>
        </div>
        <div class="form-group boxed">
          <div class="input-wrapper">
            <label class="label" for="alamat">Alamat Lengkap</label>
            <textarea id="alamat" rows="2" class="form-control" placeholder="Masukkan Alamat Lengkap Anda"></textarea>
            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
          </div>
        </div>
        <div class="form-group boxed">
          <div class="input-wrapper">
            <label class="label" for="kelurahan">Kelurahan</label>
            <select class="form-control custom-select" id="kelurahan">
              <option value="0">- Pilih Kelurahan -</option>
              <option value="Api-api">Api-api</option>
              <option value="Belimbing">Belimbing</option>
              <option value="Berbas Pantai">Berbas Pantai</option>
              <option value="Berbas Tengah">Berbas Tengah</option>
              <option value="Bontang Baru">Bontang Baru</option>
              <option value="Bontang Kuala">Bontang Kuala</option>
              <option value="Bontang Lestari">Bontang Lestari</option>
              <option value="Guntung">Guntung</option>
              <option value="Gunung Elai">Gunung Elai</option>
              <option value="Kanaan">Kanaan</option>
              <option value="Loktuan">Loktuan</option>
              <option value="Satimpo">Satimpo</option>
              <option value="Tanjung Laut">Tanjung Laut</option>
              <option value="Tanjung Laut Indah">Tanjung Laut Indah</option>
              <option value="Telihan">Telihan</option>
            </select>
          </div>
        </div>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <label class="label" for="hp">Nomor HP.</label>
                <input type="number" class="form-control" id="hp" placeholder="Masukkan Nomor HP. Anda">
                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
            </div>
        </div>
        <div class="form-group boxed">
          <div class="input-wrapper">
            <label class="label" for="sumber">Sumber Laporan</label>
            <select class="form-control custom-select" id="sumber">
              <option value="0">- Pilih Sumber Laporan -</option>
              <option value="Pribadi">Pribadi</option>
              <option value="Instansi">Instansi</option>
              <option value="RT">RT</option>
              <option value="Keluarga">Keluarga</option>
            </select>
          </div>
        </div>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <label class="label" for="bepergian">Apakah anda baru pulang bepergian dalam 14 hari terakhir?</label>
                <div class="pb-1">
                  <div class="custom-control custom-radio mb-1">
                    <input type="radio" id="customRadio1" name="bepergian" class="custom-control-input" value='Ya'>
                    <label class="custom-control-label" for="customRadio1">Ya</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="bepergian" class="custom-control-input" value='Tidak'>
                    <label class="custom-control-label" for="customRadio2">Tidak</label>
                  </div>
              </div>
            </div>
        </div>
        <div id="input-daerah-kunjungan" class="form-group boxed">
            <div class="input-wrapper">
                <label class="label" for="daerahkunjungan">Daerah mana yang anda kunjungi?</label>
                <input type="text" class="form-control" id="daerahkunjungan" placeholder="Masukkan Daerah Kunjungan">
                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
            </div>
        </div>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <label class="label" for="kapankunjungan">Kapan anda melakukan perjalanan keluar daerah/negeri?</label>
                <input type="date" class="form-control" id="kapankunjungan">
                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- * App Capsule -->
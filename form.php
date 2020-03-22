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
                    <input type="radio" id="bepergian1" name="bepergian" class="custom-control-input" value='Ya'>
                    <label class="custom-control-label" for="bepergian1">Ya</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="bepergian2" name="bepergian" class="custom-control-input" value='Tidak'>
                    <label class="custom-control-label" for="bepergian2">Tidak</label>
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
                <input type="date" class="form-control" id="kapankunjungan" style="padding: .5rem;">
            </div>
        </div>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <label class="label" for="kapantiba">Kapan anda tiba di Bontang?</label>
                <input type="date" class="form-control" id="kapantiba" style="padding: .5rem;">
            </div>
        </div>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <label class="label" for="dalamrangka">Dalam rangka apa anda melakukan perjalanan keluar daerah/negeri?</label>
                <div class="pb-2">
                  <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="dalamrangka1" name='dalamrangka' value="Pelatihan / Seminar">
                      <label class="custom-control-label" for="dalamrangka1">Pelatihan / Seminar</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="dalamrangka2" name='dalamrangka' value="Studi Banding">
                      <label class="custom-control-label" for="dalamrangka2">Studi Banding</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="dalamrangka3" name='dalamrangka' value="Traveling">
                      <label class="custom-control-label" for="dalamrangka3">Traveling</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="dalamrangka4" name='dalamrangka' value="Urusan Keluarga">
                      <label class="custom-control-label" for="dalamrangka4">Urusan Keluarga</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="dalamrangka5" name='dalamrangka' value="Sekolah / Kuliah">
                      <label class="custom-control-label" for="dalamrangka5">Sekolah / Kuliah</label>
                  </div>
                </div>
            </div>
        </div>
        <div class="form-group boxed">
          <div class="input-wrapper">
            <label class="label" for="gejala">Apakah anda mengalami gejala dibawah ini?</label>
            <div class="pb-2">
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="gejala1" name='gejala' value="Batuk">
                  <label class="custom-control-label" for="gejala1">Batuk</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="gejala2" name='gejala' value="Demam">
                  <label class="custom-control-label" for="gejala2">Demam</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="gejala3" name='gejala' value="Kesulitan Bernafas">
                  <label class="custom-control-label" for="gejala3">Kesulitan Bernafas</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="gejala4" name='gejala' value="Nyeri Dada">
                  <label class="custom-control-label" for="gejala4">Nyeri Dada</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="gejala5" name='gejala' value="Pilek">
                  <label class="custom-control-label" for="gejala5">Pilek</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group boxed">
          <div class="input-wrapper">
            <label class="label" for="riwayat">Riwayat penyakit yang anda miliki?</label>
            <div class="pb-2">
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="riwayat1" name='riwayat' value="Jantung">
                  <label class="custom-control-label" for="riwayat1">Jantung</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="riwayat2" name='riwayat' value="Hipertensi">
                  <label class="custom-control-label" for="riwayat2">Hipertensi</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="riwayat3" name='riwayat' value="Diabetes">
                  <label class="custom-control-label" for="riwayat3">Diabetes</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="riwayat4" name='riwayat' value="Asma">
                  <label class="custom-control-label" for="riwayat4">Asma</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="riwayat5" name='riwayat' value="Kanker">
                  <label class="custom-control-label" for="riwayat5">Kanker</label>
              </div>
              <div class="custom-control custom-checkbox mb-1">
                  <input type="checkbox" class="custom-control-input" id="riwayat6" name='riwayat' value="TB">
                  <label class="custom-control-label" for="riwayat6">TB</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <label class="label" for="riwayatkontak">Apakah ada riwayat kontak dengan penderita?</label>
                <div class="pb-1">
                  <div class="custom-control custom-radio mb-1">
                    <input type="radio" id="riwayatkontak1" name="riwayatkontak" class="custom-control-input" value='Ya'>
                    <label class="custom-control-label" for="riwayatkontak1">Ya</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="riwayatkontak2" name="riwayatkontak" class="custom-control-input" value='Tidak'>
                    <label class="custom-control-label" for="riwayatkontak2">Tidak</label>
                  </div>
              </div>
            </div>
        </div>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <label class="label" for="merokok">Apakah anda merokok?</label>
                <div class="pb-1">
                  <div class="custom-control custom-radio mb-1">
                    <input type="radio" id="merokok1" name="merokok" class="custom-control-input" value='Ya'>
                    <label class="custom-control-label" for="merokok1">Ya</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="merokok2" name="merokok" class="custom-control-input" value='Tidak'>
                    <label class="custom-control-label" for="merokok2">Tidak</label>
                  </div>
              </div>
            </div>
        </div>
        <div class="form-group boxed">
          <div class="input-wrapper">
            <label class="label" for="alamat">Saran Anda</label>
            <textarea id="saran" rows="2" class="form-control" placeholder="Masukkan Saran Anda"></textarea>
            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
          </div>
        </div>
        <button type="button" onclick="laporSekarang();" class="btn btn-primary btn-lg btn-block mt-2 mb-5">
            Kirim Laporan &nbsp;&nbsp;
            <ion-icon name="send-outline"></ion-icon>
        </button>
      </form>
    </div>
  </div>
</div>
<!-- * App Capsule -->
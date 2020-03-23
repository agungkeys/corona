<!-- App Capsule -->
<div id="appCapsule" class='main'>
  <!-- Location Card -->
  <div class="section wallet-card-section">
    <div class="wallet-card">
      <!-- Balance -->
      <div class="balance">
        <div class="row">
          <div class="col-12">
            <span class="title"><?php echo $greetings; ?>,</span>
            <span>Bagi masyarakat yang baru datang dari luar Kota Bontang dapat melaporkan diri anda melalui klik tombol dibawah ini.</span>
          </div>
        </div>
      </div>
      <!-- * Balance -->
    </div>
  </div>
  <!-- Location Card -->
  <div class="section ">
    <button type="button" onclick="laporSekarang();" class="btn btn-primary btn-lg btn-block mt-2">
        <ion-icon name="document-text-outline"></ion-icon>
        Lapor Sekarang !
    </button>
  </div>

  <div class="row">
    <img src="assets/img/corona.png" alt="image" class="px-5 pt-3" style="width: 100%; height: 100%;" />
  </div>

  <!-- * Stats -->
  <div class="section">
    <div class="row mt-2">
        <div class="col-4">
            <div class="stat-box text-center">
                <div class="title">ODP</div>
                <div class="value text-success">0</div>
            </div>
        </div>
        <div class="col-4">
            <div class="stat-box text-center">
                <div class="title">PDP</div>
                <div class="value text-warning">0</div>
            </div>
        </div>
        <div class="col-4">
            <div class="stat-box text-center">
                <div class="title">Positif</div>
                <div class="value text-danger">0</div>
            </div>
        </div>
    </div>
  </div>
  <!-- * Stats -->

  <div class="section mt-4">
    <div class="section-title">Statistik per/ Kelurahan</div>
    <ul class="listview flush transparent simple-listview no-space">
      <li>
          <span>Gunung Elai</span>
          <span>
            <span class="text-success">0&nbsp;</span>|
            <span class="text-warning">&nbsp;0&nbsp;</span>|
            <span class="text-danger">&nbsp;0</span>
          </span>
      </li>
      <li>
          <span>Api-api</span>
          <span>
            <span class="text-success">0&nbsp;</span>|
            <span class="text-warning">&nbsp;0&nbsp;</span>|
            <span class="text-danger">&nbsp;0</span>
          </span>
      </li>
      <li>
          <span>Loktuan</span>
          <span>
            <span class="text-success">0&nbsp;</span>|
            <span class="text-warning">&nbsp;0&nbsp;</span>|
            <span class="text-danger">&nbsp;0</span>
          </span>
      </li>
      <li>
          <span>Satimpo</span>
          <span>
            <span class="text-success">0&nbsp;</span>|
            <span class="text-warning">&nbsp;0&nbsp;</span>|
            <span class="text-danger">&nbsp;0</span>
          </span>
      </li>
    </ul>
  </div>

  <div class="section mt-1 mb-5">
    <ul class="pb-5">
      <li class="text-success"><span class="text-dark sm">ODP : Orang Dalam Pemantauan</span></li>
      <li class="text-warning"><span class="text-dark sm">PDP : Pasien Dalam Pengawasan</span></li>
      <li class="text-danger"><span class="text-dark sm">Positif : Kasus Terkonfirmasi COVID-19</span></li>
    </ul>
  </div>
</div>
<!-- * App Capsule -->
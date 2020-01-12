<div class="header">
  <div class="header-bg">
    <img src="<?=IMG_PATH?>/header/header_bg.png" alt="UP map header background">
  </div>
  <div class="header-content">
    <div class="logo">
      <img src="<?=IMG_PATH?>/logo.png" alt="UP map logo">
      <div class="logo-text">
        <div>
          <div>ระบบแผนที่ภาพถ่ายดาวเทียม</div>
          <div>บริเวณมหาวิทยาลัยพะเยา</div>
        </div>
      </div>
    </div>
    <div class="map-options">
      <div class="d-flex w-100">
      <div class="map-options-select-wrapper">
          <div class="map-options-select-icon">
            <img class="img-fluid" src="<?=IMG_PATH?>/header/icon_mapmarker.png" alt="">
          </div>
          <div class="map-options-select-display" >
            <div class="d-flex align-items-center h-100">
              <div>Google Hybride</div>
            </div>
          </div>
          <div class="map-options-select-arrow">
            <img src="<?=IMG_PATH?>/header/drop_down_arrow.png" alt="">
          </div>
        </div>
        <div class="map-options-select-wrapper">
          <div class="map-options-select-icon">
            <img class="img-fluid" src="<?=IMG_PATH?>/header/icon_flag.png" alt="">
          </div>
          <div class="map-options-select-display" >
            <div class="d-flex align-items-center h-100">
                <div>ต้นไม้</div>
              </div>
            </div>
          <div class="map-options-select-arrow">
            <img src="<?=IMG_PATH?>/header/drop_down_arrow.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>

  </div>
</div>

<style>
  .header {
    position: relative;
    height: 90px;
    overflow: hidden;
    border-radius: 10px;
    padding: 15px 15px;
  }
  .header-bg {
    position: absolute;
    left:0px;
    top:0px;
    z-index: 0;
    width: 100%;
    height: 100%;
  }
  .header-bg > img {
    width: 100%;
    height: calc(100% + 200px);
    transform: translate(0, -4.5%);
  }
  .header-content {
    display: flex;
    position: relative;
    z-index: 1;
    height: 100%;
  }
  .logo {
    display: flex;
    height: 100%;
    width: 21%;
    min-width: 200px;
  }
  .logo > img {
    height: 100%;
    width: auto;
  }
  .logo-text {
    display: flex;
    align-items: center;
    margin-left: 10px;
    margin-right: -25px;
  }
  .map-options {
    display: flex;
    align-items: center;
    position: relative;
    left: 30px;
    z-index: 1;
    height: 100%;
    width: 38%;
  }
  .map-options-select-wrapper {
    position: relative;
    flex: 1;
  }
  .map-options-select {
    visibility: hidden;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
  }
  .map-options-select-display {
    background: #fff;
    border: none;
    border-radius: 25px;
    padding: 5px 40px;
    padding-left: 50px;
    margin: 0 5px;
    height: 100%;
  }
  .map-options-select-icon {
    position: absolute;
    left: 23px;
    top: calc(50% - 2px);
    transform: translateY(-50%);
    width: 20px;
  }
  .map-options-select-arrow {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
  }
  @media screen and (max-width: 1024px) {
    .logo {
      width: calc(20% - 15px);
      justify-content: center;
      min-width: 0;
    }
    .logo-text {
      display: none;
    }
  }
</style>
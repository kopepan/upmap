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
    position: relative;
    z-index: 1;
    height: 100%;
  }
  .logo {
    display: flex;
    height: 100%;
    width: 20%;
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
  }
</style>
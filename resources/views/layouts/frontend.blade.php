<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร เขต 4 (นครราชสีมา)</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Thai:wght@500;600;700&family=Noto+Sans+Thai:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
:root{
  --navy:#0D2644;--navy2:#163557;
  --gold:#C8961E;--gold-lt:#E8CA7A;--gold-bg:#FBF6E9;
  --cream:#F5F2EB;--white:#FFFFFF;
  --ink:#1E2430;--muted:#5A6374;--line:#DDD8CC;
  --blue-tint:#EEF4FA;
}
*{box-sizing:border-box;margin:0;padding:0;}
html{scroll-behavior:smooth;}
body{font-family:'Noto Sans Thai',sans-serif;background:var(--cream);color:var(--ink);line-height:1.65;font-size:14px;}
a{color:inherit;text-decoration:none;}
h1,h2,h3,h4{font-family:'Noto Serif Thai',serif;}

/* SPLASH */
#splash{position:fixed;inset:0;z-index:9999;background:linear-gradient(160deg,var(--navy) 0%,#0a1c33 45%,#1a3a5c 100%);display:flex;flex-direction:column;align-items:center;justify-content:center;color:#fff;text-align:center;padding:24px;transition:opacity .7s ease,visibility .7s ease;}
#splash.hidden{opacity:0;visibility:hidden;}
.splash-seal{width:96px;height:96px;border-radius:50%;background:radial-gradient(circle at 38% 32%,#FBEFC8,var(--gold) 58%,#7a5c10 100%);display:flex;align-items:center;justify-content:center;box-shadow:0 0 0 6px rgba(200,150,30,.25),0 8px 32px rgba(0,0,0,.45);margin-bottom:20px;}
.splash-seal span{font-size:1.9rem;font-weight:700;color:#2d1e04;font-family:'Noto Serif Thai',serif;}
.splash h1{font-size:1.55rem;line-height:1.4;max-width:540px;color:#fff;}
.splash p{color:#b8c8dc;font-size:.88rem;margin-top:8px;}
.splash-enter{margin-top:28px;background:var(--gold);color:#1a0e00;border:none;padding:13px 36px;border-radius:30px;font-family:'Noto Sans Thai',sans-serif;font-size:1rem;font-weight:700;cursor:pointer;box-shadow:0 6px 20px rgba(200,150,30,.4);transition:transform .15s;}
.splash-enter:hover{transform:translateY(-2px);}
.splash-sub{color:#8ea5be;font-size:.75rem;margin-top:10px;}

/* TOPBAR */
.topbar{background:var(--navy);color:#b0bfcf;font-size:.75rem;}
.topbar-inner{max-width:1200px;margin:0 auto;padding:5px 20px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:6px;}
.topbar-links{display:flex;gap:14px;}
.topbar-links a:hover{color:var(--gold-lt);}
.topbar-links a::before{content:"· ";opacity:.4;}
.topbar-right { display: flex; align-items: center; gap: 16px; flex-wrap: wrap; }
.topbar-tools { display: flex; align-items: center; gap: 6px; background: rgba(0,0,0,0.15); padding: 3px 8px; border-radius: 4px; }
.font-btn { background: none; border: 1px solid rgba(255,255,255,0.3); color: #fff; border-radius: 3px; padding: 2px 7px; font-size: .75rem; cursor: pointer; transition: 0.2s; font-family: inherit;}
.font-btn:hover { background: var(--gold); border-color: var(--gold); }

/* HEADER */
.site-header {
  width: 100%;
  background: 
    linear-gradient(180deg, rgba(13, 38, 68, 0.4) 0%, rgba(13, 38, 68, 0.9) 100%),
    url('{{ asset("images/orange2.jpg") }}') center/cover no-repeat; /* แก้ Path รูป */
  color: #fff;
  border-bottom: 3px solid var(--gold);
  aspect-ratio: 21 / 9;
  min-height: 250px;
  max-height: 400px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.header-inner { width: 100%; max-width: 1200px; margin: 0 auto; padding: 18px 20px; display: flex; align-items: flex-start; gap: 16px; }
.h-seal { width: 75px; height: 75px; flex: none; display: flex; align-items: center; justify-content: center; border-radius: 50%; overflow: hidden; border: 2px solid var(--gold-lt); }
.h-seal img { width: 100%; height: 100%; object-fit: cover; }
.h-text .eyebrow{font-size:.7rem;color:var(--gold-lt);font-weight:600;letter-spacing:.06em;}
.h-text h1{font-size:1.4rem;font-weight:700;line-height:1.3;margin-top:2px;}
.h-text .en{font-size:.78rem;color:#bfcedd;margin-top:2px;}
.h-date { margin-left: auto; text-align: right; flex: none; }
.h-date span { font-size: .95rem; color: #ffffff; }
.h-date strong { display: block; font-size: 1.25rem; color: #fff; font-family: 'Noto Serif Thai', serif; margin-top: 2px; }
.vision-bar { background: rgba(0, 0, 0, 0.4); border-top: 1px solid rgba(255, 255, 255, 0.15); width: 100%; margin-top: auto; display: flex; align-items: center; justify-content: center; min-height: 44px; }
.vision-bar p { max-width: 1200px; margin: 0; padding: 8px 20px; font-size: .85rem; color: #fff; font-style: italic; text-align: center; line-height: 1.4; }

/* TICKER */
.ticker-wrap{background:var(--gold);overflow:hidden;white-space:nowrap;display:flex;border-bottom:2px solid #a87c18;}
.ticker-label{background:var(--navy);color:var(--gold-lt);font-weight:700;font-size:.72rem;padding:7px 14px;flex:none;letter-spacing:.05em;}
.ticker-track{overflow:hidden;flex:1;}
.ticker-content{display:inline-block;padding:7px 0;font-size:.78rem;font-weight:600;color:var(--navy);animation:ticker 42s linear infinite;}
@keyframes ticker{0%{transform:translateX(0);}100%{transform:translateX(-50%);}}

/* MEGA MENU NAV */
nav.main-nav{background:var(--white);border-bottom:1px solid var(--line);position:sticky;top:0;z-index:100;box-shadow:0 2px 12px rgba(13,38,68,.08);}
.nav-wrap{max-width:1200px;margin:0 auto;display:flex;align-items:stretch;padding:0 20px;gap:0;}
.nav-item{position:relative;}
.nav-btn{background:none;border:none;cursor:pointer;font-family:'Noto Sans Thai',sans-serif;font-size:.88rem;font-weight:600;color:var(--navy);padding:13px 14px;display:flex;align-items:center;gap:4px;white-space:nowrap;border-bottom:3px solid transparent;transition:color .15s,border-color .15s;}
.nav-btn:after{content:"▾";font-size:.6rem;opacity:.5;}
.nav-btn:hover,.nav-item.open .nav-btn{color:var(--gold);border-bottom-color:var(--gold);}
.nav-item.has-mega { position: relative; }
.mega-menu-box { display: none; position: absolute; top: 100%; left: 0; background: #ffffff; box-shadow: 0 6px 15px rgba(0,0,0,0.15); width: fit-content; z-index: 999; border-radius: 0 0 8px 8px; overflow: hidden; }
.nav-item.has-mega:hover .mega-menu-box { display: flex; }
.mega-tab-list { list-style: none; margin: 0; padding: 0; width: 220px; background: #ffffff; border-right: 1px solid #e0e0e0; flex-shrink: 0; }
.mega-tab-list li { padding: 12px 20px; font-size: 0.85rem; font-weight: 600; color: #555; cursor: pointer; border-top: 2px solid transparent; border-bottom: 1px solid #f0f0f0; transition: 0.2s; }
.mega-tab-list li:hover { color: var(--gold); }
.mega-tab-list li.active { color: var(--gold); border-top: 2px solid var(--gold); background: #fdfcf8; }
.mega-content-box { display: none; padding: 20px 25px; min-width: 380px; background: #fff; max-width: 420px; }
.mega-menu-box.show-content .mega-content-box { display: block; }
.mega-pane { display: none; flex-direction: column; gap: 12px; }
.mega-pane.active { display: flex; }
.mega-pane a { color: #444; text-decoration: none; font-size: 0.85rem; line-height: 1.6 !important; white-space: normal !important; word-wrap: break-word; transition: color 0.2s; display: block; }
.mega-pane a:hover { color: var(--gold); }
.mnew { display: inline-block; color: #2e7d32; background-color: #e8f5e9; border: 1px solid #c8e6c9; font-size: 0.65rem; font-weight: bold; padding: 2px 6px; border-radius: 12px; margin-left: 6px; vertical-align: middle; }
.nav-item:nth-child(6) .mega-menu-box, .nav-item:nth-child(7) .mega-menu-box { left: auto; right: 0; }
.nav-right{margin-left:auto;display:flex;align-items:center;}
.search-box{display:flex;align-items:center;gap:5px;background:var(--blue-tint);border:1px solid #c8d8e8;border-radius:18px;padding:5px 12px;}
.search-box input{border:none;background:none;outline:none;font-family:inherit;font-size:.8rem;width:150px;color:var(--ink);}

/* GENERAL CLASSES สำหรับใช้ในหน้าเนื้อหา */
.outer{max-width:1200px;margin:0 auto;padding:24px 20px 0;}

/* COOKIE & FOOTER */
footer{background:var(--navy);color:#b8c8d8;margin-top:32px;}
.footer-grid{max-width:1200px;margin:0 auto;padding:32px 20px 18px;display:grid;grid-template-columns:1.5fr 1fr 1fr 1fr;gap:26px;}
footer h4{color:#fff;margin-bottom:11px;font-size:.88rem;font-family:'Noto Serif Thai',serif;}
footer p{font-size:.75rem;color:#8ba0b5;margin-bottom:5px;line-height:1.6;}
.fl a{display:block;font-size:.75rem;color:#8ba0b5;padding:4px 0;border-bottom:1px solid rgba(255,255,255,.06);}
.fl a:last-child{border-bottom:none;}
.fl a:hover{color:var(--gold-lt);}
.footer-bar{border-top:1px solid rgba(255,255,255,.08);text-align:center;padding:13px 20px;font-size:.72rem;color:#627a90;}
.footer-bar b{color:var(--gold-lt);}

.cookie-banner{position:fixed;bottom:14px;right:14px;background:var(--white);border:1px solid var(--line);border-radius:10px;padding:13px 15px;max-width:270px;box-shadow:0 8px 24px rgba(0,0,0,.12);z-index:800;font-size:.76rem;color:var(--muted);}
.cookie-banner p{margin-bottom:9px;line-height:1.5;}
.cookie-banner .btns{display:flex;gap:7px;}
.cookie-banner .btns button{flex:1;padding:7px;border-radius:7px;border:none;cursor:pointer;font-family:inherit;font-size:.76rem;font-weight:700;}
.cookie-banner .btns .accept{background:var(--navy);color:#fff;}
.cookie-banner .btns .more-btn{background:var(--blue-tint);color:var(--navy);}
.cookie-banner.hidden{display:none;}
</style>

@yield('styles')

</head>
<body>

<div class="topbar">
  <div class="topbar-inner">
    <span>กระทรวงมหาดไทย | สำนักงานปลัดกระทรวงมหาดไทย</span>
    <div class="topbar-right">
      <div class="topbar-tools">
        <button class="font-btn" onclick="changeFontSize(-1)" title="ลดขนาดตัวอักษร">A-</button>
        <button class="font-btn" onclick="changeFontSize(0)" title="ขนาดตัวอักษรปกติ">A</button>
        <button class="font-btn" onclick="changeFontSize(1)" title="เพิ่มขนาดตัวอักษร">A+</button>
      </div>
      <div class="topbar-links">
        <a href="#">ศสส.สป.</a><a href="#">Intranet</a><a href="#">E-Office</a><a href="#">Mail moi.go.th</a><a href="#">ติดต่อเรา</a>
      </div>
    </div>
  </div>
</div>

<header class="site-header">
  <div class="header-inner">
    <div class="h-seal">
      <img src="{{ asset('images/singh.webp') }}" alt="โลโก้กระทรวงมหาดไทย"> 
    </div>
    <div class="h-text">
      <div class="eyebrow">กระทรวงมหาดไทย · สำนักงานปลัดกระทรวงมหาดไทย</div>
      <h1>ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร เขต 4 (นครราชสีมา)</h1>
      <div class="en">Information and Communication Technology Center Region 4 (Nakhon Ratchasima)</div>
    </div>
    <div class="h-date" id="realtime-date"></div>
  </div>
  <div class="vision-bar">
    <p>"มุ่งสู่การเป็นองค์กรอัจฉริยะด้วยระบบบริหารจัดการเทคโนโลยีสารสนเทศและการสื่อสารที่เป็นสากลและธรรมาภิบาลเพื่อบูรณาการการบริหารจัดการของกระทรวงมหาดไทยและจังหวัด"</p>
  </div>
</header>

<div class="ticker-wrap">
  <span class="ticker-label">ข่าวด่วน</span>
  <div class="ticker-track">
    <span class="ticker-content">จังหวัดนครราชสีมา "เมืองหญิงกล้า ผ้าไหมดี หมี่โคราช ปราสาทหิน ดินด่านเกวียน" &nbsp;•&nbsp; Download Jabber for PC [ใหม่] &nbsp;•&nbsp; ESET Endpoint Antivirus V.8 [ใหม่] &nbsp;•&nbsp; แผนปฏิบัติการดิจิทัลศูนย์ฯ สป. ปีงบประมาณ 2566 [ใหม่] &nbsp;•&nbsp;</span>
  </div>
</div>

<nav class="main-nav">
  <div class="nav-wrap">

    <div class="nav-item has-mega" onmouseleave="resetMegaMenu(this)">
      <a href="javascript:void(0);" class="nav-btn">เกี่ยวกับหน่วยงาน ▾</a>
      <div class="mega-menu-box">
        <ul class="mega-tab-list">
          <li onclick="openMegaTab(event, 'about-1')">ข้อมูลทั่วไป</li>
          <li onclick="openMegaTab(event, 'about-2')">โครงสร้างและบุคลากร</li>
        </ul>
        <div class="mega-content-box">
          <div id="about-1" class="mega-pane">
            <a href="#">> ประวัติความเป็นมา และสถานที่ตั้ง</a>
            <a href="#">> อำนาจและหน้าที่ของ ศสข.</a>
          </div>
          <div id="about-2" class="mega-pane">
            <a href="#">> ทำเนียบผู้บริหาร ศสข.4 (นม)</a>
            <a href="#">> แนะนำบุคลากรปัจจุบัน</a>
          </div>
        </div>
      </div>
    </div>

    <div class="nav-right">
      <div class="search-box">
        <span aria-hidden="true">🔍</span>
        <input type="text" placeholder="ค้นหาข่าว / เอกสาร...">
      </div>
    </div>
  </div>
</nav>

<div class="outer">
    @yield('content')
</div>

<footer>
  <div class="footer-grid">
    <div>
      <h4>ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร เขต 4 (นครราชสีมา)</h4>
      <p>ถ.กำแหงสงคราม ต.ในเมือง อ.เมืองนครราชสีมา จ.นครราชสีมา 30000</p>
      <p>โทร. (มท) 36443 | (TOT) 0-4424-2995</p>
      <p>อีเมล: zonel4@moi.go.th</p>
    </div>
    <div>
      <h4>ระบบงานออนไลน์</h4>
      <div class="fl">
        <a href="#">E-Office ศสข.4</a>
        <a href="#">สารบรรณอิเล็กทรอนิกส์</a>
      </div>
    </div>
    <div>
      <h4>หน่วยงานเครือข่าย</h4>
      <div class="fl">
        <a href="#">ศสข.1 (อย) — ศสข.4 (นม)</a>
        <a href="#">ศสข.5 (อด) — ศสข.8 (พล)</a>
      </div>
    </div>
    <div>
      <h4>เกี่ยวกับเว็บไซต์</h4>
      <div class="fl">
        <a href="#">นโยบายเว็บไซต์ (Website Policy)</a>
        <a href="#">แผนผังเว็บไซต์ (Sitemap)</a>
      </div>
    </div>
  </div>
  <div class="footer-bar">© 2569 ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร เขต 4 (นครราชสีมา) — ออกแบบและพัฒนาโดยทีมงาน <b>ศสข.4 (นม)</b></div>
</footer>

<div class="cookie-banner" id="cookie">
  <p>เว็บไซต์นี้มีการใช้งานคุกกี้เพื่อให้ท่านสามารถใช้บริการได้อย่างต่อเนื่อง และช่วยให้เราปรับปรุงการนำเสนอเนื้อหาตามความต้องการของท่าน</p>
  <div class="btns">
    <button class="more-btn" onclick="document.getElementById('cookie').classList.add('hidden')">เพิ่มเติม</button>
    <button class="accept" onclick="document.getElementById('cookie').classList.add('hidden')">ยอมรับทั้งหมด</button>
  </div>
</div>

<script>
  // Script ปรับขนาดตัวอักษร
  let currentZoom = 1;
  function changeFontSize(step) {
    if (step === 0) { currentZoom = 1; } 
    else { currentZoom += (step * 0.1); }
    if (currentZoom < 0.8) currentZoom = 0.8;
    if (currentZoom > 1.4) currentZoom = 1.4;
    document.documentElement.style.fontSize = (currentZoom * 100) + "%";
  }

  // Script นาฬิกา Real-time
  function updateClock() {
    const now = new Date();
    const thaiDays = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];
    const thaiMonths = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
    const day = thaiDays[now.getDay()];
    const date = now.getDate();
    const month = thaiMonths[now.getMonth()];
    const year = now.getFullYear() + 543;
    const time = now.toLocaleTimeString('th-TH');
    
    const dateContainer = document.getElementById('realtime-date');
    if (dateContainer) {
      dateContainer.innerHTML = '<span>วัน' + day + 'ที่ ' + date + ' ' + month + ' พ.ศ. ' + year + '</span><strong>' + time + '</strong>';
    }
  }
  setInterval(updateClock, 1000);
  updateClock();

  // Script Mega Menu
  function openMegaTab(evt, tabId) {
    evt.preventDefault();
    let megaBox = evt.currentTarget.closest('.mega-menu-box');
    megaBox.classList.add('show-content');
    let panes = megaBox.querySelectorAll('.mega-pane');
    panes.forEach(pane => pane.classList.remove('active'));
    let tabs = megaBox.querySelectorAll('.mega-tab-list li');
    tabs.forEach(tab => tab.classList.remove('active'));
    document.getElementById(tabId).classList.add('active');
    evt.currentTarget.classList.add('active');
  }
  function resetMegaMenu(navItem) {
    let megaBox = navItem.querySelector('.mega-menu-box');
    if(megaBox) {
      megaBox.classList.remove('show-content');
      let panes = megaBox.querySelectorAll('.mega-pane');
      panes.forEach(pane => pane.classList.remove('active'));
      let tabs = megaBox.querySelectorAll('.mega-tab-list li');
      tabs.forEach(tab => tab.classList.remove('active'));
    }
  }
</script>

@yield('scripts')

</body>
</html>
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
  background: linear-gradient(180deg, rgba(13, 38, 68, 0.4) 0%, rgba(13, 38, 68, 0.9) 100%), url('{{ asset("images/orange2.jpg") }}') center/cover no-repeat;
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
.mega-content-box { display: none; padding: 20px 25px; min-width: 380px; max-width: 420px; background: #fff; }
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

/* GENERAL CLASSES สำหรับหน้าเนื้อหา */
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
    <span class="ticker-content">จังหวัดนครราชสีมา "เมืองหญิงกล้า ผ้าไหมดี หมี่โคราช ปราสาทหิน ดินด่านเกวียน" &nbsp;•&nbsp; Download Jabber for PC [ใหม่] &nbsp;•&nbsp; ESET Endpoint Antivirus V.8 [ใหม่] &nbsp;•&nbsp; แผนปฏิบัติการดิจิทัลศูนย์ฯ สป. ปีงบประมาณ 2566 [ใหม่] &nbsp;•&nbsp; ระเบียบการเข้าอยู่บ้านพักของราชการ [ใหม่] &nbsp;•&nbsp; คำสั่ง ศสข.4 (นม) เรื่องการแบ่งงานและมอบหมายหน้าที่ [ใหม่] &nbsp;•&nbsp;</span>
  </div>
</div>

<nav class="main-nav">
  <div class="nav-wrap">

    <!-- 1. เกี่ยวกับหน่วยงาน -->
    <div class="nav-item has-mega" onmouseleave="resetMegaMenu(this)">
      <a href="javascript:void(0);" class="nav-btn" onclick="toggleMainLock(event, this)">เกี่ยวกับหน่วยงาน ▾</a>
      <div class="mega-menu-box">
        <ul class="mega-tab-list">
          <li onclick="openMegaTab(event, 'about-1')">ข้อมูลทั่วไป</li>
          <li onclick="openMegaTab(event, 'about-2')">โครงสร้างและบุคลากร</li>
        </ul>
        <div class="mega-content-box">
          <div id="about-1" class="mega-pane">
            <a href="#">> ประวัติความเป็นมา และสถานที่ตั้ง</a>
            <a href="#">> อำนาจและหน้าที่ของ ศสข.</a>
            <a href="#">> ลักษณะภารกิจของ ศสข.</a>
          </div>
          <div id="about-2" class="mega-pane">
            <a href="#">> ทำเนียบผู้บริหาร ศสข.4 (นม)</a>
            <a href="#">> แนะนำบุคลากรปัจจุบัน</a>
            <a href="#">> การฝึกอบรม/ดูงานของบุคลากร</a>
            <a href="#">> หมายเลขโทรศัพท์และอีเมลของข้าราชการ</a>
          </div>
        </div>
      </div>
    </div>

    <!-- 2. ข้อมูลและรายงาน -->
    <div class="nav-item has-mega" onmouseleave="resetMegaMenu(this)">
      <a href="javascript:void(0);" class="nav-btn" onclick="toggleMainLock(event, this)">ข้อมูลและรายงาน ▾</a>
      <div class="mega-menu-box">
        <ul class="mega-tab-list">
          <li onclick="openMegaTab(event, 'report-1')">ข้อมูลทั่วไป</li>
          <li onclick="openMegaTab(event, 'report-2')">สรุปผลการดำเนินงาน</li>
          <li onclick="openMegaTab(event, 'report-3')">E – Reports</li>
          <li onclick="openMegaTab(event, 'report-4')">แผนปฏิบัติการ ศสส.สป.</li>
        </ul>
        <div class="mega-content-box">
          <div id="report-1" class="mega-pane">
            <a href="#">> ทะเบียนคุมทรัพย์สินประจำปีงบประมาณ 2567</a>
            <a href="#">> รายการตรวจสอบครุภัณฑ์ประจำปีงบประมาณ 2567</a>
            <a href="#">> เวรรักษาการณ์ฯ ประจำเดือน</a>
            <a href="#">> คำสั่งตรวจเวรสถานที่ราชการ</a>
          </div>
          <div id="report-2" class="mega-pane">
            <a href="#">> การจัดทำรายงานประจำปี 2567</a>
            <a href="#">> การจัดทำรายงานประจำปี 2565</a>
            <a href="#">> การจัดทำรายงานประจำปี 2564</a>
            <a href="#">> การจัดทำรายงานประจำปี 2563</a>
          </div>
          <div id="report-3" class="mega-pane">
            <a href="#">> การปฏิบัติงานรายไตรมาส (รต.1-8)</a>
            <a href="#">> การประชุมผ่านระบบวีดิทัศน์ทางไกล (VCS)</a>
            <a href="#">> การปฏิบัติงานระบบสื่อสารผ่านดาวเทียม (FTDMA)</a>
            <a href="#">> การรับ-ส่งข่าว</a>
            <a href="#">> สถิติการใช้กระแสไฟฟ้า</a>
          </div>
          <div id="report-4" class="mega-pane">
            <a href="#">> แผนปฏิบัติการดิจิทัลศูนย์ฯ สป. ปีงบประมาณ 2566 <span class="mnew">ใหม่</span></a>
          </div>
        </div>
      </div>
    </div>

    <!-- 3. ข้อมูลด้านช่าง -->
    <div class="nav-item has-mega" onmouseleave="resetMegaMenu(this)">
      <a href="javascript:void(0);" class="nav-btn" onclick="toggleMainLock(event, this)">ข้อมูลด้านช่าง ▾</a>
      <div class="mega-menu-box">
        <ul class="mega-tab-list">
          <li onclick="openMegaTab(event, 'tech-1')">บริการเครือข่าย</li>
          <li onclick="openMegaTab(event, 'tech-2')">ข้อมูลโทรศัพท์</li>
        </ul>
        <div class="mega-content-box">
          <div id="tech-1" class="mega-pane">
            <a href="#">> วงจรเช่าทางไกลในข่าย ศสข.4 (นม)</a>
            <a href="#">> ผู้ขอใช้บริการเครือข่าย Online</a>
            <a href="#">> ข้อมูลระบบสื่อสารข้อมูล และ ระบบ ATM</a>
          </div>
          <div id="tech-2" class="mega-pane">
            <a href="#">> โทรศัพท์ มท.ในโคราชติดตั้งที่ใดบ้าง?</a>
            <a href="#">> จำนวนเลขหมายโทรศัพท์ในเขตรับผิดชอบ</a>
            <a href="#">> Access Code เครือข่ายโทรศัพท์ มท.</a>
          </div>
        </div>
      </div>
    </div>

    <!-- 4. คำสั่ง / ระเบียบ -->
    <div class="nav-item has-mega" onmouseleave="resetMegaMenu(this)">
      <a href="javascript:void(0);" class="nav-btn" onclick="toggleMainLock(event, this)">คำสั่ง / ระเบียบ ▾</a>
      <div class="mega-menu-box">
        <ul class="mega-tab-list">
          <li onclick="openMegaTab(event, 'rule-1')">คำสั่ง</li>
          <li onclick="openMegaTab(event, 'rule-2')">แบบฟอร์ม</li>
          <li onclick="openMegaTab(event, 'rule-3')">ระเบียบ / ข้อบังคับ</li>
        </ul>
        <div class="mega-content-box">
          <div id="rule-1" class="mega-pane">
            <a href="#">> คำสั่ง ศสข.4 (นม) เรื่องการแบ่งงานและมอบหมายหน้าที่ <span class="mnew">ใหม่</span></a>
            <a href="#">> คำสั่ง สป.มท. เรื่องการมอบอำนาจเกี่ยวกับการบริหารงานพัสดุ <span class="mnew">ใหม่</span></a>
            <a href="#">> คำสั่ง ศสข.4 (นม) เรื่องแต่งตั้งคณะกรรมการบ้านพัก <span class="mnew">ใหม่</span></a>
            <a href="#">> คำสั่ง สป.มท. เรื่องแต่งตั้งคณะกรรมการประเมินผลการทดลองปฏิบัติหน้าที่</a>
            <a href="#">> คำสั่ง สป.มท.ที่ 156/2542 มอบอำนาจอนุมัติเดินทางราชการในราชอาณาจักร</a>
          </div>
          <div id="rule-2" class="mega-pane">
            <a href="#">> แบบฟอร์มสมุดลงเวลาการปฏิบัติราชการของ ศสข.4 (นม)</a>
            <a href="#">> แบบฟอร์มสมุดบันทึกการรับ-ส่งเวร ของ ศสข.4 (นม)</a>
            <a href="#">> แบบฟอร์มแบบรายงานการปฏิบัติหน้าที่ รปภ. ของ ศสข.4 (นม)</a>
          </div>
          <div id="rule-3" class="mega-pane">
            <a href="#">> หลักเกณฑ์การใช้รถยนต์สื่อสารดาวเทียม</a>
            <a href="#">> ระเบียบกระทรวงการคลังว่าด้วยเงินทดรองราชการ 2547</a>
            <a href="#">> ระเบียบการเข้าอยู่บ้านพักของราชการ <span class="mnew">ใหม่</span></a>
            <a href="#">> ข้อบังคับเงินออมสวัสดิการของ ศสข.4 (นม)</a>
          </div>
        </div>
      </div>
    </div>

    <!-- 5. คู่มือ / ดาวน์โหลด -->
    <div class="nav-item has-mega" onmouseleave="resetMegaMenu(this)">
      <a href="javascript:void(0);" class="nav-btn" onclick="toggleMainLock(event, this)">คู่มือ / ดาวน์โหลด ▾</a>
      <div class="mega-menu-box">
        <ul class="mega-tab-list">
          <li onclick="openMegaTab(event, 'doc-1')">คู่มือปฏิบัติงาน</li>
          <li onclick="openMegaTab(event, 'doc-2')">Jabber / Webex</li>
          <li onclick="openMegaTab(event, 'doc-3')">ระบบต่างๆ และดาวน์โหลด</li>
        </ul>
        <div class="mega-content-box">
          <div id="doc-1" class="mega-pane">
            <a href="#">> กฎหมายความปลอดภัยเกี่ยวกับการสื่อสาร <span class="mnew">ใหม่</span></a>
            <a href="#">> Technology Transfer Configuration <span class="mnew">ใหม่</span></a>
            <a href="#">> MOI Network Management <span class="mnew">ใหม่</span></a>
            <a href="#">> ระบบรักษาความปลอดภัยสารสนเทศ สป.มท. 2565 <span class="mnew">ใหม่</span></a>
            <a href="#">> ระบบ IP Telephony ของ สป.มท. <span class="mnew">ใหม่</span></a>
            <a href="#">> คู่มือ cisco jabber / webex meeting</a>
            <a href="#">> ระบบโทรศัพท์ IP / เทคโนโลยี MPLS</a>
            <a href="#">> คู่มือ Edocument / Eoffice</a>
            <a href="#">> PABX MD110</a>
          </div>
          <div id="doc-2" class="mega-pane">
            <a href="#">> คู่มือการใช้งาน cisco jabber</a>
            <a href="#">> Account Jabber</a>
            <a href="#">> หมายเลขห้องประชุมแต่ละจังหวัด-jabber</a>
            <a href="#">> การติดตั้งและใช้งานระบบ unified communication-jabber</a>
            <a href="#">> คู่มือ cisco webex meeting สำหรับผู้ควบคุมห้องประชุม</a>
            <a href="#">> คู่มือ cisco webex meeting สำหรับผู้ใช้งานทั่วไป</a>
            <a href="#">> การใช้งาน cisco webex สำหรับผู้ใช้งานทั่วไป</a>
          </div>
          <div id="doc-3" class="mega-pane">
            <a href="#">> ระบบโทรศัพท์ IP (IP Phone)</a>
            <a href="#">> เทคโนโลยี MPLS</a>
            <a href="#">> คู่มือการใช้งาน Edocument</a>
            <a href="#">> คู่มือการใช้งาน Eoffice</a>
            <a href="#">> การบริหารจัดการชุมสายโทรศัพท์ MD110</a>
            <a href="#">> การควบคุมอุปกรณ์ MCU</a>
            <hr style="border:none; border-top:1px solid #e0e0e0; margin:10px 0;">
            <a href="#" style="color:#c62828; font-weight:bold;">> Jabber for PC <span class="mnew">ใหม่</span></a>
            <a href="#" style="color:#c62828; font-weight:bold;">> ESET Endpoint Antivirus V.8 <span class="mnew">ใหม่</span></a>
            <a href="#">> Cisco Webex Meeting</a>
            <a href="#">> pebuilder สำหรับทำ Windows PE</a>
          </div>
        </div>
      </div>
    </div>

    <!-- 6. อบรม / E-Learning -->
    <div class="nav-item has-mega" onmouseleave="resetMegaMenu(this)">
      <a href="javascript:void(0);" class="nav-btn" onclick="toggleMainLock(event, this)">อบรม / E-Learning ▾</a>
      <div class="mega-menu-box">
        <ul class="mega-tab-list">
          <li onclick="openMegaTab(event, 'learn-1')">ความรู้ด้านเทคนิค</li>
          <li onclick="openMegaTab(event, 'learn-2')">Online Learning</li>
          <li onclick="openMegaTab(event, 'learn-3')">สรรหามาฝาก</li>
        </ul>
        <div class="mega-content-box">
          <div id="learn-1" class="mega-pane">
            <a href="#">> ทางด่วนข้อมูล</a>
            <a href="#">> ศูนย์ข้อมูลกลาง</a>
            <a href="#">> ระบบ GIS</a>
            <a href="#">> PABX MD110</a>
          </div>
          <div id="learn-2" class="mega-pane">
            <a href="#">> TPQI E-Training [สถาบันคุณวุฒิวิชาชีพ]</a>
            <a href="#">> OCSC Learning Portal [สำนักงาน ก.พ.]</a>
            <a href="#">> TDGA [สถาบันพัฒนาบุคลากรภาครัฐด้านดิจิทัล]</a>
            <a href="#">> E-Learning กระทรวงมหาดไทย</a>
            <a href="#">> หลักสูตรอบรม On-Line HRD e-Learning</a>
            <a href="#">> Digital Library For SchoolNet</a>
            <a href="#">> Thailand Cyber University (TCU)</a>
          </div>
          <div id="learn-3" class="mega-pane">
            <a href="#">> ESET Endpoint Antivirus V.6 <span class="mnew">ใหม่</span></a>
            <a href="#">> E-Mail และหมายเลขโทรศัพท์ข้าราชการ ศสส.สป. <span class="mnew">ใหม่</span></a>
            <a href="#">> pebuilder สำหรับทำ Windows PE</a>
            <a href="#">> โปรแกรม SCAN VIRUS trojan</a>
            <a href="#">> Log In เข้า Windows Server 2003 และ Windows xp</a>
            <a href="#">> มาตรฐานเว็บไซต์ภาครัฐ</a>
            <a href="#">> สำนักบริหารยุทธศาสตร์ 18 กลุ่มจังหวัด</a>
            <a href="#">> รายละเอียดตัวชี้วัดฯ (Template) ตัวชี้วัดรายบุคคล (IPA3)</a>
          </div>
        </div>
      </div>
    </div>

    <!-- 7. ภารกิจ / Links -->
    <div class="nav-item has-mega" onmouseleave="resetMegaMenu(this)">
      <a href="javascript:void(0);" class="nav-btn" onclick="toggleMainLock(event, this)">ภารกิจ / Links ▾</a>
      <div class="mega-menu-box">
        <ul class="mega-tab-list">
          <li onclick="openMegaTab(event, 'link-1')">สถิติและภารกิจ</li>
          <li onclick="openMegaTab(event, 'link-2')">Link Hot hot</li>
          <li onclick="openMegaTab(event, 'link-3')">เครือข่าย Intranet</li>
          <li onclick="openMegaTab(event, 'link-4')">E-Office ศสข.4 (นม)</li>
        </ul>
        <div class="mega-content-box">
          <div id="link-1" class="mega-pane">
            <a href="#">> ตัวชี้วัดการให้บริการสื่อสารฯ</a>
            <a href="#">> การใช้วงจรสื่อสารสัญญาณ (แบบ ร.4)</a>
            <a href="#">> การพัฒนาบุคลากรของ ศสข.4 (นม)</a>
            <a href="#">> PMQA</a>
            <a href="#">> Training เครื่องดับเพลิง ศสข.4 (นม)</a>
            <a href="#">> Training IP Star ศสข.4 (นม)</a>
            <a href="#">> Modify IP Star Terminal Unit</a>
            <a href="#">> Outsourcing</a>
            <a href="#">> ระบบหนังสือเวียน</a>
            <a href="#">> ภารกิจสนับสนุน Tsunami ภาคใต้</a>
          </div>
          <div id="link-2" class="mega-pane">
            <a href="#">> ข่าวของหน่วยงาน</a>
            <a href="#">> หมายเลขโทรศัพท์ข่ายมหาดไทย</a>
            <a href="#">> แนวทางปฏิบัติราชการ กระทรวงมหาดไทย</a>
            <a href="#">> เบอร์ประสาน จนท.VCS ศสข.4 (นม) และจังหวัดลูกข่าย</a>
            <a href="#">> ประมวลภาพแห่งความทรงจำ</a>
            <a href="#">> โครงการจัดฝึกอบรมของ ศสส.สป.</a>
            <a href="#">> ประวัตินักศึกษาฝึกงาน</a>
          </div>
          <div id="link-3" class="mega-pane">
            <a href="#">> ศสส.สป.</a>
            <a href="#">> ศสข.1 (อย) — ศสข.4 (นม)</a>
            <a href="#">> ศสข.5 (อด) — ศสข.8 (พล)</a>
            <a href="#">> ศสข.9 (นว) — ศสข.12 (สข)</a>
            <a href="#">> Moinet</a>
            <a href="#">> กองการเจ้าหน้าที่ สป.</a>
            <a href="#">> สหกรณ์ออมทรัพย์กระทรวงมหาดไทย</a>
            <a href="#">> สำนักงาน ก.พ.ร. / กรมบัญชีกลาง</a>
            <a href="#">> กระทรวงมหาดไทย</a>
          </div>
          <div id="link-4" class="mega-pane">
            <a href="#">> สำหรับเจ้าหน้าที่ e-Office</a>
            <a href="#">> สารบรรณอิเล็กทรอนิกส์ edocument</a>
            <a href="#">> Mail moi.go.th</a>
          </div>
        </div>
      </div>
    </div>

    <div class="nav-right">
      <div class="search-box">
        <span aria-hidden="true">🔍</span>
        <input type="text" placeholder="ค้นหาข่าว / เอกสาร..." aria-label="กรอกคำค้นหา ข่าว หรือเอกสารภายในเว็บไซต์" title="ช่องค้นหา">
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
      <p>โทรสาร (มท) 36466, 36455 | (TOT) 0-4424-2995 ต่อ 9</p>
      <p>อีเมล: zonel4@moi.go.th</p>
    </div>
    <div>
      <h4>ระบบงานออนไลน์</h4>
      <div class="fl">
        <a href="#">E-Office ศสข.4</a>
        <a href="#">สารบรรณอิเล็กทรอนิกส์</a>
        <a href="#">Mail moi.go.th</a>
        <a href="#">www.live.moi.go.th (VCS)</a>
      </div>
    </div>
    <div>
      <h4>หน่วยงานเครือข่าย</h4>
      <div class="fl">
        <a href="#">ศสข.1 (อย) — ศสข.4 (นม)</a>
        <a href="#">ศสข.5 (อด) — ศสข.8 (พล)</a>
        <a href="#">ศสข.9 (นว) — ศสข.12 (สข)</a>
      </div>
    </div>
    <div>
      <h4>เกี่ยวกับเว็บไซต์</h4>
      <div class="fl">
        <a href="#">นโยบายเว็บไซต์ (Website Policy)</a>
        <a href="#">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</a>
        <a href="#">นโยบายการรักษาความมั่นคงปลอดภัย</a>
        <a href="#">นโยบายคุกกี้ (Cookie Policy)</a>
        <a href="#">คำถามที่พบบ่อย (FAQ)</a>
        <a href="#">แผนผังเว็บไซต์ (Sitemap)</a>
      </div>
    </div>
  </div>
  <div class="footer-bar">© 2569 ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร เขต 4 (นครราชสีมา) — สำนักงานปลัดกระทรวงมหาดไทย &nbsp;|&nbsp; ออกแบบและพัฒนาโดยทีมงาน <b>ศสข.4 (นม)</b></div>
</footer>

<div class="cookie-banner" id="cookie">
  <p>เว็บไซต์นี้มีการใช้งานคุกกี้เพื่อให้ท่านสามารถใช้บริการได้อย่างต่อเนื่อง และช่วยให้เราปรับปรุงการนำเสนอเนื้อหาตามความต้องการของท่าน</p>
  <div class="btns">
    <button class="more-btn" onclick="document.getElementById('cookie').classList.add('hidden')">เพิ่มเติม</button>
    <button class="accept" onclick="document.getElementById('cookie').classList.add('hidden')">ยอมรับทั้งหมด</button>
  </div>
</div>

<script>
  let currentZoom = 1;
  function changeFontSize(step) {
    if (step === 0) currentZoom = 1;
    else currentZoom += (step * 0.1);
    if (currentZoom < 0.8) currentZoom = 0.8;
    if (currentZoom > 1.4) currentZoom = 1.4;
    document.documentElement.style.fontSize = (currentZoom * 100) + "%";
  }

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
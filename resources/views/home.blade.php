@extends('layouts.frontend')

@section('styles')
<style>
/* CSS เฉพาะหน้า Home (Hero, กริดข่าว, Sidebar) */
.hero { display: grid; grid-template-columns: 1fr 260px; gap: 22px; margin-bottom: 24px; align-items: stretch; }
.hero-main-slider { background: var(--navy); border-radius: 13px; position: relative; overflow: hidden; height: 100%; }
.hero-track { display: flex; height: 100%; transition: transform 0.5s ease-in-out; }
.hero-slide { flex: 0 0 100%; height: 100%; padding: 32px 30px 45px; position: relative; display: flex; flex-direction: column; justify-content: flex-end; color: #fff; }
.hero-glow { position: absolute; inset: 0; background: radial-gradient(ellipse at 78% 0%, rgba(200,150,30,.28), transparent 55%); z-index: 0; }
.hero-royal-badge { position: absolute; top: 22px; right: 22px; width: 70px; height: 70px; border-radius: 50%; background: radial-gradient(circle at 38% 32%, #fff6d6, #f0c840 55%, #9a7820 100%); display: flex; align-items: center; justify-content: center; box-shadow: 0 0 0 4px rgba(255,255,255,.2), 0 6px 20px rgba(0,0,0,.35); z-index: 2; flex: none; }
.hero-royal-badge span { font-family: 'Noto Serif Thai', serif; font-weight: 700; color: #2d1e04; font-size: 1rem; }
.hero-tag { position: relative; z-index: 1; display: inline-block; background: rgba(255,255,255,.12); border: 1px solid rgba(255,255,255,.25); padding: 3px 11px; border-radius: 18px; font-size: .7rem; margin-bottom: 11px; width: fit-content; color: #e8d090; }
.hero-slide h2 { position: relative; z-index: 1; font-size: 1.65rem; line-height: 1.35; max-width: 460px; font-family: 'Noto Serif Thai', serif; margin-top: 0; }
.hero-slide p { position: relative; z-index: 1; color: #ccdbe9; font-size: .82rem; margin-top: 8px; max-width: 420px; }
.hero-dots-container { position: absolute; bottom: 22px; left: 30px; display: flex; gap: 5px; z-index: 10; }
.hero-dot { width: 6px; height: 6px; border-radius: 50%; background: rgba(255,255,255,.3); cursor: pointer; transition: 0.3s; }
.hero-dot.active { background: var(--gold-lt); width: 20px; border-radius: 4px; }
.hero-arrow { position: absolute; top: 50%; transform: translateY(-50%); background: rgba(0,0,0,0.15); color: rgba(255,255,255,0.7); border: none; width: 32px; height: 32px; border-radius: 50%; cursor: pointer; z-index: 10; transition: 0.2s; display: flex; align-items: center; justify-content: center; }
.hero-arrow:hover { background: var(--gold); color: #fff; }
.hero-arrow.prev { left: 10px; }
.hero-arrow.next { right: 10px; }
.hero-side { display: flex; flex-direction: column; justify-content: space-between; height: 100%; gap: 13px; }
.director-card { background: var(--white); border: 1px solid var(--line); border-radius: 11px; padding: 16px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; flex-grow: 1; }
.director-avatar { width: 90px; aspect-ratio: 3 / 4; border-radius: 8px; margin-bottom: 12px; background: linear-gradient(145deg, #c8dff0, #8fb8d8); border: 3px solid var(--gold-lt); overflow: hidden; }
.director-avatar img { width: 100%; height: 100%; object-fit: cover; }
.director-role{font-size:.72rem;color:var(--muted);margin-top:3px;line-height:1.5;}
.quick-btns{display:grid;grid-template-columns:1fr 1fr;gap:9px;}
.q-btn{text-align:center;padding:11px 4px;border-radius:9px;font-size:.8rem;font-weight:700;}
.q-btn.blue{background:var(--navy);color:#fff;}
.q-btn.gold{background:var(--gold-bg);color:var(--navy);border:1px solid var(--gold-lt);}
.q-btn:hover{opacity:.85;}
.meeting-card{background:var(--navy);color:#fff;border-radius:11px;padding:13px 15px;font-size:.76rem;}
.meeting-card h4{color:var(--gold-lt);margin-bottom:5px;font-size:.82rem;}
.meeting-card a{color:var(--gold-lt);font-weight:700;}
.meeting-card .cred{color:#9fb8cc;font-size:.68rem;margin-top:3px;}

.two-col{display:grid;grid-template-columns:1fr 260px;gap:22px;margin-bottom:36px;align-items:start;}
.sec-head{display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:13px;padding-bottom:9px;border-bottom:2px solid var(--line);}
.sec-head .label{font-size:.65rem;text-transform:uppercase;letter-spacing:.07em;color:var(--gold);font-weight:700;display:block;margin-bottom:1px;}
.sec-head h2{font-size:1.1rem;color:var(--navy);}
.sec-head .more{font-size:.78rem;font-weight:600;color:var(--navy);}
.sec-head .more:hover{color:var(--gold);}
.news-grid{display:grid;grid-template-columns:1fr 1fr;gap:13px;}
.news-card{background:var(--white);border:1px solid var(--line);border-radius:10px;overflow:hidden;transition:transform .15s,box-shadow .15s;}
.news-card:hover{transform:translateY(-3px);box-shadow:0 8px 20px rgba(13,38,68,.1);}
.news-thumb { aspect-ratio: 16 / 9; background: linear-gradient(145deg,#d4e6f5,#a8c8e4); position: relative; width: 100%; height: 100%; object-fit: cover; }
.news-thumb .chip{position:absolute;bottom:6px;left:7px;background:rgba(13,38,68,.85);color:#fff;font-size:.63rem;padding:2px 8px;border-radius:4px;}
.news-body{padding:11px 12px 13px;}
.news-body h3{font-size:.82rem;color:var(--ink);font-weight:600;line-height:1.45;}
.news-body p{font-size:.72rem;color:var(--muted);margin-top:5px;}
.activity-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-top:13px;}
.activity-card{background:var(--white);border:1px solid var(--line);border-radius:9px;overflow:hidden;}
.activity-img { aspect-ratio: 16 / 9; background: linear-gradient(145deg,#c8dae8,#9ab8ce); width: 100%; height: 100%; object-fit: cover; }
.activity-caption{font-size:.7rem;color:var(--muted);padding:6px 9px 8px;line-height:1.4;}
.info-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:13px;margin-bottom:26px;}
.info-card { background: var(--white); border: 1px solid var(--line); border-radius: 9px; background: linear-gradient(145deg,#dbe8f5,#c0d4e8); display: flex; align-items: center; justify-content: center; font-size: .78rem; color: var(--navy); font-weight: 600; text-align: center; padding: 10px; aspect-ratio: 4 / 3; min-height: 200px; width: 100%; height: 100%; object-fit: cover; }
.elearn-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:11px;margin-bottom:28px;}
.elearn-card{background:var(--navy);color:#fff;border-radius:9px;padding:14px;text-align:center;font-size:.76rem;}
.elearn-card h4{color:var(--gold-lt);margin-bottom:4px;font-size:.85rem;}
.elearn-card p{color:#9fb8cc;font-size:.7rem;}
.video-cta { min-height: 280px; background: linear-gradient(to top, rgba(13, 38, 68, 0.95) 0%, rgba(13, 38, 68, 0.1) 70%), url('{{ asset("images/orange2.jpg") }}') center/cover no-repeat; background-color: var(--navy); border: 1px solid var(--line); border-radius: 10px; padding: 24px 28px; display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 24px; box-shadow: 0 8px 24px rgba(13,38,68,0.15); overflow: hidden; }
.video-cta-text h3 { color: #ffffff; font-size: 1.2rem; margin-bottom: 4px; text-shadow: 0 2px 6px rgba(0,0,0,0.6); }
.video-cta-text p { color: #ccdbe9; font-size: .85rem; text-shadow: 0 1px 4px rgba(0,0,0,0.6); }
.video-cta-btn { background: var(--gold-bg); color: var(--navy); font-weight: 700; font-size: .85rem; padding: 10px 20px; border: none; border-radius: 8px; display: flex; align-items: center; gap: 6px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); transition: transform 0.2s, background 0.2s; }
.video-cta-btn:hover { background: var(--gold); color: #fff; transform: translateY(-2px); }
.campaign-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px; margin-bottom: 26px; }
.camp-card { background: var(--white); border: 1px solid var(--line); border-radius: 8px; overflow: hidden; display: block; text-align: center; transition: transform .15s, border-color .15s; }
.camp-card:hover { transform: translateY(-3px); border-color: var(--gold); box-shadow: 0 6px 16px rgba(13,38,68,0.08); }
.camp-card .img-ph { background: #e4ebf2; display: flex; align-items: center; justify-content: center; color: #8ba0b5; font-size: .75rem; font-weight: 600; padding: 10px; aspect-ratio: 16 / 9; width: 100%; height: 100%; object-fit: cover; }
.camp-card .camp-title { padding: 10px; font-size: .78rem; font-weight: 600; color: var(--navy); }
.camp-card.full { grid-column: span 2; }
.camp-card.full .img-ph { padding: 10px; aspect-ratio: 21 / 9; }
.widget{background:var(--white);border:1px solid var(--line);border-radius:10px;overflow:hidden;margin-bottom:14px;}
.widget-header{display:flex;align-items:center;gap:7px;padding:9px 13px;font-weight:700;font-size:.82rem;color:var(--navy);border-bottom:1px solid var(--line);background:var(--cream);}
.widget-header::before{content:"";width:4px;height:14px;background:var(--gold);border-radius:2px;display:inline-block;flex:none;}
.widget-body{padding:9px 11px 11px;}
.wlink-list{list-style:none;}
.wlink-list li{border-bottom:1px solid var(--line);padding:6px 2px;}
.wlink-list li:last-child{border-bottom:none;padding-bottom:0;}
.wlink-list li a{font-size:.77rem;color:var(--muted);display:flex;align-items:flex-start;gap:5px;line-height:1.55;}
.wlink-list li a:hover{color:var(--navy);}
.dist-widget{background:var(--white);border:1px solid var(--line);border-radius:10px;overflow:hidden;margin-bottom:14px;}
.dist-head{background:var(--navy);color:#fff;font-weight:700;font-size:.8rem;padding:8px 13px;font-family:'Noto Serif Thai',serif;}
.dist-body{padding:10px 11px 12px;font-size:.76rem;}
.dist-body label{display:block;color:var(--muted);margin-bottom:3px;font-size:.7rem;}
.dist-body select{width:100%;border:1px solid var(--line);border-radius:5px;padding:5px 8px;font-family:inherit;font-size:.74rem;margin-bottom:8px;color:var(--ink);background:var(--white);}
.dist-row{display:flex;gap:6px;margin-top:4px;}
.dist-row button{flex:1;padding:6px;border:none;border-radius:5px;font-family:inherit;font-size:.72rem;font-weight:700;cursor:pointer;}
.d-show{background:var(--navy);color:#fff;}
.d-clear{background:var(--blue-tint);color:var(--navy);}
.dist-result{font-size:.78rem;color:var(--navy);font-weight:700;margin-top:6px;text-align:center;min-height:20px;}
.dist-hint{font-size:.66rem;color:var(--muted);margin-top:5px;text-align:center;}
</style>
@endsection

@section('content')

<div id="splash">
  <div class="splash-seal"><span>มท</span></div>
  <h1>ยินดีต้อนรับสู่<br>ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร เขต 4<br>(นครราชสีมา)</h1>
  <p>Information and Communication Technology Center Region 4 (Nakhon Ratchasima)</p>
  <button class="splash-enter" onclick="document.getElementById('splash').classList.add('hidden')">เข้าสู่เว็บไซต์</button>
  <div class="splash-sub">สำนักงานปลัดกระทรวงมหาดไทย</div>
</div>

<section class="hero">
  <div class="hero-main-slider">
    <div class="hero-track" id="heroTrack">
      <div class="hero-slide" style="background: linear-gradient(140deg, var(--navy) 0%, #1a4070 55%, #1d5186 100%);">
        <div class="hero-glow"></div>
        <div class="hero-royal-badge"><span>ร.10</span></div>
        <span class="hero-tag">28 กรกฎาคม — วันเฉลิมพระชนมพรรษา</span>
        <h2>พระบาทสมเด็จพระเจ้าอยู่หัว<br>ทรงพระเจริญ</h2>
        <p>ด้วยเกล้าด้วยกระหม่อม ขอเดชะ ข้าพระพุทธเจ้า คณะผู้บริหารและเจ้าหน้าที่ ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร เขต 4 (นครราชสีมา)</p>
      </div>
      <div class="hero-slide" style="background: linear-gradient(140deg, var(--navy) 0%, #1a4070 55%, #1d5186 100%);">
        <div class="hero-glow"></div>
        <span class="hero-tag" style="background: var(--gold); border-color: var(--gold);">วิสัยทัศน์และนโยบาย</span>
        <h2>มุ่งสู่การเป็นองค์กรอัจฉริยะ</h2>
        <p>ด้วยระบบบริหารจัดการเทคโนโลยีสารสนเทศและการสื่อสารที่เป็นสากลและธรรมาภิบาล</p>
      </div>
    </div>
    <div class="hero-dots-container">
      <span class="hero-dot active" onclick="goToSlide(0)"></span>
      <span class="hero-dot" onclick="goToSlide(1)"></span>
    </div>
    <button class="hero-arrow prev" onclick="moveHeroSlide(-1)">❮</button>
    <button class="hero-arrow next" onclick="moveHeroSlide(1)">❯</button>
  </div>

  <div class="hero-side">
    <div class="director-card">
      <div class="director-avatar">
        <img src="{{ asset('images/director.jpg') }}" alt="ผู้อำนวยการ">
      </div>
      <div class="director-name">นายศุภชัย ศรีแสง</div>
      <div class="director-role">ผู้อำนวยการศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร เขต 4 (นครราชสีมา)</div>
    </div>
    <div class="quick-btns">
      <a class="q-btn blue" href="#">Front Office</a>
      <a class="q-btn gold" href="#">Back Office</a>
    </div>
    <div class="meeting-card">
      <h4>ประชุมทางไกล VCS</h4>
      <p>ถ่ายทอดผ่านระบบวีดิทัศน์ทางไกล ในเครือข่ายกระทรวงมหาดไทย</p>
      <a href="https://www.live.moi.go.th" target="_blank">www.live.moi.go.th</a>
      <div class="cred">user: ชื่อจังหวัด/อำเภอ (EN) | password: moi + รหัสไปรษณีย์</div>
    </div>
  </div>
</section>

<div class="two-col">
  <div>
    <div class="video-cta">
      <div class="video-cta-text">
        <h3>เราภูมิใจในความสำเร็จของศูนย์เทคโนฯ สป.มท.</h3>
        <p>วีดิทัศน์นำเสนอผลการดำเนินงาน (Video on demand 10:12 minutes)</p>
      </div>
      <a href="#" class="video-cta-btn"><span>▶</span> รับชมวิดีโอ</a>
    </div>
    
    <div class="sec-head" style="margin-top:22px;">
      <div><span class="label">โครงการ / รณรงค์</span><h2>ป้ายประชาสัมพันธ์</h2></div>
    </div>
    <div class="campaign-grid">
      <a href="https://14thplan.nesdc.go.th" target="_blank" class="camp-card full">
        <div class="img-ph">[รูปภาพแบนเนอร์: แผน 14 ประเทศไทยต้องไปต่อ]</div>
      </a>
      <a href="#" class="camp-card">
        <div class="img-ph">[รูปภาพ: มาตรฐานทางจริยธรรม]</div>
        <div class="camp-title">มาตรฐานทางจริยธรรมฯ</div>
      </a>
    </div>
    
    </div>

  <aside>
    <div class="widget">
      <div class="widget-header">ประชาสัมพันธ์</div>
      <div class="widget-body">
        <ul class="wlink-list">
          <li><a href="#">นโยบายรักษาความมั่นคงปลอดภัยด้านสารสนเทศ สป.มท.<span class="badge-new"><span class="n-g">ใหม่</span></span></a></li>
          <li><a href="#">Download Jabber for PC<span class="badge-new"><span class="n-g">ใหม่</span></span></a></li>
        </ul>
      </div>
    </div>
    
    <div class="dist-widget">
      <div class="dist-head">ระยะทางระหว่างจังหวัด</div>
      <div class="dist-body">
        <label>จุดเริ่มต้น</label>
        <select id="from-prov"><option>นครราชสีมา</option></select>
        <label>ปลายทาง</label>
        <select id="to-prov"><option>กรุงเทพมหานคร</option></select>
        <div class="dist-row">
          <button class="d-show" onclick="document.getElementById('dist-result').textContent='ระยะทาง: — กม.'">แสดงข้อมูล</button>
          <button class="d-clear" onclick="document.getElementById('dist-result').textContent=''">ลบข้อมูล</button>
        </div>
        <div class="dist-result" id="dist-result"></div>
      </div>
    </div>
  </aside>
</div>

@endsection

@section('scripts')
<script>
  const track = document.getElementById('heroTrack');
  const slides = document.querySelectorAll('.hero-slide');
  const dots = document.querySelectorAll('.hero-dot');
  
  if(slides.length > 0) {
      const firstClone = slides[0].cloneNode(true);
      const lastClone = slides[slides.length - 1].cloneNode(true);
      track.appendChild(firstClone);
      track.insertBefore(lastClone, slides[0]);

      let heroSlideIndex = 1; 
      const totalHeroSlides = slides.length;

      track.style.transition = 'none';
      track.style.transform = `translateX(-${heroSlideIndex * 100}%)`;

      window.moveHeroSlide = function(direction) {
        if (heroSlideIndex >= totalHeroSlides + 1 || heroSlideIndex <= 0) return;
        track.style.transition = 'transform 0.5s ease-in-out';
        heroSlideIndex += direction;
        track.style.transform = `translateX(-${heroSlideIndex * 100}%)`;
        updateDots();
      }

      window.goToSlide = function(index) {
        track.style.transition = 'transform 0.5s ease-in-out';
        heroSlideIndex = index + 1;
        track.style.transform = `translateX(-${heroSlideIndex * 100}%)`;
        updateDots();
      }

      function updateDots() {
        let activeIndex = heroSlideIndex - 1;
        if (heroSlideIndex === totalHeroSlides + 1) activeIndex = 0;
        if (heroSlideIndex === 0) activeIndex = totalHeroSlides - 1;
        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[activeIndex]) dots[activeIndex].classList.add('active');
      }

      track.addEventListener('transitionend', () => {
        if (heroSlideIndex === totalHeroSlides + 1) { 
          track.style.transition = 'none';
          heroSlideIndex = 1;
          track.style.transform = `translateX(-${heroSlideIndex * 100}%)`;
        }
        if (heroSlideIndex === 0) {
          track.style.transition = 'none';
          heroSlideIndex = totalHeroSlides;
          track.style.transform = `translateX(-${heroSlideIndex * 100}%)`;
        }
      });

      setInterval(() => window.moveHeroSlide(1), 6000);
  }
</script>
@endsection
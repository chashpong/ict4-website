<p align="center">
  <img src="docs/images/logo.png" alt="ICT4 Logo" width="180">
</p>

<h1 align="center">
เว็บไซต์ศูนย์เทคโนโลยีสารสนเทศและการสื่อสารเขต 4 (นครราชสีมา)
</h1>

<p align="center">
โครงงานสหกิจศึกษา (Cooperative Education Project)
</p>

---

# เกี่ยวกับโครงการ

โครงการนี้เป็นการออกแบบและพัฒนาเว็บไซต์ใหม่ของศูนย์เทคโนโลยีสารสนเทศและการสื่อสารเขต 4 (นครราชสีมา)

มีวัตถุประสงค์เพื่อปรับปรุงเว็บไซต์เดิมให้มีความทันสมัย ใช้งานง่าย รองรับการแสดงผลบนอุปกรณ์ต่าง ๆ และสามารถบริหารจัดการข้อมูลผ่านระบบหลังบ้าน (Admin) ได้อย่างสะดวก

เว็บไซต์ใหม่ยังคงโครงสร้างและข้อมูลของเว็บไซต์เดิมไว้ แต่ปรับปรุงในด้าน

- User Interface (UI)
- User Experience (UX)
- การจัดการข้อมูล
- การแสดงผลบน Mobile และ Desktop
- ความสะดวกในการพัฒนาต่อยอดในอนาคต

---

# เทคโนโลยีที่ใช้

- Laravel 10
- PHP 8.x
- MySQL
- Blade Template
- Bootstrap 5
- JavaScript
- Vite
- Git
- GitHub

---

# โครงสร้างโปรเจกต์

```
ict4-website/

├── app/
├── bootstrap/
├── config/
├── database/
├── docs/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── vendor/

├── artisan
├── composer.json
├── package.json
├── README.md
```

รายละเอียดแต่ละโฟลเดอร์

| โฟลเดอร์ | รายละเอียด |
|-----------|------------|
| app | Controller, Model และ Logic ของระบบ |
| bootstrap | เริ่มต้นการทำงานของ Laravel |
| config | ไฟล์ตั้งค่าระบบ |
| database | Migration, Seeder และ Factory |
| docs | เอกสารทั้งหมดของโครงการ |
| public | ไฟล์ที่ Browser เข้าถึงได้ เช่น CSS, JS, รูปภาพ |
| resources | Blade View, CSS และ JavaScript |
| routes | Routing ของเว็บไซต์ |
| storage | Log, Cache, Session และไฟล์ Upload |
| tests | Unit Test และ Feature Test |
| vendor | Package ของ Composer |

---

# เอกสารของโครงการ

เอกสารทั้งหมดอยู่ในโฟลเดอร์

```
docs/
```

ประกอบด้วย

- PROJECT_STRUCTURE.md
- INSTALL.md
- CONTRIBUTING.md
- DATABASE.md
- API.md
- CHANGELOG.md

---

# วิธีติดตั้ง

Clone Repository

```bash
git clone https://github.com/chashpong/ict4-website.git
```

เข้าโฟลเดอร์โปรเจกต์

```bash
cd ict4-website
```

ติดตั้ง Package

```bash
composer install

npm install
```

สร้างไฟล์ .env

```bash
copy .env.example .env
```

สร้าง APP_KEY

```bash
php artisan key:generate
```

สร้างฐานข้อมูล

```
Database : ict4_website
```

ตั้งค่าไฟล์

```
.env
```

ตัวอย่าง

```env
DB_DATABASE=ict4_website
DB_USERNAME=root
DB_PASSWORD=
```

สร้างตาราง

```bash
php artisan migrate
```

เปิด Vite

```bash
npm run dev
```

เปิด Laravel

```bash
php artisan serve
```

เปิดเว็บไซต์

```
http://127.0.0.1:8000
```

---

# การทำงานร่วมกัน (Git Workflow)

ก่อนเริ่มทำงาน

```bash
git pull origin main
```

หลังจากแก้ไขเสร็จ

```bash
git add .

git commit -m "รายละเอียดการแก้ไข"

git push origin main
```

---

# การพัฒนาในอนาคต

ระบบที่อยู่ระหว่างการพัฒนา

- หน้าแรก (Homepage)
- ข่าวประชาสัมพันธ์
- ดาวน์โหลดเอกสาร
- คลังภาพกิจกรรม
- ติดต่อหน่วยงาน
- ระบบผู้ดูแล (Admin)
- จัดการข่าว
- จัดการเอกสาร
- จัดการ Banner
- จัดการรูปภาพ

---

# ทีมผู้พัฒนา

โครงงานสหกิจศึกษา

สาขาวิชาเทคโนโลยีสารสนเทศ

มหาวิทยาลัยราชภัฏนครราชสีมา

สถานประกอบการ

ศูนย์เทคโนโลยีสารสนเทศและการสื่อสารเขต 4 (นครราชสีมา)

---

# สถานะโครงการ

🟢 อยู่ระหว่างการพัฒนา (Development)

---

# License

ใช้สำหรับการศึกษาและการพัฒนาภายในหน่วยงานเท่านั้น
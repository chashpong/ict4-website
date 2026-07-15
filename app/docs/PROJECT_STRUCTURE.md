# โครงสร้างโปรเจกต์ (Project Structure)

เอกสารฉบับนี้จัดทำขึ้นเพื่ออธิบายโครงสร้างของโปรเจกต์เว็บไซต์ศูนย์เทคโนโลยีสารสนเทศและการสื่อสารเขต 4 (นครราชสีมา) เพื่อให้สมาชิกในทีมและผู้พัฒนาที่เข้ามารับช่วงต่อสามารถเข้าใจหน้าที่ของแต่ละโฟลเดอร์และไฟล์ภายในโปรเจกต์ได้อย่างรวดเร็ว

---

# โครงสร้างหลักของโปรเจกต์

```
ict4-website/
│
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
│
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
├── vite.config.js
├── .env
├── .env.example
└── README.md
```

---

# app/

โฟลเดอร์นี้เป็นหัวใจหลักของระบบ Laravel ใช้เก็บโค้ดทั้งหมดที่เกี่ยวข้องกับการทำงานของเว็บไซต์

ภายในประกอบด้วย

```
app/

├── Http/
│     ├── Controllers/
│     ├── Middleware/
│     └── Requests/
│
├── Models/
│
├── Providers/
│
└── Console/
```

## Controllers

เก็บ Controller ของระบบ

Controller ทำหน้าที่รับ Request จากผู้ใช้งาน ประมวลผลข้อมูล ติดต่อกับ Model และส่งข้อมูลไปยัง View

ตัวอย่าง

```
NewsController.php
```

ใช้จัดการ

- ข่าวประชาสัมพันธ์
- แสดงข่าว
- เพิ่มข่าว
- แก้ไขข่าว
- ลบข่าว

อีกตัวอย่าง

```
DocumentController.php
```

ใช้จัดการ

- ดาวน์โหลดเอกสาร
- เพิ่มเอกสาร
- ลบเอกสาร

---

## Models

ใช้ติดต่อฐานข้อมูล

แต่ละ Model จะสัมพันธ์กับแต่ละตารางในฐานข้อมูล

ตัวอย่าง

```
News.php
```

เชื่อมกับ

```
news
```

ตารางข่าว

ตัวอย่าง

```
Document.php
```

เชื่อมกับ

```
documents
```

---

## Middleware

ใช้ตรวจสอบก่อนเข้าสู่ระบบ

เช่น

- Login หรือยัง
- มีสิทธิ์ Admin หรือไม่
- Session หมดอายุหรือยัง

---

## Requests

ใช้ตรวจสอบข้อมูลที่ผู้ใช้กรอก

เช่น

- ตรวจสอบว่า Email ถูกต้อง
- Password มีความยาวเพียงพอ
- ข่าวต้องมีหัวข้อ

---

## Providers

ใช้โหลด Service ต่าง ๆ ของ Laravel

โดยทั่วไปไม่ต้องแก้ไข ยกเว้นต้องเพิ่ม Service ใหม่

---

# bootstrap/

ใช้สำหรับเริ่มต้นการทำงานของ Laravel

Laravel จะโหลดไฟล์ในโฟลเดอร์นี้ก่อนเริ่มทำงานทุกครั้ง

โดยทั่วไปไม่จำเป็นต้องแก้ไข

---

# config/

เก็บไฟล์ตั้งค่าทั้งหมดของระบบ

ตัวอย่าง

```
config/

app.php

database.php

mail.php

filesystems.php

session.php
```

เช่น

- ชื่อเว็บไซต์
- Timezone
- Database
- Email
- Cache
- Session

หากต้องเปลี่ยนการตั้งค่าระบบ จะทำในโฟลเดอร์นี้

---

# database/

ใช้จัดการฐานข้อมูล

ประกอบด้วย

```
database/

├── migrations/

├── seeders/

└── factories/
```

## migrations

เก็บโครงสร้างของตาราง

เช่น

```
create_news_table
```

สร้างตารางข่าว

```
create_documents_table
```

สร้างตารางเอกสาร

---

## seeders

ใช้สร้างข้อมูลเริ่มต้น

เช่น

Admin

User

หมวดหมู่ข่าว

---

## factories

ใช้สร้างข้อมูลจำลองสำหรับการทดสอบ

---

# docs/

เก็บเอกสารของโครงการ

ตัวอย่าง

```
PROJECT_STRUCTURE.md

INSTALL.md

DATABASE.md

API.md

CHANGELOG.md
```

เอกสารทั้งหมดของทีมควรอยู่ในโฟลเดอร์นี้

---

# public/

เป็นโฟลเดอร์ที่ Browser สามารถเข้าถึงได้

เช่น

```
public/

favicon.ico

index.php

images/

css/

js/
```

รูปภาพ

โลโก้

Icon

ไฟล์ CSS

JavaScript

ควรเก็บเฉพาะไฟล์ที่ผู้ใช้สามารถเข้าถึงได้

---

# resources/

ใช้เก็บส่วนแสดงผลของเว็บไซต์

```
resources/

├── views/

├── css/

└── js/
```

---

## views

เก็บ Blade Template

เช่น

```
home.blade.php

news.blade.php

download.blade.php
```

เป็นหน้าที่ผู้ใช้งานมองเห็น

---

## css

เก็บไฟล์ CSS

---

## js

เก็บ JavaScript

---

# routes/

ใช้กำหนด URL ของเว็บไซต์

ตัวอย่าง

```
routes/

web.php

api.php

console.php
```

เช่น

```
/

/news

/download

/contact
```

Laravel จะดูไฟล์นี้ก่อนเสมอเมื่อมีผู้ใช้เข้าเว็บไซต์

---

# storage/

ใช้เก็บข้อมูลที่ระบบสร้างขึ้นระหว่างการทำงาน

เช่น

- Log
- Cache
- Session
- Uploaded Files

ประกอบด้วย

```
storage/

app/

framework/

logs/
```

ห้ามลบไฟล์ภายในโดยไม่จำเป็น

---

# tests/

ใช้สำหรับทดสอบระบบ

เช่น

- Unit Test
- Feature Test

ใช้ตรวจสอบว่าระบบยังทำงานได้ถูกต้องหลังมีการแก้ไขโค้ด

---

# vendor/

เป็นโฟลเดอร์ที่ Composer ติดตั้ง Package ต่าง ๆ

ตัวอย่าง

Laravel Framework

Symfony

Carbon

ฯลฯ

**ข้อควรระวัง**

- ห้ามแก้ไขไฟล์ในโฟลเดอร์นี้
- หากลบโฟลเดอร์นี้ สามารถสร้างใหม่ได้ด้วยคำสั่ง

```
composer install
```

---

# ไฟล์สำคัญ

## artisan

ใช้สำหรับรันคำสั่งของ Laravel

ตัวอย่าง

```
php artisan serve

php artisan migrate

php artisan make:model

php artisan make:controller
```

---

## composer.json

กำหนด Package ที่โปรเจกต์ใช้งาน

---

## package.json

กำหนด Package ของ Frontend

เช่น

- Vite
- Bootstrap
- JavaScript

---

## .env

เก็บค่าการตั้งค่าของระบบ เช่น

- Database
- Email
- App Key

**ห้ามอัปโหลดไฟล์นี้ขึ้น GitHub**

---

## .env.example

ตัวอย่างไฟล์ .env สำหรับสมาชิกในทีม

ทุกคนต้องคัดลอกไฟล์นี้เป็น `.env` ก่อนเริ่มใช้งาน

---

## README.md

เอกสารแนะนำโปรเจกต์

ประกอบด้วย

- รายละเอียดโครงการ
- วิธีติดตั้ง
- เทคโนโลยีที่ใช้
- วิธีเริ่มต้นใช้งาน

---

# สรุป

โครงสร้างโปรเจกต์นี้ถูกจัดแบ่งตามมาตรฐานของ Laravel Framework เพื่อให้โค้ดมีความเป็นระเบียบ ง่ายต่อการพัฒนา ดูแลรักษา และสามารถส่งมอบให้ผู้พัฒนาคนอื่นเข้ามาทำงานต่อได้อย่างมีประสิทธิภาพ
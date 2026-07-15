# คู่มือการติดตั้งโปรเจกต์ (Installation Guide)

เอกสารนี้จัดทำขึ้นสำหรับสมาชิกในทีมที่ต้องการ Clone โปรเจกต์จาก GitHub และเริ่มพัฒนาร่วมกัน

---

# สิ่งที่ต้องติดตั้งก่อน

ก่อนเริ่มใช้งานโปรเจกต์ ต้องติดตั้งโปรแกรมดังต่อไปนี้

- Laragon
- Git
- Composer
- Node.js
- Visual Studio Code

เมื่อติดตั้งเสร็จแล้ว ให้เปิด Laragon และกด **Start All**

---

# ขั้นตอนที่ 1 : Clone โปรเจกต์จาก GitHub

เปิด Terminal (PowerShell, CMD หรือ Terminal ของ Laragon)

เข้าไปยังโฟลเดอร์ `www`

```bash
cd C:\laragon\www
```

Clone โปรเจกต์

```bash
git clone https://github.com/chashpong/ict4-website.git
```

เข้าโฟลเดอร์โปรเจกต์

```bash
cd ict4-website
```

ตอนนี้โปรเจกต์จะถูกดาวน์โหลดมาไว้ในเครื่องเรียบร้อยแล้ว

---

# ขั้นตอนที่ 2 : ติดตั้ง Package ของ Laravel

Laravel ใช้ Composer สำหรับติดตั้ง Package ที่จำเป็น

รันคำสั่ง

```bash
composer install
```

รอจนติดตั้งเสร็จ

---

# ขั้นตอนที่ 3 : ติดตั้ง Package ของ Frontend

โปรเจกต์นี้ใช้ Vite และ JavaScript จึงต้องติดตั้ง Package เพิ่ม

รันคำสั่ง

```bash
npm install
```

รอจนติดตั้งเสร็จ

---

# ขั้นตอนที่ 4 : สร้างไฟล์ .env

### ทำไมต้องทำขั้นตอนนี้

Laravel จะ **ไม่เก็บไฟล์ `.env` ไว้บน GitHub**

เนื่องจากไฟล์นี้เก็บข้อมูลสำคัญ เช่น

- ชื่อฐานข้อมูล
- Username
- Password
- APP_KEY
- Email
- API Key

ดังนั้นเมื่อ Clone โปรเจกต์มา จะมีเพียงไฟล์

```
.env.example
```

จึงต้องสร้างไฟล์ `.env` ขึ้นมาเอง

ใช้คำสั่ง

```bash
copy .env.example .env
```

เมื่อรันเสร็จ จะได้ไฟล์

```
.env
```

ภายในโปรเจกต์

---

# ขั้นตอนที่ 5 : สร้าง APP_KEY

หลังจากสร้างไฟล์ `.env` แล้ว

Laravel ยังไม่มี Key สำหรับเข้ารหัสข้อมูล

จึงต้องรันคำสั่ง

```bash
php artisan key:generate
```

เมื่อรันสำเร็จ Laravel จะสร้างค่า

```
APP_KEY
```

ให้อัตโนมัติ

ขั้นตอนนี้จำเป็นสำหรับ

- Session
- Cookie
- Login
- การเข้ารหัสข้อมูล

หากไม่ทำ เว็บไซต์จะเปิดไม่ได้

---

# ขั้นตอนที่ 6 : สร้างฐานข้อมูล

เปิด Laragon

เลือก

```
Menu

MySQL

phpMyAdmin
```

Login

```
Username : root

Password : (เว้นว่าง)
```

กด

```
New
```

สร้างฐานข้อมูลใหม่

ชื่อ

```
ict4_website
```

Character Set

```
utf8mb4_unicode_ci
```

จากนั้นกด

```
Create
```

ตอนนี้ฐานข้อมูลพร้อมใช้งานแล้ว

> **หมายเหตุ:** ขั้นตอนนี้สร้างเฉพาะ "ฐานข้อมูล" ยังไม่มีตารางภายใน

---

# ขั้นตอนที่ 7 : ตั้งค่าไฟล์ .env

เปิดไฟล์

```
.env
```

แก้ไขส่วน Database

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ict4_website
DB_USERNAME=root
DB_PASSWORD=
```

หากเครื่องของคุณใช้ Username หรือ Password ไม่เหมือนตัวอย่าง ให้แก้ไขตามเครื่องของตนเอง

บันทึกไฟล์

---

# ขั้นตอนที่ 8 : สร้างตารางฐานข้อมูล

เมื่อสร้างฐานข้อมูลและตั้งค่า `.env` เรียบร้อยแล้ว

ให้รันคำสั่ง

```bash
php artisan migrate
```

Laravel จะสร้างตารางทั้งหมดให้อัตโนมัติ

เช่น

- users
- password_reset_tokens
- personal_access_tokens
- news
- documents

เมื่อเสร็จแล้ว ฐานข้อมูลพร้อมใช้งาน

---

# ขั้นตอนที่ 9 : เปิด Vite

เปิด Terminal อีกหน้าต่างหนึ่ง

รัน

```bash
npm run dev
```

หน้าต่างนี้ต้องเปิดค้างไว้ตลอดระหว่างการพัฒนา

---

# ขั้นตอนที่ 10 : เปิด Laravel

กลับมาที่ Terminal แรก

รัน

```bash
php artisan serve
```

หากสำเร็จจะขึ้นข้อความ

```
INFO  Server running on

http://127.0.0.1:8000
```

เปิด Browser

เข้า

```
http://127.0.0.1:8000
```

หากหน้าเว็บไซต์แสดงขึ้นมา แสดงว่าติดตั้งสำเร็จ

---

# การทำงานร่วมกันผ่าน GitHub

## ก่อนเริ่มทำงานทุกครั้ง

ดึงโค้ดล่าสุดจาก GitHub

```bash
git pull origin main
```

---

## หลังจากแก้ไขโค้ดเสร็จ

เพิ่มไฟล์ที่แก้ไข

```bash
git add .
```

บันทึกการแก้ไข

```bash
git commit -m "อธิบายสิ่งที่แก้ไข"
```

ส่งขึ้น GitHub

```bash
git push origin main
```

---

# หากมี Migration ใหม่

ดึงโค้ดล่าสุด

```bash
git pull
```

จากนั้นรัน

```bash
php artisan migrate
```

---

# หากมี Package ใหม่

Backend

```bash
composer install
```

Frontend

```bash
npm install
```

---

# หากระบบมีปัญหา

ล้าง Cache

```bash
php artisan optimize:clear
```

---

# หมายเหตุสำคัญ

- ห้ามอัปโหลดไฟล์ `.env` ขึ้น GitHub
- ห้ามแก้ไขไฟล์ในโฟลเดอร์ `vendor`
- ก่อนเริ่มทำงานทุกครั้งให้ `git pull`
- หลังแก้ไขงานเสร็จให้ `git add` → `git commit` → `git push`
- หากไม่แน่ใจ ให้สอบถามสมาชิกในทีมก่อนแก้ไขไฟล์สำคัญ
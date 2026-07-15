<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            
            // --- เพิ่มคอลัมน์ใหม่ตรงนี้ครับ ---
            $table->string('title'); // ชื่อเอกสารหรือคู่มือ
            $table->string('category'); // หมวดหมู่ (เช่น E-Reports, คู่มือปฏิบัติงาน)
            $table->string('file_path'); // เส้นทางที่เก็บไฟล์บนเซิร์ฟเวอร์
            // -----------------------------

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
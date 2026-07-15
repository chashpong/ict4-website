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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            
            // --- เพิ่มคอลัมน์ใหม่ตรงนี้ครับ ---
            $table->string('title'); // หัวข้อข่าว
            $table->text('content')->nullable(); // เนื้อหาข่าว (อนุญาตให้ว่างได้)
            $table->string('image')->nullable(); // ลิงก์รูปภาพหน้าปก
            $table->boolean('status')->default(1); // 1 = แสดงผล, 0 = ซ่อน
            $table->timestamp('published_at')->nullable(); // วันที่และเวลาเผยแพร่
            // -----------------------------

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
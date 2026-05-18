<?php
/**
 * ========================================
 * 📝 CONFIGURATION TEMPLATE (PUBLIC)
 * ========================================
 * ✅ ไฟล์นี้สามารถ Commit ขึ้น GitHub ได้
 * ✅ ใช้เป็น Template ให้ Developer คนอื่นดู
 * 
 * 🚀 วิธีใช้งาน:
 * 1. Copy ไฟล์นี้เป็น config.php
 * 2. แทนค่า YOUR_ACTUAL_XXX_KEY_HERE ด้วย API Key จริง
 * 3. ปรับแต่งการตั้งค่าตามความต้องการ
 * ========================================
 */

// =======================================
// 🔑 API Keys Configuration
// =======================================

// Groq API Key (ค่ายหลัก)
// 📌 สมัครฟรีที่: https://console.groq.com/
define('GROQ_API_KEY', 'YOUR_ACTUAL_GROQ_API_KEY_HERE');

// Gemini API Key (ค่ายสำรอง)
// 📌 สมัครฟรีที่: https://aistudio.google.com/apikey
define('GEMINI_API_KEY', 'YOUR_ACTUAL_GEMINI_API_KEY_HERE');

// =======================================
// ⚙️ System Configuration
// =======================================

// เปิด/ปิดโหมด Debug (แนะนำ: false บน Production)
define('DEBUG_MODE', false);

// จำกัดความยาวข้อความสูงสุด (characters)
define('MAX_MESSAGE_LENGTH', 2000);

// Rate Limit ต่อ IP (requests/minute)
define('RATE_LIMIT_PER_IP', 20);

// Timeout การเชื่อมต่อ API (seconds)
define('CURL_TIMEOUT', 30);

// =======================================
// 🌐 CORS Settings (ถ้าจำเป็น)
// =======================================

// รายการ Origin ที่อนุญาต
// อนุญาตโดเมนจริงของคุณให้ยิงผ่าน CORS เข้ามาได้
define('ALLOWED_ORIGINS', [
    'http://localhost',
    'http://127.0.0.1',
    'https://norawitsanerat-gif.github.io' // 👈 เติมโดเมน GitHub Pages ของคุณลงไปตรงนี้
]);

<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<div>
        <h1>Hubungi Kami</h1>
        <p>
            Kami senang mendengar dari Anda! Silakan gunakan salah satu cara berikut untuk menghubungi tim kami. Kami akan berusaha merespons secepat mungkin.
        </p>

        <hr>
        <h2>Informasi Kontak</h2>
        <ul>
            <li style="text-align: left;margin-top:5%;">
                <strong><i class="bi bi-envelope-fill"></i> Email:</strong> 
                <a href="mailto:admin@ikanku.com">
                    admin@ikanku.com
                </a>
                <p>Cara terbaik untuk pertanyaan umum, kemitraan, dan masukan.</p>
            </li>
            
            <li style="text-align: left;margin-bottom:3%;margin-top:3%;">
                <strong><i class="bi bi-whatsapp"></i> WhatsApp:</strong> 
                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer">
                    +62 812-3456-7890
                </a>
                <p>Untuk respons cepat atau pertanyaan mendesak terkait acara.</p>
            </li>

            <li style="text-align: left;margin-bottom:5%;">
                <strong><i class="bi bi-geo-alt-fill"></i> Lokasi Kami:</strong> 
                <a href="https://www.google.com/maps/search/?api=1&query=-6.1753924,106.8271528" target="_blank" rel="noopener noreferrer">
                    Kunjungi Kami
                </a>
                <p>Klik untuk melihat lokasi yang sering menjadi pusat acara-acara besar komunitas kami.</p>
            </li>
        </ul>
            <hr>
        <p>
            Jangan ragu untuk terhubung. Kami ada di sini untuk membantu dan membangun komunitas akuatik yang lebih baik bersama-sama!
        </p>
    </div>
<?= $this->endSection();?>
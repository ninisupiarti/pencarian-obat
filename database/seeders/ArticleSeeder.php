<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Article::factory(50)->create();

        Article::create([
            'image' => 'images/articles/article1.png',
            'title' => 'Ini 5 Rekomendasi Obat Batuk Kering dan Gatal Paling Ampuh untuk Dewasa',
            'content' => 'Batuk kering dan gatal biasanya terjadi akibat peradangan di tenggorokan dan saluran pernapasan bagian atas. Gangguan ini menimbulkan sensasi geli yang mengganggu, termasuk saat sedang beristirahat.',
            'tags' => [1, 3],
            'source_url' => 'https://www.halodoc.com/artikel/ini-5-rekomendasi-obat-batuk-kering-dan-gatal-paling-ampuh-untuk-dewasa',
            'admin_id' => 1,
        ]);

        Article::create([
            'image' => 'images/articles/article2.png',
            'title' => 'Ibu, Ini 7 Rekomendasi Obat Batuk Anak yang Perlu Ada di Rumah',
            'content' => 'Batuk adalah kondisi yang umum terjadi pada anak. Penyebabnya macam-macam. Mulai dari infeksi saluran pernapasan, alergi, asma, sinusitis, refluks asam, ataupun kehadiran benda asing yang mengiritasi saluran pernapasan.',
            'tags' => [2, 3],
            'source_url' => 'https://www.halodoc.com/artikel/ibu-ini-7-rekomendasi-obat-batuk-anak-yang-perlu-ada-di-rumah',
            'admin_id' => 1,
        ]);

        Article::create([
            'image' => 'images/articles/article3.png',
            'title' => 'Rekomendasi Sunscreen Terbaik yang Cocok untuk Semua Jenis Kulit',
            'content' => 'Bagi kamu yang sedang mencari rekomendasi sunscreen, sebaiknya sesuaikan dengan tipe kulit yang kamu miliki. Sunscreen merupakan salah satu produk perawatan wajah yang wajib kamu punya.',
            'tags' => [4, 5],
            'source_url' => 'https://www.halodoc.com/artikel/rekomendasi-sunscreen-terbaik-yang-cocok-untuk-semua-jenis-kulit',
            'admin_id' => 1,
        ]);

        Article::create([
            'image' => 'images/articles/article4.png',
            'title' => 'Rekomendasi Serum untuk Remaja yang Bisa Dicoba',
            'content' => 'Memilih jenis serum untuk remaja yang tepat adalah kunci mendapatkan kulit yang cerah nan sehat. Sebab, remaja akan mengalami berbagai perubahan yang signifikan, seperti perubahan hormon.',
            'tags' => [5],
            'source_url' => 'https://www.halodoc.com/artikel/rekomendasi-serum-untuk-remaja-yang-bisa-dicoba',
            'admin_id' => 1,
        ]);

        Article::create([
            'image' => 'images/articles/article5.png',
            'title' => 'Rekomendasi Suplemen Vitamin D yang Bagus di Apotek',
            'content' => 'Ada banyak vitamin yang perlu seseorang penuhi dalam makanan sehari-harinya, salah satunya suplemen vitamin D. Nutrisi ini sangat bermanfaat untuk memperkuat tulang dan gigi serta daya tahan tubuh.',
            'tags' => [13],
            'source_url' => 'https://www.halodoc.com/artikel/rekomendasi-suplemen-vitamin-d-yang-bagus-di-apotek',
            'admin_id' => 1,
        ]);

        Article::create([
            'image' => 'images/articles/article6.png',
            'title' => 'Ini 7 Rekomendasi Acne Patch Terbaik agar Wajah Mulus dengan Cepat',
            'content' => 'Acne patch membantu menyembunyikan jerawat sambil merawatnya. Dengan menggunakan ini, kamu dapat tetap tampil percaya diri, tanpa khawatir kondisi kulit menjadi lebih parah.',
            'tags' => [7, 12],
            'source_url' => 'https://www.halodoc.com/artikel/ini-7-rekomendasi-acne-patch-terbaik-agar-wajah-mulus-dengan-cepat',
            'admin_id' => 1,
        ]);

        Article::create([
            'image' => 'images/articles/article7.png',
            'title' => 'Rekomendasi Obat Asma Paling Ampuh, dari Obat Bebas hingga Petunjuk Dokter',
            'content' => 'Asma adalah salah satu masalah pernapasan yang lazim. Kondisi ini membuat pengidapnya mengalami kesulitan bernapas, mengi, batuk, dan sesak napas. Masalah pernapasan ini terjadi karena peradangan pada saluran udara (bronkus) yang mengakibatkan penyempitan saluran udara tersebut.',
            'tags' => [8],
            'source_url' => 'https://www.halodoc.com/artikel/rekomendasi-obat-asma-paling-ampuh-dari-obat-bebas-hingga-petunjuk-dokter',
            'admin_id' => 1,
        ]);

        Article::create([
            'image' => 'images/articles/article8.png',
            'title' => '9 Rekomendasi Menu MPASI 8 Bulan yang Lezat dan Bergizi untuk Bayi',
            'content' => 'Seiring bertambahnya usia Si Kecil, anak memerlukan nutrisi tambahan yang tidak hanya dipenuhi dari ASI atau susu formula. MPASI adalah cara untuk memasok nutrisi yang dibutuhkan anak untuk pertumbuhan, perkembangan otak, dan kesehatan tulang yang optimal.',
            'tags' => [9, 10],
            'source_url' => 'https://www.halodoc.com/artikel/9-rekomendasi-menu-mpasi-8-bulan-yang-lezat-dan-bergizi-untuk-bayi',
            'admin_id' => 1,
        ]);

        Article::create([
            'image' => 'images/articles/article9.png',
            'title' => 'Ini 7 Rekomendasi Susu Promil untuk Kehamilan yang Sehat',
            'content' => 'Untuk mendukung kehamilan sehat, bumil direkomendasikan untuk minum susu promil.  Meskipun nutrisi pada susu dapat diperoleh dari sumber makanan atau minuman lain, tetapi susu merupakan minuman yang mudah ditemukan di mana saja dan sangat mudah untuk disiapkan.',
            'tags' => [11],
            'source_url' => 'https://www.halodoc.com/artikel/ini-7-rekomendasi-susu-promil-untuk-kehamilan-yang-sehat',
            'admin_id' => 1,
        ]);

        // Article::create([
        //     'image' => 'images/articles/article10.png',
        //     'title' => '',
        //     'content' => '',
        //     'tags' => [],
        //     'source_url' => '',
        //     'admin_id' => 1,
        // ]);

        // Article::create([
        //     'image' => 'images/articles/article11.png',
        //     'title' => '',
        //     'content' => '',
        //     'tags' => [],
        //     'source_url' => '',
        //     'admin_id' => 1,
        // ]);

        // Article::create([
        //     'image' => 'images/articles/article12.png',
        //     'title' => '',
        //     'content' => '',
        //     'tags' => [],
        //     'source_url' => '',
        //     'admin_id' => 1,
        // ]);
    }
}

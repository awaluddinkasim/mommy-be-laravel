<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notifications = [
            [
                'month_number' => 1,
                'week_number' => 1,
                'scheduled_time' => '07:00:00',
                'title' => 'Pengingat Menyusui Pagi',
                'message' => 'Selamat pagi, Pastikan bayi Anda menyusui 8-12 kali dalam 24 jam. Perhatikan tanda-tanda lapar.'
            ],
            [
                'month_number' => 1,
                'week_number' => 1,
                'scheduled_time' => '10:00:00',
                'title' => 'Pemeriksaan Diri',
                'message' => 'Hai moms, Luangkan waktu sejenak untuk memeriksa diri sendiri. Bagaimana perasaan emosional Anda hari ini? Anda bisa lakukan screening mandiri pada menu yang tersedia di aplikasi ini'
            ],
            [
                'month_number' => 1,
                'week_number' => 1,
                'scheduled_time' => '13:00:00',
                'title' => 'Pemeriksaan Siang',
                'message' => 'Sudah waktunya untuk pemeriksaan tengah hari! Bagaimana pelekatan bayi Anda? Pastikan posisi bibir dan areola yang tepat.'
            ],
            [
                'month_number' => 1,
                'week_number' => 1,
                'scheduled_time' => '16:00:00',
                'title' => 'Dukungan Emosional',
                'message' => 'Hai bunda, Merasa kewalahan merawat bayi itu adalah hal yang wajar. Bicaralah dengan seseorang yang Anda percayai tentang perasaan lelah Anda'
            ],
            [
                'month_number' => 1,
                'week_number' => 1,
                'scheduled_time' => '19:00:00',
                'title' => 'Pemantauan Popok',
                'message' => 'Hai moms, jangan lupa pantau jumlah popok basah dan kotor untuk memastikan asupan bayi yang cukup'
            ],
            [
                'month_number' => 1,
                'week_number' => 1,
                'scheduled_time' => '22:00:00',
                'title' => 'Refleksi Malam',
                'message' => 'Hai ibu hebat, rehat sejenak renungkan hari Anda. Apakah Anda punya waktu untuk perawatan diri? Bahkan beberapa menit saja bisa membantu loh merasa lebih nyaman'
            ],

            // Month 1, Week 2
            [
                'month_number' => 1,
                'week_number' => 2,
                'scheduled_time' => '07:00:00',
                'title' => 'Pemeriksaan Popok',
                'message' => 'Saatnya pemeriksaan pagi: Apakah bayi Anda punya 6 popok basah dan 3-4 popok kotor sehari?'
            ],
            [
                'month_number' => 1,
                'week_number' => 2,
                'scheduled_time' => '10:00:00',
                'title' => 'Pengingat Istirahat',
                'message' => 'Selamat pagi bunda, Prioritaskan istirahat saat bayi Anda tidur. Kurangnya tidur dapat memengaruhi suasana hati Anda loh.'
            ],
            [
                'month_number' => 1,
                'week_number' => 2,
                'scheduled_time' => '13:00:00',
                'title' => 'Tips Menyusui',
                'message' => 'Hai moms, Biarkan bayi Anda menyusu pada satu payudara sampai ia melepas dengan sendiri, sebelum menawarkan payudara lainnya.'
            ],
            [
                'month_number' => 1,
                'week_number' => 2,
                'scheduled_time' => '16:00:00',
                'title' => 'Aktivitas Santai',
                'message' => 'Selamat siang bunda, Lakukan aktivitas santai yang Anda nikmati, meskipun itu hanya sebentar.'
            ],
            [
                'month_number' => 1,
                'week_number' => 2,
                'scheduled_time' => '19:00:00',
                'title' => 'Pencatatan Menyusui',
                'message' => 'Hai bunda, Jangan lupa merekam setiap sesi menyusui ya, ini membantu bunda menilai perubahan pola minum bayi.'
            ],
            [
                'month_number' => 1,
                'week_number' => 2,
                'scheduled_time' => '22:00:00',
                'title' => 'Jurnal Harian',
                'message' => 'Hai ibu hebat, Bagaimana suasana hati Anda hari ini? Menulis jurnal tentang pikiran dan perasaan harian Anda adalah salah satu hal yang menyenangkan.'
            ],

            // Month 1, Week 3
            [
                'month_number' => 1,
                'week_number' => 3,
                'scheduled_time' => '07:00:00',
                'title' => 'Pertumbuhan Bayi',
                'message' => 'Selamat pagi! Apakah Anda memperhatikan percepatan pertumbuhan bayi Anda? Mereka mungkin ingin menyusu lebih sering.'
            ],
            [
                'month_number' => 1,
                'week_number' => 3,
                'scheduled_time' => '10:00:00',
                'title' => 'Kesehatan Mental',
                'message' => 'Hai bunda, Apakah Anda merasakan kesedihan atau kecemasan yang terus-menerus? Berkonsultasi dengan konselor itu salah satu solusi yang tepat.'
            ],
            [
                'month_number' => 1,
                'week_number' => 3,
                'scheduled_time' => '13:00:00',
                'title' => 'Dukungan Sesama',
                'message' => 'Apakah bunda punya teman sesama menyusui? Berbagi pengalaman bisa menjadi hiburan tersendiri loh'
            ],
            [
                'month_number' => 1,
                'week_number' => 3,
                'scheduled_time' => '16:00:00',
                'title' => 'Nutrisi Ibu',
                'message' => 'Hai moms, Hidrasi (minum) yang cukup dan makan makanan bergizi akan mendukung suplai ASI Anda.'
            ],
            [
                'month_number' => 1,
                'week_number' => 3,
                'scheduled_time' => '19:00:00',
                'title' => 'Evaluasi Menyusui',
                'message' => 'Selamat malam bunda, Lacak durasi setiap sesi menyusui. Apakah bayi Anda menyusu secara efektif?'
            ],
            [
                'month_number' => 1,
                'week_number' => 3,
                'scheduled_time' => '22:00:00',
                'title' => 'Relaksasi',
                'message' => 'Hai ibu hebat, jangan lupa latih pernapasan dalam atau meditasi untuk membantu merilekskan pikiran Anda sebelum tidur.'
            ],

            // Month 1, Week 4
            [
                'month_number' => 1,
                'week_number' => 4,
                'scheduled_time' => '07:00:00',
                'title' => 'Skin-to-Skin',
                'message' => 'Saatnya pemeriksaan pagi, Apakah Anda melakukan kontak kulit (skin-to-skin)? Hal ini akan meningkatkan bonding dan mendukung pemberian ASI lebih sering'
            ],
            [
                'month_number' => 1,
                'week_number' => 4,
                'scheduled_time' => '09:00:00',
                'title' => 'Nutrisi dan Hidrasi',
                'message' => 'Hai moms, Tetap terhidrasi dan beri nutrisi tubuh Anda dengan makanan sehat. Ini bisa berdampak positif pada suasana hati Anda.'
            ],
            [
                'month_number' => 1,
                'week_number' => 4,
                'scheduled_time' => '13:00:00',
                'title' => 'Istirahat',
                'message' => 'Selamat siang bunda, Apakah Anda telah beristirahat hari ini? Keluar untuk menghirup udara segar dapat meningkatkan semangat Anda.'
            ],
            [
                'month_number' => 1,
                'week_number' => 4,
                'scheduled_time' => '16:00:00',
                'title' => 'Posisi Menyusui',
                'message' => 'Hai bunda, Pastikan posisi Anda merasa nyaman dan rileks selama menyusui.'
            ],
            [
                'month_number' => 1,
                'week_number' => 4,
                'scheduled_time' => '19:00:00',
                'title' => 'Berat Badan Bayi',
                'message' => 'Saatnya pemeriksaan malam: Apakah berat badan bayi Anda bertambah? Pemeriksaan berat badan secara teratur itu penting.'
            ],
            [
                'month_number' => 1,
                'week_number' => 4,
                'scheduled_time' => '22:00:00',
                'title' => 'Refleksi Bulanan',
                'message' => 'Hai ibu hebat, Renungkan momen-momen positif dari hari Anda. Rayakan kemenangan kecil bahwa anda sudah sebulan menyusui si kecil.'
            ],

            // Month 2 (Weeks 5-8)
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '07:00:00',
                'title' => 'Pemantauan Pertumbuhan',
                'message' => 'Selamat pagi bunda, Pantau pertambahan berat badan bayi Anda. Pemberian makan secara teratur membantu menjaga pertumbuhannya.'
            ],
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '09:00:00',
                'title' => 'Kesehatan Mental',
                'message' => 'Hai bunda, Pantau suasana hati Anda setiap hari. Tidak apa-apa untuk mencari bantuan jika Anda merasa terus-menerus sedih.'
            ],
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '13:00:00',
                'title' => 'Aktivitas Fisik',
                'message' => 'Saatnya pemeriksaan siang, Lakukan aktivitas fisik ringan, seperti berjalan singkat, untuk meningkatkan suasana hati Anda.'
            ],
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '16:00:00',
                'title' => 'Konsultasi Laktasi',
                'message' => 'Hai moms, Apakah Anda melihat adanya kesulitan menyusui? Carilah bantuan jika diperlukan, anda bisa berkonsultasi dengan konselor laktasi'
            ],
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '19:00:00',
                'title' => 'Pencatatan',
                'message' => 'Selamat malam bunda, Terus catat waktu makan dan reaksi bayi.'
            ],
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '22:00:00',
                'title' => 'Rutinitas Tidur',
                'message' => 'Hai ibu hebat, Ciptakan rutinitas tidur yang menenangkan untuk membantu Anda beralih ke tidur yang nyenyak'
            ],

            // Month 2 (Weeks 5-8)
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '07:00:00',
                'title' => 'Pemantauan Pertumbuhan',
                'message' => 'Selamat pagi bunda, Pantau pertambahan berat badan bayi Anda. Pemberian makan secara teratur membantu menjaga pertumbuhannya.'
            ],
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '09:00:00',
                'title' => 'Kesehatan Mental',
                'message' => 'Hai bunda, Pantau suasana hati Anda setiap hari. Tidak apa-apa untuk mencari bantuan jika Anda merasa terus-menerus sedih.'
            ],
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '13:00:00',
                'title' => 'Aktivitas Fisik',
                'message' => 'Saatnya pemeriksaan siang, Lakukan aktivitas fisik ringan, seperti berjalan singkat, untuk meningkatkan suasana hati Anda.'
            ],
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '16:00:00',
                'title' => 'Konsultasi Laktasi',
                'message' => 'Hai moms, Apakah Anda melihat adanya kesulitan menyusui? Carilah bantuan jika diperlukan, anda bisa berkonsultasi dengan konselor laktasi'
            ],
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '19:00:00',
                'title' => 'Pencatatan',
                'message' => 'Selamat malam bunda, Terus catat waktu makan dan reaksi bayi.'
            ],
            [
                'month_number' => 2,
                'week_number' => 5,
                'scheduled_time' => '22:00:00',
                'title' => 'Rutinitas Tidur',
                'message' => 'Hai ibu hebat, Ciptakan rutinitas tidur yang menenangkan untuk membantu Anda beralih ke tidur yang nyenyak'
            ],

            // Week 6
            [
                'month_number' => 2,
                'week_number' => 6,
                'scheduled_time' => '07:00:00',
                'title' => 'Pemantauan Pertumbuhan',
                'message' => 'Selamat pagi bunda, Pantau pertambahan berat badan bayi Anda. Pemberian makan secara teratur membantu menjaga pertumbuhannya.'
            ],
            [
                'month_number' => 2,
                'week_number' => 6,
                'scheduled_time' => '09:00:00',
                'title' => 'Kesehatan Mental',
                'message' => 'Hai bunda, Pantau suasana hati Anda setiap hari. Tidak apa-apa untuk mencari bantuan jika Anda merasa terus-menerus sedih.'
            ],
            [
                'month_number' => 2,
                'week_number' => 6,
                'scheduled_time' => '13:00:00',
                'title' => 'Aktivitas Fisik',
                'message' => 'Saatnya pemeriksaan siang, Lakukan aktivitas fisik ringan, seperti berjalan singkat, untuk meningkatkan suasana hati Anda.'
            ],
            [
                'month_number' => 2,
                'week_number' => 6,
                'scheduled_time' => '16:00:00',
                'title' => 'Konsultasi Laktasi',
                'message' => 'Hai moms, Apakah Anda melihat adanya kesulitan menyusui? Carilah bantuan jika diperlukan, anda bisa berkonsultasi dengan konselor laktasi'
            ],
            [
                'month_number' => 2,
                'week_number' => 6,
                'scheduled_time' => '19:00:00',
                'title' => 'Pencatatan',
                'message' => 'Selamat malam bunda, Terus catat waktu makan dan reaksi bayi.'
            ],
            [
                'month_number' => 2,
                'week_number' => 6,
                'scheduled_time' => '22:00:00',
                'title' => 'Rutinitas Tidur',
                'message' => 'Hai ibu hebat, Ciptakan rutinitas tidur yang menenangkan untuk membantu Anda beralih ke tidur yang nyenyak'
            ],

            // Week 7
            [
                'month_number' => 2,
                'week_number' => 7,
                'scheduled_time' => '07:00:00',
                'title' => 'Pemantauan Pertumbuhan',
                'message' => 'Selamat pagi bunda, Pantau pertambahan berat badan bayi Anda. Pemberian makan secara teratur membantu menjaga pertumbuhannya.'
            ],
            [
                'month_number' => 2,
                'week_number' => 7,
                'scheduled_time' => '09:00:00',
                'title' => 'Kesehatan Mental',
                'message' => 'Hai bunda, Pantau suasana hati Anda setiap hari. Tidak apa-apa untuk mencari bantuan jika Anda merasa terus-menerus sedih.'
            ],
            [
                'month_number' => 2,
                'week_number' => 7,
                'scheduled_time' => '13:00:00',
                'title' => 'Aktivitas Fisik',
                'message' => 'Saatnya pemeriksaan siang, Lakukan aktivitas fisik ringan, seperti berjalan singkat, untuk meningkatkan suasana hati Anda.'
            ],
            [
                'month_number' => 2,
                'week_number' => 7,
                'scheduled_time' => '16:00:00',
                'title' => 'Konsultasi Laktasi',
                'message' => 'Hai moms, Apakah Anda melihat adanya kesulitan menyusui? Carilah bantuan jika diperlukan, anda bisa berkonsultasi dengan konselor laktasi'
            ],
            [
                'month_number' => 2,
                'week_number' => 7,
                'scheduled_time' => '19:00:00',
                'title' => 'Pencatatan',
                'message' => 'Selamat malam bunda, Terus catat waktu makan dan reaksi bayi.'
            ],
            [
                'month_number' => 2,
                'week_number' => 7,
                'scheduled_time' => '22:00:00',
                'title' => 'Rutinitas Tidur',
                'message' => 'Hai ibu hebat, Ciptakan rutinitas tidur yang menenangkan untuk membantu Anda beralih ke tidur yang nyenyak'
            ],

            // Week 8
            [
                'month_number' => 2,
                'week_number' => 8,
                'scheduled_time' => '07:00:00',
                'title' => 'Pemantauan Pertumbuhan',
                'message' => 'Selamat pagi bunda, Pantau pertambahan berat badan bayi Anda. Pemberian makan secara teratur membantu menjaga pertumbuhannya.'
            ],
            [
                'month_number' => 2,
                'week_number' => 8,
                'scheduled_time' => '09:00:00',
                'title' => 'Kesehatan Mental',
                'message' => 'Hai bunda, Pantau suasana hati Anda setiap hari. Tidak apa-apa untuk mencari bantuan jika Anda merasa terus-menerus sedih.'
            ],
            [
                'month_number' => 2,
                'week_number' => 8,
                'scheduled_time' => '13:00:00',
                'title' => 'Aktivitas Fisik',
                'message' => 'Saatnya pemeriksaan siang, Lakukan aktivitas fisik ringan, seperti berjalan singkat, untuk meningkatkan suasana hati Anda.'
            ],
            [
                'month_number' => 2,
                'week_number' => 8,
                'scheduled_time' => '16:00:00',
                'title' => 'Konsultasi Laktasi',
                'message' => 'Hai moms, Apakah Anda melihat adanya kesulitan menyusui? Carilah bantuan jika diperlukan, anda bisa berkonsultasi dengan konselor laktasi'
            ],
            [
                'month_number' => 2,
                'week_number' => 8,
                'scheduled_time' => '19:00:00',
                'title' => 'Pencatatan',
                'message' => 'Selamat malam bunda, Terus catat waktu makan dan reaksi bayi.'
            ],
            [
                'month_number' => 2,
                'week_number' => 8,
                'scheduled_time' => '22:00:00',
                'title' => 'Rutinitas Tidur',
                'message' => 'Hai ibu hebat, Ciptakan rutinitas tidur yang menenangkan untuk membantu Anda beralih ke tidur yang nyenyak'
            ],

            // Month 3 (Weeks 9-12)
            [
                'month_number' => 3,
                'week_number' => 9,
                'scheduled_time' => '07:00:00',
                'title' => 'Efisiensi Menyusui',
                'message' => 'Saatnya pemeriksaann pagi, Bayi mungkin mulai lebih efisien dalam menyusu. Perhatikan tanda-tanda kenyang.'
            ],
            [
                'month_number' => 3,
                'week_number' => 9,
                'scheduled_time' => '10:00:00',
                'title' => 'Dukungan Keluarga',
                'message' => 'Hai bunda, Apakah Anda merasa sekitar anda mendukung utuk menyusui? Bicaralah dengan suami atau keluarga tentang bagaimana bunda ingin dibantu dan didukung dalam memberi ASI'
            ],
            [
                'month_number' => 3,
                'week_number' => 9,
                'scheduled_time' => '13:00:00',
                'title' => 'Pola Makan',
                'message' => 'Hai moms, Apakah Anda masih memberi makan sesuai permintaan? Ini penting untuk menjaga pasokan ASI yang banyak.'
            ],
            [
                'month_number' => 3,
                'week_number' => 9,
                'scheduled_time' => '16:00:00',
                'title' => 'Rasa Syukur',
                'message' => 'Selamat siang bunda, Latih rasa syukur. Catat tiga hal yang Anda syukuri hari ini.'
            ],
            [
                'month_number' => 3,
                'week_number' => 9,
                'scheduled_time' => '19:00:00',
                'title' => 'Evaluasi Kepuasan',
                'message' => 'Hai bunda, Evaluasi apakah bayi Anda puas setelah menyusu, salah satu tandanya adalah bayi bisa bersistirahat dengan tenang setelah sesi menyusui.'
            ],
            [
                'month_number' => 3,
                'week_number' => 9,
                'scheduled_time' => '22:00:00',
                'title' => 'Perubahan Suasana Hati',
                'message' => 'Hai ibu hebat, dengan mengakui adanya perubahan suasana hati, akan lebih mudah untuk mengenali dan mengatasinya, jangan abai ya.'
            ],

            // Week 10
            [
                'month_number' => 3,
                'week_number' => 10,
                'scheduled_time' => '07:00:00',
                'title' => 'Efisiensi Menyusui',
                'message' => 'Saatnya pemeriksaann pagi, Bayi mungkin mulai lebih efisien dalam menyusu. Perhatikan tanda-tanda kenyang.'
            ],
            [
                'month_number' => 3,
                'week_number' => 10,
                'scheduled_time' => '10:00:00',
                'title' => 'Dukungan Keluarga',
                'message' => 'Hai bunda, Apakah Anda merasa sekitar anda mendukung utuk menyusui? Bicaralah dengan suami atau keluarga tentang bagaimana bunda ingin dibantu dan didukung dalam memberi ASI'
            ],
            [
                'month_number' => 3,
                'week_number' => 10,
                'scheduled_time' => '13:00:00',
                'title' => 'Pola Makan',
                'message' => 'Hai moms, Apakah Anda masih memberi makan sesuai permintaan? Ini penting untuk menjaga pasokan ASI yang banyak.'
            ],
            [
                'month_number' => 3,
                'week_number' => 10,
                'scheduled_time' => '16:00:00',
                'title' => 'Rasa Syukur',
                'message' => 'Selamat siang bunda, Latih rasa syukur. Catat tiga hal yang Anda syukuri hari ini.'
            ],
            [
                'month_number' => 3,
                'week_number' => 10,
                'scheduled_time' => '19:00:00',
                'title' => 'Evaluasi Kepuasan',
                'message' => 'Hai bunda, Evaluasi apakah bayi Anda puas setelah menyusu, salah satu tandanya adalah bayi bisa bersistirahat dengan tenang setelah sesi menyusui.'
            ],
            [
                'month_number' => 3,
                'week_number' => 10,
                'scheduled_time' => '22:00:00',
                'title' => 'Perubahan Suasana Hati',
                'message' => 'Hai ibu hebat, dengan mengakui adanya perubahan suasana hati, akan lebih mudah untuk mengenali dan mengatasinya, jangan abai ya.'
            ],

            // Week 11
            [
                'month_number' => 3,
                'week_number' => 11,
                'scheduled_time' => '07:00:00',
                'title' => 'Efisiensi Menyusui',
                'message' => 'Saatnya pemeriksaann pagi, Bayi mungkin mulai lebih efisien dalam menyusu. Perhatikan tanda-tanda kenyang.'
            ],
            [
                'month_number' => 3,
                'week_number' => 11,
                'scheduled_time' => '10:00:00',
                'title' => 'Dukungan Keluarga',
                'message' => 'Hai bunda, Apakah Anda merasa sekitar anda mendukung utuk menyusui? Bicaralah dengan suami atau keluarga tentang bagaimana bunda ingin dibantu dan didukung dalam memberi ASI'
            ],
            [
                'month_number' => 3,
                'week_number' => 11,
                'scheduled_time' => '13:00:00',
                'title' => 'Pola Makan',
                'message' => 'Hai moms, Apakah Anda masih memberi makan sesuai permintaan? Ini penting untuk menjaga pasokan ASI yang banyak.'
            ],
            [
                'month_number' => 3,
                'week_number' => 11,
                'scheduled_time' => '16:00:00',
                'title' => 'Rasa Syukur',
                'message' => 'Selamat siang bunda, Latih rasa syukur. Catat tiga hal yang Anda syukuri hari ini.'
            ],
            [
                'month_number' => 3,
                'week_number' => 11,
                'scheduled_time' => '19:00:00',
                'title' => 'Evaluasi Kepuasan',
                'message' => 'Hai bunda, Evaluasi apakah bayi Anda puas setelah menyusu, salah satu tandanya adalah bayi bisa bersistirahat dengan tenang setelah sesi menyusui.'
            ],
            [
                'month_number' => 3,
                'week_number' => 11,
                'scheduled_time' => '22:00:00',
                'title' => 'Perubahan Suasana Hati',
                'message' => 'Hai ibu hebat, dengan mengakui adanya perubahan suasana hati, akan lebih mudah untuk mengenali dan mengatasinya, jangan abai ya.'
            ],

            // Week 12
            [
                'month_number' => 3,
                'week_number' => 12,
                'scheduled_time' => '07:00:00',
                'title' => 'Efisiensi Menyusui',
                'message' => 'Saatnya pemeriksaann pagi, Bayi mungkin mulai lebih efisien dalam menyusu. Perhatikan tanda-tanda kenyang.'
            ],
            [
                'month_number' => 3,
                'week_number' => 12,
                'scheduled_time' => '10:00:00',
                'title' => 'Dukungan Keluarga',
                'message' => 'Hai bunda, Apakah Anda merasa sekitar anda mendukung utuk menyusui? Bicaralah dengan suami atau keluarga tentang bagaimana bunda ingin dibantu dan didukung dalam memberi ASI'
            ],
            [
                'month_number' => 3,
                'week_number' => 12,
                'scheduled_time' => '13:00:00',
                'title' => 'Pola Makan',
                'message' => 'Hai moms, Apakah Anda masih memberi makan sesuai permintaan? Ini penting untuk menjaga pasokan ASI yang banyak.'
            ],
            [
                'month_number' => 3,
                'week_number' => 12,
                'scheduled_time' => '16:00:00',
                'title' => 'Rasa Syukur',
                'message' => 'Selamat siang bunda, Latih rasa syukur. Catat tiga hal yang Anda syukuri hari ini.'
            ],
            [
                'month_number' => 3,
                'week_number' => 12,
                'scheduled_time' => '19:00:00',
                'title' => 'Evaluasi Kepuasan',
                'message' => 'Hai bunda, Evaluasi apakah bayi Anda puas setelah menyusu, salah satu tandanya adalah bayi bisa bersistirahat dengan tenang setelah sesi menyusui.'
            ],
            [
                'month_number' => 3,
                'week_number' => 12,
                'scheduled_time' => '22:00:00',
                'title' => 'Perubahan Suasana Hati',
                'message' => 'Hai ibu hebat, dengan mengakui adanya perubahan suasana hati, akan lebih mudah untuk mengenali dan mengatasinya, jangan abai ya.'
            ],

            // Month 4 (Weeks 13-16)
            [
                'month_number' => 4,
                'week_number' => 13,
                'scheduled_time' => '07:00:00',
                'title' => 'Percepatan Pertumbuhan',
                'message' => 'Selamat pagi bunda, Percepatan pertumbuhan bisa terjadi. Bayi Anda mungkin menyusu lebih sering bulan ini.'
            ],
            [
                'month_number' => 4,
                'week_number' => 13,
                'scheduled_time' => '10:00:00',
                'title' => 'Dukungan Profesional',
                'message' => 'Hai moms, Prioritaskan kesehatan mental Anda. Pertimbangkan untuk berbicara dengan terapis jika Anda membutuhkan dukungan profesional.'
            ],
            [
                'month_number' => 4,
                'week_number' => 13,
                'scheduled_time' => '13:00:00',
                'title' => 'Penggunaan Payudara',
                'message' => 'Apakah Anda menawarkan kedua payudara setiap kali sesi menyusui? Jangan lupa di catat ya'
            ],
            [
                'month_number' => 4,
                'week_number' => 13,
                'scheduled_time' => '16:00:00',
                'title' => 'Sosialisasi',
                'message' => 'Hai bunda, Bersosialisasi dengan teman atau bergabung dengan kelompok dukungan menyusui untuk berbagi pengalaman Anda bisa menyenangkan loh.'
            ],
            [
                'month_number' => 4,
                'week_number' => 13,
                'scheduled_time' => '19:00:00',
                'title' => 'Tumbuh Gigi',
                'message' => 'Selamat malam bunda, Pantau tanda-tanda tumbuh gigi yang mungkin mempengaruhi proses menyusui.'
            ],
            [
                'month_number' => 4,
                'week_number' => 13,
                'scheduled_time' => '22:00:00',
                'title' => 'Kesehatan Emosional',
                'message' => 'Hai ibu hebat, Renungkan kesehatan emosional Anda. Apakah Anda telah berbuat baik pada diri sendiri hari ini?'
            ],

            // Week 14
            [
                'month_number' => 4,
                'week_number' => 14,
                'scheduled_time' => '07:00:00',
                'title' => 'Percepatan Pertumbuhan',
                'message' => 'Selamat pagi bunda, Percepatan pertumbuhan bisa terjadi. Bayi Anda mungkin menyusu lebih sering bulan ini.'
            ],
            [
                'month_number' => 4,
                'week_number' => 14,
                'scheduled_time' => '10:00:00',
                'title' => 'Dukungan Profesional',
                'message' => 'Hai moms, Prioritaskan kesehatan mental Anda. Pertimbangkan untuk berbicara dengan terapis jika Anda membutuhkan dukungan profesional.'
            ],
            [
                'month_number' => 4,
                'week_number' => 14,
                'scheduled_time' => '13:00:00',
                'title' => 'Penggunaan Payudara',
                'message' => 'Apakah Anda menawarkan kedua payudara setiap kali sesi menyusui? Jangan lupa di catat ya'
            ],
            [
                'month_number' => 4,
                'week_number' => 14,
                'scheduled_time' => '16:00:00',
                'title' => 'Sosialisasi',
                'message' => 'Hai bunda, Bersosialisasi dengan teman atau bergabung dengan kelompok dukungan menyusui untuk berbagi pengalaman Anda bisa menyenangkan loh.'
            ],
            [
                'month_number' => 4,
                'week_number' => 14,
                'scheduled_time' => '19:00:00',
                'title' => 'Tumbuh Gigi',
                'message' => 'Selamat malam bunda, Pantau tanda-tanda tumbuh gigi yang mungkin mempengaruhi proses menyusui.'
            ],
            [
                'month_number' => 4,
                'week_number' => 14,
                'scheduled_time' => '22:00:00',
                'title' => 'Kesehatan Emosional',
                'message' => 'Hai ibu hebat, Renungkan kesehatan emosional Anda. Apakah Anda telah berbuat baik pada diri sendiri hari ini?'
            ],

            // Week 15
            [
                'month_number' => 4,
                'week_number' => 15,
                'scheduled_time' => '07:00:00',
                'title' => 'Percepatan Pertumbuhan',
                'message' => 'Selamat pagi bunda, Percepatan pertumbuhan bisa terjadi. Bayi Anda mungkin menyusu lebih sering bulan ini.'
            ],
            [
                'month_number' => 4,
                'week_number' => 15,
                'scheduled_time' => '10:00:00',
                'title' => 'Dukungan Profesional',
                'message' => 'Hai moms, Prioritaskan kesehatan mental Anda. Pertimbangkan untuk berbicara dengan terapis jika Anda membutuhkan dukungan profesional.'
            ],
            [
                'month_number' => 4,
                'week_number' => 15,
                'scheduled_time' => '13:00:00',
                'title' => 'Penggunaan Payudara',
                'message' => 'Apakah Anda menawarkan kedua payudara setiap kali sesi menyusui? Jangan lupa di catat ya'
            ],
            [
                'month_number' => 4,
                'week_number' => 15,
                'scheduled_time' => '16:00:00',
                'title' => 'Sosialisasi',
                'message' => 'Hai bunda, Bersosialisasi dengan teman atau bergabung dengan kelompok dukungan menyusui untuk berbagi pengalaman Anda bisa menyenangkan loh.'
            ],
            [
                'month_number' => 4,
                'week_number' => 15,
                'scheduled_time' => '19:00:00',
                'title' => 'Tumbuh Gigi',
                'message' => 'Selamat malam bunda, Pantau tanda-tanda tumbuh gigi yang mungkin mempengaruhi proses menyusui.'
            ],
            [
                'month_number' => 4,
                'week_number' => 15,
                'scheduled_time' => '22:00:00',
                'title' => 'Kesehatan Emosional',
                'message' => 'Hai ibu hebat, Renungkan kesehatan emosional Anda. Apakah Anda telah berbuat baik pada diri sendiri hari ini?'
            ],

            // Week 16
            [
                'month_number' => 4,
                'week_number' => 16,
                'scheduled_time' => '07:00:00',
                'title' => 'Percepatan Pertumbuhan',
                'message' => 'Selamat pagi bunda, Percepatan pertumbuhan bisa terjadi. Bayi Anda mungkin menyusu lebih sering bulan ini.'
            ],
            [
                'month_number' => 4,
                'week_number' => 16,
                'scheduled_time' => '10:00:00',
                'title' => 'Dukungan Profesional',
                'message' => 'Hai moms, Prioritaskan kesehatan mental Anda. Pertimbangkan untuk berbicara dengan terapis jika Anda membutuhkan dukungan profesional.'
            ],
            [
                'month_number' => 4,
                'week_number' => 16,
                'scheduled_time' => '13:00:00',
                'title' => 'Penggunaan Payudara',
                'message' => 'Apakah Anda menawarkan kedua payudara setiap kali sesi menyusui? Jangan lupa di catat ya'
            ],
            [
                'month_number' => 4,
                'week_number' => 16,
                'scheduled_time' => '16:00:00',
                'title' => 'Sosialisasi',
                'message' => 'Hai bunda, Bersosialisasi dengan teman atau bergabung dengan kelompok dukungan menyusui untuk berbagi pengalaman Anda bisa menyenangkan loh.'
            ],
            [
                'month_number' => 4,
                'week_number' => 16,
                'scheduled_time' => '19:00:00',
                'title' => 'Tumbuh Gigi',
                'message' => 'Selamat malam bunda, Pantau tanda-tanda tumbuh gigi yang mungkin mempengaruhi proses menyusui.'
            ],
            [
                'month_number' => 4,
                'week_number' => 16,
                'scheduled_time' => '22:00:00',
                'title' => 'Kesehatan Emosional',
                'message' => 'Hai ibu hebat, Renungkan kesehatan emosional Anda. Apakah Anda telah berbuat baik pada diri sendiri hari ini?'
            ],

            // Month 5 (Weeks 17-20)
            [
                'month_number' => 5,
                'week_number' => 17,
                'scheduled_time' => '07:00:00',
                'title' => 'Tummy Time',
                'message' => 'Hai moms, Perkenalkan tummy time setelah menyusui untuk membantu perkembangan bayi Anda, terutama kekuatan otot dan tulang bayi.'
            ],
            [
                'month_number' => 5,
                'week_number' => 17,
                'scheduled_time' => '10:00:00',
                'title' => 'Keseimbangan Peran',
                'message' => 'Selamat pagi bunda, tidak salah bila perempuan menyeimbangkan tanggung jawab sebagai ibu rumah tangga, tapi kalau kewalahan ibu bisa minta bantuan ke suami atau keluarga.'
            ],
            [
                'month_number' => 5,
                'week_number' => 17,
                'scheduled_time' => '13:00:00',
                'title' => 'Pemantauan Pola',
                'message' => 'Perhatikan baik-baik pola pemberian makan dan perubahan apa pun yang nampak pada bayi anda.'
            ],
            [
                'month_number' => 5,
                'week_number' => 17,
                'scheduled_time' => '16:00:00',
                'title' => 'Waktu Hobi',
                'message' => 'Hai bunda, Lakukan hobi atau aktivitas yang membawa kegembiraan dan relaksasi.'
            ],
            [
                'month_number' => 5,
                'week_number' => 17,
                'scheduled_time' => '19:00:00',
                'title' => 'Pemeriksaan Popok',
                'message' => 'Hai moms, pastikan bayi Anda masih tidak memakai popok yang basah dan kotor untuk menjamin tidur yang efektif'
            ],
            [
                'month_number' => 5,
                'week_number' => 17,
                'scheduled_time' => '22:00:00',
                'title' => 'Pantau Mood',
                'message' => 'Hai ibu hebat, Pantau setiap perubahan suasana hati dan tingkat energi. Konsistensi dan keseimbangan adalah kunci kesehatan jiwa.'
            ],

            // Week 18
            [
                'month_number' => 5,
                'week_number' => 18,
                'scheduled_time' => '07:00:00',
                'title' => 'Tummy Time',
                'message' => 'Hai moms, Perkenalkan tummy time setelah menyusui untuk membantu perkembangan bayi Anda, terutama kekuatan otot dan tulang bayi.'
            ],
            [
                'month_number' => 5,
                'week_number' => 18,
                'scheduled_time' => '10:00:00',
                'title' => 'Keseimbangan Peran',
                'message' => 'Selamat pagi bunda, tidak salah bila perempuan menyeimbangkan tanggung jawab sebagai ibu rumah tangga, tapi kalau kewalahan ibu bisa minta bantuan ke suami atau keluarga.'
            ],
            [
                'month_number' => 5,
                'week_number' => 18,
                'scheduled_time' => '13:00:00',
                'title' => 'Pemantauan Pola',
                'message' => 'Perhatikan baik-baik pola pemberian makan dan perubahan apa pun yang nampak pada bayi anda.'
            ],
            [
                'month_number' => 5,
                'week_number' => 18,
                'scheduled_time' => '16:00:00',
                'title' => 'Waktu Hobi',
                'message' => 'Hai bunda, Lakukan hobi atau aktivitas yang membawa kegembiraan dan relaksasi.'
            ],
            [
                'month_number' => 5,
                'week_number' => 18,
                'scheduled_time' => '19:00:00',
                'title' => 'Pemeriksaan Popok',
                'message' => 'Hai moms, pastikan bayi Anda masih tidak memakai popok yang basah dan kotor untuk menjamin tidur yang efektif'
            ],
            [
                'month_number' => 5,
                'week_number' => 18,
                'scheduled_time' => '22:00:00',
                'title' => 'Pantau Mood',
                'message' => 'Hai ibu hebat, Pantau setiap perubahan suasana hati dan tingkat energi. Konsistensi dan keseimbangan adalah kunci kesehatan jiwa.'
            ],

            // Week 19
            [
                'month_number' => 5,
                'week_number' => 19,
                'scheduled_time' => '07:00:00',
                'title' => 'Tummy Time',
                'message' => 'Hai moms, Perkenalkan tummy time setelah menyusui untuk membantu perkembangan bayi Anda, terutama kekuatan otot dan tulang bayi.'
            ],
            [
                'month_number' => 5,
                'week_number' => 19,
                'scheduled_time' => '10:00:00',
                'title' => 'Keseimbangan Peran',
                'message' => 'Selamat pagi bunda, tidak salah bila perempuan menyeimbangkan tanggung jawab sebagai ibu rumah tangga, tapi kalau kewalahan ibu bisa minta bantuan ke suami atau keluarga.'
            ],
            [
                'month_number' => 5,
                'week_number' => 19,
                'scheduled_time' => '13:00:00',
                'title' => 'Pemantauan Pola',
                'message' => 'Perhatikan baik-baik pola pemberian makan dan perubahan apa pun yang nampak pada bayi anda.'
            ],
            [
                'month_number' => 5,
                'week_number' => 19,
                'scheduled_time' => '16:00:00',
                'title' => 'Waktu Hobi',
                'message' => 'Hai bunda, Lakukan hobi atau aktivitas yang membawa kegembiraan dan relaksasi.'
            ],
            [
                'month_number' => 5,
                'week_number' => 19,
                'scheduled_time' => '19:00:00',
                'title' => 'Pemeriksaan Popok',
                'message' => 'Hai moms, pastikan bayi Anda masih tidak memakai popok yang basah dan kotor untuk menjamin tidur yang efektif'
            ],
            [
                'month_number' => 5,
                'week_number' => 19,
                'scheduled_time' => '22:00:00',
                'title' => 'Pantau Mood',
                'message' => 'Hai ibu hebat, Pantau setiap perubahan suasana hati dan tingkat energi. Konsistensi dan keseimbangan adalah kunci kesehatan jiwa.'
            ],

            // Week 20
            [
                'month_number' => 5,
                'week_number' => 20,
                'scheduled_time' => '07:00:00',
                'title' => 'Tummy Time',
                'message' => 'Hai moms, Perkenalkan tummy time setelah menyusui untuk membantu perkembangan bayi Anda, terutama kekuatan otot dan tulang bayi.'
            ],
            [
                'month_number' => 5,
                'week_number' => 20,
                'scheduled_time' => '10:00:00',
                'title' => 'Keseimbangan Peran',
                'message' => 'Selamat pagi bunda, tidak salah bila perempuan menyeimbangkan tanggung jawab sebagai ibu rumah tangga, tapi kalau kewalahan ibu bisa minta bantuan ke suami atau keluarga.'
            ],
            [
                'month_number' => 5,
                'week_number' => 20,
                'scheduled_time' => '13:00:00',
                'title' => 'Pemantauan Pola',
                'message' => 'Perhatikan baik-baik pola pemberian makan dan perubahan apa pun yang nampak pada bayi anda.'
            ],
            [
                'month_number' => 5,
                'week_number' => 20,
                'scheduled_time' => '16:00:00',
                'title' => 'Waktu Hobi',
                'message' => 'Hai bunda, Lakukan hobi atau aktivitas yang membawa kegembiraan dan relaksasi.'
            ],
            [
                'month_number' => 5,
                'week_number' => 20,
                'scheduled_time' => '19:00:00',
                'title' => 'Pemeriksaan Popok',
                'message' => 'Hai moms, pastikan bayi Anda masih tidak memakai popok yang basah dan kotor untuk menjamin tidur yang efektif'
            ],
            [
                'month_number' => 5,
                'week_number' => 20,
                'scheduled_time' => '22:00:00',
                'title' => 'Pantau Mood',
                'message' => 'Hai ibu hebat, Pantau setiap perubahan suasana hati dan tingkat energi. Konsistensi dan keseimbangan adalah kunci kesehatan jiwa.'
            ],

            // Month 6 (Weeks 21-24)
            [
                'month_number' => 6,
                'week_number' => 21,
                'scheduled_time' => '07:00:00',
                'title' => 'MPASI',
                'message' => 'Saatnya pemeriksaan pagi, Makanan padat (MP-ASI) mungkin akan segera diperkenalkan, namun pemberian ASI harus tetap dilanjutkan sesuai permintaan ya.'
            ],
            [
                'month_number' => 6,
                'week_number' => 21,
                'scheduled_time' => '09:00:00',
                'title' => 'Kesadaran Mental',
                'message' => 'Hai moms, Latih kesadaran mental dengan meluangkan beberapa menit untuk hadir dan fokus pada napas Anda. Lakukan teknik relaksasi napas bila perlu'
            ],
            [
                'month_number' => 6,
                'week_number' => 21,
                'scheduled_time' => '13:00:00',
                'title' => 'ASI Eksklusif',
                'message' => 'Hai bunda, semangat menyusui, sebentar lagi ASI eksklusif mu tercapai loh, selamat ya.'
            ],
            [
                'month_number' => 6,
                'week_number' => 21,
                'scheduled_time' => '16:00:00',
                'title' => 'Koneksi Sosial',
                'message' => 'Selamat siang bunda, Tetap terhubung dengan orang yang Anda cintai ya seperti sahabat, teman, saudara. Dukungan emosional sangat penting untuk perempuan tetap sehat secara utuh.'
            ],
            [
                'month_number' => 6,
                'week_number' => 21,
                'scheduled_time' => '19:00:00',
                'title' => 'ASI dan MPASI',
                'message' => 'Saatnya pemeriksaan malam, pertahankan pemberian ASI sebagai sumber kenyamanan dan nutrisi bahkan dengan pengenalan makanan padat.'
            ],
            [
                'month_number' => 6,
                'week_number' => 21,
                'scheduled_time' => '22:00:00',
                'title' => 'Perjalanan Mental',
                'message' => 'Hai ibu hebat, Tinjau perjalanan kesehatan mental Anda, ingatlah untuk selalu menghargai diri sendiri, sekecil apapun itu, sampai di sini anda itu ibu yang hebat loh, semangat.'
            ],

            // Week 22
            [
                'month_number' => 6,
                'week_number' => 22,
                'scheduled_time' => '07:00:00',
                'title' => 'MPASI',
                'message' => 'Saatnya pemeriksaan pagi, Makanan padat (MP-ASI) mungkin akan segera diperkenalkan, namun pemberian ASI harus tetap dilanjutkan sesuai permintaan ya.'
            ],
            [
                'month_number' => 6,
                'week_number' => 22,
                'scheduled_time' => '09:00:00',
                'title' => 'Kesadaran Mental',
                'message' => 'Hai moms, Latih kesadaran mental dengan meluangkan beberapa menit untuk hadir dan fokus pada napas Anda. Lakukan teknik relaksasi napas bila perlu'
            ],
            [
                'month_number' => 6,
                'week_number' => 22,
                'scheduled_time' => '13:00:00',
                'title' => 'ASI Eksklusif',
                'message' => 'Hai bunda, semangat menyusui, sebentar lagi ASI eksklusif mu tercapai loh, selamat ya.'
            ],
            [
                'month_number' => 6,
                'week_number' => 22,
                'scheduled_time' => '16:00:00',
                'title' => 'Koneksi Sosial',
                'message' => 'Selamat siang bunda, Tetap terhubung dengan orang yang Anda cintai ya seperti sahabat, teman, saudara. Dukungan emosional sangat penting untuk perempuan tetap sehat secara utuh.'
            ],
            [
                'month_number' => 6,
                'week_number' => 22,
                'scheduled_time' => '19:00:00',
                'title' => 'ASI dan MPASI',
                'message' => 'Saatnya pemeriksaan malam, pertahankan pemberian ASI sebagai sumber kenyamanan dan nutrisi bahkan dengan pengenalan makanan padat.'
            ],
            [
                'month_number' => 6,
                'week_number' => 22,
                'scheduled_time' => '22:00:00',
                'title' => 'Perjalanan Mental',
                'message' => 'Hai ibu hebat, Tinjau perjalanan kesehatan mental Anda, ingatlah untuk selalu menghargai diri sendiri, sekecil apapun itu, sampai di sini anda itu ibu yang hebat loh, semangat.'
            ],

            // Week 23
            [
                'month_number' => 6,
                'week_number' => 23,
                'scheduled_time' => '07:00:00',
                'title' => 'MPASI',
                'message' => 'Saatnya pemeriksaan pagi, Makanan padat (MP-ASI) mungkin akan segera diperkenalkan, namun pemberian ASI harus tetap dilanjutkan sesuai permintaan ya.'
            ],
            [
                'month_number' => 6,
                'week_number' => 23,
                'scheduled_time' => '09:00:00',
                'title' => 'Kesadaran Mental',
                'message' => 'Hai moms, Latih kesadaran mental dengan meluangkan beberapa menit untuk hadir dan fokus pada napas Anda. Lakukan teknik relaksasi napas bila perlu'
            ],
            [
                'month_number' => 6,
                'week_number' => 23,
                'scheduled_time' => '13:00:00',
                'title' => 'ASI Eksklusif',
                'message' => 'Hai bunda, semangat menyusui, sebentar lagi ASI eksklusif mu tercapai loh, selamat ya.'
            ],
            [
                'month_number' => 6,
                'week_number' => 23,
                'scheduled_time' => '16:00:00',
                'title' => 'Koneksi Sosial',
                'message' => 'Selamat siang bunda, Tetap terhubung dengan orang yang Anda cintai ya seperti sahabat, teman, saudara. Dukungan emosional sangat penting untuk perempuan tetap sehat secara utuh.'
            ],
            [
                'month_number' => 6,
                'week_number' => 23,
                'scheduled_time' => '19:00:00',
                'title' => 'ASI dan MPASI',
                'message' => 'Saatnya pemeriksaan malam, pertahankan pemberian ASI sebagai sumber kenyamanan dan nutrisi bahkan dengan pengenalan makanan padat.'
            ],
            [
                'month_number' => 6,
                'week_number' => 23,
                'scheduled_time' => '22:00:00',
                'title' => 'Perjalanan Mental',
                'message' => 'Hai ibu hebat, Tinjau perjalanan kesehatan mental Anda, ingatlah untuk selalu menghargai diri sendiri, sekecil apapun itu, sampai di sini anda itu ibu yang hebat loh, semangat.'
            ],

            // Week 24
            [
                'month_number' => 6,
                'week_number' => 24,
                'scheduled_time' => '07:00:00',
                'title' => 'MPASI',
                'message' => 'Saatnya pemeriksaan pagi, Makanan padat (MP-ASI) mungkin akan segera diperkenalkan, namun pemberian ASI harus tetap dilanjutkan sesuai permintaan ya.'
            ],
            [
                'month_number' => 6,
                'week_number' => 24,
                'scheduled_time' => '09:00:00',
                'title' => 'Kesadaran Mental',
                'message' => 'Hai moms, Latih kesadaran mental dengan meluangkan beberapa menit untuk hadir dan fokus pada napas Anda. Lakukan teknik relaksasi napas bila perlu'
            ],
            [
                'month_number' => 6,
                'week_number' => 24,
                'scheduled_time' => '13:00:00',
                'title' => 'ASI Eksklusif',
                'message' => 'Hai bunda, semangat menyusui, sebentar lagi ASI eksklusif mu tercapai loh, selamat ya.'
            ],
            [
                'month_number' => 6,
                'week_number' => 24,
                'scheduled_time' => '16:00:00',
                'title' => 'Koneksi Sosial',
                'message' => 'Selamat siang bunda, Tetap terhubung dengan orang yang Anda cintai ya seperti sahabat, teman, saudara. Dukungan emosional sangat penting untuk perempuan tetap sehat secara utuh.'
            ],
            [
                'month_number' => 6,
                'week_number' => 24,
                'scheduled_time' => '19:00:00',
                'title' => 'ASI dan MPASI',
                'message' => 'Saatnya pemeriksaan malam, pertahankan pemberian ASI sebagai sumber kenyamanan dan nutrisi bahkan dengan pengenalan makanan padat.'
            ],
            [
                'month_number' => 6,
                'week_number' => 24,
                'scheduled_time' => '22:00:00',
                'title' => 'Perjalanan Mental',
                'message' => 'Hai ibu hebat, Tinjau perjalanan kesehatan mental Anda, ingatlah untuk selalu menghargai diri sendiri, sekecil apapun itu, sampai di sini anda itu ibu yang hebat loh, semangat.'
            ],

            // Month 7 (Final notifications)
            [
                'month_number' => 7,
                'week_number' => 25,
                'scheduled_time' => '10:00:00',
                'title' => 'Pencapaian ASI Eksklusif',
                'message' => 'Selamat Bunda, adik bayi berhasil menyusui eksklusif, saatnya pemberian MP-ASI, namun pemberian ASI harus tetap dilanjutkan sesuai permintaan ya.'
            ],
            [
                'month_number' => 7,
                'week_number' => 25,
                'scheduled_time' => '16:00:00',
                'title' => 'Selamat!',
                'message' => 'Hai bu, kamu hebat sudah sampai di sini, selamat yah, jangan lupa banyak belajar, menjadi ibu yang bahagia itu penting loh.'
            ]
        ];

        Notification::insert($notifications);
    }
}

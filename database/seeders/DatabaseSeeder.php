<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DomainSeeder extends Seeder
{
    public function run(): void
    {
        $domains = [
            // Domain Umum (Global / gTLD)
            ['name' => '.com',     'description' => 'Domain paling populer di dunia, cocok untuk semua jenis website.',  'price' => 150000,  'status' => 'Available'],
            ['name' => '.net',     'description' => 'Cocok untuk perusahaan teknologi dan jaringan.',                     'price' => 160000,  'status' => 'Available'],
            ['name' => '.org',     'description' => 'Ideal untuk organisasi nirlaba.',                                    'price' => 155000,  'status' => 'Available'],
            ['name' => '.info',    'description' => 'Cocok untuk website informasi.',                                     'price' => 120000,  'status' => 'Available'],
            ['name' => '.biz',     'description' => 'Khusus untuk bisnis dan usaha.',                                     'price' => 130000,  'status' => 'Available'],
            ['name' => '.online',  'description' => 'Domain modern untuk bisnis online.',                                 'price' => 110000,  'status' => 'Available'],
            ['name' => '.site',    'description' => 'Domain serbaguna untuk berbagai website.',                           'price' => 115000,  'status' => 'Available'],
            ['name' => '.website', 'description' => 'Cocok untuk portofolio dan website personal.',                       'price' => 110000,  'status' => 'Available'],
            ['name' => '.app',     'description' => 'Ideal untuk aplikasi mobile dan web.',                               'price' => 200000,  'status' => 'Available'],
            ['name' => '.tech',    'description' => 'Untuk startup dan perusahaan teknologi.',                            'price' => 250000,  'status' => 'Available'],
            ['name' => '.store',   'description' => 'Sempurna untuk toko online dan e-commerce.',                         'price' => 180000,  'status' => 'Available'],
            ['name' => '.blog',    'description' => 'Untuk blogger dan konten kreator.',                                  'price' => 140000,  'status' => 'Available'],
            ['name' => '.digital', 'description' => 'Untuk agensi dan bisnis digital.',                                   'price' => 220000,  'status' => 'Available'],
            ['name' => '.cloud',   'description' => 'Untuk layanan cloud dan SaaS.',                                      'price' => 230000,  'status' => 'Available'],
            ['name' => '.xyz',     'description' => 'Domain murah dan populer untuk berbagai kebutuhan.',                 'price' => 85000,   'status' => 'Available'],

            // Domain Bisnis & Profesional
            ['name' => '.company',    'description' => 'Khusus untuk perusahaan.',                         'price' => 200000, 'status' => 'Available'],
            ['name' => '.business',   'description' => 'Untuk bisnis profesional.',                        'price' => 195000, 'status' => 'Available'],
            ['name' => '.solutions',  'description' => 'Cocok untuk perusahaan solusi bisnis.',             'price' => 210000, 'status' => 'Available'],
            ['name' => '.services',   'description' => 'Untuk penyedia layanan profesional.',               'price' => 205000, 'status' => 'Available'],
            ['name' => '.agency',     'description' => 'Untuk agensi kreatif dan digital.',                 'price' => 220000, 'status' => 'Available'],
            ['name' => '.studio',     'description' => 'Untuk studio desain, foto, dan musik.',             'price' => 215000, 'status' => 'Available'],
            ['name' => '.consulting', 'description' => 'Untuk konsultan bisnis dan profesional.',           'price' => 230000, 'status' => 'Available'],
            ['name' => '.group',      'description' => 'Untuk grup perusahaan dan holding.',                'price' => 210000, 'status' => 'Available'],
            ['name' => '.global',     'description' => 'Untuk bisnis skala internasional.',                 'price' => 250000, 'status' => 'Available'],

            // Domain Toko & E-Commerce
            ['name' => '.shop',   'description' => 'Domain terbaik untuk toko online.',          'price' => 175000, 'status' => 'Available'],
            ['name' => '.market', 'description' => 'Untuk marketplace dan pasar online.',         'price' => 180000, 'status' => 'Available'],
            ['name' => '.mart',   'description' => 'Untuk minimarket dan toko serba ada.',        'price' => 160000, 'status' => 'Available'],
            ['name' => '.sale',   'description' => 'Cocok untuk website promosi dan diskon.',     'price' => 155000, 'status' => 'Available'],
            ['name' => '.deals',  'description' => 'Untuk website deals dan penawaran spesial.',  'price' => 160000, 'status' => 'Available'],

            // Domain Edukasi & Organisasi
            ['name' => '.ac.id',  'description' => 'Khusus untuk kampus dan perguruan tinggi Indonesia.',  'price' => 100000, 'status' => 'Available'],
            ['name' => '.sch.id', 'description' => 'Khusus untuk sekolah di Indonesia.',                   'price' => 100000, 'status' => 'Available'],
            ['name' => '.or.id',  'description' => 'Untuk organisasi resmi di Indonesia.',                 'price' => 100000, 'status' => 'Available'],

            // Domain Indonesia (ccTLD)
            ['name' => '.id',     'description' => 'Domain resmi Indonesia, cocok untuk semua bisnis lokal.',   'price' => 250000, 'status' => 'Available'],
            ['name' => '.co.id',  'description' => 'Untuk perusahaan resmi di Indonesia.',                      'price' => 200000, 'status' => 'Available'],
            ['name' => '.go.id',  'description' => 'Khusus instansi pemerintah Indonesia.',                     'price' => 100000, 'status' => 'Available'],
            ['name' => '.desa.id','description' => 'Untuk website desa di Indonesia.',                          'price' => 80000,  'status' => 'Available'],
            ['name' => '.my.id',  'description' => 'Domain personal Indonesia yang populer dan murah.',         'price' => 75000,  'status' => 'Available'],
            ['name' => '.biz.id', 'description' => 'Untuk bisnis lokal Indonesia.',                             'price' => 100000, 'status' => 'Available'],
            ['name' => '.web.id', 'description' => 'Untuk website pribadi dan komunitas di Indonesia.',         'price' => 90000,  'status' => 'Available'],

            // Domain Negara (ccTLD)
            ['name' => '.us', 'description' => 'Domain resmi Amerika Serikat.',  'price' => 130000, 'status' => 'Available'],
            ['name' => '.uk', 'description' => 'Domain resmi Inggris.',           'price' => 140000, 'status' => 'Available'],
            ['name' => '.au', 'description' => 'Domain resmi Australia.',         'price' => 145000, 'status' => 'Available'],
            ['name' => '.sg', 'description' => 'Domain resmi Singapura.',         'price' => 150000, 'status' => 'Available'],
            ['name' => '.jp', 'description' => 'Domain resmi Jepang.',            'price' => 160000, 'status' => 'Available'],
            ['name' => '.my', 'description' => 'Domain resmi Malaysia.',          'price' => 135000, 'status' => 'Available'],
            ['name' => '.de', 'description' => 'Domain resmi Jerman.',            'price' => 140000, 'status' => 'Available'],
            ['name' => '.fr', 'description' => 'Domain resmi Perancis.',          'price' => 140000, 'status' => 'Available'],
        ];

        foreach ($domains as $domain) {
            // Hindari duplikat kalau seeder dijalankan berkali-kali
            DB::table('domains')->updateOrInsert(
                ['name' => $domain['name']],
                [
                    'slug'        => Str::slug($domain['name']),
                    'description' => $domain['description'],
                    'price'       => $domain['price'],
                    'status'      => $domain['status'],
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ]
            );
        }

        $this->command->info('✅ Domain seeder berhasil! ' . count($domains) . ' domain ditambahkan.');
    }
}
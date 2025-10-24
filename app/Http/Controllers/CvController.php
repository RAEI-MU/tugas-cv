<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass; 

class CvController extends Controller
{
    /**
     * Menampilkan halaman utama CV dengan data.
     */
    public function index()
    {
        // Data Dummy untuk Identitas (Sidebar)
        $identitas = (object) [
            'nama_lengkap' => 'Reyhan Berliando',
            'ttl' => 'Bantul, 3 Maret 2004',
            'alamat' => 'Jl. Pleret No. 20, Bantul, Yogyakarta',
            'email' => 'reyhanberliando334@gmail.com',
            'telepon' => '085157440334',
            'wa_link' => 'https://wa.me/6285157440334', 
            'foto_profil' => asset('images/profile.jpg') 
        ];

        $pendidikan = [
            (object) [
                'tahun_mulai' => '2023',
                'tahun_selesai' => 'Sekarang',
                'institusi' => 'Universitas Teknologi Yogyakarta',
                'jurusan' => 'Sistem Informasi'
            ],
            (object) [
                'tahun_mulai' => '2020',
                'tahun_selesai' => '2023',
                'institusi' => 'SMA Negeri 1 Turi',
                'jurusan' => 'IPA'
            ],
            (object) [
                'tahun_mulai' => '2017',
                'tahun_selesai' => '2020',
                'institusi' => 'SMP Negeri 2 Turi',
                'jurusan' => ''
            ]

        ];

        $pekerjaan = [
            (object) [
                'tahun_mulai' => '2023',
                'tahun_selesai' => 'Sekarang',
                'perusahaan' => 'PT. Parabellum Taktis Indonesia',
                'jabatan' => '',
                'deskripsi' => 'Membantu pengembangan fitur-fitur baru pada platform e-commerce perusahaan menggunakan PHP native.'
            ]
        ];

        $skills = [
            (object) ['nama_skill' => 'Java'],
            (object) ['nama_skill' => 'PHP'],
            (object) ['nama_skill' => 'JavaScript'],
            (object) ['nama_skill' => 'HTML5'],
            (object) ['nama_skill' => 'CSS3'],
            (object) ['nama_skill' => 'MySQL'],
            (object) ['nama_skill' => 'Laravel'],
            (object) ['nama_skill' => 'Git'],
        ];

        return view('home.index', compact('identitas', 'pendidikan', 'pekerjaan', 'skills'));
    }
}
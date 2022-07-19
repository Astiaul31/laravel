<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function hallo()
    {
        $f = 10;
        $total = $f * 100;
        if ($total >= 1000){
            return 'Diatas Seribu';
        } else {
            return 'Dibawah Seribu';
        }
    }
    public function profile()
    {
        return view('pages.profile');
    }
    public function facebook($perkalian, $nama)
    {
        $calculator = 1 + 5;
        $hasilperkalian = $calculator * $perkalian;
        $jk = 10;
        return view('about', compact('nama', 'hasilperkalian', 'jk'));
    }
    public function siswa()
    {
        $a = [
            array('id' => 1, 'name' => 'Asti', 'age' => 17, 'hobi' => [
                'Menonton', 'Bernyanyi', 'Scroll Tiktok', 'Keliling Bandung'
                
            ]),
            array('id' => 2, 'name' => 'Aulia', 'age' => 13, 'hobi' => [
                'Berenang', 'Tidur', 'Rebahan', 'Healing'
            ]),
        ];
        //dump data
        // dd($a);
        return view('pages.siswa',['siswa' => $a]);
    }
    public function beratbadan($berat, $tinggi)
    {
        $bmi = $berat / (($tinggi/100) * ($tinggi/100));
        if($bmi < 17.0){
            $status = "Kurus, Kekurangan berat badan berat";
        }elseif($bmi >= 17.0 && $bmi <= 18.4){
            $status = "Kurus, Kekurangan berat badan ringan";
        }elseif($bmi >= 18.5 && $bmi <= 25.0){
            $status = "Normal";
        }elseif($bmi >= 25.1 && $bmi <= 27.0){
            $status = "Gemuk, kelebihan berat badan tingkat ringan";
        }elseif($bmi > 27.1){
            $status = "Gemuk, kelebihan berat badan tingkat berat";
        }else{
            $status = "Tidak Ada Keterangan";
        }
        return view('pages.beratbadan', compact('berat', 'tinggi', 'status', 'bmi'));
    }

    public function kampus()
    {
        $b = [
            ['dosen' => 'Nasrul',
             'induk' => '0001',
             'mahasiswa' => [
                    ['nama' => 'Asti', 'noinduk' => '00021', 'jurusan' => 'Multimedia', 'matakuliah' => ['Fisika', 'Biologi', 'Kimia'] ],
                    ['nama' => 'Aulia', 'noinduk' => '00022', 'jurusan' => 'Hukum', 'matakuliah' => ['Kimia', 'Matematika', 'Astronomi'] ],
                    ['nama' => 'Bintang', 'noinduk' => '00023', 'jurusan' => 'Ekonomi', 'matakuliah' => ['Matematika', 'Geofisika', 'Statistika'] ],
                    ['nama' => 'Rizal', 'noinduk' => '00024', 'jurusan' => 'Infomatika', 'matakuliah' => ['Fisika', 'Astronomi', 'Matematika'] ],
                    ['nama' => 'Siska', 'noinduk' => '00025', 'jurusan' => 'Pendidikan', 'matakuliah' => ['Kimia', 'Biologi', 'Geofisika'] ]
            ]
             ],

            ['dosen' => 'Sofyan',
             'induk' => '0002',
             'mahasiswa' => [
                    ['nama' => 'Raisya', 'noinduk' => '00031', 'jurusan' => 'Seni', 'matakuliah' => ['Fisika', 'Geofisika', 'Kimia'] ],
                    ['nama' => 'Marwah', 'noinduk' => '00032', 'jurusan' => 'Hukum', 'matakuliah' => ['Kimia', 'Matematika', 'Astronomi'] ],
                    ['nama' => 'Sinta', 'noinduk' => '00033', 'jurusan' => 'Kedokteran', 'matakuliah' => ['Matematika', 'Biologi', 'Statistika'] ],
                    ['nama' => 'Sidiq', 'noinduk' => '00034', 'jurusan' => 'IPS', 'matakuliah' => ['Fisika', 'Astronomi', 'Matematika'] ],
                    ['nama' => 'Rizky', 'noinduk' => '00035', 'jurusan' => 'Pendidikan', 'matakuliah' => ['Kimia', 'Matematika', 'Geofisika'] ]

            ]
            ],

            ['dosen' => 'Nazril Saepudin',
             'induk' => '0003',
             'mahasiswa' => [
                    ['nama' => 'Putri', 'noinduk' => '00041', 'jurusan' => 'Hukum', 'matakuliah' => ['Fisika', 'Biologi', 'Kimia'] ],
                    ['nama' => 'Amam', 'noinduk' => '00042', 'jurusan' => 'Kedokteran', 'matakuliah' => ['Kimia', 'Matematika', 'Astronomi'] ],
                    ['nama' => 'Maya', 'noinduk' => '00043', 'jurusan' => 'Pendidikan', 'matakuliah' => ['Matematika', 'Geofisika', 'Statistika'] ],
                    ['nama' => 'Hafidz', 'noinduk' => '00044', 'jurusan' => 'IPS', 'matakuliah' => ['Fisika', 'Astronomi', 'Matematika'] ],
                    ['nama' => 'Amel', 'noinduk' => '00045', 'jurusan' => 'Seni', 'matakuliah' => ['Kimia', 'Biologi', 'Geofisika'] ]

            ]
            ],

            ['dosen' => 'Zidan',
             'induk' => '0004',
             'mahasiswa' => [
                    ['nama' => 'Suci', 'noinduk' => '00051', 'jurusan' => 'Kedokteran', 'matakuliah' => ['Fisika', 'Biologi', 'Kimia'] ],
                    ['nama' => 'Riska', 'noinduk' => '00052', 'jurusan' => 'Seni', 'matakuliah' => ['Kimia', 'Matematika', 'Astronomi'] ],
                    ['nama' => 'Fahmi', 'noinduk' => '00053', 'jurusan' => 'Hukum', 'matakuliah' => ['Matematika', 'Geofisika', 'Statistika'] ],
                    ['nama' => 'Gilang', 'noinduk' => '00054', 'jurusan' => 'Infomatika', 'matakuliah' => ['Fisika', 'Astronomi', 'Matematika'] ],
                    ['nama' => 'Rizwan', 'noinduk' => '00055', 'jurusan' => 'Ekonomi', 'matakuliah' => ['Kimia', 'Biologi', 'Geofisika'] ]

            ]
            ],

            ['dosen' => 'Yunus',
             'induk' => '0005',
             'mahasiswa' => [
                    ['nama' => 'Rafi', 'noinduk' => '00061', 'jurusan' => 'Infomatika', 'matakuliah' => ['Kimia', 'Biologi', 'Geofisika'] ],
                    ['nama' => 'Rida', 'noinduk' => '00062', 'jurusan' => 'Hukum', 'matakuliah' => ['Kimia', 'Matematika', 'Astronomi'] ],
                    ['nama' => 'Fina', 'noinduk' => '00063', 'jurusan' => 'Pendidikan', 'matakuliah' => ['Matematika', 'Geofisika', 'Statistika'] ],
                    ['nama' => 'Aghnia', 'noinduk' => '00064', 'jurusan' => 'Seni', 'matakuliah' => ['Fisika', 'Astronomi', 'Matematika'] ],
                    ['nama' => 'Sandy', 'noinduk' => '00065', 'jurusan' => 'IPS', 'matakuliah' => ['Fisika', 'Biologi', 'Kimia'] ]

            ]
            ]
        ];

        //dump data
        // dd($a);
        return view('pages.kampus',['kampus' => $b]);
    }

    public function mahasiswa()
    {
        $a = [
            ['dosen' => 'Yusuf Bachtiar',
             'matakuliah' => 'Pemrograman Mobile',
             'mahasiswa' => [

                ['nama' => 'Muhammad Soleh', 'nilai' => 78],
                ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                ['nama' => 'Mamat Alkatiri', 'nilai' => 90]
             ]
             ],

            ['dosen' => 'Yaris Riyadi',
             'matakuliah' => 'Pemrograman Web',
             'mahasiswa' => [

                ['nama' => 'Alfred McTomminay', 'nilai' => 67],
                ['nama' => 'Bruno kasmir', 'nilai' => 90]
             ]
            ]
             ];
             return view('pages.mahasiswa',['mahasiswa' => $a]);
    }

    public function nilai()
    {
        $a = [
            ['nama' => 'Agus', 'jurusan' => 'TKR' ,
            'nilai' =>
            [
                ['matpel' => 'B.Indonesia', 'nilai' => 80],
                ['matpel' => 'B.Inggris', 'nilai' => 97],
                ['matpel' => 'Produktif Kejurusan', 'nilai' => 67],
                ['matpel' => 'Matematika', 'nilai' => 100]
            ]
            ],

            ['nama' => 'Mahmud', 'jurusan' => 'TKR' ,
            'nilai' =>
            [
                ['matpel' => 'B.Indonesia', 'nilai' => 78],
                ['matpel' => 'B.Inggris', 'nilai' => 86],
                ['matpel' => 'Produktif Kejurusan', 'nilai' => 90],
                ['matpel' => 'Matematika', 'nilai' => 67]
            ]
            ],

            ['nama' => 'Rendi', 'jurusan' => 'TSM' ,
            'nilai' =>
            [
                ['matpel' => 'B.Indonesia', 'nilai' => 90],
                ['matpel' => 'B.Inggris', 'nilai' => 50],
                ['matpel' => 'Produktif Kejurusan', 'nilai' => 65],
                ['matpel' => 'Matematika', 'nilai' => 78]
            ]
            ],

            ['nama' => 'Firman', 'jurusan' => 'RPL' ,
            'nilai' =>
            [
                ['matpel' => 'B.Indonesia', 'nilai' => 78],
                ['matpel' => 'B.Inggris', 'nilai' => 90],
                ['matpel' => 'Produktif Kejurusan', 'nilai' => 56],
                ['matpel' => 'Matematika', 'nilai' => 78]
            ]
            ],

            ['nama' => 'Abdul', 'jurusan' => 'PRL' ,
            'nilai' =>
            [
                ['matpel' => 'B.Indonesia', 'nilai' => 89],
                ['matpel' => 'B.Inggris', 'nilai' => 67],
                ['matpel' => 'PRODUKTIF KEJURUAN', 'nilai' => 80],
                ['matpel' => 'Matematika', 'nilai' => 90]
            ]
            ],
            ];
            return view('pages.nilai',['nilai' => $a]);
    }

    public function toko()
    {
        $a = [
            ['nama' => 'Alfian',
            'belanja' => 
            [
                ['jenis' => 'Sepatu', 'harga' => 250000],
                ['jenis' => 'Baju', 'harga' => 100000],
                ['jenis' => 'Celana', 'harga' => 150000],
                ['jenis' => 'Kupluk', 'harga' => 100000]
            ] 
            ],

            ['nama' => 'Dida',
            'belanja' => 
            [
                ['jenis' => 'Topi', 'harga' => 100000],
                ['jenis' => 'Baju', 'harga' => 75000],
                ['jenis' => 'Celana', 'harga' => 125000]
            ] 
            ],
        ];
        return view('pages.toko',['toko' => $a]);
    }
}

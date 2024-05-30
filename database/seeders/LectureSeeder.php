<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lectures;
class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lectures = [
            ['lectureName' => 'Prof. Dr. Ir. SUSY SUSMARTINI, MSIE', 'lectureConcentration' => 'Perencanaan dan Perancangan Produk'],
            ['lectureName' => 'Prof. Dr. Ir. BAMBANG SUHARDI, S.T., M.T., IPM, ASEAN. Eng', 'lectureConcentration' => 'Sistem Perancangan Kerja dan Ergonomi'],
            ['lectureName' => 'Prof. Dr. CUCUK NUR ROSYIDI, S.T., M.T.', 'lectureConcentration' => 'Sistem Produksi'],
            ['lectureName' => 'Prof. Dr. WAHYUDI SUTOPO, S.T.,M.Si', 'lectureConcentration' => 'Sistem Logistik dan Bisnis'],
            ['lectureName' => 'Prof. Dr. Ir. EKO PUJIYANTO, S.Si., M.T. IPM', 'lectureConcentration' => 'Rekayasa Kualitas dan Biomaterial'],
            ['lectureName' => 'Dr.Eng. ILHAM PRIADYTHAMA, S.T.,M.T.', 'lectureConcentration' => 'Perencanaan dan Perancangan Produk'],
            ['lectureName' => 'Dr. Ir. LOBES HERDIMAN, M.T.', 'lectureConcentration' => 'Biomekanika – Fisiologi Kerja'],
            ['lectureName' => 'Dr. MUH. HISJAM, S.T.P.,M.T.', 'lectureConcentration' => 'Sistem Logistik dan Bisnis'],
            ['lectureName' => 'Dr. EKO LIQUIDDANU, S.T.,M.T.', 'lectureConcentration' => 'Rantai nilai dan klaster industri'],
            ['lectureName' => 'Dr.Eng. PRINGGO WIDYO LAKSONO, ST., M.Eng.', 'lectureConcentration' => 'Sistem Produksi'],
            ['lectureName' => 'Dr. RETNO WULAN DAMAYANTI, S.T., M.T.', 'lectureConcentration' => 'Sistem Kualitas'],
            ['lectureName' => 'Dr. Ir. R HARI SETYANTO, M.Si.', 'lectureConcentration' => 'Sistem Perancangan Kerja dan Ergonomi'],
            ['lectureName' => 'Dr. WAKHID AHMAD JAUHARI, S.T.,M.T.', 'lectureConcentration' => 'Sistem Produksi'],
            ['lectureName' => 'FAKHRINA FAHMA, STP., M.T.', 'lectureConcentration' => 'Sistem Kualitas'],
            ['lectureName' => 'RONI ZAKARIA, S.T.,M.T.', 'lectureConcentration' => 'Sistem Logistik dan Bisnis'],
            ['lectureName' => 'TAUFIQ ROCHMAN, S.TP.,M.T.', 'lectureConcentration' => 'Sistem Perancangan Kerja dan Ergonomi'],
            ['lectureName' => 'RAHMANIYAH DWI ASTUTI, S.T.,M.T.', 'lectureConcentration' => 'Sistem Perancangan Kerja dan Ergonomi'],
            ['lectureName' => 'YUNIARISTANTO, S.T.,M.T.', 'lectureConcentration' => 'Sistem Logistik dan Bisnis'],
            ['lectureName' => 'YUSUF PRIYANDARI, S.T.,M.T.', 'lectureConcentration' => 'Perancangan dan Optimasi Sistem Industri'],
            ['lectureName' => 'IRWAN IFTADI, S.T., M.Eng.', 'lectureConcentration' => 'Teknik Industri'],
            ['lectureName' => 'I WAYAN SULETRA, S.T.,M.T.', 'lectureConcentration' => 'Optimasi dan Perancangan Sistem Informasi'],
            ['lectureName' => 'Ir. Renny Rochani, M.T., Ph. D', 'lectureConcentration' => 'Sistem Logistik dan Bisnis'],
        ];

        foreach ($lectures as $lecture) {
            Lectures::create($lecture);
        }
    }
}

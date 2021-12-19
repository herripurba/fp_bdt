<?php

use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Transaksi::insert([
            [
                'id' =>1,
                'kode_transaksi' => 'BK_1',
                'anggota_id' => 2,
                'buku_id' => 1,
                'tgl_pinjam' => '2021-01-01',
                'tgl_kembali' => '2021-01-04',
                'status' => 'pinjam'
            ],
            [
                'id' =>2,
                'kode_transaksi' => 'BK_2',
                'anggota_id' => 2,
                'buku_id' => 2,
                'tgl_pinjam' => '2021-01-01',
                'tgl_kembali' => '2021-01-04',
                'status' => 'pinjam'
            ],
            [
                'id' =>3,
                'kode_transaksi' => 'BK_3',
                'anggota_id' => 3,
                'buku_id' => 3,
                'tgl_pinjam' => '2021-01-02',
                'tgl_kembali' => '2021-01-04',
                'status' => 'pinjam'
            ],
            [
                'id' =>4,
                'kode_transaksi' => 'BK_4',
                'anggota_id' => 3,
                'buku_id' => 3,
                'tgl_pinjam' => '2021-01-02',
                'tgl_kembali' => '2021-01-04',
                'status' => 'pinjam'
            ],
        ]);
    }
}

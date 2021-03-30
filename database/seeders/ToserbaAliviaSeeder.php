<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ToserbaAliviaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\toserba_alivia::insert([
        [
            'id_barang' => '0001',
            'kode_barang' => 'A001',
            'nama_barang' => 'Indomie' ,
            'kategori' => 'Makanan',
            'harga' => '3500',
            'jumlah' => '2500'
        ],
        [
            'id_barang' => '0002',
            'kode_barang' => 'A002',
            'nama_barang' => 'Mie Sedap' ,
            'kategori' => 'Makanan',
            'harga' => '3000',
            'jumlah' => '3500'
        ],
        [
            'id_barang' => '0003',
            'kode_barang' => 'A003',
            'nama_barang' => 'Le Mineral' ,
            'kategori' => 'Minuman',
            'harga' => '6000',
            'jumlah' => '500'
        ],
        [
            'id_barang' => '0004',
            'kode_barang' => 'A004',
            'nama_barang' => 'Aqua' ,
            'kategori' => 'Minuman',
            'harga' => '4000',
            'jumlah' => '5000'
        ],
        [
            'id_barang' => '0005',
            'kode_barang' => 'A005',
            'nama_barang' => 'Susu Dancow' ,
            'kategori' => 'Minuman',
            'harga' => '20000',
            'jumlah' => '2250'
        ],
        [
            'id_barang' => '0006',
            'kode_barang' => 'A006',
            'nama_barang' => 'Fiesta Chicken Nugget' ,
            'kategori' => 'Frozen Food',
            'harga' => '45500',
            'jumlah' => '155'
        ],
        [
            'id_barang' => '0007',
            'kode_barang' => 'A007',
            'nama_barang' => 'So Good Wings' ,
            'kategori' => 'Frozen Food',
            'harga' => '60000',
            'jumlah' => '500'
        ],
        [
            'id_barang' => '0008',
            'kode_barang' => 'A008',
            'nama_barang' => 'Lays' ,
            'kategori' => 'Snack',
            'harga' => '12000',
            'jumlah' => '500'
        ],
        [
            'id_barang' => '0009',
            'kode_barang' => 'A009',
            'nama_barang' => 'Pota Bee' ,
            'kategori' => 'Snack',
            'harga' => '7500',
            'jumlah' => '500'
        ],
        [
            'id_barang' => '0010',
            'kode_barang' => 'A010',
            'nama_barang' => 'Qtela' ,
            'kategori' => 'Snack',
            'harga' => '15000',
            'jumlah' => '500'
        ],
        [   'id_barang' => '0011',
            'kode_barang' => 'A011',
            'nama_barang' => 'Good Days' ,
            'kategori' => 'Minuman',
            'harga' => '21000',
            'jumlah' => '130'
        ],
        [
            'id_barang' => '0012',
            'kode_barang' => 'A012',
            'nama_barang' => 'Samyang Spicy' ,
            'kategori' => 'Makanan',
            'harga' => '18500',
            'jumlah' => '500'
        ],
        [
            'id_barang' => '0013',
            'kode_barang' => 'A013',
            'nama_barang' => 'Sup Jamur Instan' ,
            'kategori' => 'Makanan',
            'harga' => '9500',
            'jumlah' => '500'
        ],
        [
            'id_barang' => '0014',
            'kode_barang' => 'A014',
            'nama_barang' => 'Mogu Mogu' ,
            'kategori' => 'Minuman',
            'harga' => '15000',
            'jumlah' => '500'
        ],
        [
            'id_barang' => '0015',
            'kode_barang' => 'A015',
            'nama_barang' => 'Teh Pucuk' ,
            'kategori' => 'Minuman',
            'harga' => '7500',
            'jumlah' => '500'
        ],
        [
            'id_barang' => '0016',
            'kode_barang' => 'A016',
            'nama_barang' => 'Nutrijell' ,
            'kategori' => 'Snack',
            'harga' => '3800',
            'jumlah' => '500'
        ],
        [
            'id_barang' => '0017',
            'kode_barang' => 'A017',
            'nama_barang' => 'Super Bubur' ,
            'kategori' => 'Makanan',
            'harga' => '18500',
            'jumlah' => '500'
        ],
        [
            'id_barang' => '0018',
            'kode_barang' => 'A018',
            'nama_barang' => 'Gekikara Ramen' ,
            'kategori' => 'Makanan',
            'harga' => '10500',
            'jumlah' => '2500'
        ],
        [
            'id_barang' => '0019',
            'kode_barang' => 'A019',
            'nama_barang' => 'Shin Ramyun' ,
            'kategori' => 'Makanan',
            'harga' => '12300',
            'jumlah' => '1500'
        ],
        [
            'id_barang' => '0020',
            'kode_barang' => 'A020',
            'nama_barang' => 'Lemonilo' ,
            'kategori' => 'Makanan',
            'harga' => '8500',
            'jumlah' => '5000'
        ]
        ]);
    }
}

<?php
//PHP OOP Part 2  Pengertian Class, Object, Property dan Method
//class manusia
class barang{
    //property
    var $nama_barang;
    var $warna_barang;
    
    //method manusia
    function tampilkan_nama_barang(){
        return "Martil <br/>";
    }
    
    function warna_barang(){
        return "Kuning <br/>";
    }
    
}
//instansiasi class manusia
$barang = new barang();
 
//memanggil method tampilkan_nama dari class manusia
echo $barang->tampilkan_nama_barang();
 
//memanggil method warna_kulit dari class manusia
echo $barang->warna_barang()
;

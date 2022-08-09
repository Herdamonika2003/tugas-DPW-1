<?php

echo "Hewan";
echo "<hr>";

class Hewan {
    public $jumlah_kaki,$bisa_terbang;
}

class Kucing extends Hewan {
    function bersuara()
    {
        return "meong meong meong";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Anjing extends Hewan {
    function bersuara()
    {
        return "guk guk guk guk";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Elang extends Hewan {
    function bersuara()
    {
        return "Miiippp";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

class Angsa extends Hewan {
    function bersuara()
    {
        return "kwaakkkkkkkkkk";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

$Muning = new Kucing;
$Muning->jumlah_kaki = 4;
echo "Muning adalah Kucing <br>";
echo "Punya Kaki Sebanyak: " .$Muning->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Muning->bisa_terbang()."<br>";
echo "Bersuara: " .$Muning->bersuara()."<br>";

echo "<hr>";

$Gio = new Anjing;
$Gio->jumlah_kaki = 4;
echo "Gio Adalah Anjing <br>";
echo "Punya Kaki Sebanyak:" .$Gio->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Gio->bisa_terbang()."<br>";
echo "Bersuara: " .$Gio->bersuara()."<br>";

echo "<hr>";

$Gagak = new Elang;
$Gagak->jumlah_kaki = 2;
echo "Gagak Adalah Elang <br>";
echo "Punya Kaki Sebanyak:" .$Gagak->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Gagak->bisa_terbang()."<br>";
echo "Bersuara: " .$Gagak->bersuara()."<br>";

echo "<hr>";

$Buluk = new Angsa;
$Buluk->jumlah_kaki = 2;
echo "Buluk Adalah Angsa <br>";
echo "Punya Kaki Sebanyak:" .$Buluk->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Buluk->bisa_terbang()."<br>";
echo "Bersuara: " .$Buluk->bersuara()."<br>";

echo "<hr>";

?>
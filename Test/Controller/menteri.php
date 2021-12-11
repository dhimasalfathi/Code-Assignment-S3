<?php

include "pengurusBEM.php";

class menteri extends pengurusBEM
{
    private $IDMentri;

    public function __construct($nama, $nim, $angkatan, $jabatan, $foto)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->angkatan = $angkatan;
        $this->jabatan = $jabatan;
        $this->foto = $foto;
    }

    function setIDMentri($IDMentri)
    { // method
        $this->IDMentri = $IDMentri;
    }

    public function getIDMentri()
    {
        echo "$this->IDMentri";
    }
}

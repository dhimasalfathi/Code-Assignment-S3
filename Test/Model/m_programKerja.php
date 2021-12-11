<?php

require "./koneksiMVC.php";

class m_programKerja
{
    private $database;
    protected $tablename = "program_kerja";

    public function __construct()
    {
        $this->database = new koneksiMVC();
        $this->database = $this->database->mysqli;
    }

    // Add Program Kerja
    public function setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan)
    {
        $this->database->query("INSERT INTO $this->tablename (nomorProgram, namaProgram, suratKeterangan) VALUES ($nomorProgram, '$namaProgram', '$suratKeterangan')");
    }

    // Get All ProgramKerja
    public function getAll()
    {
        return $this->database->query("SELECT * FROM $this->tablename");
    }
}

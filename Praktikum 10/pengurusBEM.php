<?php

class pengurusBEM
{

    public $nama;
    public $nim;
    public $angkatan;
    private $jabatan;
    private $foto;


    /**
     * Get the value of nama
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set the value of nama
     *
     * @return  self
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * Get the value of nim
     */
    public function getNim()
    {
        return $this->nim;
    }

    /**
     * Set the value of nim
     *
     * @return  self
     */
    public function setNim($nim)
    {
        $this->nim = $nim;

        return $this;
    }

    /**
     * Get the value of angkatan
     */
    public function getAngkatan()
    {
        return $this->angkatan;
    }

    /**
     * Set the value of angkatan
     *
     * @return  self
     */
    public function setAngkatan($angkatan)
    {
        $this->angkatan = $angkatan;

        return $this;
    }

    /**
     * Get the value of jabatan
     */
    public function getJabatan()
    {
        return $this->jabatan;
    }

    /**
     * Set the value of jabatan
     *
     * @return  self
     */
    public function setJabatan($jabatan)
    {
        $this->jabatan = $jabatan;

        return $this;
    }

    /**
     * Get the value of foto
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     *
     * @return  self
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }
}

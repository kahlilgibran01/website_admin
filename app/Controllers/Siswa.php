<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        echo "halo ini adalah controller siswa <a href='". route_to('profil')."'>link ke routing profil</a>";
    }

    public function nama($nama,$usia)
    {
        echo "nama saya adalah ".$nama.", usia ".$usia;
    }
    protected function testing()
    {
        echo "ini adalah method testing yang merupakan private method";
    }
    public function profil()
    {
        echo "ini adalah method profil di controller siswa";
    }
    public function datasiswa($nama, $usia)
    {
        echo "nama siswa adalah $nama, usia $usia";
    }
    
}

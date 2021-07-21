<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Tes extends Controller
{
    public function index()
    {
        echo view('data_tes_view');
    }

    public function soal_satu()
    {
        foreach(range(1, 100) as $number) {
            if ($number % 3 != 0 && $number % 5 != 0) {
                echo $number . '<br>';
                continue;
            }
            if ($number % 3 == 0) echo 'Saya';
            if ($number % 5 == 0) echo ' Programmer';
            echo '<br>';
        }
    }

    public function soal_dua()
    {
        $data = trim($this->request->getPost('kata')); 
        $data = str_replace(' ', '', $data);
        foreach (count_chars($data, 1) as $i => $val) {
            echo chr($i). " = ". $val. "<br>";
        }
    }

    public function soal_tiga()
    {
        $n = $this->request->getPost('prima');
        $status = "PRIMA";
        for ($i = 2; $i <= $n-1; $i++)
        {
            if ($n % $i == 0)
            {
                $status = "BUKAN PRIMA";
                break;
            }
        }
        echo $n." ".$status;
    }

}
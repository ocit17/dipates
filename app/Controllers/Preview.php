<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Preview_model;

class Preview extends Controller
{
    public function index()
    {
        $model = new Preview_model();
        $data['preview']  = $model->getPreview()->getResult();
        echo view('preview_view', $data);
    }

}
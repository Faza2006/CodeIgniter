<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class menu extends BaseController
{
    public function index()
    {
        return view('menu/form');
    }

    public function insert()
    {
        $file = $this->request->getFile('gambar');

        $name = $file->getName();


        $file->move('./upload');
        echo $name." Sudah Di upload";
    }

}

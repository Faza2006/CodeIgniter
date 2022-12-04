<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class kategori extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "<h1>belajar ci4</h1>";
    }

    public function select()
    {
        $data = [
            'judul' => 'SELECT DATA DARI controller',
            'kategori' => ['Makanan', 'Minuman','Jajan','Gorengan','Buah']
        ];

        
        return view("kategori/select",$data);
        
    }

    public function selectWhere($id = null)
    {
        return "<h1>menampilkan data yang dipilih $id</h1>";
    }

    public function formInsert()
    {
        
        echo view("kategori/forminsert");
        
    }

    public function formUpdate($id=null)
    {
        echo view("template/header");
        echo view("kategori/update");
        echo view("template/footer");
    }

    public function update($id = null)
    {
        echo "proses update data $id";
    }

    public function delete($id = null)
    {
        echo "proses delete data";
    }

    //----------------------------------------------

}

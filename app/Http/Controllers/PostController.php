<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {

    }

    //
    public function view()
    {
        echo 'post view dipublish';
    }
    public function create()
    {
        echo 'post create dipublish';
    }
    public function edit()
    {
        echo 'post edit dipublish';
    }
    public function delete()
    {
        echo 'post delete dipublish';
    }
    public function publish()
    {
        echo 'post berhasil dipublish';
    }

    public function unpublish()
    {
        echo 'post berhasil diunpublish';
    }
}

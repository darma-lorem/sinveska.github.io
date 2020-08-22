<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewDataUser()
    {
        $this->authorize('view data user');

        return 'view data user';
    }

    public function createDataUser()
    {
        $this->authorize('create data user');

        return 'create data user';
    }

    public function editDataUser()
    {
        $this->authorize('edit data user');

        return 'edit data user';
    }

    public function updateDataUser()
    {
        $this->authorize('update data user');

        return 'update data user';
    }

    public function deleteDataUser()
    {
        $this->authorize('delete data user');

        return 'delete data user';
    }
    public function viewDataBarang()
    {
        $this->authorize('view data barang');

        return 'view data barang';
    }

    public function createDataBarang()
    {
        $this->authorize('create data barang');

        return 'create data barang';
    }

    public function editDataBarang()
    {
        $this->authorize('edit data barang');

        return 'edit data barang';
    }

    public function updateDataBarang()
    {
        $this->authorize('update data barang');

        return 'update data barang';
    }

    public function deleteDataBarang()
    {
        $this->authorize('delete data barang');

        return 'delete data barang';
    }
}

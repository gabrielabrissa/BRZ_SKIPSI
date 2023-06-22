<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AturUserController extends Controller
{
    public function aturuser()
    {
       
        $usr = DB::table('users')
            ->join('role_user', 'users.id_roleuser', '=', 'role_user.id_roleuser')
            ->where('users.id_roleuser','=','1')
            ->get();
        return view('aturuser', [
            "title" => "aturuser",
            'usr' => $usr
        ]);
    }

    public function adduser(){
        $ambil = auth()->user()->id;
        $supp = DB::table('sys_supplier')
        ->get();
       
        return view('adduser', [
            "title" => "aturuser",
            'userdata' =>  User::find($ambil),
            'supp' => $supp,
        ]);
    }
    public function getSysSupp(Request $request)
    {
        $suppp_id = $request-> spp_id;

        $data = DB::table('sys_supp_site')
        ->join('sys_supplier','sys_supplier.SUPP_ID','=','sys_supp_site.SUPP_ID')
        ->where('sys_supp_site.SUPP_ID', $suppp_id)
        ->get();

        return response()->json($data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Smalot\PdfParser\Parser;

class InputTTFController extends Controller
{
    public function inputttf()
    {
        $ambil = auth()->user()->id;
        //pilih cabang
        $cbg2 = DB::table('ttf_data_bpb')
        ->select('BRANCH_CODE', DB::raw('count(BRANCH_CODE) as jumlah'))
        ->where('USED_FLAG','=','N')
        ->groupBy('ttf_data_bpb.BRANCH_CODE');

        $cbg = DB::table('sys_mapp_supp')
        ->join('users','users.id','=','sys_mapp_supp.USER_ID')
        ->join('sys_supp_site','sys_supp_site.SUPP_BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
        ->joinSub($cbg2,'jum', function(JoinClause $join) {
            $join->on('sys_mapp_supp.BRANCH_CODE','=','jum.BRANCH_CODE');
        })
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->get();

        
        return view('inputttf', [
            "title" => "inputttf",
            'cbg' => $cbg,
    
        ]);
    }
    public function addttf($id1){
        $ambil = auth()->user()->id;
        $fp = DB::table('sys_supp_site')
        ->join('sys_mapp_supp','sys_supp_site.SUPP_BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
        ->join('users','users.id','=','sys_mapp_supp.USER_ID')
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->where ('sys_supp_site.SUPP_BRANCH_CODE','=',$id1)
        ->get();
        return view('addttf', [
            "title" => "inputttf",
            'fp' => $fp,
    
        ]);
    }
    
    public function tambahfp($id1){
        $ambil = auth()->user()->id;
        $fp = DB::table('sys_supp_site')
        ->join('sys_mapp_supp','sys_supp_site.SUPP_BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
        ->join('users','users.id','=','sys_mapp_supp.USER_ID')
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->where ('sys_supp_site.SUPP_BRANCH_CODE','=',$id1)
        ->get();
        return view('tambahfp', [
            "title" => "inputttf",
            'fp' => $fp
    
        ]);
    }

    public function getSysSuppSite(Request $request)
    {
        $suppBranchCode = $request->supp_branch_code;

        $data = DB::table('sys_supp_site')
        ->where('SUPP_BRANCH_CODE', $suppBranchCode)
        ->first();

        return response()->json($data);
    }

    public function getTtfDataBpb(Request $request)
    {
        $suppBranchCode = $request->supp_branch_code;

        $data = DB::table('ttf_data_bpb')
        ->where('BRANCH_CODE', $suppBranchCode)
        ->get();

        return response()->json($data);
    }
    public function getTtfDataNoFP(Request $request)
    {
        $suppBranchCode = $request->supp_branch_code;
        $ambil = auth()->user()->id;
        $fp = DB::table('sys_supp_site')
        ->join('sys_mapp_supp','sys_supp_site.SUPP_BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
        ->join('users','users.id','=','sys_mapp_supp.USER_ID')
        ->join('sys_supplier','sys_supplier.SUPP_ID','=','users.SUPP_ID')
        ->where ('sys_mapp_supp.USER_ID','=',$ambil)
        ->where('sys_supp_site.SUPP_BRANCH_CODE', $suppBranchCode)
        ->select('sys_supp_site.SUPP_PKP_NUM')
        ->groupBy('sys_supp_site.SUPP_PKP_NUM');

        $data = DB::table('no_faktur')
        ->whereIn('no_faktur.NPWP_PENJUAL',$fp)
        ->get();

        return response()->json($data);
    }
    public function read_qr(Request $request)
    {   
        $file = $request->file;
        $pdfParser = new Parser();
        $pdf = $pdfParser->parseFile($file->path());
        $content = $pdf->getText();
        $dt = explode("\n",$content);
        return response()->json($dt);
    }

    
    // public function read_qr(Request $request)
    // {   
    //     $ambil = auth()->user()->id;
    //     $file = $request->file;
    //     $pdfParser = new Parser();
    //     $pdf = $pdfParser->parseFile($file->path());
    //     $content = $pdf->getText();
    //     $explode = explode("\n",$content);
    //     // $input = preg_quote("Kode dan Nomor Seri Faktur Pajak :","~",$explode);
    //     $a = $explode[07]; //no fp
    //     $b = $explode[18]; //ppn
    //     $c = $explode[26]; //tgl
    //     $d = $explode[20]; //dpp
    //     $a = preg_replace("/[^0-9\.]/","",$a);
    //     $b = substr($b,34);
    //     $c = explode(', ', $c, 2);
    //     $c = $c[1]; //tgl
    //     $d = preg_replace("/[^0-9\.]/","",$d);
    //     $explode =[$a,$b,$c,$d];
    //     $fp = DB::table('ttf_data_bpb')
    //     ->join('sys_supp_site','sys_supp_site.SUPP_BRANCH_CODE','=','ttf_data_bpb.BRANCH_CODE')
    //     ->join('sys_mapp_supp','ttf_data_bpb.BRANCH_CODE','=','sys_mapp_supp.BRANCH_CODE')
    //     ->join('users','users.id','=','sys_mapp_supp.USER_ID')
    //     ->where ('sys_mapp_supp.USER_ID','=',$ambil)
    //     // ->where ('ttf_data_bpb.BRANCH_CODE','=',$id1)
    //     ->get();
    //     return view('tambahfp', [
    //         "title" => "inputttf",
    //         "fp" => $fp,
    //         "a" => $a,
    //         "b" => $b,
    //         "c" => $c,
    //         "d" => $d

    
    //     ]);

    // }

    // public function read_qr()
    // {
    //     $pdfParser = new Parser();
    //     $pdf = $pdfParser->parseFile(public_path('efaktur.pdf'));
    //     $content = $pdf->getText();
    //     $explode = explode("\n",$content);
    //     // $input = preg_quote("Kode dan Nomor Seri Faktur Pajak :","~",$explode);
    //     $result = preg_grep('' . $cek . '', $explode);
    //     print_r($result);
    // }
}

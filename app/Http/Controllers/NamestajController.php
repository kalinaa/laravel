<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Namestaj;
use App\Models\Tip;

class NamestajController extends Controller
{
    public function all(){
        $namestaji=Namestaj::all();
        $tipovi=Tip::all();
        return view("namestaj",["namestaji"=> $namestaji,"tipovi"=>$tipovi]);
    }
    public function create(Request $request){
        $input=$request->all();
        Namestaj::create($input);

        return redirect('namestaj');
    }
    public function one($id){
        
        $tipovi=Tip::all();
        $nam=Namestaj::find($id);
        return view("forma",["namestaj"=> $nam,"tipovi"=>$tipovi]);
    }
    public function update(Request $request, $id){
        $namestaj=Namestaj::find($id);
        if(isset($_POST["obrisi"])){
        $namestaj->delete();
        }else{
            $namestaj->naziv=$request->naziv;
            $namestaj->tip_id=$request->tip_id;
            $namestaj->save();
        }
        return redirect('namestaj');
    }
}

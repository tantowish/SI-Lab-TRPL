<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Laboratorium;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){
        $laboratorium = Laboratorium::all();
        return view('dashboard.inventory.index',[
            'laboratorium'=>$laboratorium,
            'header'=>'Inventaris'
        ]);
    }
    public function create($id){
        $laboratorium = Laboratorium::findOrFail($id);
        return view('dashboard.inventory.create',[
            'header'=>'Tambah Inventaris '.$laboratorium->laboratorium_name,
            'laboratorium'=>$laboratorium->laboratorium_id
        ]);
    }
    
    public function store(Request $request, $id){
        $validated = $request->validate([
            "item_name"=>'required|max:100',
            "no_item"=>'required|max:100',
            "good"=>'required|integer|min:0',
            "bad"=>'required|integer|min:0',
            "information"=>'max:100',
        ]);
        $validated['laboratorium_id'] = $id;
        Inventory::create($validated);
        return redirect()->route('inventory.show',$id)->with('success', 'Berhasil menambahkan barang');
    }

    public function show($id){
        $laboratorium = Laboratorium::findOrFail($id);
        $inventories = Inventory::where('laboratorium_id', $id)
        ->orderBy('item_name', 'asc')
        ->paginate(10);   
        return view('dashboard.inventory.show',[
            'laboratorium'=>$laboratorium,
            'header'=>'Inventaris '.$laboratorium->laboratorium_name,
            'inventories'=>$inventories
        ]);
    }

    public function edit($id){
        $inventory = Inventory::findOrFail($id);
        $laboratorium_id = $inventory->laboratorium_id;
        return view('dashboard.inventory.edit',[
            'header'=>'Edit Barang '.$inventory->item_name,
            'inventory'=>$inventory,
            'laboratorium'=>$laboratorium_id
        ]);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            "item_name"=>'required|max:100',
            "no_item"=>'required|max:100',
            "good"=>'required|integer|min:0',
            "bad"=>'required|integer|min:0',
            "information"=>'max:100',
        ]);
        $inventory = Inventory::findOrFail($id);
        $inventory->update($validated);
        $laboratorium_id = $inventory->laboratorium_id;
        return redirect()->route('inventory.show',$laboratorium_id)->with('success', 'Berhasil mengedit barang');
    }

    public function destroy($id){
        $inventory = Inventory::findOrFail($id);
        $laboratorium_id = $inventory->laboratorium_id;
        $inventory->delete();
        return redirect()->route('inventory.show',$laboratorium_id)->with('success', 'Berhasil menghapus barang');
    }
}

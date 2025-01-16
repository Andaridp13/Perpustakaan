<?php

namespace App\Livewire;

use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class KategoriComponent extends Component
{
    use WithPagination,WithoutUrlPagination;
    protected $paginationTheme='bootstrap';
    public $nama, $id, $deskripsi, $cari;
    public function render()
{
    if ($this->cari != "") {
        $data['kategoris'] = Kategori::where('nama', 'like', '%' . $this->cari . '%')->paginate(10);
    } else {
        $data['kategoris'] = Kategori::paginate(10);
    }        
    $layout['title'] = 'Kelola Kategori Buku';
    return view('livewire.kategori-component', $data)->layoutData($layout);
}
public function store(){
    $this->validate([
        'nama'=>'required',
        'deskripsi'=>'required'
    ],[
        'nama.required'=>'Nama Kategori tidak boleh kosong!',
        'deskripsi.required'=>'Deskripsi tidak boleh kosong!'
    ]);
    kategori::create([
        'nama'=>$this->nama,
        'deskripsi'=>$this->deskripsi
    ]);
    $this->reset();
    session()->flash('success','Berhasil simpan');
    return redirect()->route('kategoris');
}
public function edit($id)
{
    $kategoris=kategori::find($id);
    $this->id=$kategoris->id;
    $this->nama=$kategoris->nama;
    $this->deskripsi=$kategoris->deskripsi;
}
public function update()
{
    $kategoris=kategori::find($this->id);
    $kategoris->update([
        'nama'=>$this->nama,
        'deskripsi'=>$this->deskripsi
    ]);
    $this->reset();
    session()->flash('success','Berhasil ubah!');
    return redirect()->route('kategoris');
}
public function confirm($id)
{
    $this->id = $id;
}
public function destroy(){
    $kategoris=kategori::find($this->id);
    $kategoris->delete();
    $this->reset();
    session()->flash('success','Berhasil Hapus!');
    return redirect()->route('kategoris');
}
}


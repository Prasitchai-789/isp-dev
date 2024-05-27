<?php

namespace App\Livewire\Product;

use App\Models\Product;
use App\Models\Unit;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ProductIndex extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';


    public $barcode;
    public $title;
    public $price;
    public $unit_id;
    public $images = [];
    public Product $product;
    public $deleteId;
    public $updateId;


    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }

    protected function rules()
    {
        return [
            'unit_id' => 'required|exists:units,id',
            'barcode' => 'required',
            'title' => 'required',
            'price' => 'required',
            'images.*' => 'image|max:10485760', // 10MB Max
        ];
    }

    // realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount(Product $product)
    {
        $this->product = $product;
    }
    public function render()
    {
        $units = Unit::all();
        return view('livewire.product.product-index', [
            'units' => $units,
            'products' => $this->isLoading ? Product::with('unit')->orderBy('id', 'desc')->paginate(5) : new Product(),
        ]);
    }

    public function store()
    {
        try {
            $product = new Product();
        $product->unit_id = $this->unit_id;
        $product->barcode = $this->barcode;
        $product->title = $this->title;
        $product->price = $this->price;

        //upload
        $photoFileName = [];
        foreach($this->images as $image) {
            $newFileName = $image->hashName();
            $image->storeAs('product-image', $newFileName, 'public');
            array_push($photoFileName, $newFileName);
        }

        $product->photos = $photoFileName;
        $product->save();


        $this->resetInputFields();
        return redirect()->to('/product');
        session()->flash('message', 'บันทึกข้อมูลสำเร็จ');
        } catch (\Throwable $th) {
            session()->flash('message', 'เกิดข้อผิดพลาด');
        }
    }


    public function resetInputFields()
    {
        $this->barcode = '';
        $this->title = '';
        $this->price = '';
        $this->unit_id = '';
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $product = Product::find($id);

        if ($product) {
            $this->deleteId = $id;
            $this->title = $product->title;
        } else {
            // จัดการกรณีที่ไม่พบผู้ใช้
            session()->flash('error', 'User not found.');
        }
    }

    public function delete()
    {
        dd('delete');
        Product::find($this->deleteId)->delete();
        return redirect()->to('/product');
        session()->flash('message', 'ลบข้อมูลสำเร็จ');
    }

    public function confirmEdit($id)
    {
        $this->updateId = $id;
        $this->resetInputFields();
        $product = Product::find($id);
        $this->unit_id = $product->unit_id;
        $this->barcode = $product->barcode;
        $this->title = $product->title;
        $this->price = $product->price;

    }

    public function update()
    {
        Product::find($this->updateId)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->resetInputFields();
        session()->flash('message', 'อัพเดทข้อมูลสำเร็จ');
    }
}

<?php

namespace App\Livewire\Asset;


use Carbon\Carbon;
use App\Models\Asset;
use App\Models\CategoryAsset;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AssetIndex extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    public $edit = false;
    public Asset $asset;
    public $deleteId;
    public $updateId;
    public $code_asset;
    public $list_asset;
    public $name_asset;
    public $category_asset;
    public $user_asset;
    public $photo_asset;
    public $status_asset = "";
    public $buy_asset;
    public $remark_asset;
    public $name;


    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }

    protected $rules = [
        'code_asset' => 'required|string|max:255',
        'list_asset' => 'required|string|max:255',
        'name_asset' => 'required|string|max:255',
        'category_asset' => 'required',
        'user_asset' => 'required|string|max:255',
        'photo_asset' => 'nullable|image|max:1024',
        'status_asset' => 'nullable',
        'buy_asset' => 'nullable',
        'remark_asset' => 'nullable',
        'name' => 'required|string|max:255',
    ];
    // realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount(Asset $asset)
    {
        $this->asset = $asset;
    }
    public function render()
    {
        Carbon::setLocale('th');
        $categorys = CategoryAsset::orderBy('id','asc')->get();
        // $assets = Asset::orderBy('id', 'desc')->get();
        $assets = Asset::with('category')->orderBy('id', 'desc')->get();
        return view('livewire.asset.asset-index', [
            'assets' => $assets,
            'categorys' => $categorys,
        ]);
    }

    public function addAsset()
    {
        $this->edit = false;
    }
    public function saveAsset()
    {
        try {
            $validateData = $this->validate(
                [
                    'code_asset' => 'required|string|max:255',
                    'list_asset' => 'required|string|max:255',
                    'name_asset' => 'required|string|max:255',
                    'category_asset' => 'required',
                    'user_asset' => 'required|string|max:255',
                    'photo_asset' => 'nullable|image|max:1024',
                    'status_asset' => 'nullable',
                    'buy_asset' => 'nullable',
                    'remark_asset' => 'nullable',
                ]
            );

            if ($this->photo_asset) {
                $fileName = $this->photo_asset->getClientOriginalName(); // ดึงชื่อไฟล์เดิม
                $filePath = 'Image_upload/' . $fileName;

                // ตรวจสอบว่ามีไฟล์ชื่อเดียวกันอยู่ในโฟลเดอร์หรือไม่
                if (Storage::disk('public')->exists($filePath)) {
                    // เพิ่มเวลาปัจจุบันลงในชื่อไฟล์เพื่อให้ชื่อไฟล์ไม่ซ้ำกัน
                    $fileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . time() . '.' . $this->photo_asset->getClientOriginalExtension();
                }

                $filePath = $this->photo_asset->storeAs('Image_upload', $fileName, 'public');
                $validateData['photo_asset'] = $filePath; // เก็บเส้นทางไฟล์ที่เก็บไว้
            }
            Asset::create($validateData);

            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
            $this->dispatch('close-modal');
        } catch (\Throwable $th) {
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1600
            );
        }
    }

    public function resetInputFields()
    {
        $this->code_asset = '';
        $this->list_asset = '';
        $this->name_asset = '';
        $this->user_asset = '';
        $this->photo_asset = null;
        $this->status_asset = '';
        $this->buy_asset = '';
        $this->remark_asset = '';
    }
    public function confirmEdit($id)
    {
        $this->edit = 1;
        $this->updateId = $id;
        $this->resetInputFields();
        $asset = Asset::find($id);
        $this->code_asset = $asset->code_asset;
        $this->list_asset = $asset->list_asset;
        $this->name_asset = $asset->name_asset;
        $this->user_asset = $asset->user_asset;
        $this->photo_asset = $asset->photo_asset;
        $this->status_asset = $asset->status_asset;
        $this->buy_asset = $asset->buy_asset;
        $this->remark_asset = $asset->remark_asset;
    }

    public function updateAsset()
    {
        try {
            $validateData = $this->validate([
                'code_asset' => 'required|string|max:255',
                'list_asset' => 'required|string|max:255',
                'name_asset' => 'required|string|max:255',
                'category_asset' => 'required',
                'user_asset' => 'required|string|max:255',
                'photo_asset' => 'nullable|image|max:1024',
                'status_asset' => 'nullable',
                'buy_asset' => 'nullable',
                'remark_asset' => 'nullable',
            ]);

            $asset = Asset::findOrFail($this->updateId);

            if ($this->photo_asset) {
                $fileName = $this->photo_asset->getClientOriginalName();
                $filePath = 'Image_upload/' . $fileName;

                // ลบไฟล์เดิม
                if ($asset->photo_asset) {
                    Storage::disk('public')->delete($asset->photo_asset);
                }

                // ตรวจสอบว่ามีไฟล์ชื่อเดียวกันอยู่ในโฟลเดอร์หรือไม่
                if (Storage::disk('public')->exists($filePath)) {
                    // เพิ่มเวลาปัจจุบันลงในชื่อไฟล์เพื่อให้ชื่อไฟล์ไม่ซ้ำกัน
                    $fileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . time() . '.' . $this->photo_asset->getClientOriginalExtension();
                    $filePath = 'Image_upload/' . $fileName;
                }

                // บันทึกไฟล์ใหม่
                $this->photo_asset->storeAs('Image_upload', $fileName, 'public');
                $validateData['photo_asset'] = $filePath;
            }

            $asset->update($validateData);

            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "อัพเดทข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
            $this->dispatch('close-modal');
        } catch (\Throwable $th) {
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1600
            );
        }
    }
    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $asset = Asset::find($id);

        if ($asset) {
            $this->dispatch(
                'alertconfirmDelete',
                [
                    'deleteId' => $this->deleteId,
                    'code' => 'prasit',
                ]
            );
        } else {
            // จัดการกรณีที่ไม่พบผู้ใช้
            session()->flash('error', 'User not found.');
        }
    }

    public function deleteItem()
    {
        $asset = Asset::find($this->deleteId);
        if ($asset) {
            $asset->delete();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "ลบข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1600
            );
        } else {
            session()->flash('error', 'Computer not found.');
        }
    }

    public function saveCategory()
    {
        try {
            $validateData = $this->validate(
                [
                    'name' => 'required|string|max:255',
                ]
            );
            CategoryAsset::create($validateData);

            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
            $this->dispatch('close-modal');
        } catch (\Throwable $th) {
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1600
            );
        }
    }
}

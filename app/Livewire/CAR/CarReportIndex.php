<?php

namespace App\Livewire\CAR;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\CAR\CarType;
use App\Models\CAR\CarBrand;
use Livewire\WithPagination;
use App\Models\CAR\CarReport;
use Livewire\WithFileUploads;
use App\Models\HRE\Department;
use App\Models\CAR\CarCharacter;
use App\Models\Lacation\Province;
use Illuminate\Support\Facades\Storage;

class CarReportIndex extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteItem'];
    public $edit = false;
    public $deleteId;
    public $updateId;
    public CarReport $carReport;
    public $car_number;
    public $car_county;
    public $car_type;
    public $car_character;
    public $car_brand;
    public $car_model;
    public $car_year;
    public $car_color;
    public $car_fuel;
    public $car_mileage;
    public $car_date;
    public $car_buy;
    public $car_tax;
    public $car_insurance;
    public $car_photo;
    public $car_status = 0;
    public $car_details;
    public $car_character_list;
    public $car_type_list;
    public $car_brand_list;
    public $car_department;
    public $car_card = 0 ;

    protected $rules = [
        'car_number' => 'required|string|max:255',
        'car_county' => 'required|string|max:255',
        'car_type' => 'required|string|max:255',
        'car_character' => 'nullable|string|max:255',
        'car_brand' => 'nullable|string|max:255',
        'car_model' => 'nullable|string|max:255',
        'car_year' => 'nullable|integer',
        'car_color' => 'nullable|string|max:100',
        'car_fuel' => 'nullable|string|max:100',
        'car_mileage' => 'nullable|integer',
        'car_date' => 'nullable|date',
        'car_buy' => 'nullable|date',
        'car_tax' => 'nullable|date',
        'car_insurance' => 'nullable|date',
        'car_photo' => 'nullable|image|max:3072',
        'car_status' => 'boolean',
        'car_details' => 'nullable|string',
        'car_department' => 'nullable|string',
        'car_card' => 'nullable|string',
    ];

    public function mount(CarReport $carReport)
    {
        $this->carReport = $carReport;
    }

    public bool $isLoading = false;

    public function initLoading()
    {
        $this->isLoading = true;
    }


    public function render()
    {
        Carbon::setLocale('th');
        $carReports = CarReport::with(['province', 'brand'])->orderBy('id', 'desc')->paginate(10);
        $carTypes = CarType::orderBy('id', 'desc')->get();
        $carCharacters = CarCharacter::orderBy('id', 'desc')->get();
        $carBrands = CarBrand::orderBy('id', 'ASC')->get();
        $provinces = Province::orderBy('ProvinceName', 'ASC')->get();
        $departments = Department::orderBy('DeptID', 'ASC')->get();
        return view('livewire.CAR.car-report-index', [
            'carReports' => $carReports,
            'carTypes' => $carTypes,
            'carCharacters' => $carCharacters,
            'carBrands' => $carBrands,
            'provinces' => $provinces,
            'departments' => $departments,
        ]);
    }

    public function addCarReport()
    {
        $this->edit = false;
    }
    public function addCarCharacter()
    {
        $this->edit = false;
    }
    public function addCarType()
    {
        $this->edit = false;
    }
    public function addCarBrand()
    {
        $this->edit = false;
    }

    public function saveCarCharacter()
    {
        try {
            $validatedData = $this->validate([
                'car_character_list' => 'required|string|max:255',
            ]);

            CarCharacter::create($validatedData);

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
        } catch (\Exception $e) {
            session()->flash('error', 'เกิดข้อผิดพลาด: ' . $e->getMessage());
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1500
            );
        }
    }


    public function saveCarType()
    {
        try {
            $validatedData = $this->validate([
                'car_type_list' => 'required|string|max:255',
            ]);

            CarType::create($validatedData);

            $this->dispatch('close-modal');
            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );

        } catch (\Exception $e) {
            session()->flash('error', 'เกิดข้อผิดพลาด: ' . $e->getMessage());
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1500
            );
        }
    }

    public function saveCarBrand()
    {
        try {
            $validatedData = $this->validate([
                'car_brand_list' => 'required|string|max:255',
            ]);

            CarBrand::create($validatedData);

            $this->dispatch('close-modal');
            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );

        } catch (\Exception $e) {
            session()->flash('error', 'เกิดข้อผิดพลาด: ' . $e->getMessage());
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1500
            );
        }
    }
    public function saveCarReport()
    {
        try {
            $validatedData = $this->validate([
                'car_number' => 'required|string|max:255',
                'car_county' => 'required|string|max:255',
                'car_type' => 'required|string|max:255',
                'car_character' => 'nullable|string|max:255',
                'car_brand' => 'nullable|string|max:255',
                'car_model' => 'nullable|string|max:255',
                'car_year' => 'nullable|integer',
                'car_color' => 'nullable|string|max:100',
                'car_fuel' => 'nullable|string|max:100',
                'car_mileage' => 'nullable|integer',
                'car_date' => 'nullable|date',
                'car_buy' => 'nullable|date',
                'car_tax' => 'nullable|date',
                'car_insurance' => 'nullable|date',
                // 'car_photo' => 'nullable|image|max:3072',
                // 'car_status' => 'boolean',
                'car_details' => 'nullable|string',
                'car_department' => 'nullable|string',
                
            ]);
            if ($this->car_photo) {

                if ($this->car_photo instanceof \Illuminate\Http\UploadedFile) {

                    $fileName = pathinfo($this->car_photo->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $this->car_photo->getClientOriginalExtension();

                    $filePath = 'Image_car/' . $fileName . '.' . $extension;
                    if (Storage::disk('public')->exists($filePath)) {

                        $fileName = $fileName . '_' . time() . '.' . $extension;
                    }

                    $filePath = $this->car_photo->storeAs('Image_car', $fileName, 'public');
                    $validatedData['car_photo'] = $filePath;
                } else {
                    $validatedData['car_photo'] = $this->car_photo;
                }
            }

            $validatedData['car_status'] = $this->car_status ? 1 : 0;

            CarReport::create($validatedData);

            $this->dispatch('close-modal');
            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );

        } catch (\Exception $e) {
            session()->flash('error', 'เกิดข้อผิดพลาด: ' . $e->getMessage());
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1500
            );
        }
    }

    public function resetInputFields()
    {
        $this->car_county = '';
        $this->car_number = '';
        $this->car_type = '';
        $this->car_character = '';
        $this->car_brand = '';
        $this->car_model = '';
        $this->car_year = '';
        $this->car_color = '';
        $this->car_fuel = '';
        $this->car_mileage = '';
        $this->car_date = '';
        $this->car_buy = '';
        $this->car_tax = '';
        $this->car_insurance = '';
        $this->car_photo = null;  // รีเซ็ตภาพ
        $this->car_status = '';
        $this->car_details = '';
        $this->car_character_list = '';
        $this->car_type_list = '';
        $this->car_brand_list = '';
        $this->car_department = '';
    }
    public function confirmEdit($id)
    {
        $this->edit = true;
        $this->updateId = $id;
        $carReport = CarReport::findOrFail($id);
        $this->car_number = $carReport->car_number;
        $this->car_county = $carReport->car_county;
        $this->car_type = $carReport->car_type;
        $this->car_character = $carReport->car_character;
        $this->car_brand = $carReport->car_brand;
        $this->car_model = $carReport->car_model;
        $this->car_year = $carReport->car_year;
        $this->car_color = $carReport->car_color;
        $this->car_fuel = $carReport->car_fuel;
        $this->car_mileage = $carReport->car_mileage;
        $this->car_date = $carReport->car_date ? date_format(date_create($carReport->car_date), "Y-m-d") : null;
        $this->car_buy = $carReport->car_buy ? date_format(date_create($carReport->car_buy), "Y-m-d") : null;
        $this->car_tax = $carReport->car_tax ? date_format(date_create($carReport->car_tax), "Y-m-d") : null;
        $this->car_insurance = $carReport->car_insurance ? date_format(date_create($carReport->car_insurance), "Y-m-d") : null;
        $this->car_photo = $carReport->car_photo;
        $this->car_status = $carReport->car_status;
        $this->car_details = $carReport->car_details;
        $this->car_department = $carReport->car_department;
    }

    public function updateCarReport()
    {
        try {
            $validatedData = $this->validate([
                'car_number' => 'required|string|max:255',
                'car_county' => 'required|string|max:255',
                'car_type' => 'required|string|max:255',
                'car_character' => 'nullable|string|max:255',
                'car_brand' => 'nullable|string|max:255',
                'car_model' => 'nullable|string|max:255',
                'car_year' => 'nullable|integer',
                'car_color' => 'nullable|string|max:100',
                'car_fuel' => 'nullable|string|max:100',
                'car_mileage' => 'nullable|integer',
                'car_date' => 'nullable|date',
                'car_buy' => 'nullable|date',
                'car_tax' => 'nullable|date',
                'car_insurance' => 'nullable|date',
                // 'car_photo' => 'nullable|image|max:3072',
                // 'car_status' => 'boolean',
                'car_details' => 'nullable|string',
                'car_department' => 'nullable|string',
            ]);

            $carReport = CarReport::findOrFail($this->updateId);

            if ($this->car_photo) {
                $carReport = CarReport::findOrFail($this->updateId);

                if ($carReport->car_photo) {
                    Storage::delete('public/' . $carReport->car_photo);
                }

                if ($this->car_photo instanceof \Illuminate\Http\UploadedFile) {

                    $fileName = pathinfo($this->car_photo->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $this->car_photo->getClientOriginalExtension();

                    $filePath = 'Image_car/' . $fileName . '.' . $extension;
                    if (Storage::disk('public')->exists($filePath)) {

                        $fileName = $fileName . '_' . time() . '.' . $extension;
                    }

                    $filePath = $this->car_photo->storeAs('Image_car', $fileName, 'public');
                    $validatedData['car_photo'] = $filePath;
                } else {

                    $validatedData['car_photo'] = $this->car_photo;
                }
            }

            $validatedData['car_status'] = $this->car_status ? 1 : 0;

            $carReport = CarReport::findOrFail($this->updateId);
            $carReport->update($validatedData);

            // $this->edit = false;
            $this->dispatch('close-modal');
            $this->resetInputFields();
            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "บันทึกข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
        } catch (\Exception $e) {
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1500
            );
        }
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $carReport = CarReport::find($id);

        if ($carReport) {
            $this->dispatch('alertconfirmDelete', [
                'deleteId' => $this->deleteId,
            ]);
        } else {
            session()->flash('error', 'Report Car not found.');
        }
    }


    public function deleteItem()
    {
        $carReport = CarReport::find($this->deleteId);

        if ($carReport) {
            if ($carReport->car_photo) {
                Storage::delete('public/' . $carReport->car_photo);
            }

            $carReport->delete();

            $this->dispatch(
                'alert',
                position: "center",
                icon: "success",
                title: "ลบข้อมูลสำเร็จ",
                showConfirmButton: false,
                timer: 1500
            );
        } else {
            $this->dispatch(
                'alert',
                position: "center",
                icon: "error",
                title: "เกิดข้อผิดพลาด",
                showConfirmButton: false,
                timer: 1500
            );
        }
    }

    public function Close()
    {
        $this->resetInputFields();
        $this->dispatch('close-modal');
    }
}

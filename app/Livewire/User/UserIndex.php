<?php

namespace App\Livewire\User;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Rap2hpoutre\FastExcel\FastExcel;

class UserIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    #[Validate('required')]
    public $name = '';
    public $email;
    public $password;
    public User $user;
    public $deleteId;
    public $updateId;

    public function mount(User $user) {
        $this->user = $user;
    }

    public function render()
    {
        Carbon::setLocale('th');
        $users = User::orderBy('id','desc')->paginate(10);
        return view('livewire.user.user-index',[
            'users' => $users
        ]);
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ];
    }
    //Realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }

    // custom validate message
    protected $messages = [
        'name.required' => 'กรุณากรอกชื่อ-สกุล',
        'email.required' => 'กรุณากรอก Email',
        'email.email' => 'รูปแบบ Email ไม่ถูกต้อง',
        'email.unique' => 'มีผู้ใช้งาน Email นี้แล้ว กรุณาลองใหม่',
        'password.required' => 'กรุณากรอกรหัสผ่าน',
    ];

    public function store() {

        $this->validate();

        try {
            $this->user::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            $this->resetForm();

            session()->flash('message', 'บันทึกข้อมูลสำเร็จ');
        } catch (\Throwable $th) {
            session()->flash('message', 'เกิดข้อผิดพลาด');
        }
    }
    public function resetForm() {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function exportExcel()
    {
        // Load users
        $users = User::all();

        // Export all users
        // (new FastExcel($users))->export(uniqid().'.xlsx');
        return response()->streamDownload(function() use($users) {
            return (new FastExcel($users))->export('php://output',function($user) {
                return [
                    'Name' => $user->name,
                    'Email' => $user->email,
                    'Created At' => $user->created_at->format('Y-m-d H:i:s'),
                ];
            });
        },
            sprintf('user-%s-%s.xlsx',date('Y-m-d'),uniqid())
        );
    }

    public function importExcel()
    {
        try {
            $users = (new FastExcel)->import('users-import.xlsx', function ($line) {
                return User::create([
                    'name' => $line['name'],
                    'email' => $line['email'],
                    'password' => Hash::make($line['password']),
                ]);
            });
            session()->flash('message', 'นำเข้าข้อมูลผู้ใช้สำเร็จ');
        } catch (\Throwable $th) {
            session()->flash('message', 'เกิดข้อผิดพลาดในการ import');
        }
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $user = User::find($id);

        if ($user) {
            $this->deleteId = $id;
            $this->name = $user->name;
        } else {
            // จัดการกรณีที่ไม่พบผู้ใช้
            session()->flash('error', 'User not found.');
        }
    }

    public function delete()
    {
        User::find($this->deleteId)->delete();
        session()->flash('message', 'ลบข้อมูลสำเร็จ');
    }

    public function confirmEdit($id)
    {
        $this->updateId = $id;
        $this->resetForm();
        $user = User::find($id);
        $this->name = $user->name;
        $this->email = $user->email;

    }

    public function update()
    {
        User::find($this->updateId)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->resetForm();
        session()->flash('message', 'อัพเดทข้อมูลสำเร็จ');
    }
}

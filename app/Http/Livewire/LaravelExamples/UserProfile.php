<?php

namespace App\Http\Livewire\LaravelExamples;
use App\Models\User;

use Livewire\Component;

class UserProfile extends Component
{
    public User $user;
    public $showSuccesNotification  = false;

    public $showDemoNotification = false;
    
    protected $rules = [
        'user.name' => 'max:40|min:3',
        'user.email' => 'email:rfc,dns',
        'user.phone' => 'nullable',
        'user.father_name' => 'nullable',
        'user.mother_name' => 'nullable',
        'user.last_name' => 'nullable',
        'user.alt_email' => 'nullable',
        'user.phone' => 'nullable',
        'user.pan_no' => 'nullable',
        'user.voter_id' => 'nullable',
        'user.aadhar_no' => 'nullable',
        'user.alt_mobile' => 'nullable',
        'user.idf_moles' => 'nullable',
        'user.d_no' => 'nullable',
        'user.landmark' => 'nullable',
        'user.street' => 'nullable',
        'user.village' => 'nullable',
        'user.mandal' => 'nullable',
        'user.district' => 'nullable',
        'user.state' => 'nullable',
        'user.country' => 'nullable',
        'user.p_address' => 'nullable',
        'user.school_name' => 'nullable',
        'user.s_board' => 'nullable',
        'user.s_percentage' => 'nullable',
        'user.s_gpa' => 'nullable',
        'user.s_location' => 'nullable',
        'user.c_name' => 'nullable',
        'user.c_board' => 'nullable',
        'user.c_percentage' => 'nullable',
        'user.c_gpa' => 'nullable',
        'user.c_location' => 'nullable',
        'user.b_name' => 'nullable',
        'user.b_board' => 'nullable',
        'user.b_percentage' => 'nullable',
        'user.b_gpa' => 'nullable',
        'user.b_location' => 'nullable',
        'user.p1_name' => 'nullable',
        'user.p1_des' => 'nullable',
        'user.p1_due' => 'nullable',
        'user.p2_name' => 'nullable',
        'user.p2_des' => 'nullable',
        'user.p2_due' => 'nullable',
        'user.cu1_name' => 'nullable',
        'user.cu1_des' => 'nullable',
        'user.cu1_due' => 'nullable',
        'user.cu2_name' => 'nullable',
        'user.cu2_des' => 'nullable',
        'user.cu2_due' => 'nullable',
        'user.i1_name' => 'nullable',
        'user.i1_des' => 'nullable',
        'user.i1_due' => 'nullable',
        'user.i2_name' => 'nullable',
        'user.i2_des' => 'nullable',
        'user.i2_due' => 'nullable',
        'user.github' => 'nullable',
        'user.linkedin' => 'nullable',
        'user.portfolio' => 'nullable'
        
    ];

    public function mount() { 
        $this->user = auth()->user();
    }

    public function save() {
        if(env('IS_DEMO')) {
           $this->showDemoNotification = true;
        } else {
            $this->validate();
            $this->user->save();
            $this->showSuccesNotification = true;
        }
    }
    public function render()
    {
        return view('livewire.laravel-examples.user-profile');
    }
}

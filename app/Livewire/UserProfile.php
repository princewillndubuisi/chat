<?php

namespace App\Livewire;

use App\Models\Disciplines;
use Exception;
use App\Models\Hobbies;
use Livewire\Component;
use Livewire\Attributes\Rule;

class UserProfile extends Component
{
    #[Rule("required|min:2|max:50")]
    public $hobbies;

    public $hobbyId;

    public $search;

    public function save($id) {
        $validated = $this->validate();

        try {
            $hobby = Hobbies::findOrfail($id);

            $hobby->hobbies = $this->hobbies;
            $hobby->update();
            session()->flash('success', 'Updated Successfully');
        } catch (Exception $e) {

        }
    }

    public function render()
    {
        $hobby = Hobbies::latest()->first();
        $this->hobbyId = $hobby->id;
        $this->hobbies = $hobby->hobbies;

        $job = !empty($this->search) ? Disciplines::where('discipline', 'like', '%' . $this->search . '%')->latest()->get() : Disciplines::latest()->get();

        return view('livewire.user-profile', ['hobby' => $hobby], ['job' => $job]);
    }
}

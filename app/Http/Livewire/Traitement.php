<?php

namespace App\Http\Livewire;

use App\Models\Classe;
use App\Models\Section;
use Livewire\Component;

class Traitement extends Component
{
   
    public $classes;
    public $sections;
  
    public $selectedClass = NULL;
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function mount()
    {
        $this->classes = Classe::all();
        $this->sections = collect();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updatedselectedClass($classe){
        if (!is_null($classe)) {
            $this->sections = Section::where('class_id', $classe)->get();
        }
    }
    public function render()
    {
        return view('livewire.traitement')->extends("layouts.app")->section("contenu");
    }
    
}

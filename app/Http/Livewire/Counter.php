<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public function increment()
    {
        $this->count++;

    }
    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {

        return view('livewire.counter',['count' => $this->count]);
    }
}

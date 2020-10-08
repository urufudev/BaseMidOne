<?php

namespace App\Http\Livewire\Laborals;

use App\Models\Laboral;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = true;
    public $search = '';
    public function render()
    {
        $laborals = Laboral::query()
            ->search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);

        return view('livewire.laborals.index',compact('laborals'));
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
}

/* 
class Index extends Component
{
    use WithPagination;
    public $sortBy = 'id';
    public $sortDirection = 'desc';
    public $perPage = 10;
    public function render()
    {
        $laborals = Laboral::query()
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.laborals.index',compact('laborals'));
    }

    public function sortBy($field)
    {
        if($this->sortDirection == 'asc'){
            $this->sortDirection = 'desc';
        }
        else{
            $this->sortDirection = 'asc';
        }
        $this->sortBy = $field;
    }
} */
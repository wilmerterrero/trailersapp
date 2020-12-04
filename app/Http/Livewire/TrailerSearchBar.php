<?php

namespace App\Http\Livewire;

use App\Models\Trailer;
use Livewire\Component;

class TrailerSearchBar extends Component
{
    public $query;
    public $trailers;

    public function mount()
    {
        $this->resetSearch();
    }
    
    public function resetSearch()
    {
        $this->query = '';
        $this->trailers = [];
    }
    
    public function updatedQuery()
    {
        $this->trailers = Trailer::where('titulo', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.trailer-search-bar');
    }
}

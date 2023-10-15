<?php

namespace App\Livewire\Members;

use App\Models\Player;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ListPlayer extends Component
{
    protected Collection $players;

    public function mount()
    {
        $this->players = Player::all();
    }

    public function render()
    {
        return view('livewire..members.list-player');
    }
}

<?php

namespace App\Livewire\Pages\Post;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.post.index', [
            'datas' => Post::get()
        ]);
    }
}

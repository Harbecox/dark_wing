<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class NewsList extends Component
{
    public $count = 9;

    public function increment()
    {
        $this->count+=9;
    }

    public function render()
    {
        $data['news'] = Post::query()->limit($this->count)->get();
        $data['all_count'] = Post::query()->count();
        $data['count'] = $this->count;
        return view('livewire.news-list',$data);
    }
}

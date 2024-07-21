<?php

namespace App\Modules\Posts\Components;

use Livewire\WithPagination;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    use WithPagination;
    // public $posts;

    public function mount()
    {
        // $this->posts = Post::orderBy('id', 'Asc')->paginate(2);
    }
    
    #[On('post-created')] 
    public function render()
    {
        $posts = Post::orderBy('id', 'Desc')->paginate(2);
        return view('posts.components.posts', ['posts' => $posts]);
    }
}

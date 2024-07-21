<?php

namespace App\Modules\Posts\Components;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Validate;

class PostAdd extends Component
{
    #[Validate('required', message: 'Por favor, escribe un título')]
    #[Validate('min:3', message: 'El título debe tener al menos 3 caracteres')]
    public $title;

    #[Validate('required', message: 'Por favor, escribe un contenido')]
    #[Validate('min:3', message: 'El contenido debe tener al menos 3 caracteres')]
    public $content;

    public function mount() //$title
    {
        // $this->title = $title;
    }

    public function render()
    {
        return view('posts.components.post-add');

        // Si sólo queremos mostrar un archivo HTML pequeño y no complejo
        // return <<<'HTML'
        // <div>
        //     <h2>Hola mundo!</h2>
        // </div>
        // HTML;
    }

    public function createPost()
    {
        $validated = $this->validate([ 
            'title' => 'required|min:3',
            'content' => 'required|min:3',
        ]);
 
        Post::create($validated);

        $this->reset(['title', 'content']);

        // Después de guardar, y resetear el fomulario, que se dispare el siguiente evento:
        $this->dispatch('post-created');
 
        // return redirect()->to('/');
    }
}

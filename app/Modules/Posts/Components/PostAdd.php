<?php

namespace App\Modules\Posts\Components;

use Livewire\Component;

class PostAdd extends Component
{
    public $title;

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
        dd('Crearrrrr');
    }
}

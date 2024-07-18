<div>
    <div class="card">
        <div class="card-header">
            Crear post
        </div>
        <div class="card-body">
            <form wire:submit="createPost">
                <input type="text" class="form-control" placeholder="Título" wire:model="title">
                <div class="small text-danger">@error('title') {{ $message }} @enderror</div>

                <textarea rows="3" class="form-control mt-2" placeholder="Contenido" wire:model="content"></textarea>
                <div class="small text-danger">@error('content') {{ $message }} @enderror</div>

                <button type="submit" class="btn btn-primary my-2">Crear</button>
            </form>
        </div>
    </div>
</div>

<div>
    <div class="card">
        <div class="card-header">
            Crear post
        </div>
        <div class="card-body">
            <form wire:submit="createPost">
                <input type="text" class="form-control" placeholder="Título" wire:model="title">
                <textarea rows="3" class="form-control my-2"></textarea>
                <button type="submit" class="btn btn-primary my-2">Crear</button>
            </form>
        </div>
    </div>
</div>

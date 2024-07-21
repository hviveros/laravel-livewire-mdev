<div>
    <div class="card">
        <div class="card-header">
            Lista de publicaciones
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr wire:key="{{ $post->id }}">
                        <td>{{ $post->id }}</td>
                        <td>{!! $post->title !!}</td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
</div>

    <tr>
        <td>{{ $post->user->email }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td><a wire:navigate href="{{ route('post.get',$post->id) }}" class="btn btn-primary btn-sm">edit</a></td>
    </tr>

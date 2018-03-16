
     @foreach($news as $key => $new)

        <tr>
            <td>:{{ $new->id }}</td>
            <td>:{{ $new->title }}</td>
            <td>:{{ $new->article }}</td>

        </tr>
    @endforeach


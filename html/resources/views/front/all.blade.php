<?
echo 'all data get';
?>

<a href="{{route('main.all')}}">Main all へ移動</a>

<a href="all">Main all へ移動</a>
<div>
    {{ session('err_masg') }}
</div>
<tbody>
    @foreach ($mains as $main)
    <div>
        <tr>
            <td>{{ $main->title }}</td>
            <td>{{ $main->content }}</td>
        </tr>
    </div>
    @endforeach
</tbody>

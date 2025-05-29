<?
echo 'all data get';
?>

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

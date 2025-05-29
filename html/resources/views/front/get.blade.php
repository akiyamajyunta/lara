<?
    echo '数字を表示するだけ';
    echo $id;
    ?>

<a href="{{ route('main.list') }}">Main List へ移動</a>

<div>
    <a>{{$main->title}}</a>
    <br>
    <a>{{$main->content}}</a>
</div>
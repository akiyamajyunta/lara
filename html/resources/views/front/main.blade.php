
    <a href="{{route('main.all')}}">Main all へ移動</a>

    <a href="{{ route('main.edit')}}">投稿画面へ</a>

    <div>
        {{ session('err_masg') }}
    </div>
    <!-- <tbody>
        @foreach ($mains as $main)
        <div>
            <tr>
                <td>{{ $main->title }}</td>
                <td>{{ $main->content }}</td>
            </tr>
        </div>
        @endforeach
    </tbody> -->
    <tbody>
        <div class='memo-frame-back'>
            @foreach ($mains as $main)
                <table>
                    <div class="memo-frame">
                    @csrf    
                        <form action="{{ route('main.rewrite')}}" method="post">
                            @csrf
                            <input type="hidden" name="title" value="{{ $main->title }}">
                            <input type="hidden" name="content" value="{{ $main->content }}">    
                            <input type="hidden" name="id" value="{{ $main->id }}">    

                            <div class="box-title" >
                                <p>{{ $main->title }}</p>
                            </div>
                            <div name="content">
                                <p>{{ $main->content }}</p>
                            </div>
                            <div>
                                <p>{{ $main->id }}</p>
                            </div>
                            <div class='delete-memo'>
                                <button class='delete-button' name="delete_id" value='{{$main->id}}' type="submit">編集</button>
                            </div> <!-- 書き換え -->
                        </form>
                        <form action="{{ route('main.delete', ['id' => $main->id]) }}" method="post">
                            @csrf
                            <div class='delete-memo'>
                                <button class='delete-button' name="delete_id" value='{{$main->id}}' type="submit">削除</button>
                            </div> <!-- 削除ボタン -->
                        </form>
                        <hr>
                    </div>
                </table>
            @endforeach    
        </div>
    </tbody>

<style>
.memo-frame-back{
    position: absolute;
    /* position: relative; */
    background-color: rgb(241, 241, 241);
    border: thick double rgb(0, 0, 0);
    left: 50%;
    top:130%;
    padding-top: 80px;
    /* z-index: -100; */
    transform: translate(-50%, -50%);
    margin: 0 auto;
    width: 60%;
    min-height: 100vh;
}

.memo-frame {
    margin: 0 auto;
    background: #dcefff;
    width: 99%;

}
.memo-frame .box-title {
    font-size: 1.2em;
    background: #5fb3f5;
    padding: 4px;
    color: #FFF;
    font-weight: bold;
    letter-spacing: 0.05em;
}
.memo-frame p {
    padding: 15px 20px;
    margin: 0;
}
.delete-memo{
    display: flex; 
    justify-content: flex-end;
    }


</style>
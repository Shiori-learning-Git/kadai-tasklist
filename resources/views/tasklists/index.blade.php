@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($tasklists) > 0)
        <ul>
            @foreach ($tasklists as $tasklists)
                <li>{!! link_to_route('tasklists.show', $tasklists->id, ['id' => $tasklists->id]) !!} : {{ $tasklists->content }}</li>
            @endforeach
        </ul>
    @endif
    
     {!! link_to_route('tasklists.create', '新規メッセージの投稿') !!}

@endsection


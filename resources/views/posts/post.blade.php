@extends('layouts.app')
@section('content')
    @foreach($values as $value)
    <!-- テーブル形式にする -->
    <table class="flex flex-col text-2xl ">
        <thead class="flex space-x-10">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>contents</th>
            </tr>
        </thead>
        <tbody class="">
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->contents }}</td>
            </tr>
        </tbody>
    </table>
        <h2 class="text5xl">Comments</h2>
        <ul>
            @foreach($value->comments as $comment)
                <li>{{ $comment->name}}:{{ $comment->body }}</li>
            @endforeach
        </ul>
    @endforeach
@endsection



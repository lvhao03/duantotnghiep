@extends('admin.admin-layout')
@section('title')
    Danh sách bình luận
@endsection
@section('header')
    Danh sách bình luận
@endsection
@section('content')
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên người dùng</th>
            <th scope="col">Nội dung bình luận</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($commentList as $comment)
        <tr>
            <th scope="row">{{$comment->id}}</th>
            <td>{{$comment->user}}</td>
            <td>{{$comment->content}}</td>
            <td>{{$comment->product}}</td>
            <td>
                <a href="/admin/comment/edit?id={{$comment->id}}"><button class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></button></a>
                <a href="/admin/comment/delete?id={{$comment->id}}"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/admin/comment/add"><button class="btn btn-primary">Thêm</button></a>
@endsection
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
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Tên người dùng</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Số sao đánh giá</th>
            <th scope="col">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1
        @endphp
        @foreach($reviewList as $review)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$review->product_name}}</td>
            <td>{{$review->user_name}}</td>
            <td>{{$review->content}}</td>
            <td>{{$review->star}}</td>
            <td>
            <a href="/admin/review/edit?id={{$review->id}}"><button class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></button></a>
                <a href="/admin/review/delete?id={{$review->id}}"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
            </td>
        </tr>
        @php $i++
        @endphp
        @endforeach
    </tbody>
</table>
<a href="/admin/review/add"><button class="btn btn-primary">Thêm</button></a>
@endsection
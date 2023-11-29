@extends('admin.admin-layout')
@section('title')
    Chỉnh sửa bình luận
@endsection
@section('header')
    Chỉnh sửa bình luận
@endsection
@section('content')
<form action="/admin/comment/edit" method="post">
  @csrf
  <input hidden type="text" name="id" class="form-control" id="exampleInputPassword1" placeholder="Nhập nội dung" value="{{$comment->id}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên người dùng</label>
    <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="Nhập tên" placeholder="Nhập tên" value="{{$comment->user}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nội dung bình luận</label>
    <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Nhập nội dung" value="{{$comment->content}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sản phẩm bình luận</label>
    <input type="text" name="product" class="form-control" id="exampleInputPassword1" placeholder="Nhập sản phẩm" value="{{$comment->product}}">
  </div>
  <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
</form>
@endsection
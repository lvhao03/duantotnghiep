@extends('admin.admin-layout')
@section('title')
    Thêm bình luận
@endsection
@section('header')
    Thêm bình luận
@endsection
@section('content')
<form action="/admin/comment/add" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Tên người dùng</label>
    <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="Nhập tên" placeholder="Nhập tên người dùng">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nội dung bình luận</label>
    <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Nhập nội dung">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sản phẩm bình luận</label>
    <input type="text" name="product" class="form-control" id="exampleInputPassword1" placeholder="Nhập sản phẩm">
  </div>
  <button type="submit" class="btn btn-primary">Thêm</button>
</form>
@endsection
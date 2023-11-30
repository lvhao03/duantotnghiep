@extends('admin.admin-layout')
@section('title')
    Thêm bình luận
@endsection
@section('header')
    Thêm bình luận
@endsection
@section('content')
<form action="/admin/review/add" method="post">
  @csrf
  <input hidden type="text" name="id" class="form-control" id="exampleInputPassword1" placeholder="Nhập nội dung">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Tên người dùng</label>
    <select class="form-control" name="user_id" id="">
        @foreach($userList as $user)
          <option value="{{$user->id}}">{{$user->user_name}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nội dung bình luận</label>
    <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Nhập nội dung">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sản phẩm bình luận</label>
    <select class="form-control" name="product_id" id="">
        @foreach($productList as $product) 
          <option value="{{$product->id}}">{{$product->name}}</option>
        @endforeach 
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Số sao đánh giá</label>
    <input type="text" name="star" class="form-control" id="exampleInputPassword1" placeholder="Nhập số sao">
  </div>
  <button type="submit" class="btn btn-primary">Thêm</button>
</form>
@endsection
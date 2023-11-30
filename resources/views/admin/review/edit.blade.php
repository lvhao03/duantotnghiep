@extends('admin.admin-layout')
@section('title')
    Chỉnh sửa bình luận
@endsection
@section('header')
    Chỉnh sửa bình luận
@endsection
@section('content')
<form action="/admin/review/edit" method="post">
  @csrf
  <input hidden type="text" name="id" class="form-control" id="exampleInputPassword1" placeholder="Nhập nội dung" value="{{$review->id}}">
  
  <div class="form-group">
    <label for="exampleInputEmail1">Tên người dùng</label>
    <select class="form-control" name="user_id" id="">
      <option value="{{$review->user_id}}">{{$review->user_name}}</option>
      <?php 
        foreach($userList as $user) {
          if($user->user_name == $review->user_name) {
            continue;
          }
        ?>
          <option value="<?php echo $user->id ?>"><?php echo $user->user_name ?></option>
      <?php }?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nội dung bình luận</label>
    <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Nhập nội dung" value="{{$review->content}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sản phẩm bình luận</label>
    <select class="form-control" name="product_id" id="">
      <option value="{{$review->product_id}}">{{$review->product_name}}</option>
      <?php 
        foreach($productList as $product) {
          if($product->name == $review->product_name) {
            continue;
          }
        ?>
          <option value="<?php echo $product->id?>"><?php echo $product->name ?></option>
      <?php }?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Số sao đánh giá</label>
    <input type="text" name="star" class="form-control" id="exampleInputPassword1" placeholder="Nhập số sao" value="{{$review->star}}">
  </div>
  <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
</form>
@endsection
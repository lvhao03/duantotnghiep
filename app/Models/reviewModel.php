<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviewModel extends Model
{
    use HasFactory;
    function get_review(){
        return DB::table('review')
        ->join('product', 'review.product_id', 'product.id')
        ->join('user', 'review.user_id', 'user.id')
        ->select('review.id', 'product.name as product_name', 'user.user_name' , 'review.star', 'review.content')
        ->get();
    }

    function get_review_byID($id){
        return DB::table('review')
        ->where('review.id', '=', $id)
        ->join('product', 'review.product_id', 'product.id')
        ->join('user', 'review.user_id', 'user.id')
        ->select('review.id','product.name as product_name',  'user.user_name' , 'review.star', 'review.content', 'review.user_id', 'review.product_id')
        ->first();
    }

    function add_review($user_id, $content, $product_id, $star){
        DB::table('review')->insert([
            'user_id' => $user_id,
            'content' => $content,
            'product_id' => $product_id,
            'star' => $star
        ]);
    }

    function edit_review($user_id, $content, $product_id, $id, $star){
        DB::table('review')->where('id', '=', $id)->update([
            'user_id' => $user_id,
            'content' => $content,
            'product_id' => $product_id,
            'star' => $star
        ]);
    }

    function delete_review($id){
        DB::table('review')->where('id', '=', $_GET['id'])->delete();
    }
}

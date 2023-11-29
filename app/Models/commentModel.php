<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentModel extends Model
{
    use HasFactory;
    function get_comment(){
        return DB::table('comment')->get();
    }

    function get_comment_byID($id){
        return DB::table('comment')->where('id', '=', $id)->first();
    }

    function add_comment($user, $content, $product){
        DB::table('comment')->insert([
            'user' => $user,
            'content' => $content,
            'product' => $product
        ]);
    }

    function edit_comment($user, $content, $product, $id){
        DB::table('comment')->where('id', '=', $id)->update([
            'user' => $user,
            'content' => $content,
            'product' => $product
        ]);
    }

    function delete_comment($id){
        DB::table('comment')->where('id', '=', $_GET['id'])->delete();
    }
}

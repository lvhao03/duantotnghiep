<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\reviewModel;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    function get_review(){
        $reviewModel = new reviewModel();
        return view('admin.review.list', ['reviewList' =>  $reviewModel->get_review() ]);
    }

    function add_review(){
        $userList= DB::table('user')->get();
        $productList = DB::table('product')->get();
        return view('admin.review.add', [
            'userList' => $userList ,
            'productList' => $productList]);
    }

    function add_review_(){
        $reviewModel = new reviewModel();
        $reviewModel->add_review($_POST['user_id'], $_POST['content'], $_POST['product_id'], $_POST['star']);
        return view('admin.review.list', ['reviewList' =>  $reviewModel->get_review() ]);
    }

    function edit_review(){
        $reviewModel = new reviewModel();
        $userList= DB::table('user')->get();
        $productList = DB::table('product')->get();
        return view('admin.review.edit', [
            'review' =>  $reviewModel->get_review_byID($_GET['id']) ,
            'userList' => $userList ,
            'productList' => $productList]);
    }

    function edit_review_(){
        $reviewModel = new reviewModel();
        $reviewModel->edit_review($_POST['user_id'], $_POST['content'], $_POST['product_id'], $_POST['id'], $_POST['star']);
        return view('admin.review.list', ['reviewList' =>  $reviewModel->get_review() ]);
    }

    function delete_review(){
        $reviewModel = new reviewModel();
        $reviewModel->delete_review($_GET['id']);
        return view('admin.review.list', ['reviewList' =>  $reviewModel->get_review() ]);
    }
}

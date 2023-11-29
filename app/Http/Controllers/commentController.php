<?php

namespace App\Http\Controllers;
use App\Models\commentModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class commentController extends Controller
{
    function get_comment(){
        $commentModel = new commentModel();
        return view('admin.comment.list', ['commentList' =>  $commentModel->get_comment() ]);
    }

    function add_comment(){
        return view('admin.comment.add');
    }

    function add_comment_(){
        $commentModel = new commentModel();
        $commentModel->add_comment($_POST['user'], $_POST['content'], $_POST['product']);
        return view('admin.comment.list', ['commentList' =>  $commentModel->get_comment() ]);
    }

    function edit_comment(){
        $commentModel = new commentModel();
        return view('admin.comment.edit', ['comment' => $commentModel->get_comment_byID($_GET['id'])]);
    }

    function edit_comment_(){
        $commentModel = new commentModel();
        $commentModel->edit_comment($_POST['user'], $_POST['content'], $_POST['product'], $_POST['id']);
        return view('admin.comment.list', ['commentList' =>  $commentModel->get_comment() ]);
    }

    function delete_comment(){
        $commentModel = new commentModel();
        $commentModel->delete_comment($_GET['id']);
        return view('admin.comment.list', ['commentList' =>  $commentModel->get_comment() ]);
    }
}

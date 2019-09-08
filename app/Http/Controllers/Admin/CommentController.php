<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Modeles\Comment;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
            public function index()
            {
                $actives = Comment::where('active', 1)->orderBy('created_at', 'DESC')->get();

                return view('livredor.index',[
                    'actives' => $actives,
                    ]);
                }

                
            public function showComment($id) 
            {
                $comment = Comment::find($id);
                $comment->active = 1;
                $comment->save();
                
                return back()->with('valide', 'Le commentaire est désormais visible');
                
            }



            

            public function create()
            {
                
                $comments = Comment::orderBy('created_at', 'DESC')->paginate(10);
                
                return view('livredor.create', [
                    'comments' => $comments,
                    
                    ]);
                }
                

    public function store(CommentRequest $request)
    {
        $data = $request->validated();
        $comment = new Comment;
        $comment->pseudo = $data['pseudo'];
        $comment->content = $data['content'];
        $comment->created_at=now();
        $comment->updated_at=now();
        $comment->save();

        return back()->with('message', 'Votre message à bien été enregistrer, il est en attente de modération :)');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validated();
        $comment = Comment::find($id);
        $comment->pseudo = $data['pseudo'];
        $comment->content = $data['content'];
        $comment->active = $data['active'];
        $comment->created_at=now();
        $comment->updated_at=now();
        $comment->save();

        return back();
    }

    public function destroy($id)
    {
        $service = Comment::find($id);
        $service->delete();
        return back()->with('supp', 'Le message à bien été supprimer');
    }
}



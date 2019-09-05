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

        $comments = Comment::all();

        return view('livredor.index',[
            'comments' => $comments

        ]);
    }


    public function create()
    {
        $actives = 1;
        $comments = Comment::all();



        return view('livredor.create', [
            'comments' => $comments,
            'actives' => $actives,

        ]);
    }


    public function store(CommentRequest $request)
    {

        $data = $request->validated();
        $comment = new Comment;

        $comment->pseudo = $data['pseudo'];
        $comment->content = $data['content'];



        // $boncadeau->update($data);
        $comment->created_at=now();
        $comment->updated_at=now();


        $comment->save();
        // Session::flash('status', 'Client mis à jour');
        // Session::flash('type', 'alert-success');

        return back();
    }


    public function update(Request $request, $id)
    {
        $data = $request->validated();
        $comment = Comment::find($id);
        $comment->pseudo = $data['pseudo'];
        $comment->content = $data['content'];
        $comment->active = $data['active'];


        // $service->update($data);

        $comment->created_at=now();
        $comment->updated_at=now();

        $comment->save();
        // Session::flash('status', 'Client mis à jour');
        // Session::flash('type', 'alert-success');

        return back();
    }



    public function destroy($id)
    {
        $service = Comment::find($id);
        $service->delete();
        return redirect('/livredor');
    }
}



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
        $actives = 1;
        $comments = Comment::orderBy('created_at', 'DESC')->paginate(10);

        return view('livredor.create',[
            'comments' => $comments,
            'actives' => $actives,

        ]);
    }


    public function create()
    {
        $actives = 1;


        $comments = Comment::orderBy('created_at', 'DESC')->paginate(4);




        return view('livredor.index', [
            'comments' => $comments,
            'actives' => $actives,

        ]);
    }

public function onComment($id) {
    $comment = Comment::find($id);
    $comment->active = true;
    $comment->save();

    return view('livredor.create', [
        'onComment' => $comment,
    ]);

}
public function offComment($id) {
    $comment = Comment::find($id);
    $comment->active = false;
    $comment->save();

    return view('livredor.create', [
        'offComment' => $comment,


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

        return back()->with('message', 'Votre message à bien été enregistrer, il est en attente de modération :)');
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
        return back()->with('danger', 'Le commentaire à bien été supprimer');
    }
}



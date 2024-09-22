<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(3); // Récupère les blogs avec pagination (3 par page)
        return view('blogs.show', compact('blogs')); // Passe les blogs à la vue
    }
    
    

    public function create()
    {
        return view('Blogs.create'); // Retourne la vue pour créer un blog
    }

    public function store(Request $request)
    {
        // Valide et enregistre le nouveau blog
        $blog = Blog::create($request->all());
        
        return redirect()->route('Blogs.index'); // Redirige vers la liste des blogs
    }
    
    public function show($id)
    {
        $blog = Blog::findOrFail($id); // Récupère le blog par ID ou lance une erreur 404
        return view('Blogs.single', compact('blog')); // Utilisez une vue différente pour afficher le blog
    }
    
    // Ajoutez ici d'autres méthodes comme show, edit, update, destroy, etc.
}

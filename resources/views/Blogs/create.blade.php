
@extends('squlette')
@include('shared.nav')
<div class="container">
    <h1>Créer un nouveau blog</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('Blogs.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="content">Contenu</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Créer</button>
    <a href="{{ route('Blogs.index') }}" class="btn btn-secondary">Retour à la liste</a>
</form>

</div>
@include('shared.footer')

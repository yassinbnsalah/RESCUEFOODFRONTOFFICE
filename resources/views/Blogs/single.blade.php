@extends('squlette')
@include('shared.nav')

<main class="page-wrapper">
    <div class="container pb-5">
        <div class="row justify-content-center pt-5 mt-md-2">
            <div class="col-lg-9">
                <!-- Post meta -->
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4 mt-n1">
                    <div class="d-flex align-items-center fs-sm mb-2">
                        <a class="blog-entry-meta-link" href="#">
                            <div class="blog-entry-author-ava">
                                <img src="/img/blog/meta/05.jpg" alt="">
                            </div>Hedi Belguith
                        </a>
                        <span class="blog-entry-meta-divider"></span>
                        <a class="blog-entry-meta-link" href="#">{{ \Carbon\Carbon::parse($blog->created_at)->format('M d') }}</a>
                    </div>
                    <div class="fs-sm mb-2">
                        <a class="blog-entry-meta-link text-nowrap" href="#comments" data-scroll>
                            <i class="ci-message"></i>0
                        </a>
                    </div>
                </div>
                <!-- Post content -->
                <h1 class="h3 mb-4">{{ $blog->title }}</h1>
                <img src="/img/blog/single/02.jpg" alt="{{ $blog->title }}" class="img-fluid mb-4">
                <p>{{ $blog->content }}</p>
               
                <!-- Comments -->
                <div class="pt-2 mt-5" id="comments">
    <h2 class="h4">Comments <span class="badge bg-secondary fs-sm text-body align-middle ms-2">{{ $blog->comments->count() }}</span></h2>
    
    @foreach ($blog->comments as $comment)
        <div class="d-flex align-items-start py-4 border-bottom">
            <img class="rounded-circle" src="\img\blog\meta\05.jpg" width="50" alt="{{ $comment->user_name }}"> <!-- Remplace par le champ de nom d'utilisateur si disponible -->
            <div class="ps-3 flex-grow-1">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="fs-md mb-0">{{ $comment->user_name }}</h6> <!-- Remplace par le champ de nom d'utilisateur -->
                    <span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>{{ $comment->created_at->format('M d, Y') }}</span>
                </div>
                <p class="fs-md mb-1">{{ $comment->content }}</p>
            </div>
        </div>
    @endforeach

    <!-- Post comment form -->
    <div class="card border-0 shadow mt-2 mb-4">
        <div class="card-body">
            <form action="{{ route('comments.store', $blog->id) }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <textarea class="form-control" rows="4" name="content" placeholder="Write comment..." required></textarea>
                    <div class="invalid-feedback">Please write your comment.</div>
                </div>
                <button class="btn btn-primary btn-sm" type="submit">Post comment</button>
            </form>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</main>

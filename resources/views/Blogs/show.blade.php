@extends('squlette')
@include('shared.nav')

<main class="page-wrapper">
    <!-- Page Title (Light) -->
    <div class="bg-secondary py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="{{ url('/') }}"><i class="ci-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Liste des Blogs</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 mb-0">Liste des Blogs</h1>
            </div>
        </div>
    </div>

    <div class="container pb-5 mb-2 mb-md-4">
        <!-- Featured Posts Carousel -->
        <div class="featured-posts-carousel tns-carousel pt-5">
        <div class="tns-carousel-inner" data-carousel-options='{"items": 2, "nav": false, "autoHeight": true, "responsive": {"0":{"items":1},"700":{"items":2,"gutter": 20},"991":{"items":2,"gutter": 30}}}'>
                @foreach($blogs as $blog)
                <article>
                    <a class="blog-entry-thumb mb-3" href="{{ route('blogs.show', $blog->id) }}">
                        <span class="blog-entry-meta-label fs-sm"><i class="ci-time"></i>{{ $blog->created_at->format('M d') }}</span>
                        <img src="img\blog\featured\01.jpg" alt="Featured post">
                    </a>
                    <div class="d-flex justify-content-between mb-2 pt-1">
                        <h2 class="h5 blog-entry-title mb-0">
                            <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                        </h2>
                        <a class="blog-entry-meta-link fs-sm text-nowrap ms-3 pt-1" href="{{ route('blogs.show', $blog->id) }}#comments">
                            <i class="ci-message"></i>{{ $blog->comments_count }}
                        </a>
                    </div>
                    <div class="d-flex align-items-center fs-sm">
    <a class="blog-entry-meta-link" href="#">
        <div class="blog-entry-author-ava">
            <img src="{{ asset('img/blog/meta/01.jpg') }}" alt="John Doe"> <!-- Remplacez par une image statique -->
        </div>
        John Doe <!-- Nom de l'auteur statique -->
    </a>
    <span class="blog-entry-meta-divider"></span>
    <div class="fs-sm text-muted">
        in <a href="#" class="blog-entry-meta-link">Lifestyle</a> <!-- Catégorie statique -->
    </div>
</div>

                </article>
                @endforeach
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $blogs->links() }} <!-- Lien pour la pagination -->
        </div>
    </div>
</main>

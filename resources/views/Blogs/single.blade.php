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
                                <img src="/img\blog\meta\05.jpg" alt="">
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
                <img src="\img\blog\single\02.jpg" alt="{{ $blog->title }}" class="img-fluid mb-4">
                <p>{{ $blog->content }}</p>
                <div class="d-flex flex-wrap justify-content-between pt-2 pb-4 mb-1">
                  
                   
                </div>
                <!-- Comments -->
                <div class="pt-2 mt-5" id="comments">
                    <h2 class="h4">Comments <span class="badge bg-secondary fs-sm text-body align-middle ms-2">0</span></h2>
                    <p class="text-muted">No comments available.</p>
                    <!-- Post comment form -->
                    <div class="card border-0 shadow mt-2 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                            <img src="/img\blog\meta\05.jpg" alt="">

                                <form class="w-100 needs-validation ms-3" novalidate>
                                    <div class="mb-3">
                                        <textarea class="form-control" rows="4" placeholder="Write comment..." required></textarea>
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
    </div>
</main>

@extends('layout')

@section('title', $project->name )

@section('content')

<main>

    <section id="hero" class="hero section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-md-10">
                    <!-- Article Header -->
                    <div class="article-header text-left">
                        <h1 class="article-title">{{ $project->name}}</h1>
                        <p class="article-meta">Publié le @formatdate($project->created_at) </p>
                    </div>

                    <!-- Article Content -->
                    <div class="article-content">
                        <div class="article-body">
                            <p>
                                {!! nl2br(e($project->description)) !!}
                            </p>
                            <p>
                                Language : {{ $project->tools }}
                            </p>
                            <div class="project-links">
                                <p><a href="{{ $project->depot }}" class="btn btn-outline-primary mb-2" target="_blank">Voir sur Github</a></p>
                                <p><a href="{{ $project->link }}" class="btn btn-outline-primary" target="_blank">Voir le site</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="comments-section section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-md-10">
                    <h3 class="text-center mb-4">Commentaires</h3>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>  
                    @endif                    @if ($project->commentaires->isEmpty())
                        <p class="text-center">Aucun commentaire pour le moment.</p>
                    @else
                    @foreach ($project->commentaires as $commentaire)
                    <!-- Comments List -->
                                               <div class="comments-list mb-5">
                                                   <div class="comment-item mb-3 p-3 border rounded">
                                                       <h5 class="comment-author"> {{ $commentaire->name }} </h5>
                                                       <p class="comment-content mb-0"> {{ $commentaire->content }} </p>
                                                       <small class="text-white"> @formatdate( $commentaire->created_at ) </small>
                                                   </div>
                                               </div>
                                       @endforeach

                    @endif
                  

                    <!-- Comment Form -->
                    <div class="comment-form">
                        <h4 class="text-center mb-3">Ajouter un commentaire</h4>
                        <form action="{{ route('commentaire', ['project'=>$project]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Commentaire</label>
                                <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

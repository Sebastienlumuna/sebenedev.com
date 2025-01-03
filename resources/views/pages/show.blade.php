@extends('layout')

@section('title', $project->name )

@section('content')

<main>

    <section id="hero" class="hero section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <!-- Article Header -->
                    <div class="article-header">
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
                                <br>
                            </p>
                            <p><a href="{{ $project->depot }}" target="_blank">voir sur Github</a></p>
                            <p><a href="{{ $project->link }}" target="_blank">Voir le site</a></p>                            <!-- Add more paragraphs as needed -->
                        </div>
                    </div>                </div>
            </div>        </div>

    </section>

</main>

@endsection

@foreach ($projects as $project)

    <div class="col-lg-8 col-12 mb-4">
            <div class="projet-item">
                <div class="card2">
                    <div class="border-0 shadow-lg h-100 hover-shadow">
                        <div class="product-info p-2">
                            <div class="card-body">
                                <h3 class="project-title fw-bolder">
                                <a href="{{ route('show', ['project'=>$project])}}" class="text-white text-decoration-none hover-text fw-bold">
                                {{ $project->name }}
                                </a>
                                </h3>
                                <a href="{{ route('show', ['project'=>$project])}}" >
                                    
                                    <div class="card-body">
                                        <p>
                                            @limit($project->description, 100)

                                        </p>
                                        <p class="text-white">
                                            Language : {{ $project->tools }}
                                        </p>
                                    </div>

                                </a>
                                <div class="d-flex justify-content-between mb-2">
                                    <small class="text-white">📅 @formatdate($project->created_at) </small>
                                    <a href="">
                                        <small class="text-white"><i class="bi bi-chat"></i>10</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>

@endforeach

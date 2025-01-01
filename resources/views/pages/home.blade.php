        @extends('layout')

        @section('title', 'Bienvenue dans le Sebene du Dev')

        @section('content')
        <main class="main">

            <!-- Hero Section -->
            <section id="hero" class="hero section">
            <div class="container d-flex justify-content-center align-items-center min-vh-50 ">
                <div class="row justify-content-center">
                <div class="col-lg-6 text-center" >
                    <h2><span>Bievenue chez moi, faisons du Dev dans le cadre du</span><span class="underlight">SebeneDev</span></h2>
                    <p class="my-3">Les actes vales mieux que le mots, dans le cadre du SebeneDev, je créé ce site pour présenter Tout mes projets que je fais !</p>
                    <a href="contact.html" class="btn-get-started">savoir plus<br></a>
                </div>
                </div>
            </div>

            </section><!-- /Hero Section -->
            <section  id="projet" >
                <div class="project my-5">
                    <div class="container" >
                        <div class="row justify-content-center">
                            <!-- Start of Post -->
                            <h1 class="text-center mb-4 display-2 fw-bold">Mes projets</h1>

                            <!-- End of Post -->
                        <x-project :projects="$projects" />

                        </div>
                     </div>
                </div>

            </section>  </main>




        @endsection

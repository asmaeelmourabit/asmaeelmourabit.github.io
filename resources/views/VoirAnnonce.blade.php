@extends('layout')
@section('contentfluid')
<!-- Navigation-->

        <section class="page-section about-heading">
            <div class="container">


            @foreach ( $ann as $annonce)
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('./uploads/'.$annonce->image)}}" alt="..." />

                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                <h5 class="section-heading-upper">{{$annonce->nom}}</h5>
                                    <p class="section-heading-upper">{{$annonce->description}}</p>
                                    <p class="section-heading-upper">{{$annonce->prix}} </p>
                                    <div class="style">
                                    <a href="{{ url('') }}/home/ajouter_annonce/{{$annonce->id}}" class="btn btn-primary">Lancer Annonce</a>
</div>
@endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">

        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>







      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
@endsection

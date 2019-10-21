<div class="jumbotron jumbotron-header height-hero-img jumbotron-fluid {{ $utilities ?? ' mb-4' }}">
    <div class="container">
        <div class="row">
            <div class="offset-5 col-7">
                <div class="float-right">
                    <h1 class="display-4 text-shadow-sm">{{ $title }}</h1>
                    <p>{{ $description }}</p>

                    @if ($buttons)
                        <hr class="breakline-hero my-3">

                        <p>
                            <a href="" role="button" class="btn btn-jumbotron shadow-sm">
                                <i class="fe fe-mail mr-1"></i> Contacteer ons
                            </a>

                            <a href="http://www.icanw.org/wp-content/uploads/2017/07/TPNW-English1.pdf" target="_blank" role="button" class="btn btn-jumbotron shadow-sm">
                                <i class="fe fe-file-text mr-1"></i> Het verdrag
                            </a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

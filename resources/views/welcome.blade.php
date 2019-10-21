@extends ('layouts.frontend', ['title' => 'Kernwapen petitie'])

@section('content')
    @include ('_partials.jumbotron', [
        'title' => 'Ban nuclaire kernwapens',
        'buttons' => true,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque nec nam aliquam sem et tortor consequat id porta',
        'utilities' => 'mb-0',
    ])

    <div class="container py-4">
        <div class="row">
            <div class="col-8">
                <div class="card card-body border-0 shadow-sm">

                </div>
            </div>

            <div class="col-4">
                <div class="card border-0 bg-signature-header shadow-sm">
                    <div class="card-header border-bottom-0">
                        <h4 class="mb-0 signature-title">Ik teken!</h4>
                    </div>

                    <form action="test" id="signature-box" method="POST" class="card-body bg-white">
                        @csrf {{-- Form field protection --}}

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label class="signature-label" for="firstname">Voornaam</label>
                                <input type="text" class="form-control @error('voornaam', 'is-invalid')" id="firstname" @input('voornaam')>
                                @error('firstname')
                            </div>

                            <div class="form-group col-12">
                                <label class="signature-label" for="lastname">Achternaam</label>
                                <input type="text" class="form-control @error('achternaam', 'is-invalid')" id="lastname" @input('achternaam')>
                                @error('achternaam')
                            </div>

                            <div class="form-group col-12">
                                <label class="signature-label" for="address">Adres + huisnummer</label>
                                <input type="text" class="form-control @error('adres', 'is-invalid')" id="address" @input('adres')>
                                @error('adres')
                            </div>

                            <div class="form-group col-12">
                                <label class="signature-label" for="email">E-mail adres</label>
                                <input type="email" class="form-control @error('email', 'is-invalid')" id="email" @input('email')>
                                @error('email')
                            </div>
                        </div>
                    </form>

                    <div class="card-footer bg-white">
                        <button type="submit" class="btn btn-block shadow-sm float-right btn-sign" form="signature-box">
                            <i class="fe fe-edit-3 mr-2"></i> onderteken
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

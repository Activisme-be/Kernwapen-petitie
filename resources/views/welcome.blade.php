@extends ('layouts.frontend', ['title' => 'Kernwapen petitie'])

@section('content')
    @include ('_partials.jumbotron', [
        'title' => 'Ban nuclaire kernwapens',
        'buttons' => true,
        'description' => $petition->excerpt,
        'utilities' => 'mb-0',
    ])

    <div class="container py-4">
        <div class="row pb-2">
            <div class="col-8">
                <div class="card card-body border-0 shadow-sm">
                    <h5 class="border-bottom brand-text border-gray pb-1 mb-3">
                        {{ $petition->title }}
                    </h5>

                    <div class="author-section">
                        <img class="author-image shadow-sm mr-2" src="https://via.placeholder.com/150" alt="">
                        <span class="text-muted">Test gebruiker heeft deze petitie gestart</span>

                        <span class="float-right mt-1 text-muted">
                            <i class="fe fe-edit-3 mr-2"></i> {{ $signaturesCount }} / 30.000
                        </span>
                    </div>

                    <hr class="mt-0">

                    {{-- Petition text --}}
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed tincidunt lacus, ac rutrum turpis. Etiam vel bibendum purus, vel blandit est. Cras viverra libero sed risus vehicula, tincidunt suscipit odio hendrerit.
                            Cras consectetur eros enim, eget scelerisque dolor suscipit in. Aliquam fermentum convallis interdum. Nunc at neque leo. Nulla eget dolor tincidunt, semper velit ac,
                            suscipit quam. Mauris sodales egestas mauris ultricies blandit.
                        </p>

                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed tincidunt lacus, ac rutrum turpis. Etiam vel bibendum purus, vel blandit est. Cras viverra libero sed risus vehicula, tincidunt suscipit odio hendrerit.
                        Cras consectetur eros enim, eget scelerisque dolor suscipit in. Aliquam fermentum convallis interdum. Nunc at neque leo. Nulla eget dolor tincidunt, semper velit ac,
                        suscipit quam. Mauris sodales egestas mauris ultricies blandit.
                    </p>

                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed tincidunt lacus, ac rutrum turpis. Etiam vel bibendum purus, vel blandit est. Cras viverra libero sed risus vehicula, tincidunt suscipit odio hendrerit.
                        Cras consectetur eros enim, eget scelerisque dolor suscipit in. Aliquam fermentum convallis interdum. Nunc at neque leo. Nulla eget dolor tincidunt, semper velit ac,
                        suscipit quam. Mauris sodales egestas mauris ultricies blandit.
                    </p>


                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed tincidunt lacus, ac rutrum turpis. Etiam vel bibendum purus, vel blandit est. Cras viverra libero sed risus vehicula, tincidunt suscipit odio hendrerit.
                        Cras consectetur eros enim, eget scelerisque dolor suscipit in. Aliquam fermentum convallis interdum. Nunc at neque leo. Nulla eget dolor tincidunt, semper velit ac,
                        suscipit quam. Mauris sodales egestas mauris ultricies blandit.
                    </p>


                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed tincidunt lacus, ac rutrum turpis. Etiam vel bibendum purus, vel blandit est. Cras viverra libero sed risus vehicula, tincidunt suscipit odio hendrerit.
                        Cras consectetur eros enim, eget scelerisque dolor suscipit in. Aliquam fermentum convallis interdum. Nunc at neque leo. Nulla eget dolor tincidunt, semper velit ac,
                        suscipit quam. Mauris sodales egestas mauris ultricies blandit.
                    </p>
                    {{-- /// END petition text --}}
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
                                <label class="signature-label" for="email">E-mail adres</label>
                                <input type="email" class="form-control @error('email', 'is-invalid')" id="email" @input('email')>
                                @error('email')
                            </div>

                            <div class="form-group col-12">
                                <label class="signature-label" for="address">Adres + huisnummer</label>
                                <input type="text" class="form-control @error('adres', 'is-invalid')" id="address" @input('adres')>
                                @error('adres')
                            </div>

                            <div class="form-group col-12">
                                <label class="signature-label" for="postal">Postcode</label>
                                <input type="text" class="form-control @error('postcode', 'is-invalid')" id="postal" @input('postcode')>
                                @error('postcode')
                            </div>

                            <div class="form-group col-12 mb-0">
                                <label class="signature-label" for="city">Stad of gemeente</label>
                                <input type="text" class="form-control @error('stad_of_gemeente', 'is-invalid')" id="city" @input('stad_of_gemeente')>
                                @error('stad_of_gemeente')
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

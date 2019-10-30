@extends ('layouts.frontend', ['title' => 'Gemeentes'])

@section('content')
    @include ('_partials.jumbotron', [
        'title' => 'Ban nuclaire kernwapens',
        'buttons' => true,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque nec nam aliquam sem et tortor consequat id porta',
        'utilities' => 'mb-0',
    ])

    <div class="container py-4">
        <div class="page-header">
            <h1 class="page-title brand-text">Gemeentes</h1>

            <div class="d-flex page-options">
                <form method="GET" action="" class="border-0 form-search form-inline ml-2">
                    <div class="form-group has-search">
                        <label for="search" class="sr-only">Zoek gemeente</label>
                        <span class="fe fe-search form-control-feedback"></span>
                        <input id="search" type="text" name="term" value="{{ request()->get('term') }}" placeholder="Zoeken" class="form-search shadow-sm border-0 form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($cities as $city)
                <div class="col-md-4">
                    <div class="card card-body shadow-sm p-3 border-0 mb-3">
                        <h6 class="border-bottom brand-text border-gray pb-1 mb-3">
                            {{ $city->postal->code }} {{ $city->name }}
                        </h6>

                        <p class="card-text text-secondary  ">
                            Charter status: Niet ondertekend
                        </p>

                        <ul class="list-unstyled mb-0">
                            <li><i class="text-muted fe fe-map mr-2"></i> {{ $city->province->name }}</li>
                            <li><i class="fe text-muted fe-edit-3 mr-2"></i> {{ $city->postal->signatures->count() }} hantekeningen</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

        <hr class="mt-0 mb-0">

        {{ $cities->links('vendor.pagination.city-pagination') }}
    </div>
@endsection

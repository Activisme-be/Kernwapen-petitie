@extends ('layouts.app', ['title' => 'Petitie handtekeningen'])

@section('content')
    <div class="container-fluid py-3">
        <div class="page-header">
            <h1 class="page-title">Handtekeningen</h1>
            <div class="page-subtitle">Overzicht</div>
        </div>
    </div>

    <div class="container-fluid pb-3">
        <div class="card card-body shadow-sm border-0">
            <div class="table-responsive">
                <table class="table table-sm table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="border-top-0" scope="col">Naam</th>
                            <th class="border-top-0" scope="col">Email</th>
                            <th class="border-top-0" scope="col">Staat + huisnummer</th>
                            <th class="border-top-0" scope="col">Postcode + stad</th>
                            <th class="border-top-0" scope="col">&nbsp;</th> {{-- EMpty column needed for the function shortcuts --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($signatures as $signature)
                        @empty {{-- There are no signatures found currently --}}
                            <tr>
                                <td></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>


            {{ $signatures->links() }} {{-- Pagination view instance --}}
        </div>
    </div>
@endsection

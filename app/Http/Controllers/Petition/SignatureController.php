<?php

namespace App\Http\Controllers\Petition;

use App\Http\Controllers\Controller;
use App\Http\Requests\Petition\SignatureFormRequest;
use App\Models\Signature;
use App\Repositories\SignatureRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class SignatureController
 *
 * @package App\Http\Controllers\Petition
 */
class SignatureController extends Controller
{
    /**
     * Signature repository variable.
     *
     * @var SignatureRepository $signatureRepository
     */
    private $signatureRepository;

    /**
     * SignatureController constructor.
     *
     * @param SignatureRepository $signatureRepository repository implementation.
     * @return void
     */
    public function __construct(SignatureRepository $signatureRepository)
    {
        $this->signatureRepository = $signatureRepository;

        $this->middleware(['auth', 'role:admin|webmaster', '2fa', 'forbid-banned-user'])->except('store');
        $this->middleware('password.confirm')->only('index');
    }

    /**
     * Method for displaying the backend overview for all the petition signatures in the storage.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $signatures = $this->signatureRepository->getSignatures();
        return view('petition.signatures.index', compact('signatures'));
    }

    /**
     * Method for saving a petition signature in the application.
     *
     * @param  SignatureFormRequest $request The form request class that handles the actual validation.
     * @return RedirectResponse
     */
    public function store(SignatureFormRequest $request): RedirectResponse
    {
        DB::transaction(function () use ($request): void {
            $this->signatureRepository->store($request->all());
            flash('Bedankt voor het het ondertekenen van de petitie');
        });

        return back(); // The signature has been stored. So redirect the user back.
    }
}

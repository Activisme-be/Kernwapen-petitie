<?php

namespace App\Http\Controllers\Petition;

use App\Http\Controllers\Controller;
use App\Repositories\SignatureRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
    }

    public function store(): RedirectResponse
    {

    }
}

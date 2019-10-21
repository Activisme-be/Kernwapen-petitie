<?php

namespace App\Http\Controllers\Petition;

use App\Http\Controllers\Controller;
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
     */
    public function __construct()
    {
        $this->signatureRepository = $signatureRepository;
    }
}

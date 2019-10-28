<?php

namespace App\Repositories;

use App\Models\Signature;
use Illuminate\Contracts\Pagination\Paginator;

/**
 * Class SignatureRepository
 *
 * @package App\Repositories
 */
class SignatureRepository
{
    /**
     * @return Signature
     */
    public function entity(): Signature
    {
        return new Signature;
    }

    /**
     * Method for storing an signature in the application.
     *
     * @param  array $data The data that comes off the signature form.
     * @return Signature
     */
    public function store(array $data): Signature
    {
        return $this->entity()->create($data);
    }

    /**
     * Method for getting all the petition signatures that are stored in the application.
     *
     * @return Paginator
     */
    public function getSignatures(): Paginator
    {
        return $this->entity()->latest()->paginate();
    }
}

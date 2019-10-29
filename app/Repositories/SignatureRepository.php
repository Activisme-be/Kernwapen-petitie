<?php

namespace App\Repositories;

use App\Models\Signature;

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
     * @todo. Signatures on the petition should associated to the postal code that the quest has filled id
     *
     * @param  array $data The data that comes off the signature form.
     * @return Signature
     */
    public function store(array $data): Signature
    {
        return $this->entity()->create($data);
    }
}

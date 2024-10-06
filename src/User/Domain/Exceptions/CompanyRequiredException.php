<?php

namespace Src\User\Domain\Exceptions;

use DomainException;

class CompanyRequiredException extends DomainException
{
    public function __construct()
    {
        parent::__construct('Company is required for non-admin users');
    }
}
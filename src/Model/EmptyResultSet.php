<?php

declare(strict_types=1);

namespace Frogg\Model;

use Frogg\Model;

/**
 * Class EmptyResultSet
 *       This class is to be used as the empty return on functions that are expected
 *       to return empty ResultSet but return and array instead.
 * @package Frogg\Model
 */
class EmptyResultSet extends ResultSet
{

    public function __construct()
    {
        parent::__construct([], new Model(), null);
    }

}

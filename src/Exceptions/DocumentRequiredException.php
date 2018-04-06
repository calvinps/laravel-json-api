<?php

namespace CloudCreativity\LaravelJsonApi\Exceptions;

use CloudCreativity\LaravelJsonApi\Document\Error;
use Exception;
use Neomerx\JsonApi\Exceptions\JsonApiException;

/**
 * Class DocumentRequiredException
 *
 * Exception to indicate that a JSON API document (in an HTTP request body)
 * is expected but has not been provided.
 *
 * @package CloudCreativity\LaravelJsonApi
 */
class DocumentRequiredException extends JsonApiException
{

    /**
     * DocumentRequiredException constructor.
     *
     * @param $errors
     * @param Exception|null $previous
     */
    public function __construct($errors = [], Exception $previous = null)
    {
        parent::__construct($errors, self::HTTP_CODE_BAD_REQUEST, $previous);

        $this->addError(Error::create([
            Error::TITLE => 'Document Required',
            Error::STATUS => self::HTTP_CODE_BAD_REQUEST,
            Error::DETAIL => 'Expecting request to contain a JSON API document.',
        ]));
    }
}

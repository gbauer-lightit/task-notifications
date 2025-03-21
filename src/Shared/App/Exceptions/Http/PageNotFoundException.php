<?php

declare(strict_types=1);

namespace Lightit\Shared\App\Exceptions\Http;

/**
 * An exception thrown whan a page is not found.
 */
class PageNotFoundException extends HttpException
{
    /**
     * An HTTP status code.
     */
    protected int $status = 404;

    /**
     * An error code.
     */
    protected string|null $errorCode = 'page_not_found';
}

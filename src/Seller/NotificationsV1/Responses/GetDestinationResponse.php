<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Destination;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Error;

final class GetDestinationResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => Error::class];

    /**
     * @param  ?Destination  $payload  Information about the destination created when you call the `createDestination` operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Destination $payload = null,
        public readonly ?array $errors = null,
    ) {}
}

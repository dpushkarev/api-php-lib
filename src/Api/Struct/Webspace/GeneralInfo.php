<?php
// Copyright 1999-2021. Plesk International GmbH.

namespace PleskX\Api\Struct\Webspace;

use PleskX\Api\Struct;
use PleskX\Api\XmlResponse;

class GeneralInfo extends Struct
{
    public int $id;
    public string $creationDate;
    public string $name;
    public string $asciiName;
    public string $status;
    public int $realSize;
    public int $ownerId;
    public array $ipAddresses = [];
    public string $guid;
    public string $vendorGuid;
    public string $description;

    /** @var string */
    public string $adminDescription;

    public function __construct(XmlResponse $apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            ['cr_date' => 'creationDate'],
            'name',
            'ascii-name',
            'status',
            'real_size',
            'owner-id',
            'guid',
            'vendor-guid',
            'description',
            'admin-description',
        ]);

        foreach ($apiResponse->dns_ip_address as $ip) {
            $this->ipAddresses[] = (string) $ip;
        }
    }
}

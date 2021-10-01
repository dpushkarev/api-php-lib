<?php
// Copyright 1999-2021. Plesk International GmbH.

namespace PleskX\Api\Struct\Server\Statistics;

use PleskX\Api\Struct;
use PleskX\Api\XmlResponse;

class Objects extends Struct
{
    public int $clients;
    public int $domains;
    public int $databases;
    public int $activeDomains;
    public int $mailBoxes;
    public int $mailRedirects;
    public int $mailGroups;
    public int $mailResponders;
    public int $databaseUsers;
    public int $problemClients;
    public int $problemDomains;

    public function __construct(XmlResponse $apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'clients',
            'domains',
            'databases',
            ['active_domains' => 'activeDomains'],
            ['mail_boxes' => 'mailBoxes'],
            ['mail_redirects' => 'mailRedirects'],
            ['mail_groups' => 'mailGroups'],
            ['mail_responders' => 'mailResponders'],
            ['database_users' => 'databaseUsers'],
            ['problem_clients' => 'problemClients'],
            ['problem_domains' => 'problemDomains'],
        ]);
    }
}

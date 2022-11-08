<?php

namespace Webpractik\OcfConverter\Sdk;

class OcfFileStatus
{
    /**
     * File is waiting for processing
     */
    public const WAIT = 'WAIT';

    /**
     * File was processed with error
     */
    public const ERROR = 'ERROR';

    /**
     * File was processed and is ready
     */
    public const READY = 'READY';
}

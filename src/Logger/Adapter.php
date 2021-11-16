<?php

namespace Utopia\Logger;

abstract class Adapter
{
    /**
     * Get unique name of an adapter
     *
     * @return string
     */
    abstract public function getAdapterName(): string;


    /**
     * Push log to external provider
     *
     * @param Log $log
     * @return int
     */
    abstract public function pushLog(Log $log): int;

    // TODO: validateLog(Log $log)
}
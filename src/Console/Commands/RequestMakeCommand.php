<?php

namespace CloudCreativity\LaravelJsonApi\Console\Commands;

class RequestMakeCommand extends AbstractGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:json-api:request';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new JSON API resource request';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Request';

    /**
     * Whether the resource type is non-dependent on eloquent
     *
     * @var mixed
     */
    protected $isIndependent = true;
}
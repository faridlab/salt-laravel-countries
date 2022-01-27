<?php

namespace SaltCountries\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

// EXCEPTIONS
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;
use Symfony\Component\HttpKernelException\HttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Illuminate\Container\EntryNotFoundException;
use Illuminate\Validation\Rule;
use ReflectionException;
use Exception;
use NotFoundHttpException;
use InvalidArgumentException;
use Illuminate\Support\Facades\Auth;

use SaltLaravel\Controllers\ApiResourcesNestedController;
use SaltLaravel\Models\Resources;
use SaltLaravel\Services\ResponseService;

class ApiNestedResourcesController extends ApiResourcesNestedController
{
    protected $modelNamespace = 'SaltCountries';
}

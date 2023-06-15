<?php

namespace App\Traits;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

trait ApiResponser
{
    protected function successResponse($data, $message = null, $code = 200)
	{
        return response()->json([
            'data'          => $data,
            'message'       => $message,
            'response'      => true,
            'code'          => $code,
        ]);
	}

	protected function errorResponse($message, $code, $response = false)
	{
        return response()->json([
            'error'         => $message,
            'response'      => $response,
            'code'          => $code,
        ]);
	}


    protected function showMessage($message, $code = 200, $response = true)
    {
        return response()->json([
            'message'       => $message,
            'response'      => $response,
            'code'          => $code,
        ]);
    }
}

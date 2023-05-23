<?php

namespace App\Traits;

trait HttpResponse
{
    /**
     * success
     *
     * @param  mixed $data
     * @param  mixed $messageId
     * @param  mixed $message
     * @param  mixed $code
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    protected function success($data = [], $messageId = 'SUCCESS', $message = 'Success', $code = 200)
    {
        return response()->json([
            'status_code' => $code,
            'message_id' => $messageId,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    /**
     * error
     *
     * @param  mixed $data
     * @param  mixed $messageId
     * @param  mixed $message
     * @param  mixed $code
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    protected function error(
        $data = [],
        $messageId = 'INVALID_PARAMETERS',
        $message = 'Invalid Parameters',
        $code = 400
    ) {
        return response()->json([
            'status_code' => $code,
            'message_id' => $messageId,
            'message' => $message,
            'data' => $data
        ], $code);
    }


    /**
     * unauthorized
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    protected function unauthorized()
    {
        return response()->json([
            'status_code' => 401,
            'message_id' => 'UNAUTHORIZE',
            'message' => 'Unauthorized'
        ], 401);
    }

    /**
     * forbidden
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    protected function forbidden()
    {
        return response()->json([
            'status_code' => 403,
            'message_id' => 'FORBIDDEN',
            'message' => 'Forbidden'
        ], 403);
    }

    /**
     * notFound
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    protected function notFound($message = 'Not Found')
    {
        return response()->json([
            'status_code' => 404,
            'message_id' => 'NOT_FOUND',
            'message' => $message
        ], 404);
    }

    /**
     * methodNotAllowed
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    protected function methodNotAllowed()
    {
        return response()->json([
            'status_code' => 405,
            'message_id' => 'METHOD_NOT_ALLOWED',
            'message' => 'Method Not Allowed'
        ], 405);
    }

    /**
     * internalServerError
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    protected function internalServerError()
    {
        return response()->json([
            'status_code' => 500,
            'message_id' => 'INTERNAL_SERVER_ERROR',
            'message' => 'Internal Server Error'
        ], 500);
    }
}

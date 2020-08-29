<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontendSaveEmailRequest;
use App\Models\Guest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AjaxSaveEmailController extends Controller
{
    public function saveEmail(FrontendSaveEmailRequest $request)
    {
        if ($request->ajax()) {
            if ($email = $request->g_email) {
                Guest::insert([
                    'g_email'    => strip_tags($email),
                    'created_at' => Carbon::now()
                ]);
                return response()->json([
                    'code' => 200
                ]);
            }

            return response()->json([
                'code' => 401
            ]);
        }
    }
}

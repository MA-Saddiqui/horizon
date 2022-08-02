<?php

namespace Laravel\Horizon\Http\Controllers;

use App\Jobs\ExtractZip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class UploadsController extends Controller
{


    public function upload(Request $request){

        // Extract Zip File
        $file = $request->file->store('public/uploadedZip');

        dispatch(new ExtractZip($file));

        return [
            'status' => true
        ];


    }

    public function deleteAllPreviousRecords()
    {
        Artisan::call('horizon:clear');
    }
}

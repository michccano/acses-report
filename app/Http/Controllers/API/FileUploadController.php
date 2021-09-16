<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File; 
use Validator; 
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\Tests\TestCase;

class FileUploadController extends Controller
{

    public function newReport(Request $request){

        $user = File::find(1);
        

   
        return response()->json([
            "success" => true,
            "message" => $user->toJson()
        ]);

    }
    
    public function upload(Request $request) 
    { 
       /*
        $validator = Validator::make($request->all(),[ 
              'file' => 'required|mimes:doc,docx,pdf,txt,csv|max:2048',
        ]);   
  
        if($validator->fails()) {          
             
            return response()->json(['error'=>$validator->errors()], 401);                        
         }  */
  
   
        if ($file = $request->file('file')) {
            //$path = $file->store('public/files');
            $path = $file->storePublicly('images','s3');



            $name = $file->getClientOriginalName();
  
            //store your file into directory and db
            $save = new File();
            $save->name = $file;
            $save->path= $path;
            $save->save();
               
            return response()->json([
                "success" => true,
                "message" => $path,
                "file" => $file
            ]);
   
        }
  
   
    }

    
}

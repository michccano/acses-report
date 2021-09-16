<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubItem; 
use App\Models\Item;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\UploadedFile;
use ProtoneMedia\LaravelFFMpeg\MediaOpener;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        return response()->json([
            "success" => true,
            "message" => Item::find($id)->toArray()
        ]);
    }


    public function reOrder(Request $request){
        $asd = json_decode($request->input('items'), true);

        for($i=0; $i<count($asd); $i++){
           
            $item = Item::find($asd[$i]["id"]);
            $item->pos =  $asd[$i]["pos"];
            $item->save();

        }

        $all = Item::where('id','>=',0)->orderBy('pos')->get();
        $results = array();

        foreach($all as $item){
           
            $tn = SubItem::where('item_id',$item->id)->orderBy('id')->take(1)->get()->toArray();


           try{ 
     
        array_push($results,array("item_id"=>$item->id,"desc"=>$item["description"],"thumbnail"=>$tn));
           }
           catch(Exception $ee){

           } 
        }


        return response()->json([
            "success" => true,
            "message" =>  $results
        ]);
        
    }


    public function showAll(Request $request,$id){

        if($request->input('description')){
            $item = Item::find($request->input('item_id'));
            $item->description = $request->input('description');
            $item->save();
        }


        $all = Item::where('id','>=',0)->orderBy('pos')->get();
        $results = array();

        foreach($all as $item){
           
            $tn = SubItem::where('item_id',$item->id)->orderBy('id')->take(1)->get()->toArray();


           try{ 
     
        array_push($results,array("item_id"=>$item->id,"desc"=>$item["description"],"thumbnail"=>$tn));
           }
           catch(Exception $ee){

           }
        }


        return response()->json([
            "success" => true,
            "message" => $results
        ]);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {

        $filenamewithextension = $request->file('file')->getClientOriginalName();
        $vid_ext = array("mp4");

        $path = "";
        $path0 = "";


        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
  
        //get file extension
        $extension = $request->file('file')->getClientOriginalExtension();
  
        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;
 
        
        if(!in_array($extension,$vid_ext))
        {
        //small thumbnail name
        $smallthumbnail = $filename.'_small_'.time().'.'.$extension;
 
        //medium thumbnail name
     //   $mediumthumbnail = $filename.'_medium_'.time().'.'.$extension;
 
        //large thumbnail name
     //   $largethumbnail = $filename.'_large_'.time().'.'.$extension;

        //Upload File
          $request->file('file')->storeAs('public/profile_images', $filenametostore);
          $request->file('file')->storeAs('public/profile_images/thumbnail', $smallthumbnail);
       // $request->file('file')->storeAs('public/profile_images/thumbnail', $mediumthumbnail);
      //  $request->file('file')->storeAs('public/profile_images/thumbnail', $largethumbnail);
  
        //create small thumbnail
        $smallthumbnailpath = public_path('storage/profile_images/thumbnail/'.$smallthumbnail);
        $this->createThumbnail($smallthumbnailpath, 150, 93);
        $rpath =  public_path('storage/profile_images/'.$filenametostore);
        //create medium thumbnail
       // $mediumthumbnailpath = public_path('storage/profile_images/thumbnail/'.$mediumthumbnail);
      //  $this->createThumbnail($mediumthumbnailpath, 300, 185);
 
        //create large thumbnail
      //  $largethumbnailpath = public_path('storage/profile_images/thumbnail/'.$largethumbnail);
       // $this->createThumbnail($largethumbnailpath, 550, 340);
  
        $file0 = $this->pathToUploadedFile($rpath,false);
        $path0 = $file0->storePublicly('images','s3');

 
        $file = $this->pathToUploadedFile($smallthumbnailpath,false);
        $path = $file->storePublicly('images','s3');

        }


        else{

            $request->file('file')->storeAs('public/videos', $filenametostore);     

            $rpath =  "public/videos/".$filenametostore;

            $smallthumbnail = $filename.'_small_'.time().'.png';
            $request->file('file')->storeAs('public/videos/thumbnail', $smallthumbnail);
 
            $tp = 'public/videos/thumbnail/'.$smallthumbnail;
      
            (new MediaOpener)
            ->open($rpath)
            ->getFrameFromSeconds(2)
            ->export()
            ->accurate()
            ->save($tp);


            $rpath1 =  public_path('storage/videos/'.$filenametostore);
            $rpath2 =  public_path('storage/videos/thumbnail/'.$smallthumbnail);

            $file0 = $this->pathToUploadedFile($rpath1,false);
            $path0 = $file0->storePublicly('videos','s3');
    
            $file = $this->pathToUploadedFile($rpath2,false);
            $path = $file->storePublicly('videos','s3');

        }



        $item_id = -1;

        if($request->input('item_id')>=0){
            $item_id = $request->input('item_id');
        }

        if($request->input('existing')==0){
        $itm = new Item();
        $itm->report_id = $id;
        $itm->thumbnail = "https://acses.s3.ap-southeast-2.amazonaws.com/".$path;
        $itm->description = "asdasdasd asdasd";
        $itm->pos = 0;
        $itm->save();

        $item_id = $itm->id;


        }


                    
        $save1 = new SubItem();
        $save1->item_id = $item_id;
        $save1->thumbnail = "https://acses.s3.ap-southeast-2.amazonaws.com/".$path;
        $save1->realPath = "https://acses.s3.ap-southeast-2.amazonaws.com/".$path0;
        
        $save1->save();


       // $name = $file->getClientOriginalName();

        //store your file into directory and db
        //$save = new File();
        //$save->name = $file;
        //$save->path= $path;
        //$save->save();
           
        $ff = json_encode($request->input('asd'));
        return response()->json([
            "success" => true,
            "message" => array("item_id"=>$item_id,"items"=> SubItem::where('item_id',$item_id)->get()->toArray())
        ]);

    }


  
public function pathToUploadedFile( $path, $test = true ) {
    $filesystem = new Filesystem;
    
    $name = $filesystem->name( $path );
    $extension = $filesystem->extension( $path );
    $originalName = $name . '.' . $extension;
    $mimeType = $filesystem->mimeType( $path );
    $error = null;

    return new UploadedFile( $path, $originalName, $mimeType, $error, $test );
}




    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php
namespace App\Http\Traits;
use Session,Auth,View,Carbon\Carbon,File;

trait MainTrait{

    public function upload_document($request,array $array){
		if(!empty($request)){
            $docuementData=[];
			foreach ($request as $key => $file) {
				$rand=rand();
				 array_push($docuementData,[ $array['id']  => $array['data_id'] ,
                    $array['file'] => $rand.$array['name'].'.'.$file->getClientOriginalExtension(),
                    'created_at' => Carbon::today(),
                    'updated_at'=>Carbon::today()
				]);
				$file->storeAs($array['path'] , $rand. $array['name'] . '.' .$file->getClientOriginalExtension());

            }
            $array['obj']::insert($docuementData);
		}

	}
}

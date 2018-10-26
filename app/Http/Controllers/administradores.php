<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class administradores extends Controller
{
    public function altadmin()
    {
		 /*$clavequesigue=administradores::withTrashed('idadmin','desc')
                                ->take(1)
                                ->get();
                
        if (count($clavequesigue)==0)
        {
            $idadmins=1;
        }
        else
        {
            $idadmins=$clavequesigue[0]->idadmin+1;
        }
        /// return $carreras;
       ///ORM ELOQUENT*/

        return view ("alta_admin");
    }
    public function guardadmin(Request $request)
	{
		$nomadmin=$request->nomadmin;
		$apepadmin=$request->apepadmin;
        $apemadmin=$request->apemadmin;
        $sexo=$request->sexo;
		$puestoadmin=$request->puestoadmin;
		$activo=$request->activo;
       //Nunca se reciben archivos///
        
		
		$this->validate($request,['idadmin'=>'required|numeric',
                                 'nomadmin'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]*$/'],
                                 'apepadmin'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]*$/'],
                                 'apemadmin'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]*$/'],
                                 'puestoadmin'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]*$/']
         ]);
        $adminis=new administradores;
        $adminis->idadmin=$request->idadmin;
        $adminis->nomadmin=$request->nomadmin;
        $adminis->apepadmin=$request->apepadmin;
        $adminis->apemadmin=$request->apemadin;
        $adminis->puestoadmin=$request->puestoadmin;
        
        

    }
}

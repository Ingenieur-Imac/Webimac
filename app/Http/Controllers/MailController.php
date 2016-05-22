<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Redirect;
use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class MailController extends Controller
{
    public function internshipOffer(Request $request){
        //Get the PDF and save it
        $path = null;
        if($request->hasFile('pdf')){
            $file = $request->file('pdf');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/document/internshipOffering/',$name);
                $path = public_path().'/document/internshipOffering/'.$name;
            } else {
                echo('Fichier non valide');
            }
        } else {
            echo('Request don\'t have file !');
        }

        //
        $mailingList = json_decode(file_get_contents(public_path().'/json/mailingList.json'),TRUE);
        //TODO : à tester en live
        $to = $mailingList["IMAC1"].','.$mailingList["IMAC2"].','.$mailingList["IMAC3"];
        //$to = "julien.rousset01@gmail.com";

        $datas = json_decode(json_encode($request->all()),FALSE);
        Mail::send('emails.internshipOffering', ['datas' => $datas], function ($m) use ($path,$to){
            $m->from('webimac2016@gmail.com', 'Site Web de l\'Imac');
            $m->to($to, "Julien Rousset")->subject('Proposition de stage déposé sur Ingenieur-Imac.fr');
            if($path !== null)
                $m->attach($path);
        });

        return Redirect::back();
    }

    public function partnershipOffer(Request $request){
        $to = "sylvie.donard@u-pem.fr";
        //$to = "julien.rousset01@gmail.com";

        $datas = json_decode(json_encode($request->all()),FALSE);
        Mail::send('emails.partnershipOffering', ['datas' => $datas], function ($m) use ($to){
            $m->from('webimac2016@gmail.com', 'Site Web de l\'Imac');
            $m->to($to, "Sylvie Donnard")->subject('Demande de partenariat déposé sur Ingenieur-Imac.fr');
        });

        return Redirect::back();
    }

    public function contact(Request $request){
        $to = "sylvie.donard@u-pem.fr";
        //$to = "julien.rousset01@gmail.com";

        $datas = json_decode(json_encode($request->all()),FALSE);
        Mail::send('emails.contactForm', ['datas' => $datas], function ($m) use ($to){
            $m->from('webimac2016@gmail.com', 'Site Web de l\'Imac');
            $m->to($to, "Sylvie Donnard")->subject('Formulaire de contact déposé sur Ingenieur-Imac.fr');
        });

        return Redirect::back();
    }
}

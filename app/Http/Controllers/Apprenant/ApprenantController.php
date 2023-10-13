<?php

namespace App\Http\Controllers\Apprenant;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apprenant;
use App\Models\Admin;
use App\Models\Demande;
use App\Models\PlageHoraire;
use Session;
use Validator;
use DB;

class ApprenantController extends Controller
{

    public function Inscription(Request $request, $id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            // echo"<pre>"; print_r($data); die;
            //validation
          
            $rules = [
                'nom' => 'required|regex:/^[\pL\s\-]+$/u',
                'telephone' => 'required|numeric',
                'email' => 'required',
            ];
            $message = [
                'nom.required' => 'Veillez entrer le nom de l\admin',
                'email.regex' => 'Le nom de l\admin est invalide',
                'telephone.required' => 'Veillez entrer le numéro de téléphone ',
                'email.required' => 'Veillez entrer email ',
                'telephone.required' => 'numéro de téléphone invalide ',
            ];

            $this->validate($request, $rules, $message);
            DB::beginTransaction();
            // create vendeur accunte
             $apprenant = new Apprenant;
             $apprenant->nom = $data['nom'];
             $apprenant->prenom = $data['prenom'];
             $apprenant->lettre = $data['lettre'];
             $apprenant->telephone = $data['telephone'];
             $apprenant->email = $data['email'];
             $apprenant->password  = bcrypt($data['password']);
             $apprenant->status = 0;
             $apprenant->save();
             $apprenant_id = DB::getPdo()->lastInsertId();

             //insert in admins table 

             $admin = new Admin;

             $admin->type = 'apprenant';
             $admin->apprenant_id = $apprenant_id;
             $admin->nom = $data['nom'];
             $admin->telephone = $data['telephone'];
             $admin->email  = $data['email'];
             $admin->password  = bcrypt($data['password']);
             $admin->status = 0;

            //  date_default_timezone_set("Asia/Kolkata");
            //  $admin->crea  = $data['email'];
            //  $admin->email  = $data['email'];

             $admin->save();

             DB::commit();

             // send confirmation email 

            //  $email = $data["email"];
            //  $messageData = [
            //     'email' => $data['email'],
            //     'nom' => $data['nom'],
            //     'code' => base64_decode($data['email'])
            //  ];

            //  Mail::send('emails.vendeur_confirmation',$messageData , function($message)use($email){
            //     $message->to($email)->subject('confirmez votre compte vendeur');
            //  });
             //redirecte back fournisseur avect un message de success
             return redirect()->back()->with('success', 'Merci de vous inscrire en tant que vendeur. Nous confirmerons par e-mail une fois votre compte approuvé.');
            }          
        return view('apprenant.inscription');
    }

    public function demande()
    {
        // Mettez à jour la session avec la page en cours
        session(['page' => 'demandes']);
        $adminType = Auth::guard('admin')->user()->type;
        $apprenant_id = Auth::guard('admin')->user()->apprenant_id;
        $admin_id = Auth::guard('admin')->user()->id;

        // Récupérez les demandes avec les détails de la plage horaire associée
        $demandes = Demande::with('plage_horaire:id,jour_semaine,capcitermaxe')->where('apprenant_id', $apprenant_id)->get();
        $myArray = null;
        return view('apprenant.demande', compact('demandes'));
    }

    

    public function Addemande(Request $request, $apprenant_id=null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data );
                // Récupérez l'apprenant actuellement connecté
                $adminType = Auth::guard('admin')->user()->type;
                $apprenant_id = Auth::guard('admin')->user()->apprenant_id;
                $admin_id = Auth::guard('admin')->user()->id;
                // dd($admin_id);
                // Créez une nouvelle demande
                $demande = new Demande;
                $demande->apprenant_id = $apprenant_id;
                $demande->plage_horaires_id = $data['plage_horaires_id'];
                $demande->status = 0;
                $demande->save();
                
    
                $message = 'Demande ajoutée avec succès';
    
                return redirect('apprenant/demande')->with('success_message', $message);
        
        }
    
        $getplageHoraires = PlageHoraire::get()->toArray();
        $demandes = Demande::all();
    
        return view('apprenant.addemande', compact('getplageHoraires', 'demandes'));
    }
    

    public function deletedemandes($id)
    {
           Demande::where('id',$id)->delete();
           $message = "Apprenant supprimer avec succes!";
           return redirect()->back()->with('success_message',$message);
    }
    
    
    
}

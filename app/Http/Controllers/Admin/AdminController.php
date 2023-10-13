<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\Admin;
use App\Models\PlageHoraire;
use App\Models\Apprenant;
use App\Models\Demande;
use Session;

class AdminController extends Controller
{
    public function Dasbord()
    {
        return view('admin.dashbord');
    }
    public function Apprenant()
    {
        return view('admin.apprenant');
    }
    public function Index()
    {
        return view('apprenant.index');
    }


    public function Programme()
    {
       Session::put('page','plagehoraires');
       $plagehoraires = PlageHoraire::get()->toArray();
        //  dd($sections);
        return view('admin.programme')->with(compact('plagehoraires'));
    }

    public function deleteProgrammes($id)
    {
           PlageHoraire::where('id',$id)->delete();
           $message = "Programme supprimer avec succes!";
           return redirect()->back()->with('success_message',$message);
    }

    public function Adapprenant(Request $request , $id=null)
    {
        Session::put('page','Programme');
          if($id==""){
            $title = "Ajouter Programme";
            $plagehoraire = new PlageHoraire;
            $message = "Programme Ajouter avec succes";
          }else{
            $title = "Ajouter Programme";
            $plagehoraire = PlageHoraire::find($id);
            $message = "Programme Ajouter avec succes";
          }
          if ($request->isMethod('post')) {
            $data = $request->all();

             // echo "<pre>"; print_r($data); die;
            //  $rules = [
            //     'jour_semaine' => 'required|regex:/^[\pL\s\-]+$/u',
            // ];
            // $customMessage = [
            //     'jour_semaine.required' => 'Veillez entrer le jour',
            //     'jour_semaine.regex' => 'Le jour invalide',
            // ];

            // $this->validate($request, $rules, $customMessage);
              
            $plagehoraire->jour_semaine = $data['jour_semaine'];
            $plagehoraire->capcitermaxe = $data['capcitermaxe'];
            $plagehoraire->save();
            return redirect('admin/programme')->with('success_message',$message);
          }
           return view('admin.adprogramme')->with(compact('title','plagehoraire'));
    }

    public function updateAdminStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
        }if($data['status']=="Active"){
            $status = 0;
        }else{
            $status = 1;
        }
        Admin::where('id',$data['admin_id'])->update(['status'=>$status]);
        return response()->json(['status'=>$status,'admin_id'=>$data['admin_id']]);
    }

    public function updateAprprenantStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
        }if($data['status']=="Active"){
            $status = 0;
        }else{
            $status = 1;
        }
        Apprenant::where('id',$data['apprenant_id'])->update(['status'=>$status]);
        return response()->json(['status'=>$status,'apprenant_id'=>$data['apprenant_id']]);
    }


    public function apprenantsActifs()
    {
    // Récupérer les apprenants actifs depuis la base de données
    $apprenantsActifs = Apprenant::where('status', 1)->get()->toArray();
    // Passer les apprenants actifs à une vue
    return view('admin.apprenantactive', ['apprenantsActifs' => $apprenantsActifs])->with(compact('apprenantsActifs'));
   }

   public function apprenantsInactifs()
   {
   // Récupérer les apprenants actifs depuis la base de données
   $apprenantsActifs = Apprenant::where('status', 0)->get()->toArray();
   // Passer les apprenants actifs à une vue
   return view('admin.apprenantactive', ['apprenantsActifs' => $apprenantsActifs])->with(compact('apprenantsActifs'));
   }

    public function updateadmindetail(Request $request)
    {
        Session::put('page','updateadmin');
        if ($request->isMethod('post', 'get')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $rules = [
                'admin_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'admin_mobile' => 'required|numeric',
                'admin_email' => 'required',
            ];
            $message = [
                'admin_name.required' => 'Veillez entrer le nom de l\admin',
                'email.regex' => 'Le nom de l\admin est invalide',
                'admin_mobile.required' => 'Veillez entrer le numéro de téléphone ',
                'admin_email.required' => 'Veillez entrer email ',
                'admin_mobile.required' => 'numéro de téléphone invalide ',
            ];

            $this->validate($request, $rules, $message);

            Admin::where('id', Auth::guard('admin')->user()->id)->update([
                'nom' => $data['admin_name'],
                'email' => $data['admin_email'],
                'telephone' => $data['admin_mobile'],
            ]);
            // echo "<pre>"; print_r($data); die;
            return redirect()->back()->with('success', 'Admin modifié avec succès');
        }

        return view('admin.updateadmin');
    }

    public function deleteApprenants($id)
    {
           Apprenant::where('id',$id)->delete();
           $message = "Apprenant supprimer avec succes!";
           return redirect()->back()->with('success_message',$message);
    }


    public function Demande()
    {
        // Mettez à jour la session avec la page en cours
        session(['page' => 'demandes']);

    
        // Récupérez les demandes avec les détails de la plage horaire et de l'apprenant associés
        $demandes = Demande::where('status', 0)->with(['plage_horaire:id,jour_semaine,capcitermaxe', 'apprenant:id,nom,prenom'])->get();
        return view('admin.demande', compact('demandes'));
    }
    public function demandeapprouver()
    {
        // Mettez à jour la session avec la page en cours
        session(['page' => 'demandes']);
    
        // Récupérez les demandes avec les détails de la plage horaire et de l'apprenant associés
        $demandes = Demande::where('status', 1)->with(['plage_horaire:id,jour_semaine,capcitermaxe', 'apprenant:id,nom,prenom'])->get();
        return view('admin.demande', compact('demandes'));
    }

    public function updateDemandeStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
        }if($data['status']=="Active"){
            $status = 0;
        }else{
            $status = 1;
        }
        Demande::where('id',$data['demande_id'])->update(['status'=>$status]);
        return response()->json(['status'=>$status,'demande_id'=>$data['demande_id']]);
    }

    public function admins($type=null)
    {
        $admins = Admin::query();
        if(!empty($type)){
            $admins = $admins->where('type' , $type);
            $title = ucfirst($type)."s";
            Session::put('page','view_'.strtolower($title));
        }else{
            $title = "Approuvers/Admins/Apprenants";
            Session::put('page','view_all');
        }
            $admins = $admins->get()->toArray();
            return view('admin.admin')->with(compact('admins','title'));
    }



    public function Connexion(Request $request)
    {
        
        if ($request->isMethod('post')) {
            $data = $request->all();
            $rules = [
                'email' => 'required|email|max:250',
                'password' => 'required',
            ];
            $customMessages = [
                'email.required' => 'Veillez saisir un email',
                'email.email' => 'Veillez saisir un email correct',
                'password.required' => 'Veillez saisir un mot de passe',
            ];

            $this->validate($request, $rules, $customMessages);

            // Attempt to log in the admin user
            if (
                Auth::guard('admin')->attempt([
                    'email' => $data['email'],
                    'password' => $data['password'],
                ])
            ) {
                if(Auth::guard('admin')->user()->type=="apprenant" && Auth::guard('admin')->user()->confirm=="No"){
                    return redirect()->back()->with('error_message', 'Veuillez confirmer votre Email pour activer votre compte vendeur');
                } else if(Auth::guard('admin')->user()->type!="apprenant" && Auth::guard('admin')->user()->status=="0"){
                    return redirect()->back()->with('error_message', 'votre compte admin n/est pas actif');
                } else {
                    return redirect('/dashboard');
                }
                
            } else {
                return redirect()->back()->with('error', 'adress email ou mot de passe incorect');
            }
            ;
        }
        return view('apprenant.connexion');
    }
    public function deconnexion()
    {
        Auth::guard('admin')->logout();
        return redirect('/connexion');
    }


}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Package;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    public function createroleuser(Package $package)
    {
        // dd('roleuser');
        return view('auth.loginRoleUser',compact('package'));
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('back');
    }

    //store pour la partie package

    public function storeroleuser(LoginRequest $request)
    {
        $tab = User::all('email');
        $tab2 = [];
        foreach($tab as $elt){
            array_push($tab2,$elt->email);
        }
        $userRole = User::where('email','=',$request->email)->get();
        $package= Package::find($request->packageId);
    // dd($tab2);

        if(in_array($request->email,$tab2)&& $userRole[0]->role->nom== 'user'){

            $request->authenticate();
    
            $request->session()->regenerate();
    
            return redirect()->route('paiement',$package->id);
        }elseif(in_array($request->email,$tab2)&& $userRole[0]->role->nom !== 'user'){
            return redirect()->back()->with('error', 'Vous devez avoir le rôle utilisateur pour acheter un package');
        }
        else{
            return redirect()->back()->with('error',"vous n'avez pas de compte chez nous, Veuillez vous enregistrer pour continuer.");
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

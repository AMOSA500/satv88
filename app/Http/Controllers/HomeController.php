<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\App;
use App\Models\Invoice;
use App\Models\Package;
use App\Models\Payment;
use App\Models\User_privacies;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','role:user']);
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();
        $payment = Payment::where('email',Auth()->user()->email)->paginate(7);
        return view('auth.home',\compact('payment'));
    }

    public function accountEdit($id){
        if ($id == "basic") {
            $user = Auth::user();
            return view('auth.account_edit_basic',\compact('user'));
        }elseif ($id == "user") {
            $user = Auth::user();
            return view('auth.account_edit',compact('user'));
        }elseif($id == 'profile'){
            $user = Auth::user();
            return view('auth.account_edit_profile',\compact('user'));
        }else{
            return back();
        }
        
    }

    public function privacy(Request $request)
    {
        if ($request->isMethod('post') && $request->hasFile('avatar'))
        {
            try {


                if ($request->hasFile('avatar'))
                {
                    $this->validate($request, [
                        'avatar' => 'image|mimes:jpeg,png,jpg,svg'
                    ]);

                    $image = $request->file('avatar');
                    $name = Str::random(16).'.'.$image->getClientOriginalExtension();
                    $destinationPath = ('storage/images/avatar/');
                    $imagePath = $destinationPath.'/'.$name;
                    $image->move($destinationPath,$name);
                    
                    User_privacies::where('user_id',Auth::user()->id)->update([
                        'photo' => $name,
                        'about' => $request->input('about'),
                        'location' => $request->input('location')
                    ]);
                    
                    return redirect()->back()->with('success',"Your account has been updated");
                }
               return redirect()->back()->with('image',"No image was uploaded");
            } catch (ValidationException $e) {
                return $e->getMessage();
            }
        }
    }

    public function plan($id)
    {
        if ($id == 'detail') {
            $invoice = Invoice::where('user_id',auth()->user()->id)->where('package_status',true)->paginate(10);
           return view('auth.account_subscription_detail',\compact('invoice'));
        }
        elseif($id == 'history'){
            $payment = Payment::where('email',Auth()->user()->email)->paginate(20);
            return view('auth.account_payment_history',\compact('payment'));
        }
        elseif($id == 'plan'){
            $app = App::all();
            return view("auth.account_subscription_plan",\compact('app'));
        }elseif($id == 'invoice'){
            $invoice = Invoice::where('user_id',auth()->user()->id)->where('package_status',false)->get();
            return view("auth.account_billing_invoice",\compact('invoice'));
        }
        else{
            return back();
        }
        
    }

    public function package($id)
    {
        $id_ = \decrypt($id);
        $package = Package::where('app_id',$id_)->get();
        return view("auth.account_package",\compact('package'));
    }

   
    public function setInvoice(Request $request)
    {
        if ($request->isMethod('POST')) {
            $input = $request->all();
            $invoice = Invoice::create($input);

            toastr()->success("New Invoice","Your new ".$request->input('package_name')." invoice has been created. Goto Invoice to checkout");
            return back();
        }
    }

    public function delInvoice($invoice_no)
    {
        if (auth()->check()) {

            Invoice::where('invoice_no',$invoice_no)->delete();
            toastr()->error('Delete','The following invoice as been deleted -'.$invoice_no);
            return back();

        }
    }
    public function getInvoiceItems($tx_ref)
    {
        if (auth()->check()) {

            $invoice = Invoice::where('payment_ref',$tx_ref)->get();
            $payment = Payment::where('tx_ref',$tx_ref)->first();
            return view("auth.account_invoice_items",\compact('invoice','tx_ref','payment'));

        }
    }

}

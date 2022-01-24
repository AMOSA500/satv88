<?php

namespace App\Http\Controllers;


use App\Models\App;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Message;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User_privacies;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator','auth']);
        
    }
    public function dashboard()
    {
        return view('auth.admin.dashboard');
    }

    public function messagesInbox()
    {
        $messages = Message::all();
        $msg = $messages->unique('ticketNo');
        return view('auth.admin.messages.inbox',\compact('msg'));
    } 
    public function salesInvoiceList()
    {
        
        $payment = Payment::paginate(20);
        return view('auth.admin.sales.invoice_list',\compact('payment'));
    } 
    
    public function viewInvoice($tx_ref)
    {
        
        $invoice = Invoice::where('payment_ref',$tx_ref)->get();
        $pay = Payment::where('tx_ref',$tx_ref)->first();
        return view('auth.admin.sales.view_invoice',\compact('invoice','tx_ref','pay'));
    }
    
    public function messagesReadReply($ticketNo,$msgId)
    {
        
        if ($msgId == 1) {
        $messages = Message::where('ticketNo',$ticketNo)->get();
        $datetime = Message::where('ticketNo',$ticketNo)->value('updated_at');
        $sender = Message::where('ticketNo',$ticketNo)->value('user_id');
        $subject = Message::where('ticketNo',$ticketNo)->value('subject');
        $name = User::where('id',$sender)->value('name');
            return view('auth.admin.messages.reply_inbox',\compact('messages','subject','ticketNo','datetime','name'));    

        }else if($msgId == 2){
            return view('auth.admin.messages.compose');
        }
        
    }

    public function salesAnalysis()
    {
        $apps = App::all();
        return view('auth.admin.sales.analysis',\compact('apps'));
    }
    public function contactProfile()
    {
        $apps = User::all();
        return view('auth.admin.contact.profile',\compact('apps'));
    }

    public function contactProfileEdit($id)
    {
        $item = User::where('id',$id)->first();
        return view("auth.admin.contact.edit_profile",\compact('item'));
    }

    public function postContactProfileEdit(Request $request)
    {
        
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
                'secret' => config('services.recaptcha.secret'),
                'response' => $request->get('recaptcha'),
                'remoteip' => $remoteip
            ];
        $options = [
                'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
                ]
            ];
        $context = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                $resultJson = json_decode($result);
                
        if ($resultJson->success != true) {
                return back()->withErrors(['captcha' => 'Recaptcha Error: We could not verify your identity. Please try again']);
                }
        if ($resultJson->score >= 0.3) 
        {
        
            if ($request->isMethod('post') || $request->hasFile('avatar'))
            {
                try {
                    
                    $id_user = $request->input('user_id');
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

                        User_privacies::where('user_id',$id_user)->update([
                            'photo' => $name,
                        ]);

                    }
                        User_privacies::where('user_id',$id_user)->update([
                            'about' => $request->input('about'),
                            'location' => $request->input('location')
                        ]);
                        
                        $password = $request->input('password');
                        $confirm_password = $request->input('confirm_password');

                        User::where('id',$id_user)->update([
                            'phone' => $request->input('phone'),
                            'password' => !empty($password)&&!empty($confirm_password)?Hash::make($confirm_password):''
                        ]);
                    return redirect()->back()->with('success',"Your account has been updated");
                    
                } catch (ValidationException $e) {
                    return $e->getMessage();
                }
            }
        } else {
            return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }

    }

    
    

}

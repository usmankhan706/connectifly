<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Mollie\Laravel\Facades\Mollie;
use App\Models\Service;
use App\Models\Company;



class MollieController extends Controller
{
   

    public function __construct()
    {
        $this->middleware(['auth:company']);

        // $this->middleware(['auth:company']);
        Mollie::api()->setApiKey('test_RdC2A9a86cgqAxWTqhaDGvbugRJsGx');
    }

    public function cancel_sbscription()
    {
        if (auth('company')->user()->subscribed->cycle_ends_at < now()) {
            auth('company')->user()->subscribed->delete();
        }
        return back();
    }

    public function preparePayment($package)
    {
        if (!auth('company')->check()) {
            return redirect()->route('company_register');
        }

        if ($package == 'pro') {
            $end = 1;
            $price = '5.00';
        } elseif ($package == 'lite') {
            $end = 6;
            $price = '7.50';
        } else {
            $end = 12;
            $price = '10.00';
        }

        if (!auth('company')->user()->subscribed) {
            Subscription::create([
                'name' => "Premium",
                'plan' => "Premium",
                'owner_type' => 'Company',
                'owner_id' => auth('company')->user()->id,
                'cycle_started_at' => now(),
                'cycle_ends_at' => now()->addMonths($end),
            ]);
        } else {
            Subscription::where('owner_id', auth('company')->user()->id)->update([
                'cycle_started_at' => now(),
            ]);
        }

        $payment = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => 'EUR', // Type of currency you want to send
                'value' => $price, // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'Cards Payment By ProfileX',
            'redirectUrl' => route("home"), // after the payment completion where you to redirect
        ]);

        $payment = Mollie::api()->payments()->get($payment->id);

        // dd($payment);
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function paymentSuccess()
    {
        echo 'payment has been received';
    }

    public function paymentFail()
    {
        echo 'payment has been received';
    }

    public function package()
    {
        $services = Service::all();

        if (!auth()->user()->subscribed) {
            
            return view('auth.package');
        } else {
            return view("company.company_profile")->with("services", $services);
        }
    }
}

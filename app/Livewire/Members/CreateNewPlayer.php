<?php

namespace App\Livewire\Members;

use App\Models\Player;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreateNewPlayer extends Component
{
    public $user_name = '';
    public $password = '';
    public $password_confirmation = '';
    public $currency = '';
    public $full_name = '';
    public $dob = '';
    public $email = '';
    public $mobile = '';
    public $credit_limit;
    public $time_zone;

    private function createSign($timestamp, $info, $key)
    {
        $word = strtolower($info) . $timestamp . strtolower($key);
        $hash = hash('sha256', $word);

        return $hash;
    }

    public function store()
    {
        $this->validate([
            'password' => 'required|string',
            'password_confirmation' => 'required|string|same:password'
        ]);
        $partner = "c2777";
        $key = '3BCF4A25-0419-4DB9-8256-A1394DC51B47';
        $time = now()->getTimeStampMs();
        $info = $partner; // . $this->user_name . $this->password . $this->full_name . $this->email . $this->mobile . $this->dob . $this->currency . request('BankName', ''). request('BankAccountNo', '') . request('Gender', '');
        $sign = $this->createSign($time, $info, $key);
        $postData = [
            'Partner' => $partner,
            'Sign' => $sign,
            'TimeStamp' => $time,
            'UserName' => 'ma00' . $this->user_name,
            'Password' => $this->password,
            'Fullname' => $this->full_name,
            'Email' => $this->email,
            'Mobile' => $this->mobile,
            'Gender' => -1,
            'DoB' => Carbon::parse($this->dob)->format('Y-m-d') ,
            'Currency' => 'MYR',
            'BankName' => 'MY',
            'BankAccountNo' => '12345678910',
        ];
        $response = Http::post(config('api2all.auth') . '/api/partner/register', $postData);
        if ($response->successful()) {
            $res = $response->json();
            // Log::debug('res: ', [$res]);
            if ($res['Error'] == 0) {
                $player = Player::create([
                    // 'user_id' => '',
                    'user_name' => 'ma00' . $this->user_name,
                    'password' => $this->password,
                    'name' => $this->full_name,
                    'email' => $this->email,
                    'mobile' => $this->mobile,
                    'time_zone' => $this->time_zone,
                    'gender' => -1,
                    'dob' => $this->dob,
                    'credit_limit' => $this->credit_limit,
                    'currency' => 'MYR',
                    'bank_name' => 'Maybank Berhad',
                    'bank_account_no' => '11201123352',
                    'api_token' => Str::random(60),
                ]);
            }
            session()->flash('error', $res['Error']);
            session()->flash('message', $res['Message']);
            return redirect()->to('/members/list_player');
        }
        session()->flash('message', 'Could not connect to the server.');
        return redirect()->to('/members/list_player/create_new_player');
    }

    public function render()
    {
        return view('livewire..members.create-new-player');
    }
}

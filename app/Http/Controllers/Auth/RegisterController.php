<?php



namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;

use App\Models\User;

use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

use App\Mail\TraderMail;



class RegisterController extends Controller

{

    /*

    |--------------------------------------------------------------------------

    | Register Controller

    |--------------------------------------------------------------------------

    |

    | This controller handles the registration of new users as well as their

    | validation and creation. By default this controller uses a trait to

    | provide this functionality without requiring any additional code.

    |

    */



    use RegistersUsers;



    /**

     * Where to redirect users after registration.

     *

     * @var string

     */

    protected $redirectTo = RouteServiceProvider::HOME;



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest');

    }



    /**

     * Get a validator for an incoming registration request.

     *

     * @param  array  $data

     * @return \Illuminate\Contracts\Validation\Validator

     */

    protected function validator(array $data)

    {

        return Validator::make($data, [

            'name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

    }



    /**

     * Create a new user instance after a valid registration.

     *

     * @param  array  $data

     * @return \App\Models\User

     */

    protected function create(array $data)

    {

        $validate =  Validator::make($data, [

            'name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users' , 'unique:tradingaccounts'],

            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'date' => ['required', 'date' , 'after:start_date'],

            'phone' => ['required'],

            'company_vet' => ['required'],

            'account_email' => ['required' , 'unique:users' , 'unique:tradingaccounts'],

            'account_phone' => ['required' , 'unique:users' , 'unique:tradingaccounts'],

            'company_address' => ['nullable'],

        ]);

        $userType = $data['user_type'];

        $user = User::create([

            'name' => $data['name'],

            'email' => $data['email'],

            'password' => Hash::make($data['password']),

            'phone' => $data['phone'],

            // 'address' => $data['address'],

            // 'company_name' => $data['company_name'],

            // 'company_address' => $data['company_address'],

            // 'company_vet' => $data['company_vet'],

            'user_type' => $userType

        ]);

        if ($userType == 'trader') {

                $user->user_type = 'trader';

                $user->save();

                $data = [

                    'company_name' => $data['company_name'],

                    'contact_name' => $data['name'],

                    'trading_address' => $data['company_address'],

                    'email' => $data['email'],

                    'phone' => $data['phone'],

                    'invoice_address' => $data['address'],

                    'account_email' => $data['account_email'],

                    'account_phone' => $data['account_phone'],

                    'company_number' => $data['company_number'],

                    'vat_number' => $data['company_vet'],

                    'payment_terms' => $data['payment_terms'],

                    'date' => $data['date'],

                    'name_position' => $data['name_position'],

                    'password' => Hash::make($data['password']),

                ];

                DB::table('tradingaccounts')->insert($data);

               // mailto:mail::to('info@fastukcouriers.co.uk')->send(new TraderMail($data));

        }

        return $user;
    }

}
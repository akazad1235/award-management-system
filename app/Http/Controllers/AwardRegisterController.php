<?php

namespace App\Http\Controllers;

use App\Mail\awardRegMail;
use App\Models\AwardRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AwardRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('awardRegister');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //   return $request->all();
        Validator::make($request->all(), [
            'business_name' => ['required'],
            'business_owner_name' => ['required'],
            'establishment' => ['required'],
            'award_category' => ['required'],
            'signature_item' => ['required'],
            'subscribers' => ['required'],
            'major_breakthrough' => ['required'],
            'country' => ['required'],
            'contact' => ['required'],
            'email' => ['required'],
            'join_date' => ['required'],
            'review_achieved' => ['required'],
            'number_of_post' => ['required'],
            'revenue' => ['required'],
            'product_innovation' => ['required'],
            'team_size' => ['required']


        ])->validate();

        $data = $request->all();
        $file = $request->file('file');
        $data['revenue'] =$request->revenue;
        if($request->yes == 'yes'){
            $data['subscribers'] = $request->subscribers;
        }else{
            $data['subscribers'] = 'no';
        }
        $breakthrough = $request->major_breakthrough;
        $breakthroughs = array();
        for($i =0; $i<count($breakthrough); $i++){
            if($breakthrough[$i] == 'news'){
                array_push($breakthroughs, $request->news_info);
            }
            if($breakthrough[$i] == 'award'){
                array_push($breakthroughs,$request->award_info);
            }
            if($breakthrough[$i] == 'others'){
                array_push($breakthroughs,$request->others_info);
            }
        }
        $data['major_breakthrough'] =json_encode($breakthroughs);

        if($request->hasFile('file')){

            if($file->getSize() >9000){
                return back()->with(['error'=>'Your File too Large, file must be less then 6mb']);
            }else{
                $fileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('frontend/images'), $fileName );
                $data['trade_license'] = $fileName;

                AwardRegister::create($data);
                Mail::to('akazad914@gmail.com')->send(new awardRegMail($request->business_owner_name));
            }
        }else{
            AwardRegister::create($data);
            Mail::to('akazad914@gmail.com')->send(new awardRegMail($request->business_owner_name));
        }

       return back()->with(['message'=>'Award registration success']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AwardRegister  $awardRegister
     * @return \Illuminate\Http\Response
     */
    public function show(AwardRegister $awardRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AwardRegister  $awardRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(AwardRegister $awardRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AwardRegister  $awardRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AwardRegister $awardRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AwardRegister  $awardRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(AwardRegister $awardRegister)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Campaign;
use App\Models\Click;
use App\Models\Share;
use App\Models\User;

class PagesController extends Controller
{

    public function getTotalStat($campaign_id = null, $year = null){
        $data = [];
        $data2 = [];
        $final_data = [];
        $data['jan']= $data['feb']= $data['mar']=$data['apr']=$data['may']=$data['jun']=
            $data['jly']= $data['aug']=$data['sep']= $data['oct']= $data['nov']= $data['dec'] = 0;
        $data2['jan']= $data2['feb']= $data2['mar']=$data2['apr']=$data2['may']=$data2['jun']=
            $data2['jly']= $data2['aug']=$data2['sep']= $data2['oct']= $data2['nov']= $data2['dec'] = 0;
            //get all campaigns that belong to the signed in user
            $campaigns = Campaign::where('user_id',Auth::id())->get();

            //loop through each of the capmpaigs and get the shares and clicks associated with each
            foreach ($campaigns as $campaign) {
                //get the clicks
                $data['jan'] = $data['jan'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'01'])->get());
                $data['feb'] = $data['feb'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'02'])->get());
                $data['mar'] = $data['mar'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'03'])->get());
                $data['apr'] = $data['apr'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'04'])->get());
                $data['may'] = $data['may'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'05'])->get());
                $data['jun'] = $data['jun'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'06'])->get());
                $data['jly'] = $data['jly'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'07'])->get());
                $data['aug'] = $data['aug'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'08'])->get());
                $data['sep'] = $data['sep'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'09'])->get());
                $data['oct'] = $data['oct'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'10'])->get());
                $data['nov'] = $data['nov'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'11'])->get());
                $data['dec'] = $data['dec'] + count(Click::where(['campaign_id'=>$campaign->id,'month'=>'12'])->get());

                //get the shares
                $data2['jan'] = $data2['jan'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'01'])->get());
                $data2['feb'] = $data2['feb'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'02'])->get());
                $data2['mar'] = $data2['mar'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'03'])->get());
                $data2['apr'] = $data2['apr'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'04'])->get());
                $data2['may'] = $data2['may'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'05'])->get());
                $data2['jun'] = $data2['jun'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'06'])->get());
                $data2['jly'] = $data2['jly'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'07'])->get());
                $data2['aug'] = $data2['aug'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'08'])->get());
                $data2['sep'] = $data2['sep'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'09'])->get());
                $data2['oct'] = $data2['oct'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'10'])->get());
                $data2['nov'] = $data2['nov'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'11'])->get());
                $data2['dec'] = $data2['dec'] + count(Share::where(['campaign_id'=>$campaign->id,'month'=>'12'])->get());
            }
            array_push($final_data,$data);
            array_push($final_data,$data2);

        return json_encode($final_data);
    }

    public function getStat($campaign_id){
        $final_data = [];
        $data = [];
        $data['jan']= $data['feb']= $data['mar']=$data['apr']=$data['may']=$data['jun']=
            $data['jly']= $data['aug']=$data['sep']= $data['oct']= $data['nov']= $data['dec'] = 0;
        //get the clicks
        $data['jan'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'01'])->get());
        $data['feb'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'02'])->get());
        $data['mar'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'03'])->get());
        $data['apr'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'04'])->get());
        $data['may'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'05'])->get());
        $data['jun'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'06'])->get());
        $data['jly'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'07'])->get());
        $data['aug'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'08'])->get());
        $data['sep'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'09'])->get());
        $data['oct'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'10'])->get());
        $data['nov'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'11'])->get());
        $data['dec'] = count(Click::where(['campaign_id'=>$campaign_id,'month'=>'12'])->get());

        array_push($final_data,$data);

        $data2 = [];
        $data2['jan']= $data2['feb']= $data2['mar']=$data2['apr']=$data2['may']=$data2['jun']=
            $data2['jly']= $data2['aug']=$data2['sep']= $data2['oct']= $data2['nov']= $data2['dec'] = 0;
        //get the shares
        $data2['jan'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'01'])->get());
        $data2['feb'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'02'])->get());
        $data2['mar'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'03'])->get());
        $data2['apr'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'04'])->get());
        $data2['may'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'05'])->get());
        $data2['jun'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'06'])->get());
        $data2['jly'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'07'])->get());
        $data2['aug'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'08'])->get());
        $data2['sep'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'09'])->get());
        $data2['oct'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'10'])->get());
        $data2['nov'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'11'])->get());
        $data2['dec'] = count(Share::where(['campaign_id'=>$campaign_id,'month'=>'12'])->get());

        array_push($final_data,$data2);

        return json_encode($final_data);
    }

    /**
    *load the dasboard homepage
    */
    public function dashboard()
    {
        //initialize variables
        $data = [];
        $total_clicks = 0;
        $total_shares = 0;

        //get all campaigns that belong to the signed in user
        $campaigns = Campaign::where('user_id',Auth::id())->get();

        //loop through each of the capmpaigs and get the shares and clicks associated with each
        foreach ($campaigns as $campaign) {
            //get the shares
            $shares = Share::where('campaign_id',$campaign->id)->get();
            $total_shares = $total_shares + count($shares);

            //get the clicks
            $clicks = Click::where('campaign_id',$campaign->id)->get();
            $total_clicks = $total_clicks + count($clicks);

        }
        $data['total_shares'] = $total_shares;
        $data['total_clicks'] = $total_clicks;
        $data['total_campaigns'] = count($campaigns);
        return view('admin.home')->with(['data'=>$data]);
    }

    /**
    *show analytics
    */
    public function campaignAnalytics($campaign_id)
    {
        //initialize variables
        $data = [];
        $total_clicks = 0;
        $total_shares = 0;

        $campaign = Campaign::find($campaign_id);

        //get the shares
        $shares = count(Share::where('campaign_id',$campaign->id)->get());

        //get the clicks
        $clicks = count(Click::where('campaign_id',$campaign->id)->get());

        return view('admin.campaign-analytics')->with(['shares'=>$shares,'clicks'=>$clicks,'campaign'=>$campaign]);
    }

}

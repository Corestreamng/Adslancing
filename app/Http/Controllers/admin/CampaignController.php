<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Campaign;
use App\Models\Tags;
use App\Models\CampaignTag;
use App\Models\User;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::where('user_id', Auth::id())->get();
        return view('admin.list-campaign')->with('campaigns', $campaigns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-campaign');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campaign = new Campaign;

        if ($request->file()) {
            //validation
            $inputs = $request->validate([
                'caption' => 'required|min:3',
                'type' => 'required',
                'url' => 'required',
                'file' => 'mimes:jpg,jpeg,png|max:5060'
            ]);
            $fileName = $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $campaign->caption = $inputs['caption'];
            $campaign->type = $inputs['type'];
            $campaign->url = $inputs['url'];
            $campaign->file = $fileName;
            $campaign->status = 0;
            $campaign->user_id = Auth::id();
            $campaign->save();
            return redirect('/campaigns/add-tags/' . $campaign->id)->with('msg', 'Campaign added sucessfully, please add tags');
        } else {
            //validation
            $inputs = $request->validate([
                'caption' => 'required|min:3',
                'type' => 'required',
                'url' => 'required',
                'file' => ''
            ]);

            $campaign->caption = $inputs['caption'];
            $campaign->type = $inputs['type'];
            $campaign->url = $inputs['url'];
            $campaign->file = null;
            $campaign->status = 0;
            $campaign->user_id = Auth::id();

            $campaign->save();
            return redirect('/campaigns/add-tags/' . $campaign->id)->with('msg', 'Campaign added sucessfully, please add tags');
        }


        //dd($inputs['url']);
    }

    /**
     * Show the form for adding tags to a campaign
     */
    public function add_tags_form(Request $request, $campaign_id)
    {
        $campaign = Campaign::find($campaign_id);
        return view('admin.add-tags')->with('campaign', $campaign);
    }

    /**
     * Add tag to a campaign
     */
    public function add_tag(Request $request, $campaign_id, $tag_id)
    {

        if ($request->ajax()) {
            $campaign = Campaign::find($campaign_id);
            //dd($campaign);
            $tag_id = [$tag_id];
            if ($campaign->tags()->attach($tag_id)) {
                return 200;
            } else {
                return 500;
            }
        }
    }

    /**
     * Remove a tag
     */
    public function remove_tag(Request $request, $campaign_id, $tag_id)
    {
        if ($request->ajax()) {
            $campaign = Campaign::find($campaign_id);
            $tag_id = [$tag_id];
            if ($campaign->tags()->detach($tag_id)) {
                return 200;
            } else {
                return 500;
            }
        }
    }

    /**
     * add billing info to campaign
     */
    public function add_billing(Request $request, $campaign_id)
    {
        $inputs = $request->validate([
            'target_clicks' => 'required',
            'target_shares' => 'required',
            'target_days' => 'required'
        ]);

        $campaign = Campaign::find($campaign_id);
        if ($campaign->update($inputs)) {
            return redirect()->route('campaigns.show', [$campaign_id])->with('msg','Billing info set');
        } else {
            return back()->with('errors', 'Failed to update billing information');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campaign = Campaign::find($id);
        return view('admin.show-campaign')->with('campaign', $campaign);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation
        $inputs = $request->validate([
            'caption' => 'required|min:3',
            'type' => 'required',
            'url' => 'required'
        ]);

        $campaign = Campaign::find($id);
        if ($campaign->update($inputs)) {
            return back()->with('msg', 'Campaign Updated');
        } else {
            return back()->with('errors', 'Failed to update campaign');
        }
    }

    /**
     * update image for exiting campaign
     */
    public function update_image(Request $request, $campaign_id)
    {
        $inputs = $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg'
        ]);
        if ($request->file()) {
            $campaign = Campaign::find($campaign_id);

            $fileName = $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            if ($campaign->update(['file' => $fileName])) {
                return back()->with('msg', 'Image Updated successfully');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign = Campaign::find($id);
        if($campaign->delete()){
            return back()->with('msg','Campaign deleted');
        }else{
            return back()->with('err','Failed to delete Campaign');
        }
    }
}

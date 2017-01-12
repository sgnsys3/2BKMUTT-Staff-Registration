<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Storage;
use App\UserProfile;
use App\UserAnswer;

class ApiController extends Controller
{
    public function schoolInfo(Request $request) {
        if (!Auth::check()) return response('ERROR', 403);
        $this->validate($request, [
            'education_grade' => 'required|integer|max:2|min:1',
            'education_plan' => 'required|string',
            'grade' => 'required|numeric|min:0|max:4',
            'school' => 'required|string',
            'province' => 'required|string'
        ]);
        $schoolInfo = UserProfile::firstOrNew(['user_id' => Auth::id()]);
        $schoolInfo->education_grade = $request->input('education_grade');
        $schoolInfo->education_plan = $request->input('education_plan');
        $schoolInfo->grade = $request->input('grade');
        $schoolInfo->school = $request->input('school');
        $schoolInfo->school_province = $request->input('province');
        $schoolInfo->save();
        return 'OK';
    }

    public function homeInfo(Request $request) {
        if (!Auth::check()) return response('ERROR', 403);
        $this->validate($request, [
            'address' => 'required|string',
            'mooban' => 'string',
            'soi' => 'string',
            'street' => 'required|string',
            'district' => 'required|string',
            'area' => 'required|string',
            'province' => 'required|string',
            'postcode' => 'required|digits:5'
        ]);
        $homeInfo = UserProfile::firstOrNew(['user_id' => Auth::id()]);
        $homeInfo->homeaddress = $request->input('address');
        $homeInfo->mooban = $request->input('mooban');
        $homeInfo->soi = $request->input('soi');
        $homeInfo->street = $request->input('street');
        $homeInfo->district = $request->input('district');
        $homeInfo->area = $request->input('area');
        $homeInfo->province = $request->input('province');
        $homeInfo->postcode = $request->input('postcode');
        $homeInfo->save();
        return 'OK';
    }

    public function parentInfo(Request $request) {
        if (!Auth::check()) return response('ERROR', 403);
        $this->validate($request, [
            'dadname' => 'string',
            'dadlastname' => 'string',
            'dadtelephone' => 'digits:10',
            'momname' => 'string',
            'momlastname' => 'string',
            'momtelephone' => 'digits:10',
            'parentname' => 'string|required',
            'parentlastname' => 'string|required',
            'parenttelephone' => 'digits:10|required',
        ]);
        $parentInfo = UserProfile::firstOrNew(['user_id' => Auth::id()]);
        $parentInfo->dad_name = $request->input('dadname');
        $parentInfo->dad_lastname = $request->input('dadlastname');
        $parentInfo->dad_telephone = $request->input('dadtelephone');
        $parentInfo->mom_name = $request->input('momname');
        $parentInfo->mom_lastname = $request->input('momlastname');
        $parentInfo->mom_telephone = $request->input('momtelephone');
        $parentInfo->parent_name = $request->input('parentname');
        $parentInfo->parent_lastname = $request->input('parentlastname');
        $parentInfo->parent_telephone = $request->input('parenttelephone');
        $parentInfo->save();
        return 'OK';
    }

    public function a2binfo(Request $request) {
        if (!Auth::check()) return response('ERROR', 403);
        $this->validate($request, [
            '2bgen' => 'required|integer|max:13|min:10',
            'researchgroup' => 'required|string',
            'facility' => 'required|string',
            'department' => 'required|string',
            'facilityentrance' => 'required|string',
            'departmententrance' => 'required|string'
        ]);
        $a2b = UserProfile::firstOrNew(['user_id' => Auth::id()]);
        $a2b->a2bgen = $request->input('2bgen');
        $a2b->a2b_researchgroup = $request->input('researchgroup');
        $a2b->a2b_department = $request->input('facility');
        $a2b->a2b_facility = $request->input('department');
        $a2b->entrance_facility = $request->input('facilityentrance');
        $a2b->entrance_department = $request->input('departmententrance');
        $a2b->save();
        return 'OK';
    }

    public function isComplete(Request $request) {
        if (!Auth::check()) return response('ERROR', 403);
        $this->validate($request, [
            'mode' => 'required|integer|min:1|max:6'
        ]);
        $userprofile = UserProfile::where('user_id',Auth::id())->first();
        if($request->input('mode') == 1) {
            return ($userprofile->education_plan != NULL || $userprofile->education_grade != NULL || $userprofile->grade != NULL || $userprofile->school != NULL || $userprofile->school_province != NULL) ? response()->json(['status' => true]) : response()->json(['status' => false]);
        }
        else if($request->input('mode') == 2) {
            return ($userprofile->homeaddress != NULL || $userprofile->mooban != NULL || $userprofile->soi != NULL || $userprofile->street != NULL || $userprofile->district != NULL || $userprofile->area != NULL || $userprofile->province != NULL || $userprofile->postcode != NULL) ? response()->json(['status' => true]) : '0';
        }
        else if($request->input('mode') == 3) {
            return ($userprofile->dad_name != NULL || $userprofile->dad_lastname != NULL || $userprofile->dad_telephone != NULL || $userprofile->mom_name != NULL || $userprofile->mom_lastname != NULL || $userprofile->mom_telephone != NULL || $userprofile->parent_name != NULL || $userprofile->parent_lastname != NULL || $userprofile->parent_telephone != NULL) ? response()->json(['status' => true]) : '0';
        }
        else if($request->input('mode') == 4) {
            return ($userprofile->a2bgen != NULL || $userprofile->dad_laa2b_researchgroupstname != NULL || $userprofile->a2b_department != NULL || $userprofile->a2b_facility != NULL || $userprofile->entrance_facility != NULL || $userprofile->entrance_department != NULL) ? response()->json(['status' => true]) : '0';
        }
        else if($request->input('mode') == 5) {
            return ($userprofile->approve_filename != NULL) ? response()->json(['status' => true]) : '0';
        }
        else if($request->input('mode') == 6) {
            
        }
    }
}
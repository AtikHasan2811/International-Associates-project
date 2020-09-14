<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        $data = array();
        $data['menu_active']= 1;
        return view('home',$data);
//        return view('layouts.frontend.partial.photo',$data);
    }


//id	name	adderss	city	state	postal_code	country	geolocation	phone	other_phone	csan_id	point_of_contact_name	location_added_by	website	point_of_contact_email	audit_date	audit_stage	assigned_auditor_name	wco
// 	hole_certification	has_the_facility	primary_industry	product_type	year_established	grounds_size	number_of_buildings	facility_size	number_of_access	hours_of_operation	number_of_employees	number_of_contract_employees
//number_of_security_guards	number_of_migrant_workers	annual_revenue	currency	number_of_shipments_to_usa	port_of_embarkation	port_of_arrival	created_at	updated_at




}

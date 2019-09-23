<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfInvoiceController extends Controller
{
    //here we creat pdf by using guzzle api 
    public function index(){
    	$client = new \GuzzleHttp\Client();
		$request = $client->get("https://lumendb.edemoserver.com/public/getApiResponse");
		$response = $request->getBody()->getContents();
		$response = json_decode($response);
		$companyName = $response->company_name;
		$companyAddressTitle = $response->company_address->company_address_title;
		$companyAddress = $response->company_address->address;
		$objectDetails = $response->object_details;
		$offerPosition = $response->offerpositions;
		
    	$view =  view('pdf_invoice',compact('companyName','companyAddressTitle','companyAddress','objectDetails','offerPosition'));
		$pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view->render());
        return $pdf->stream();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\StockInfo;
class StockInfoController extends Controller
{
    public function index()
   {
       $stockinfos = StockInfo::all();
       $url = "https://www.dsebd.org/";
       $ch1= curl_init();
       curl_setopt ($ch1, CURLOPT_URL, $url );
       curl_setopt($ch1, CURLOPT_HEADER, 0);
       curl_setopt($ch1,CURLOPT_VERBOSE,1);
       curl_setopt($ch1, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)');
       curl_setopt ($ch1, CURLOPT_REFERER,'http://www.google.com');  //just a fake referer
       curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch1,CURLOPT_POST,0);
       curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 20);
       
       $htmlContent= curl_exec($ch1);
       
       return view('back-end.stockinfo.index', compact('stockinfos', 'htmlContent'));
   }

   public function dataMatrix(){
        $stockInfos = Company::has('stockInfo')->orderBy('name')->paginate(10);
       return view('back-end.stockinfo.data-matrix', compact('stockInfos'));
   }

   public function process(Request $request){
       foreach($request->data as $key=>$value){
            
           $stockInfo = StockInfo::find($key);

           foreach($value as $key2=>$value2){
                $stockInfo[$key2] = $value[$key2];
                echo($stockInfo[$key2]);
                echo( $value[$key2]);
           }

           $stockInfo->save();
       }
       return redirect()->back();
   }
}

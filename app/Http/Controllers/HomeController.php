<?php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmationMail;
use App\Models\Package;
use App\Models\PackageCategory;
use App\Models\Place;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\Visa;
use App\Models\OtherImage;
use App\Models\Contact;
use App\Models\PackagePrice;
use App\Models\ClientReview;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;
class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'places' => Place::where('status', 1)->get(),
            'tour_pakeg'  => Package::where('status', 1)->orderBy('id', 'desc')->get(),
            'tours'  => Package::where('status', 1)->orderBy('id', 'desc')->limit(4)->get(),
            'productsOne' => Package::select('id','package_image')->where('status', 1)->orderBy('id', 'desc')->first(),
            'holidays'  => Package::where('status', 1)->orderBy('id', 'desc')->limit(6)->get(),
            'productsTwo' => Package::select('id','package_image')->where('status', 1)->orderBy('id', 'desc')->skip(7)->take(1)->get(),
            'productsThree' => Package::select('id','package_image')->where('status', 1)->orderBy('id', 'desc')->skip(8)->take(1)->get(),
            'productsFour' => Package::select('id','package_image')->where('status', 1)->orderBy('id', 'desc')->skip(9)->take(3)->get(),
            // $products = products->skip(0)->take(10)->get();
            'reviews'=> ClientReview::where('status', 1)->orderBy('created_at', 'desc')->get(),
            'blogs'=>Blog::limit(3)->orderBy('created_at', 'desc')->get(),
        ]);
    }
public function visaGuide()
{
    $data['visa']=Visa::first();
    $data['visas']=Visa::get();
    return view('visa-guide',$data);
}
public function PackageView($place_name)
{
    $places=Place::where('status', 1)->get();
    $tour_pakegs =Package::where('status', 1)->orderBy('id', 'desc')->get();

    $place=Place::where('place_name',$place_name)->pluck('id');
    $data['tour_pakeg']=Package::where('place_id',$place)->get();
    $data['tours'] =  Package::where('place_id',$place)->orderBy('created_at', 'desc') // Assuming 'created_at' is in the 'packages' table
    ->latest()
    ->paginate(5)
    ->appends(request()->all());
    return view('package-view',$data,compact('places','tour_pakegs','place_name'));

}

public function searchVisa(Request $request)
{
    $country=$request->country;
     $data['countrys']=Visa::get();
    $data['visa']=Visa::where('country_name',$country)->first();
    return view('search-visa',$data);
}
    public function packageSearch(Request $request)
    {

        $request->Session()->put('plase',  $request->input('title'));
        $request->Session()->put('check_in',  $request->input('check_in'));
        $request->Session()->put('check_out',  $request->input('check_out'));
        $request->Session()->put('adult',  $request->input('adult'));
        $request->Session()->put('adults',  $request->input('adults'));
        $request->Session()->put('child',  $request->input('child'));
        $request->Session()->put('childS',  $request->input('childS'));

        $query = Package::where('status', 1);

        // Title and Duration Search
        if ($request->has('title') && $request->has('duration')) {
            $query->where('tour_title', 'like', '%' . $request->input('title') . '%')
                ->where(function ($query) use ($request) {
                    $duration = $request->input('duration');
                    $query->whereRaw("DATEDIFF(tour_end_date, tour_start_date) <= $duration");
                });
        }

        // Title Search
        elseif ($request->has('title')) {
            $query->where('tour_title', 'like', '%' . $request->input('title') . '%');
        }
        // Duration Search
        elseif ($request->has('duration')) {
            $query->where(function ($query) use ($request) {
                $duration = $request->input('duration');
                $query->whereRaw("DATEDIFF(tour_end_date, tour_start_date) <= $duration");
            });
        }
         // Rating Search
        if ($request->has('ratings') && is_array($request->input('ratings'))) {
            $ratings = $request->input('ratings');
            $query->whereIn('tour_rating', $ratings);
        }
        // Tour Type Search
        if ($request->has('tour_types') && is_array($request->input('tour_types'))) {
            $tourTypes = $request->input('tour_types');
            $query->whereIn('package_category_id', $tourTypes);
        }
        // Continue with other search criteria...

        // Filter based on the lowest price
        if ($request->has('lowestPrice')) {
            $price = $request->input('lowestPrice');
            $query->where('lowest_price', '<=', $price);
        }

        $lowestPrices = PackagePrice::select('package_id', DB::raw('MIN(price) as min_price'))
        ->groupBy('package_id')
        ->get();
        $tourtypes = PackageCategory::where('status', 1)->get();
        $places = $query->count();
        $tours = $query->orderBy('created_at', 'desc') // Assuming 'created_at' is in the 'packages' table
            ->latest()
            ->paginate(5)
            ->appends(request()->all());

            $data['heigh_pakegs'] =Package::where('status', 1)->where('tour_title', 'like', '%' . $request->input('title') . '%')->orderBy('lowest_price', 'desc')->get();
            $data['low_pakegs'] =Package::where('status', 1)->where('tour_title', 'like', '%' . $request->input('title') . '%')->orderBy('lowest_price', 'asc')->get();
            $data['name_pakegs'] =Package::where('status', 1)->where('tour_title', 'like', '%' . $request->input('title') . '%')->orderBy('tour_address', 'asc')->get();
        return view('website.home.packages',$data,[
            'tours' => $tours,
            'tourTypes' => $tourtypes,
            'lowestPrices' => $lowestPrices,
            'places'=>$places,
            'place' => Place::where('status', 1)->get(),
            'tour_pakeg'  => Package::where('status', 1)->orderBy('id', 'desc')->get(),
        ]);
    }

    public function packageDetail($id)
    {
        $data['tours']=Package::where('status', 1)->orderBy('id', 'desc')->limit(4)->get();
        $data['images']=OtherImage::where('package_id',$id)->orderBy('id', 'desc')->limit(4)->get();

        $lowestPrices = PackagePrice::select('package_id', DB::raw('MIN(price) as min_price'))
        ->groupBy('package_id')
        ->get();
        return view('website.package.package-details',$data, [
            'package'           => Package::find($id),
            'lowestPrices'      => $lowestPrices,
            'packages'          => Package::where('status', 1)->orderBy('id', 'desc')->get(),
            'faqs'              => Faq::where('tour_id', $id)->get(),
            'packageCategories' => PackageCategory::where('status',1)->get(),
        ]);

    }

    // public function contact()☻
    // {
    //     return view('website.contact.index');
    // }

    public function places(){

        $places = Place::where('status', 1)->orderBy('created_at', 'desc')
        ->latest()
        ->paginate(9)
        ->appends(request()->all());

        return view('website.home.places', ['places'=>$places]);
    }
    public function packages()
    {
        $data['place']=Place::where('status', 1)->get();
        $data['tour_pakegs'] =Package::where('status', 1)->orderBy('id', 'desc')->get();
//        $data['heigh_pakegs'] =Package::where('status', 1)->orderBy('lowest_price', 'desc')->get();
//        $data['low_pakegs'] =Package::where('status', 1)->orderBy('lowest_price', 'asc')->get();
        $data['name_pakegs'] =Package::where('status', 1)->orderBy('tour_address', 'asc')->get();

        $lowestPrices = PackagePrice::select('package_id', DB::raw('MIN(price) as min_price'))
        ->groupBy('package_id')
        ->get();
        $tourtypes = PackageCategory::where('status', 1)->get();
        return view('website.home.packages',$data, [

            'tours' => Package::where('status', 1)->orderBy('id', 'desc')
            ->latest()
            ->paginate(5)
            ->appends(request()->all()),
            'lowestPrices' => $lowestPrices,
            'tourTypes' => $tourtypes]);
    }

    public function flight()
    {
        return view('flight-form');
    }

    public function blog()
    {
        $data['blogs']=Blog::get();
        return view('website.home.blog', $data);
    }
    public function blogDetails($id)
    {
        $data['blogs']=Blog::get();
        $data['blogs_deatils']=Blog::where('blog_title',$id)->first();
        return view('website.home.blog-details',$data);
    }

    public function contact(){
        return view('contact');
    }
    public function contactPost(Request $request)
    {
        $request->validate([
        'name'=>'required',
        'email'=>'required',
        'message'=> 'required',
    ]);
    try {
            $input= new Contact;
            $input->name=$request->name;
            $input->email=$request->email;
            $input->message=$request->message;

            $input->save();
            $this->setSuccessMessage('Message Send!!!');
            return redirect()->back();
        }
        catch (Exception $errors) {
            return redirect()->back();
        }

    }

    public function flightPost(Request $request)
    {
        $request->validate([
        'name'=>'required',
        'last_name'=>'required',
        'number'=>'required',
        'email'=>'required',
        'check_out'=>'required',
        'sit'=>'required',
        'people'=>'required',
        'message'=> 'required',
    ]);
    try {
            $input= new Contact;
            $input->name=$request->name;
            $input->last_name=$request->last_name;
            $input->number=$request->number;
            $input->email=$request->email;
            $input->check_out=$request->check_out;
            $input->sit=$request->sit;
            $input->people=$request->people;
            $input->message=$request->message;

            $input->save();
            $this->setSuccessMessage('Message Send!!!');
            return redirect()->back();
        }
        catch (Exception $errors) {
            return redirect()->back();
        }

    }
}

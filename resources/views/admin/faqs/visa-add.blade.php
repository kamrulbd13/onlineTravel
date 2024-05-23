@extends('layouts.app')
@section('title', 'Manage Faq')
@section('body')

<section class="image-uploder">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <!----- for massage validation-------->

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!--------for message from controller--->
                @if(session()->has('message'))
                <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                {{ session('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{Route('post-visa')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <h1>Add New Visa Process</h1>
               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Country Name</label>
                    <input type="text" class="form-control" name="country_name" placeholder="Country Name" aria-label="Last name" value="{{old('country_name')}}">
                </div>
                <div class="mb-3">
                    <textarea name="country_details"  id="summary-ckeditor" value="{{old('country_details')}}"></textarea>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Upload Country Map</label>
                    <input class="form-control form-control-sm" name="country_image"  type="file" value="{{old('country_image')}}">
                </div>

                <div class="mb-3">
                    <textarea name="visa_details"  id="summary-ckeditor1" value="{{old('visa_details')}}"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-warning" style="margin: 0 auto; display: block;padding: 6px 50px;">Add</button>
                
                </form>
            </div>
            <div class="col-md-3"></div>
            
        </div>
    </div>
</section>

@endsection



@extends('layouts.app')
@section('title', 'Manage Faq')
@section('body')

<section class="image-uploder">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
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

                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Country Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allVisa as $key=>$visa)
                            <tr>
                                <td>{{ ++$key}}</td>
                                <td><img src="{{ url('uplods/visa/'.$visa->country_image) }}" class="images" style="width: 200px;
                                    height: 150px;"/></td>
                                <td>{{ $visa->country_name}}</td>
                                <td>
                                
                                <form action="{{Route('delete-visa',$visa->id)}}" method="POST" style="display: contents;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-primary" type="submit">Delete</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-1"></div>
            
        </div>
    </div>
</section>

@endsection
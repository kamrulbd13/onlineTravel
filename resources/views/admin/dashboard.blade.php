@extends('layouts.app')
@section('title', 'Dashboard')
@section('body')
<h1 style="text-align:center;">Contact Request</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($contacts as $key=>$contact)
    <tr>
      <th scope="row">{{ ++$key }}</th>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->message }}</td>
     <form action="{{Route('contact-delete',$contact->id)}}" method="POST" style="display: contents;">
	    @csrf
	    @method('DELETE')
      <td><button type="submit" class="btn btn-outline-danger btn-sm">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection




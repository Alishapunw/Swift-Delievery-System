@extends('layout.app')
@section('content')

<h4>Enter Data</h4>
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  id="order_id" type="number" class="validate">
          <label for="order_id">Order ID</label>
        </div>
        <div class="input-field col s6">
          <input id="order_title" type="text" class="validate">
          <label for="order_title">Order Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="source" type="text" class="validate">
          <label for="source">Source</label>
        </div>
        <div class="input-field col s6">
          <input id="destination" type="text" class="validate">
          <label for="destination">Destination</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  id="submit" type="submit" class="btn ">
        </div>
        
      </div>
    </form>
  </div>

@endsection
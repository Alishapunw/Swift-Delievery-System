@extends('layout.app')
@section('content')

<div id ="main">

<table class="striped">
        <thead>
          <tr>
              <th>Order Id</th>
              <th>Title</th>
              <th>Source</th>
              <th>Destination</th>
              <th>Agent</th>
              <th>Status</th>
              <th>Track</th>
          </tr>
        </thead>

        <tbody>
            <tr>
                <td>123456</td>
                <td>Package 1</td>
                <td class="src">Mumbai</td>
                <td class="dest">Kolkata</td>
                <td>29/02/2020</td>
                <td>Dispatched</td>
                <td><a  class="btn modal-trigger" onClick="setUrls(this)" href="{{route('map2')}}" >Track</a></td>
            </tr>
        {{-- @foreach($items as $item)
            <tr>
                <td>{{$item -> order_id}}</td>
                <td>{{$item -> order_title}}</td>
                <td>{{$item -> order_source}}</td>
                <td>{{$item -> order_destination}}</td>
                <td>{{$item -> order_date}}</td>
                <td>{{$item -> order_status}}</td>

            </tr>

      
        @endforeach --}}
        </tbody>
      </table>
            
</div>
<script>
    function setUrls(that){
        var url = new URL('localhost:8000/map2?');
        var query_string = url.search;
        var search_params = new URLSearchParams(query_string); 
        let src = $(that).parent().siblings(".src").html();
        let dest = $(that).parent().siblings(".dest").html();
        
        search_params.append('src',src);

        search_params.append('dest', dest);

        url.search = search_params.toString();

        var new_url = url.toString();

        // output : http://demourl.com/path?id=100&id=101&id=102&topic=main
        console.log(new_url);
        try{document.location = new_url;}
        catch(e){
            console.log(e);
            
        }
        return new_url;
    }

</script>

@endsection
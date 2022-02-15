@include('headerr')
<h1>hello there</h1>
@include('inner')
<h2>

<!-- double curley braces works like echo function -->
    {{10+20}}
    <br>
    {{"number of users"}}

</h2>
<!-- h1/</h1>  -->
@if($users=='mitul')
<h3>hello {{$users}}</h3>
@elseif($users=='gupta')
<h3>hii {{$users}}</h3>
@else
<h3>unknown user</h3>
@endif

@for($i=0;$i<10;$i++)
<h3>{{$i}}</h3>
@endfor

@foreach($users as $user)
<h4>{{$user}}</h4>
@endforeach

@csrf
<script>
    // var data= @json($users);
    console.warn(data[0]);
</script>

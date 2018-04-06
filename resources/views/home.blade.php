@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores mollitia fugiat laborum vero inventore consequuntur ratione? Veniam voluptatem ad quibusdam, omnis excepturi iusto culpa perspiciatis saepe reiciendis, velit suscipit nihil!</p>
 @endsection
@section('sidebar')
@parent
  <p>this is appended to the sidebar</p>
@endsection
@extends('layouts.main')

@section('title', $page->title)



@section('content')






<div class="row wrap">
    <hr/>


        
    
     <div class="panel panel-box panel-box-default blog-box col-12">   
            <h2 class="kilo"> <a href="/kb/{{$page->url}}"> {{$page->title}} </a> </h2>
            <span class="text-small blog-info"> Author: {{$page->author}} | Date : {{$page->created_at->format('F d, Y')}} </span>
            <div>
                {!! str_replace('div','p',$page->body)!!} 
                <a href="/kb" class="button info read-more">Back to Index</a>
            </div>
         </div> 
    


    





</div>

@endsection
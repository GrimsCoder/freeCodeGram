@extends('layouts.app')

@section('content')
<html>
<body>
<div class="container">
   <div class="row">
       <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
            
            @if(auth()->user()->id==$post->user_id)
            <div class="pt-4 d-flex">
            <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                     @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn btn-sm btn-danger" title='Delete'>Delete Post</button>
                </form>
                </div>
                @else
                @endif
       </div>
       <div class="col-4">
           <div>
                <div class="d-flex align-items-center pb-3">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id}}">
                                <span class="text-dark">{{ $post->user->username }}</span>

                            </a>
                
                        </div>
                    </div>
                </div>

                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id}}">
                            <span class="text-dark pr-3">{{ $post->user->username }}:</span>
                        </a> </span> {{ $post->caption }}
                </p>
                
                <hr style="height:1px;border:none;color:#333;background-color:#333;" />

                <div>
                    <h6>Comments:</h6>
                    <hr>
                @comments(['model' => $post])
                
                </div>
                
                                    
           </div>
       </div>
   </div> 
   
</div>


<script type="text/javascript">
            $(document).ready(function() {
                $('.delete').click(function(e) {
                    if(!confirm('Are you sure you want to delete this post?')) {
                        e.preventDefault();
                    }
                });
            });
        </script>
    </body> 
</html>

@endsection




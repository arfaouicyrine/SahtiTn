@extends('layouts.inc.front-navbar')
<div class="container" style="margin-top: 180px;" >
   <div class="row justify-content-start" >

       <div class="col-md-4">
           <div class="py-2 mt-3" style="margin-top:18rem; margin-left:10px;">
               <a href="{{ route('forum.create') }}" class="btn" style="background-color:#C96567 ; color:white ; " >Posez une question</a>
           </div>
           <div class="card">
                <div class="card-header"><h2 style="font-family: 'Benne', serif;
                                 font-size: 2.5rem;">Departments</h2></div>
                  <div class="card-body">
                       <ul class="list-group">
                   @foreach ($department as $ditem )
                        <li class="list-group-item"> <h6><a href="#" style="color:#202d49; font-family:'Mulish',
            sans-serif;font-size:1.5rem ;">{{ $ditem->name }}</a></h6> </li>

                   @endforeach
                    </ul>
               </div>
           </div>
       </div>
       <div class="col-md-8" style="margin-top: 80px;">
        <div class="card">
               @if (session()->has('success'))
               <div class="alert alert-success">{{ session()->get('success') }}</div>
           @endif
               <div class="card-header"><h2 style="font-family: 'Benne', serif;
                                 font-size: 2.5rem;">Questions</h2></div>

                @foreach ($forum as $item )
                      <div class="list-group-item">
                          <h4><a href="{{ url('show/' .$item->id) }}" style="color:#C96567 ">{{  $item->title }}</a></h4>
                          <p>{{ $item->content }}</p>
                          <div class="d-flex  justify-content-between align-items-center">
                              <small>Posté le {{ $item->created_at->format('d/m/Y à H:m') }}</small>
                                 <span>
                                     {{ $item->users->name }}
                                 </span>
                          </div>
                          </div>
                 @endforeach
                      </div>
               <div class="d-flex justify-content-center align-items-center">
                            {{ $forum->links() }}
               </div>
           </div>
       </div>
   </div>
</div>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,200&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Benne&display=swap');
</style>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>

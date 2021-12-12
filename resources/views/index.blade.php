@extends('layouts.app')

@section('content')

   
   
<div id="app" class="wrapper">
 <div class="container">
    <div class="row d-flex">
       <div class="col-12">
          <div class="row mb-2 d-flex">
            <div class="col">
               <h2>Users</h2>
            </div>
         </div>
         <div class="car mb-5">
            <div class="card-body">
               <table id="data-table" class="table table-hover">

                  <thead class="thead-light">
                  
                     <tr>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Email</th>
                           
                     </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $item)
   
                        <tr data-url="/profile/{{$item->id}}"> 
                           <td>
                              <a href="/profile/{{$item->id}}" target="_blank">{{ $item->name}}</a>
                           </td>
                           <td>{{ $item->username }}</td>
                           <td>{{$item->email}}</td>
                           
                        </tr>
                  @endforeach
                  </tbody>
               </table>
               <nav>
                    
                     </ul>
               </nav>
            </div>

         </div>
       </div>
    </div>

 </div>

 </div>
 

   


   
</div>
@endsection







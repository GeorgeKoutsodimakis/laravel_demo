<ul class="list-group">


@foreach($user as $user)

     <li class="list-group-item">
         <div class="row">
            <div class="col-sm-8"><h3>{{$user->name}}</h3></div>

            <div class="col-sm-2">
                {!! Form::open(['route' => ['user.show',$user],'method'=>'GET']) !!}
                 <button type="submit" class="btn btn-success">Events</button>
                {!! Form::close() !!}
            </div>

            <div class="col-sm-2">
                {!! Form::open(['route' => ['user.destroy', $user],'method'=>'delete']) !!}
                 <button type="submit" class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </div>

         </div> 

     </li>

    @endforeach
</ul>


<ul class="list-group">

    @foreach($category as $category)

     <li class="list-group-item">
         <div class="row">
            <div class="col-sm-8"><h3>{{$category->title}}</h3></div>

            <div class="col-sm-2">
                {!! Form::open(['route' => ['category.show',$category],'method'=>'POST']) !!}
                 <button type="submit" class="btn btn-success">Events</button>
                {!! Form::close() !!}
            </div>

            <div class="col-sm-2">
                {!! Form::open(['route' => ['category.destroy',$category],'method'=>'delete']) !!}
                 <button type="submit" class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </div>

         </div> 

     </li>

    @endforeach

</ul>


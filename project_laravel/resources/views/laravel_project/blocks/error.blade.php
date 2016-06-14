@if(count($errors) > 0)
    <div class="row">
        <div class="col-lg-12">
            <ul class="alert alert-danger" style="list-style: none">
                @foreach($errors->all() as $error)
                    <li>{!!  $error !!} </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
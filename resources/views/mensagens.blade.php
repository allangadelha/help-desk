
@if($errors->any())
<div class='app-alerts'>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>
            <i class="fa fa-times"></i>
            Atenção:
        </h4>
        @foreach($errors->getMessages() as $this_error)
        <p>
        <p>{{$this_error[0]}}</p>
        </p>        
        @endforeach
    </div>
</div>
@endif 

@if (Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>
        <i class="fa fa-check-circle fa-lg fa-fw"></i> &nbsp;
    </strong>
    {{ Session::get('success') }}
</div>
@endif


@extends ('layouts.master');

@section('content')
<div class="container">
<div class="col-md-12 text-center">
<h1 class="text-center" style="padding-top:100px;">1,389 writers<br>6,123 days<br>16,676,300 published words</h1>
</div>
</div>


<div class="container">
<div class="col-md-12 text-center" style="margin-top:100px">
<button type="button" class="btn btn-default">Default</button>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-link">Link</button> 
</div>
</div>


<div class="container">
<div class="col-md-12 text-center" style="margin-top:30px">
<div class="alert alert-success text-center">Success</div>
<div class="alert alert-info text-center">Info</div>
<div class="alert alert-warning text-center">Warning</div>
<div class="alert alert-danger text-center">Danger</div>
</div>
</div>
@endsection
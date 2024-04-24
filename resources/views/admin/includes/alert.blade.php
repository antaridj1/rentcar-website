@if(session()->has('status'))
    <div class="alert alert-{{(session()->get('status') == 'success')? 'success' : 'danger'}} alert-dismissible fade show" role="alert">
    {{session()->get('message')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


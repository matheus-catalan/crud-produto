@if (session('message'))
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" 
        data-dismiss="alert"
        aria-label="close">&times;
    </a>
        {{ session('message') }}
</div>
@endif
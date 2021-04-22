@extends('admin.admin_dashboard_layout')
@section('page')
<div class="my-3">
    <button class="au-btn au-btn-icon au-btn--blue"><i class="zmdi zmdi-plus"></i>add item</button>
</div>

<div class="card">
    <div class="card-header">Category</div>
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-center title-2">Add Category Information</h3>
        </div>
        <hr>
        <form action="" method="post" novalidate="novalidate">
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Category Name</label>
                <input id="cc-pament" name="category_name" type="text" class="form-control" required>
            </div>
            <div class="form-group has-success">
                <label for="cc-name" class="control-label mb-1">Slug Name</label>
                <input id="cc-name" name="slug_name" type="text" class="form-control " required >
                
            </div>
            
          
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-filter fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Submit Category</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
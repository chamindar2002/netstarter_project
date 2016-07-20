<div class='form-group'>
    {!! Form::label('name','Name', ['class'=>'col-md4 control-label']) !!}
    <div class='col-md-6'>
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class='form-group'>
    {!! Form::label('product_code','product_code', ['class'=>'col-md4 control-label']) !!}
    <div class='col-md-6'>
        {!! Form::text('product_code',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class='form-group'>
    {!! Form::label('short_description','short_description', ['class'=>'col-md4 control-label']) !!}
    <div class='col-md-6'>
        {!! Form::text('short_description',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class='form-group'>
    {!! Form::label('cost_price','cost_price', ['class'=>'col-md4 control-label']) !!}
    <div class='col-md-6'>
        {!! Form::text('cost_price',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class='form-group'>
    {!! Form::label('brand_id','brand_id', ['class'=>'col-md4 control-label']) !!}
    <div class='col-md-6'>
        {!! Form::select('brand_id', ['' => ''] + $brands, null, array('class'=>'form-control')) !!}
    </div>
</div>

<div class='form-group'>
    {!! Form::label('type_id','type_id', ['class'=>'col-md4 control-label']) !!}
    <div class='col-md-6'>
        {!! Form::select('type_id',  $types, null, array('class'=>'form-control')) !!}
    </div>
</div>

<div class='form-group'>
    {!! Form::label('country','country', ['class'=>'col-md4 control-label']) !!}
    <div class='col-md-6'>
        {!! Form::select('country', [''=>'', 'AU'=>'Australia','NZ'=>'New Zeeland'], null, array('class'=>'form-control')) !!}
    </div>
</div>


<div class='form-group'>
    {!! Form::label('object_url','&nbsp;', ['class'=>'col-md4 control-label']) !!}
    <div class='col-md-6'>
        {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
    </div>
</div>


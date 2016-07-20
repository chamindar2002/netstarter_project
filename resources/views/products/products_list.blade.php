@extends('app')


@section('content')

    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>Products</div>
                    <div class='panel-body'>

                        <table class='table table-hover'>
                            <tr><th>Name</th><th>Code</th><th>product unique attributes</th></tr>

                            @if(isset($products))

                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            {!! $product->name !!}
                                        </td>
                                        <td>
                                            {!! $product->product_code !!}
                                        </td>


                                        <td>
                                            @foreach($product->children as $child)

                                             <li>{!! $child->attribute_label !!}</li>

                                            @endforeach
                                        </td>


                                        {{--<td>--}}
                                            {{--{!! link_to("products/list/$product->id", '', array('class'=>'fa fa-pencil-square-o')) !!}--}}

                                        {{--</td>--}}
                                    </tr>
                                @endforeach

                            @endif

                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>




@stop


    
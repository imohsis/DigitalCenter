@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
    <h1 class="lead"><b>Currency Converter</b></h1>

    <h1>Wild Fusion MicroFinance Currency Converter</h1>
            <hr></hr>
            <form action="currency.index" method="post" class="form-group">  
                 {{ csrf_field() }}              
                    <select name="currency1" class="form-control">
                        <option value="CAD">CAD</option>
                        <option value="NGR">NGR</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="USD">USD</option>
                    </select>
                    <input name="amount_input" type="text" class="form-control"/>
                    <select name="currency2" class="form-control">
                        <option value="CAD">CAD</option>
                        <option value="NGR">NGR</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="USD">USD</option>
                    < /select>
                    <input name="amount_output" type="text" value="<?php $amount_output ?>" readonly="readonly" class="form-control"/>
 
                <br />

                    <input type="submit" name="submit" value="Convert" class=" btn btn-success form-control"></input>
                    
                    <input type="reset" name="reset" value="Reset " class=" btn btn-primary form-control"></input>

            </form>         



            <hr>
                 
</div>
    
</div>    
</div>
@endsection
<div class>
    
</div>
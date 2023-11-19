@extends('layout')
@section('title')
    Home
@endsection
@section('body')
    <h1 style="text-align: center">hi {{ auth()->user()->username }}{{ auth()->id() }}</h1>
    @if (isset($check))
        <h2>{{ $check }}</h2>
    @endif

    <form action="{{ url('logout') }}" method="post">
        @csrf<h1><button onclick="abc()" type="submit">logout</button></h1>

    </form>
    <form action="{{ url('np') }}"><button type="submit">np</button></form>
@endsection

@php



class Sash
{
    public function paynow(): string
    {
        echo ' payment done by cash';
    }
}
class Paypal
{
    public function paynow(): string
    {
        echo ' payment done by paypal';
    }
}
class Emoney
{
    public function paynow(): string
    {
        echo ' payment done by emoney';
    }
}
class Buy
{
    public function buynow(Sash $paymentobj)
    {
        this->paynow();
    }
}


$paymentobj = new Emoney();
$buyobj = new Buy();
$buyobj->buynow($paymentobj);
@endphp
<script>
    function abc() {
        HttpContext.Current.Response.AddHeader("Cache-Control", "no-cache, no-store, must-revalidate");
        HttpContext.Current.Response.AddHeader("Pragma", "no-cache");
        HttpContext.Current.Response.AddHeader("Expires", "0");
    }
</script>

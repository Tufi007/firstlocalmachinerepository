@php



class Sash extends
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

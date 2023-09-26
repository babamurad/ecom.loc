<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\Shipping;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserDashboardComponent extends Component
{
    use WithPagination;

    public $edit1 = 0;
    public $edit2 = 0;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $zipcode;
    public $phone;

    public function mount()
    {
        $this->edit1 = 0;
        $this->edit2 = 0;
        $this->address1;
        $this->address2;
        $this->city;
        $this->state;
        $this->zipcode;
        $this->phone;
    }

    public function newAddressStore($edit)
    {
        if ($edit == 'billing')
        {
            $this->edit1 = 0;
            $order = Order::where('user_id', Auth::user()->id)->get();
            $order->address1 = $this->address1;
            $order->update();
        }

        if ($edit == 'shipping')
        {
            $this->edit2 = 0;
        }

    }

    public function editAddress($address)
    {
        if ($address == 'address1')
        {
            if ($this->edit1)
            {
                $this->edit1 = 0;
            }
            else
            {
                $this->edit1 = 1;
            }
        }
        if ($address == 'address2')
        {
            if ($this->edit2)
            {
                $this->edit2 = 0;
            }
            else
            {
                $this->edit2 = 1;
            }
        }
    }


    public function render()
    {
        $user = Auth::user();
        $order_address = Order::where('user_id', $user->id)->orderBy('id', 'DESC')->get();
        $ship_address = Shipping::where('order_id', $order_address->first()->id)->orderBy('id', 'DESC')->get();
        $orders =  Order::where('user_id', $user->id)->orderBy('id', 'DESC')->paginate(10);
//        if($ship_address->count() == 0)
//        {
//            dd('$ship_address=0');
//        } else { dd($ship_address->count().'<>0');}
        return view('livewire.user.user-dashboard-component', compact('user', 'order_address', 'ship_address', 'orders'));
    }
}

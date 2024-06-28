<?php

namespace App\Http\Controllers;

use App\Models\PowerConsumption;
use App\Models\Relay;
use Illuminate\Http\Request;

class NodeMCUController extends Controller
{
    public function relay()
    {
        Relay::select('state')->get();
        return view('control&monitor.relay', [
            'relay' => Relay::find(1)
        ]);
    }

    public function changeState()
    {

        $relay = Relay::where('id', 1)->first();

        if ($relay->state == 1) {
            $newState = 0;
        } else {
            $newState = 1;
        }

        Relay::where('id', 1)->update([
            'state' => $newState
        ]);

        return redirect()->route('relay.index');
    }

    public function sendState()
    {
        $relay = Relay::where('id', 1)->first();

        return $relay->state;
    }

    public function monitoring()
    {
        $power_consumption = PowerConsumption::find(1);
        return view('control&monitor.powerconsumption', compact('power_consumption'));
    }

    public function sensorDataStore()
    {
        PowerConsumption::where('id', 1)->update([
            'power' => request()->power,
            'energy' => request()->energy,
            'voltage' => request()->voltage,
            'current' => request()->current
        ]);
    }

    public function getDataRealtime()
    {
        $powerConsumption = PowerConsumption::latest()->first();
        return response()->json($powerConsumption);
    }

}

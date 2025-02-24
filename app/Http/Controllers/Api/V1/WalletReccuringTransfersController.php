<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\WalletReccuringTransfer;

class WalletReccuringTransfersController
{
    public function __invoke(Request $request)
    {
        return response()->json(WalletReccuringTransfer::all());
    }

    //TODO
    public function store(Request $request) {
        try {
            $validated = $request->validate([//TODO type
                'start_date' => 'required',
                'end_date' => 'required',
                'frequency_days' => 'required',
                'amount' => 'required',
                'reason' => 'required',
                'source_id' => 'required',
                'target_id' => 'required',
            ]);
    
            $wallet = WalletReccuringTransfer::create($validated);
    
            return response()->json($wallet);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CryptoWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use BaconQrCode\Encoder\Encodable;
use BaconQrCode\Writer\Image;

class CryptoWalletController extends Controller
{
    /**
     * Display the form for creating a new crypto wallet.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supportedCurrencies = ['bitcoin', 'ethereum', 'dodgecoin', 'tron', 'litecone']; // Add more as needed
        return view('crypto_wallets.create', compact('supportedCurrencies'));
    }

    /**
     * Store a newly created crypto wallet in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supportedCurrencies = ['bitcoin', 'ethereum', 'dodgecoin', 'tron', 'litecone'];

        $validatedData = $request->validate([
            'wallet_address' => 'required|unique:crypto_wallets,wallet_address',
            'cryptocurrency' => 'required|in:' . implode(',', array_keys($supportedCurrencies)),
            'balance' => 'required|numeric|min:0.00',
        ]);

        $user = Auth::user();
        $wallet = new CryptoWallet([
            'user_id' => $user->id,
            'wallet_address' => $validatedData['wallet_address'],
            'cryptocurrency' => $validatedData['cryptocurrency'],
            'balance' => $validatedData['balance'],
        ]);
        $wallet->save();

        return redirect()->back('crypto_wallets.show', $wallet->id);
    }

    /**
     * Display the specified crypto wallet.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wallet = CryptoWallet::findOrFail($id);
        $this->authorize('view', $wallet); // Implement authorization logic

        $qrCode = generateQRCode($wallet->wallet_address); // Replace with a function to generate QR code

        return view('crypto_wallets.show', compact('wallet', 'qrCode'));
    }
}

// Helper functions (replace with actual implementation)
function generateUniqueWalletAddress() {
    // Implement logic to generate a unique wallet address
}

function generateQRCode(string $data): Encodable
{
    // Implement logic to generate a QR code for the wallet address
    // Use a library like BaconQrCode (https://github.com/Bacon/BaconQrCode)
}

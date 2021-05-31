<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Stri;
use App\Enums\Packages;
use App\Models\{
	Account,PhoneNumbers,EmailAddress,EntityEmailAddress, EntityPhoneNumber
};

class RequestController extends Controller
{
	public function create($requestId)
	{
		return view('pages.request', [
			'id' => $requestId
		]);
	}

	public function store(Request $request)
	{

		$request->validate([
			'name' => 'required|max:255',
			'phone_number' => 'required|unique:phone_number,name|max:255',
			'email_address' => 'required|unique:email_address,name|max:255',
			'industry' => 'required|max:255',
			'company_size' => 'required|max:255'
		]);

		$data = $request->except('_token', 'requestId', 'phone_number', 'email_address');

		$phoneNumber = PhoneNumbers::create([
			'id' => Stri::uuid(),
			'name' => $request->get('phone_number'),
			'numeric' => $request->get('phone_number'),
			'invalid' => 0,
			'opt_out' => 0,
		]);

		$EmailAddress = EmailAddress::create([
			'id' => Stri::uuid(),
			'name' => $request->get('email_address'),
			'lower' => $request->get('email_address'),
			'invalid' => 0,
			'opt_out' => 0,
		]);

		$data['id'] = Stri::uuid();
		$account = Account::create($data);

		EntityPhoneNumber::create([
			'entity_id' => $account->id,
			'phone_number_id' => $phoneNumber->id,
			'entity_type' => 'Account',
			'primary'=> 1,
		]);
		EntityEmailAddress::create([
			'entity_id' => $account->id,
			'email_address_id' => $EmailAddress->id,
			'entity_type' => 'Account',
			'primary'=> 1,
		]);

		if ($request->get('requestId') == Packages::FREE) {
			return redirect('/')->with('status', 'Profile updated');
		}

		return redirect('/')->with('status', 'Profile updated');
	}
}

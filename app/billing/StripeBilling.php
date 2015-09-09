<?php namespace billing;

interface  StripeBilling implememnts BillingInterface{
	
	public function charge(array $data)

	{

		Stripe::setApiKey(Config::get('stripe.secret-key'));

	}


	public function charge(array $data)

	{

		try
		{
		return Stripe_Charge::create([

			'Amount'=> 1000,
			'currency' -> 'usd',
			'description' => $data['email'],
			'card' => $data['token']

		]);
	} catch(Stripe_CardError $e)

	//Card Was Declined 

	dd('Card Was Declined')

	}


?>
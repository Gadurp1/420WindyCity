<?php namespace billing;

interface BillingInterface{

	public function charge(array $data);

}
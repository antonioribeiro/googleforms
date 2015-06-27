<?php

namespace PragmaRX\GoogleForms;

use GuzzleHttp\Client as Guzzle;

class GoogleForm {

	/**
	 * Google Form Id.
	 *
	 * @var null
	 */
	protected $formId;

	/**
	 * Guzzle Client.
	 *
	 * @var Guzzle
	 */
	protected $httpClient;

	/**
	 * Constructor.
	 *
	 * @param null $formId
	 * @param Guzzle $httpClient
	 */
	public function __construct($formId = null, Guzzle $httpClient)
	{
		$this->httpClient = $httpClient;

		$this->formId = $formId;
	}

	/**
	 * Google form Id setter.
	 *
	 * @param $formId
	 */
	public function setFormId($formId)
	{
		$this->formId = $formId;
	}

	/**
	 * Post to a Google Form Spreadsheet.
	 *
	 * @param $data
	 * @return bool
	 */
	public function post($data)
	{
		$data = $this->makeGoogleFormData($data);

		$response = $this->httpClient->post("https://docs.google.com/forms/d/$this->formId/formResponse", $data);

		return $response->getStatusCode() == 200;
	}

	/**
	 * Guzzelify an array of inputs to be posted.
	 *
	 * @param $data
	 * @return array
	 */
	private function makeGoogleFormData($data)
	{
		if ( ! isset($data['form_params']))
		{
			$data = [ 'form_params' => $data ];
		}

		return $data;
	}

}

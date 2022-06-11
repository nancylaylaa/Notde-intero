<?php
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

$response = Http::get('http://test.com');
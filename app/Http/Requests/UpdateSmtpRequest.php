<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UpdateSmtpRequest extends FormRequest { public function authorize(): bool { return true; } public function rules(): array { return ['host'=>'required','port'=>'required|integer','from_email'=>'required|email']; } }

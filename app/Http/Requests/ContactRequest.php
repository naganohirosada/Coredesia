<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * 1. 権限チェック
     * @return bool
     * 
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * 2. バリデーションルール
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string|max:50',
            'company'  => 'nullable|string|max:100',
            'email'    => 'required|email:filter,dns|max:255',
            'subject'  => 'required|string|in:system,website,consulting,other',
            'message'  => 'required|string|max:2000',
            'agree'    => 'required|accepted',
        ];
    }

    /**
     * 3. エラーメッセージ
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => ':attributeは入力必須です',
            'email'    => '正しいメールアドレスの形式でお願いします',
            'max'      => ':attributeは:max文字以内で入力してください',
            'in'       => '正しいお問い合わせ項目を選んでください',
            'accepted' => 'プライバシーポリシーへの同意が必要です',
        ];
    }

    /**
     * 4. 項目名を日本語
     */
    public function attributes(): array
    {
        return [
            'name'    => 'お名前',
            'company' => '貴社名',
            'email'   => 'メールアドレス',
            'subject' => 'お問い合わせ項目',
            'message' => 'お問い合わせ内容',
            'agree'   => '同意チェック',
        ];
    }
}
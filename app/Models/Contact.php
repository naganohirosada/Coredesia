<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * お問い合わせ項目（値 => 表示名）
     * フォーム・確認画面・メール・バリデーションで共通利用する
     */
    public const SUBJECTS = [
        'system' => 'システム開発（Web・アプリ）について',
        'coredx' => 'CORE DX PORTALについて',
        'website' => 'HP・LP制作について',
        'consulting' => 'ITコンサルティングについて',
        'other' => 'その他のお問い合わせ',
    ];

    /**
     * お問い合わせ項目の表示名を返す
     */
    public static function subjectLabel(?string $subject): string
    {
        return self::SUBJECTS[$subject] ?? self::SUBJECTS['other'];
    }

    protected $fillable = [
        'name',
        'company',
        'email',
        'subject',
        'message',
        'ip',
        'completed',
    ];
}
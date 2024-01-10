<?php

namespace App\Enums;

enum DiscountTypeEnum:string {
    case General = 'general';
    case Category = 'category';
    case Item = 'item';
    public static function toArray(): array
    {
        return array_column(DiscountTypeEnum::cases(), 'value');
    }
}

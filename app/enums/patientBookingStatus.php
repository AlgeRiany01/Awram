<?php

namespace App\enums;

enum patientBookingStatus: string
{
    case WAITING = 'waiting';
    case ACCEPTED = 'accepted';
    case  UNACCEPTED = 'unacceptable';
    case COMPLETED = 'complete';
    public function description(): string
    {
        return match ($this) {
            self::WAITING => 'في الانتظار',
            self::ACCEPTED => 'مقبول',
            self::UNACCEPTED => 'غير مقبول',
            self::COMPLETED => 'تمت الزيارة',
        };
    }


    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

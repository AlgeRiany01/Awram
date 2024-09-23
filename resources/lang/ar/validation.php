<?php

return [
    'required' => ':attribute  مطلوب',
    'numeric' => 'يجب ان تكون :attribute رقم ',
    'date' => 'يجب ان تكون :attribute تاريخ ',
    'string' => 'يجب ان يكون :attribute نصي',
    'digits' => 'يجب أن يكون :attribute يحتوي على :digits رقم / أرقاما بالضبط',
    'image' => 'يجب أن يكون :attribute صورةً',
    'unique' => 'قيمة :attribute مُستخدمة من قبل',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخًا يساوي اليوم أو في المستقبل.',


    'max' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر لـ :max رقم',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'min' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر لـ :min حرف',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالظبط',
        'array' => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالظبط',
    ],

    'attributes' => [
        'name' => 'الاسم',
        'desc' => 'الوصف',
        'expired' => 'تاريخ الانتهاء',
        'COO' => 'بلد الصنع',
        'qint' => 'الكمية',
        'phone' => 'رقم الهاتف',
        'spec' => 'التخصص',
        'email' => 'البريد الالكتروني',
        'nat' => 'الرقم الوطني',
        'char' => 'الصفة',
        'password' => 'الرمز السري',
        'title' => 'العنوان',
        'img' => 'الصورة',
        'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
        'hospital' => 'المستشفى',
        'date' => 'التاريخ',
        'medicine' => 'الدواء',

    ]
];
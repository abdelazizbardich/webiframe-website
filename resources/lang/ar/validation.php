<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => "يجب قبول :attribute.",
    'accepted_if' => "يجب قبول :attribute عندما يكون :other هو :value.",
    'active_url' => ":attribute ليس رابطًا صالحًا.",
    'after' => "يجب أن يكون :attribute تاريخًا بعد :date.",
    'after_or_equal' => "يجب أن يكون :attribute تاريخًا بعد أو يساوي :date.",
    'alpha' => "يجب أن يحتوي :attribute على أحرف فقط.",
    'alpha_dash' => "يجب أن يحتوي :attribute على أحرف وأرقام وشرطات وشرطات سفلية فقط.",
    'alpha_num' => "يجب أن يحتوي :attribute على أحرف وأرقام فقط.",
    'array' => "يجب أن يكون :attribute مصفوفة.",
    'before' => "يجب أن يكون :attribute تاريخًا قبل :date.",
    'before_or_equal' => "يجب أن يكون :attribute تاريخًا قبل أو يساوي :date.",
    'between' => [
        'numeric' => "يجب أن يكون :attribute بين :min و :max.",
        'file' => "يجب أن يكون :attribute بين :min و :max كيلوبايت.",
        'string' => "يجب أن يكون :attribute بين :min و :max حرفًا.",
        'array' => "يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max.",
    ],
    'boolean' => "يجب أن تكون قيمة :attribute صحيحة أو خاطئة.",
    'confirmed' => "تأكيد :attribute غير متطابق.",
    'current_password' => "كلمة المرور غير صحيحة.",
    'date' => ":attribute ليس تاريخًا صالحًا.",
    'date_equals' => "يجب أن يكون :attribute تاريخًا يساوي :date.",
    'date_format' => "لا يتطابق :attribute مع التنسيق :format.",
    'different' => "يجب أن يكون :attribute و :other مختلفين.",
    'digits' => "يجب أن يكون :attribute مكونًا من :digits أرقام.",
    'digits_between' => "يجب أن يكون :attribute بين :min و :max أرقام.",
    'dimensions' => "يحتوي :attribute على أبعاد صورة غير صالحة.",
    'distinct' => "الحقل :attribute يحتوي على قيمة مكررة.",
    'email' => "يجب أن يكون :attribute عنوان بريد إلكتروني صالحًا.",
    'ends_with' => "يجب أن ينتهي :attribute بأحد القيم التالية: :values.",
    'exists' => "القيمة المحددة لـ :attribute غير صالحة.",
    'file' => "يجب أن يكون :attribute ملفًا.",
    'filled' => "يجب أن يحتوي الحقل :attribute على قيمة.",
    'gt' => [
        'numeric' => "يجب أن يكون :attribute أكبر من :value.",
        'file' => "يجب أن يكون :attribute أكبر من :value كيلوبايت.",
        'string' => "يجب أن يكون :attribute أكبر من :value حرفًا.",
        'array' => "يجب أن يحتوي :attribute على أكثر من :value عنصرًا.",
    ],
    'gte' => [
        'numeric' => "يجب أن يكون :attribute أكبر من أو يساوي :value.",
        'file' => "يجب أن يكون :attribute أكبر من أو يساوي :value كيلوبايت.",
        'string' => "يجب أن يكون :attribute أكبر من أو يساوي :value حرفًا.",
        'array' => "يجب أن يحتوي :attribute على :value عناصر أو أكثر.",
    ],
    'image' => "يجب أن يكون :attribute صورة.",
    'in' => "القيمة المحددة لـ :attribute غير صالحة.",
    'in_array' => "الحقل :attribute غير موجود في :other.",
    'integer' => "يجب أن يكون :attribute عددًا صحيحًا.",
    'ip' => "يجب أن يكون :attribute عنوان IP صالحًا.",
    'ipv4' => "يجب أن يكون :attribute عنوان IPv4 صالحًا.",
    'ipv6' => "يجب أن يكون :attribute عنوان IPv6 صالحًا.",
    'json' => "يجب أن يكون :attribute سلسلة JSON صالحة.",
    'lt' => [
        'numeric' => "يجب أن يكون :attribute أقل من :value.",
        'file' => "يجب أن يكون :attribute أقل من :value كيلوبايت.",
        'string' => "يجب أن يكون :attribute أقل من :value حرفًا.",
        'array' => "يجب أن يحتوي :attribute على أقل من :value عنصرًا.",
    ],
    'lte' => [
        'numeric' => "يجب أن يكون :attribute أقل من أو يساوي :value.",
        'file' => "يجب أن يكون :attribute أقل من أو يساوي :value كيلوبايت.",
        'string' => "يجب أن يكون :attribute أقل من أو يساوي :value حرفًا.",
        'array' => "يجب أن يحتوي :attribute على :value عناصر أو أقل.",
    ],
    'max' => [
        'numeric' => "يجب ألا يكون :attribute أكبر من :max.",
        'file' => "يجب ألا يكون :attribute أكبر من :max كيلوبايت.",
        'string' => "يجب ألا يكون :attribute أكبر من :max حرفًا.",
        'array' => "يجب ألا يحتوي :attribute على أكثر من :max عناصر.",
    ],
    'mimes' => "يجب أن يكون :attribute ملفًا من النوع: :values.",
    'mimetypes' => "يجب أن يكون :attribute ملفًا من النوع: :values.",
    'min' => [
        'numeric' => "يجب أن يكون :attribute على الأقل :min.",
        'file' => "يجب أن يكون :attribute على الأقل :min كيلوبايت.",
        'string' => "يجب أن يحتوي :attribute على الأقل :min حرفًا.",
        'array' => "يجب أن يحتوي :attribute على الأقل :min عناصر.",
    ],
    'multiple_of' => "يجب أن يكون :attribute من مضاعفات :value.",
    'not_in' => "القيمة المحددة لـ :attribute غير صالحة.",
    'not_regex' => "تنسيق :attribute غير صالح.",
    'numeric' => "يجب أن يكون :attribute رقمًا.",
    'password' => "كلمة المرور غير صحيحة.",
    'present' => "يجب أن يكون الحقل :attribute موجودًا.",
    'regex' => "تنسيق :attribute غير صالح.",
    'required' => "الحقل :attribute إلزامي.",
    'required_if' => "الحقل :attribute مطلوب عندما يكون :other هو :value.",
    'required_unless' => "الحقل :attribute مطلوب ما لم يكن :other موجودًا في :values.",
    'required_with' => "الحقل :attribute مطلوب عندما يكون :values موجودًا.",
    'required_with_all' => "الحقل :attribute مطلوب عندما تكون :values موجودة.",
    'required_without' => "الحقل :attribute مطلوب عندما لا يكون :values موجودًا.",
    'required_without_all' => "الحقل :attribute مطلوب عندما لا يكون أي من :values موجودًا.",
    'prohibited' => "الحقل :attribute محظور.",
    'prohibited_if' => "الحقل :attribute محظور عندما يكون :other هو :value.",
    'prohibited_unless' => "الحقل :attribute محظور ما لم يكن :other موجودًا في :values.",
    'prohibits' => "الحقل :attribute يمنع وجود :other.",
    'same' => "يجب أن يتطابق الحقل :attribute مع :other.",
    'size' => [
        'numeric' => "يجب أن يكون :attribute :size.",
        'file' => "يجب أن يكون :attribute :size كيلوبايت.",
        'string' => "يجب أن يحتوي :attribute على :size حرفًا.",
        'array' => "يجب أن يحتوي :attribute على :size عناصر.",
    ],
    'starts_with' => "يجب أن يبدأ :attribute بأحد القيم التالية: :values.",
    'string' => "يجب أن يكون :attribute نصًا.",
    'timezone' => "يجب أن يكون :attribute منطقة زمنية صالحة.",
    'unique' => "لقد تم استخدام :attribute بالفعل.",
    'uploaded' => "تعذر تحميل :attribute.",
    'url' => "يجب أن يكون :attribute رابطًا صالحًا.",
    'uuid' => "يجب أن يكون :attribute UUID صالحًا.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => "رسالة مخصصة",
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    "attributes" => [
        "first_name" => "الاسم الأول",
        "last_name" => "اسم العائلة",
        "email" => "البريد الإلكتروني",
        "phone" => "الهاتف",
        "subject_type" => "نوع الموضوع",
        "subject" => "الموضوع",
        "message" => "الرسالة",
        "first_last_name" => "الاسم الأخير والاسم الأول",
        "who_you_are" => "من أنت",
        "your_need" => "احتياجك",
        "due_date" => "تاريخ الاستحقاق",
        "approximate_budget" => "الميزانية التقريبية",
        "website" => "الموقع الإلكتروني",
        "full_domain" => "اسم النطاق الكامل",
    ],
];

<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckWordCount implements Rule

{
    protected $count ;
    protected $msg ;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($count , $msg)
    {
        $this->count = $count;
        $this->msg = $msg;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //attribute اسم الحقل
        //value القيمة التي كتبها
        //passes   هي الدالة التي يتم استدعائها عند فحص الشرط
        //بترجع فقط اما ترو او فولس
        return str_word_count($value)< $this->count ;




    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        //message دالة استدعيها عند حدوث خطا
        return $this->msg ;
    }
}

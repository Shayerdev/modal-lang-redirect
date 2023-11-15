<?php

namespace mlr\filters;

class FiltersModal
{
    public function __construct()
    {
        $this->title();
    }
    public function title()
    {
        add_filter(FILTER_NAME_MODAL_LABEL, function ($modalData) {
            $modalData['title_modal'] = __('Будь ласка, оберіть зручну мову <br> Please select your preferred language.', MLR_LOCALE);
            return $modalData;
        });
    }
}

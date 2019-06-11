<?php
namespace Bsbvolmachten\Testimonials\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Testimonials\Models\Testimonials as Testimonial;

class Testimonials extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Testimonials',
            'description' => 'Laat alle klant reviews zienop de website.'
        ];
    }

    public function testimonials()
    {
        $testimonials = Testimonial::orderBy('sort_order', 'ASC')->get();

        if($testimonials->isEmpty()) {
            return false;
        } else {
            return $testimonials;
        }
    }
}
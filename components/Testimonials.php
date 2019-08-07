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

    public function onRun() {
        $testimonials = $this->getTestimonials();
        if ($testimonials->isNotEmpty()) {
            $this->page['testimonials'] = $testimonials;
        } else {
            $this->page['testimonials'] = false;
        }
    }

    public function getTestimonials()
    {
        return Testimonial::orderBy('sort_order', 'ASC')->get();
    }
    public function defineProperties()
    {
        return [
            'fullWidth' => [
                'title'             => 'Volledige breedte',
                'description'       => 'Maakt de testimonials de volledige breedte van de pagina',
                'default'           => false,
                'type'              => 'checkbox'
            ],
        ];
    }
}
<?php

namespace wiz\cms\Traits;

use Illuminate\Http\Request;
use wiz\cms\Models\Page;
use App;
use View;
use Session;
use wiz\cms\Traits\Utils\translatable;

trait FrontendPages
{
    use translatable;

    public $modelClass  = Page::class;

    /**
     * Gets the page based on the slug
     *
     * @param      <string>  $slug   The slug
     *
     * @return     <type>  The page view or 404 if not found
     */
    public function getPage($slug) {

        $needToChangeLang = $this->changeLang($slug);
        if($needToChangeLang) {
            return $needToChangeLang;
        }

    	$page = $this->get($slug);

        return View::make('pages.frontend')
            ->with('page',$page[0])
            ->with('pageCtrl',$this);
    }
}

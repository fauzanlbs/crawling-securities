<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Result;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
          $url = 'http://www.bursamalaysia.com/market/';
          $this->proses($browser, $url);     
        });
    }

    protected function proses($browser, $url)
    {
        $browser->visit($url);
        $all = $browser->text('.bm_grid1');
        $trim = strstr($all, 'FBMEMAS');
        //split
        $arrays = explode("Expand",$trim);
        Result::create([
            'fbmemas' => trim(str_replace("FBMEMAS","",$arrays[0])),
            'fbmt100' => trim(str_replace("FBMT100","",$arrays[1])),
            'fbmsha' => trim(str_replace("FBMSHA","",$arrays[2])),
            'f4gbm' => trim(str_replace("F4GBM","",$arrays[3])),
            'fbm70' => trim(str_replace("FBM70","",$arrays[4]))
        ]);  
       
    }
}
